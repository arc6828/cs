<?php
/**
 * API: Save Publication (Create / Update)
 * CS VRU Publications Flat-file Handler
 * Saves to databases/publications.json with automated backup and concurrency lock
 */

header('Content-Type: application/json; charset=utf-8');

// Ensure request is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'error' => 'Method Not Allowed']);
    exit;
}

// 1. Anti-bot Honeypot check
$rawInput = file_get_contents('php://input');
$inputData = json_decode($rawInput, true);

if (!is_array($inputData)) {
    $inputData = $_POST;
}

$honeypot = $inputData['hp_check'] ?? '';
if (!empty($honeypot)) {
    // Silently trap bot and return fake success
    echo json_encode(['success' => true, 'message' => 'บันทึกข้อมูลเรียบร้อยแล้ว (Honeypot Trapped)']);
    exit;
}

// 2. Validate essential fields
$title = trim($inputData['title'] ?? '');
if (empty($title)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'กรุณากรอกชื่อเรื่องบทความวิจัย (Title)']);
    exit;
}

$type = strtolower(trim($inputData['type'] ?? 'journal'));
if (!in_array($type, ['journal', 'conference'])) {
    $type = 'journal';
}

$language = strtolower(trim($inputData['language'] ?? 'th'));
if (!in_array($language, ['th', 'en'])) {
    $language = 'th';
}

// Process Authors & Teacher IDs
$authors = [];
if (!empty($inputData['authors'])) {
    if (is_array($inputData['authors'])) {
        $authors = array_values(array_filter(array_map('trim', $inputData['authors'])));
    } else {
        $authors = array_values(array_filter(array_map('trim', explode(',', $inputData['authors']))));
    }
}

$teacher_ids = [];
if (!empty($inputData['teacher_ids'])) {
    if (is_array($inputData['teacher_ids'])) {
        $teacher_ids = array_values(array_filter(array_map('trim', $inputData['teacher_ids'])));
    } else {
        $teacher_ids = array_values(array_filter(array_map('trim', explode(',', $inputData['teacher_ids']))));
    }
}

// Process Dates
$year_th = intval($inputData['year_th'] ?? 0);
$year_en = intval($inputData['year_en'] ?? 0);
if ($year_th > 0 && $year_en === 0) {
    $year_en = $year_th - 543;
} elseif ($year_en > 0 && $year_th === 0) {
    $year_th = $year_en + 543;
} elseif ($year_th === 0 && $year_en === 0) {
    $year_en = intval(date('Y'));
    $year_th = $year_en + 543;
}

$month = intval($inputData['month'] ?? date('n'));
if ($month < 1 || $month > 12) $month = intval(date('n'));

$date = intval($inputData['date'] ?? date('j'));
if ($date < 1 || $date > 31) $date = intval(date('j'));

$published_date = sprintf('%04d-%02d-%02d', $year_en, $month, $date);

$thai_months = ["", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];
$published_date_th = sprintf('%d %s %d', $date, $thai_months[$month], $year_th);

// 3. Database File Paths & Locks
$dbPath = __DIR__ . '/../databases/publications.json';
$databasesDir = __DIR__ . '/../databases';
if (!is_dir($databasesDir)) {
    mkdir($databasesDir, 0755, true);
}

$fp = fopen($dbPath, 'c+');
if (!$fp) {
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => 'ไม่สามารถเปิดไฟล์ฐานข้อมูลได้']);
    exit;
}

// Concurrency lock
if (!flock($fp, LOCK_EX)) {
    fclose($fp);
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => 'ระบบกำลังทำงาน กรุณาลองใหม่อีกครั้งใน 1-2 วินาที']);
    exit;
}

// Read current data
$fileSize = filesize($dbPath);
$publications = [];
if ($fileSize > 0) {
    $content = fread($fp, $fileSize);
    $content = preg_replace('/^\xEF\xBB\xBF/', '', $content);
    $publications = json_decode($content, true) ?: [];
}

