<?php
/**
 * API: Verify & Clean Publications (Annual Audit Workflow)
 * CS VRU Publications Flat-file Handler
 * Actions: 'verify', 'verify_all', 'delete'
 */

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'error' => 'Method Not Allowed']);
    exit;
}

$rawInput = file_get_contents('php://input');
$inputData = json_decode($rawInput, true);

if (!is_array($inputData)) {
    $inputData = $_POST;
}

$action = strtolower(trim($inputData['action'] ?? 'verify'));
$targetId = strtoupper(trim($inputData['id'] ?? ''));
$verifiedBy = trim($inputData['verified_by'] ?? 'SAR-Committee');

$dbPath = __DIR__ . '/../databases/publications.json';
$databasesDir = __DIR__ . '/../databases';

if (!file_exists($dbPath)) {
    http_response_code(404);
    echo json_encode(['success' => false, 'error' => 'Database file not found']);
    exit;
}

$fp = fopen($dbPath, 'c+');
if (!$fp) {
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => 'Cannot open database file']);
    exit;
}

if (!flock($fp, LOCK_EX)) {
    fclose($fp);
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => 'File lock contention']);
    exit;
}

$fileSize = filesize($dbPath);
$publications = [];
if ($fileSize > 0) {
    $content = fread($fp, $fileSize);
    $content = preg_replace('/^\xEF\xBB\xBF/', '', $content);
    $publications = json_decode($content, true) ?: [];
}

// Backup before batch verify or delete
$backupDate = date('Ymd');
$backupPath = $databasesDir . "/publications-backup-{$backupDate}.json";
if (!file_exists($backupPath) && !empty($publications)) {
    file_put_contents($backupPath, json_encode($publications, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

$today = date('Y-m-d');
$modifiedCount = 0;
$message = '';

if ($action === 'verify') {
    if (empty($targetId)) {
        flock($fp, LOCK_UN);
        fclose($fp);
        http_response_code(400);
        echo json_encode(['success' => false, 'error' => 'Missing publication ID']);
        exit;
    }

    $found = false;
    foreach ($publications as &$pub) {
        if (strtoupper($pub['id']) === $targetId) {
            $pub['status'] = 'verified';
            $pub['verified_at'] = $today;
            $pub['verified_by'] = $verifiedBy;
            $found = true;
            $modifiedCount++;
            break;
        }
    }
    unset($pub);

    if (!$found) {
        flock($fp, LOCK_UN);
        fclose($fp);
        http_response_code(404);
        echo json_encode(['success' => false, 'error' => "Publication ID {$targetId} not found"]);
        exit;
    }

    $message = "ยืนยันผลงาน {$targetId} เรียบร้อยแล้ว (สถานะ: ตรวจสอบแล้ว)";

} elseif ($action === 'verify_all') {
    foreach ($publications as &$pub) {
        if (($pub['status'] ?? 'pending_review') === 'pending_review') {
            $pub['status'] = 'verified';
            $pub['verified_at'] = $today;
            $pub['verified_by'] = $verifiedBy;
            $modifiedCount++;
        }
    }
    unset($pub);
    $message = "ยืนยันข้อมูลรอบปีสำเร็จทั้งหมด {$modifiedCount} รายการ (สถานะ: ตรวจสอบแล้ว)";

} elseif ($action === 'delete') {
    if (empty($targetId)) {
        flock($fp, LOCK_UN);
        fclose($fp);
        http_response_code(400);
        echo json_encode(['success' => false, 'error' => 'Missing publication ID to delete']);
        exit;
    }

    $initialCount = count($publications);
    // Filter out target ID, keeping gap according to Immutable Gap Policy
    $publications = array_values(array_filter($publications, function($pub) use ($targetId) {
        return strtoupper($pub['id']) !== $targetId;
    }));

    if (count($publications) === $initialCount) {
        flock($fp, LOCK_UN);
        fclose($fp);
        http_response_code(404);
        echo json_encode(['success' => false, 'error' => "Publication ID {$targetId} not found to delete"]);
        exit;
    }

    $modifiedCount = 1;
    $message = "ลบรายการ {$targetId} สำเร็จ (รหัสถูกเว้นว่างไว้ตาม Immutable Gap Policy)";
} else {
    flock($fp, LOCK_UN);
    fclose($fp);
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Invalid action']);
    exit;
}

// Write back
ftruncate($fp, 0);
rewind($fp);
$jsonOutput = json_encode($publications, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
fwrite($fp, $jsonOutput);
fflush($fp);
flock($fp, LOCK_UN);
fclose($fp);

echo json_encode([
    'success' => true,
    'action' => $action,
    'modified_count' => $modifiedCount,
    'message' => $message
], JSON_UNESCAPED_UNICODE);