// Auto Backup before modification
$backupDate = date('Ymd');
$backupPath = $databasesDir . "/publications-backup-{$backupDate}.json";
if (!file_exists($backupPath) && !empty($publications)) {
    file_put_contents($backupPath, json_encode($publications, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

// 4. Handle ID (Create vs Update)
$reqId = trim($inputData['id'] ?? '');
$isUpdate = false;
$existingIndex = -1;

if (!empty($reqId)) {
    foreach ($publications as $idx => $pub) {
        if (strtoupper($pub['id']) === strtoupper($reqId)) {
            $isUpdate = true;
            $existingIndex = $idx;
            break;
        }
    }
}

if ($isUpdate) {
    $finalId = $publications[$existingIndex]['id'];
    $createdAt = $publications[$existingIndex]['created_at'] ?? date('Y-m-d H:i:s');
    $status = $publications[$existingIndex]['status'] ?? 'pending_review';
    $verifiedAt = $publications[$existingIndex]['verified_at'] ?? null;
    $verifiedBy = $publications[$existingIndex]['verified_by'] ?? null;
} else {
    // Generate next Auto-ID based on max numeric ID (Immutable Gap Policy)
    $maxNum = 0;
    foreach ($publications as $pub) {
        if (preg_match('/^PUB-(\d+)$/i', $pub['id'] ?? '', $matches)) {
            $num = intval($matches[1]);
            if ($num > $maxNum) {
                $maxNum = $num;
            }
        }
    }
    $finalId = sprintf('PUB-%03d', $maxNum + 1);
    $createdAt = date('Y-m-d H:i:s');
    $status = 'pending_review'; // New submissions default to pending review
    $verifiedAt = null;
    $verifiedBy = null;
}

// Build standardized publication record
$record = [
    'id' => $finalId,
    'type' => $type,
    'language' => $language,
    'tier' => trim($inputData['tier'] ?? ''),
    'category' => trim($inputData['category'] ?? ''),
    'title' => $title,
    'authors' => $authors,
    'teacher_ids' => $teacher_ids,
    'year_th' => $year_th,
    'year_en' => $year_en,
    'month' => $month,
    'date' => $date,
    'published_date' => $published_date,
    'published_date_th' => $published_date_th,
    'journal_name' => $type === 'journal' ? (trim($inputData['journal_name'] ?? '') ?: null) : null,
    'journal_abbr' => $type === 'journal' ? (trim($inputData['journal_abbr'] ?? '') ?: null) : null,
    'volume' => trim($inputData['volume'] ?? '') ?: null,
    'issue' => trim($inputData['issue'] ?? '') ?: null,
    'month_range' => trim($inputData['month_range'] ?? '') ?: null,
    'pages' => trim($inputData['pages'] ?? '') ?: null,
    'conference_name' => $type === 'conference' ? (trim($inputData['conference_name'] ?? '') ?: null) : null,
    'city' => trim($inputData['city'] ?? '') ?: null,
    'country' => trim($inputData['country'] ?? '') ?: 'ไทย',
    'publisher' => trim($inputData['publisher'] ?? ''),
    'doi' => trim($inputData['doi'] ?? ''),
    'url' => trim($inputData['url'] ?? ''),
    'journal_id' => $type === 'journal' ? (trim($inputData['journal_id'] ?? '') ?: null) : null,
    'status' => $status,
    'created_at' => $createdAt,
    'verified_at' => $verifiedAt,
    'verified_by' => $verifiedBy
];

// If publisher is empty for journal, construct readable default
if (empty($record['publisher'])) {
    if ($type === 'journal' && !empty($record['journal_name'])) {
        $parts = [$record['journal_name']];
        if (!empty($record['volume'])) $parts[] = 'ปีที่ ' . $record['volume'];
        if (!empty($record['issue'])) $parts[] = 'ฉบับที่ ' . $record['issue'];
        if (!empty($record['month_range'])) $parts[] = $record['month_range'];
        $record['publisher'] = implode(' ', $parts);
    } elseif ($type === 'conference' && !empty($record['conference_name'])) {
        $record['publisher'] = $record['conference_name'];
    }
}

if ($isUpdate) {
    $publications[$existingIndex] = $record;
} else {
    // Add to top of list so newest appears first
    array_unshift($publications, $record);
}

// 5. Write back to file with flock
ftruncate($fp, 0);
rewind($fp);
$jsonOutput = json_encode($publications, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
fwrite($fp, $jsonOutput);
fflush($fp);
flock($fp, LOCK_UN);
fclose($fp);

echo json_encode([
    'success' => true,
    'action' => $isUpdate ? 'update' : 'create',
    'id' => $finalId,
    'message' => $isUpdate ? "แก้ไขข้อมูล {$finalId} สำเร็จ" : "บันทึกผลงานใหม่ {$finalId} เรียบร้อยแล้ว (รอการตรวจทานประจำปี)",
    'record' => $record
], JSON_UNESCAPED_UNICODE);
