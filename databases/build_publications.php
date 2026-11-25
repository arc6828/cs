<?php
/**
 * Script to build databases/publications.json from the latest backup file.
 * 
 * Features:
 * - Automatically detects the latest valid backup (databases/publications-backup-*.json)
 * - Allows passing a specific backup file via CLI argument: php build_publications.php [backup_filename]
 * - Preserves all metadata fields (journal_id, tier, status, verification, etc.)
 * - Normalizes teacher mapping, ensures Thai/Gregorian date consistency
 * - Strictly sorts from newest year to oldest year
 * - Outputs clean UTF-8 without BOM JSON with detailed terminal summary
 */

$databasesDir = __DIR__;
$targetDb = $databasesDir . '/publications.json';

// Faculty mapping table
$teachers = [
    'nattira'    => ['name' => 'ณัฏฐิรา ศุขไพบูลย์'],
    'pranomkorn' => ['name' => 'ประณมกร อัมพรพรรดิ์'],
    'daoratha'   => ['name' => 'ดาวรถา วีระพันธ์'],
    'witsarut'   => ['name' => 'วิศรุต ขวัญคุ้ม'],
    'natradee'   => ['name' => 'ณัฐรดี อนุพงค์'],
    'chawalit'   => ['name' => 'ชวลิต โควีระวงศ์'],
];

function matchTeachers($text, $teachers) {
    $matched = [];
    foreach ($teachers as $id => $info) {
        if (mb_strpos($text, $info['name']) !== false) {
            $matched[] = $id;
        }
        if ($id === 'witsarut' && stripos($text, 'Kwankhoom') !== false) {
            $matched[] = $id;
        }
        if ($id === 'pranomkorn' && stripos($text, 'Ampornphan') !== false) {
            $matched[] = $id;
        }
        if ($id === 'chawalit' && (stripos($text, 'Kooveerawong') !== false || stripos($text, 'Koweerawong') !== false || stripos($text, 'Kowirawong') !== false)) {
            $matched[] = $id;
        }
    }
    return array_values(array_unique($matched));
}

// 1. Detect candidate backup files
$argFile = $argv[1] ?? null;
$sourceFile = null;

if (!empty($argFile)) {
    $checkPath = file_exists($argFile) ? $argFile : ($databasesDir . '/' . ltrim($argFile, '/\\'));
    if (file_exists($checkPath)) {
        $sourceFile = $checkPath;
    } else {
        die("❌ Error: Specified backup file not found: {$argFile}" . PHP_EOL);
    }
} else {
    $backups = glob($databasesDir . '/publications-backup-*.json');
    if (empty($backups)) {
        die("❌ Error: No backup files found matching 'publications-backup-*.json' in databases/" . PHP_EOL);
    }

    // Sort backups to find the latest valid production backup
    usort($backups, function($a, $b) {
        $nameA = basename($a);
        $nameB = basename($b);

        // Deprioritize -original- backups
        $isOrigA = (stripos($nameA, '-original-') !== false) ? 0 : 1;
        $isOrigB = (stripos($nameB, '-original-') !== false) ? 0 : 1;
        if ($isOrigA !== $isOrigB) {
            return $isOrigB <=> $isOrigA;
        }

        // Deprioritize -baseline backups
        $isBaseA = (stripos($nameA, '-baseline') !== false) ? 0 : 1;
        $isBaseB = (stripos($nameB, '-baseline') !== false) ? 0 : 1;
        if ($isBaseA !== $isBaseB) {
            return $isBaseB <=> $isBaseA;
        }

        // Extract 8-digit date YYYYMMDD
        preg_match('/(\d{8})/', $nameA, $mA);
        preg_match('/(\d{8})/', $nameB, $mB);
        $dateA = $mA[1] ?? '00000000';
        $dateB = $mB[1] ?? '00000000';

        if ($dateA !== $dateB) {
            return strcmp($dateB, $dateA); // Newer date first
        }

        // Fallback to file modification time
        return filemtime($b) <=> filemtime($a);
    });

    $sourceFile = $backups[0];
}

echo "============================================================" . PHP_EOL;
echo "  CS VRU - Publications Database Builder" . PHP_EOL;
echo "============================================================" . PHP_EOL;
echo "📂 Source Backup: " . basename($sourceFile) . " (" . number_format(filesize($sourceFile)) . " bytes)" . PHP_EOL;
echo "🕒 Backup Date  : " . date('Y-m-d H:i:s', filemtime($sourceFile)) . PHP_EOL;
echo "🎯 Target File  : " . basename($targetDb) . PHP_EOL;
echo "------------------------------------------------------------" . PHP_EOL;

// 2. Read and decode JSON
$rawContent = file_get_contents($sourceFile);
$rawContent = preg_replace('/^\xEF\xBB\xBF/', '', $rawContent); // Remove UTF-8 BOM
$items = json_decode($rawContent, true);

if (!is_array($items) || empty($items)) {
    die("❌ Error: Invalid or empty JSON content in {$sourceFile}" . PHP_EOL);
}

// 3. Process, sanitize, and normalize publications
$thaiMonths = [
    1 => 'มกราคม', 2 => 'กุมภาพันธ์', 3 => 'มีนาคม', 4 => 'เมษายน',
    5 => 'พฤษภาคม', 6 => 'มิถุนายน', 7 => 'กรกฎาคม', 8 => 'สิงหาคม',
    9 => 'กันยายน', 10 => 'ตุลาคม', 11 => 'พฤศจิกายน', 12 => 'ธันวาคม'
];

$finalList = [];
$seenTitles = [];

// Statistics counters
$statJournal = 0;
$statConf = 0;
$tierCounts = [];
$yearMin = 9999;
$yearMax = 0;

foreach ($items as $idx => $item) {
    $title = trim($item['title'] ?? '');
    if (empty($title) || stripos($title, 'phpinfo') !== false) {
        continue;
    }

    // Deduplicate identical titles
    $normTitle = mb_strtolower(trim(preg_replace('/\s+/', '', $title)));
    if (isset($seenTitles[$normTitle])) {
        continue;
    }
    $seenTitles[$normTitle] = true;

    // Authors handling
    $authors = $item['authors'] ?? [];
    if (!is_array($authors)) {
        $authorsArr = preg_split('/\s*,\s*(?:and\s+)?|\s+(?:และ|and|&)\s*|\s*และ\s*/u', strval($authors));
        $authors = array_values(array_filter(array_map('trim', $authorsArr)));
    } else {
        $authors = array_values(array_filter(array_map('trim', $authors)));
    }
    if (empty($authors)) {
        $authors = [trim(strval($item['authors'] ?? 'คณะผู้วิจัย'))];
    }

    // Teacher IDs matching & preservation
    $authorsSearchText = implode(' ', $authors) . ' ' . $title;
    $matchedTeachers = matchTeachers($authorsSearchText, $teachers);
    $existingTeachers = is_array($item['teacher_ids'] ?? null) ? $item['teacher_ids'] : [];
    $teacherIds = array_values(array_unique(array_merge($existingTeachers, $matchedTeachers)));

    // Types and Languages
    $typeStr = strtolower(trim($item['type'] ?? 'conference'));
    $type = ($typeStr === 'journal') ? 'journal' : 'conference';
    $langStr = strtolower(trim($item['language'] ?? 'th'));
    $language = ($langStr === 'en' || $langStr === 'international') ? 'en' : 'th';

    // Category
    $category = $item['category'] ?? null;
    if (empty($category)) {
        $category = ($type === 'journal')
            ? ($language === 'en' ? 'วารสารนานาชาติ' : 'วารสารระดับชาติ')
            : ($language === 'en' ? 'การประชุมวิชาการระดับนานาชาติ' : 'การประชุมวิชาการระดับชาติ');
    }

    // Dates
    $yearEn = intval($item['year_en'] ?? ($item['year'] ?? 0));
    $yearTh = intval($item['year_th'] ?? 0);
    if ($yearTh > 0 && $yearEn === 0) {
        $yearEn = $yearTh - 543;
    } elseif ($yearEn > 0 && $yearTh === 0) {
        $yearTh = $yearEn + 543;
    } elseif ($yearEn === 0 && $yearTh === 0) {
        $yearEn = 2018;
        $yearTh = 2561;
    }

    $month = intval($item['month'] ?? 1);
    if ($month < 1 || $month > 12) $month = 1;
    $date = intval($item['date'] ?? 1);
    if ($date < 1 || $date > 31) $date = 1;

    $publishedDate = $item['published_date'] ?? sprintf('%04d-%02d-%02d', $yearEn, $month, $date);
    $publishedDateTh = $item['published_date_th'] ?? sprintf('%d %s %d', $date, $thaiMonths[$month], $yearTh);

    // ID normalization
    $rawId = trim($item['id'] ?? '');
    if (preg_match('/^PUB-(\d+)$/i', $rawId, $mId)) {
        $idStr = sprintf('PUB-%03d', intval($mId[1]));
    } else {
        $idStr = sprintf('PUB-%03d', count($finalList) + 1);
    }

    $tier = !empty($item['tier']) ? trim($item['tier']) : null;

    // Track statistics
    if ($type === 'journal') {
        $statJournal++;
    } else {
        $statConf++;
    }
    $tierKey = $tier ?: ($type === 'conference' ? 'รายงานสืบเนื่อง (Conf)' : 'ไม่ได้ระบุ Tier');
    $tierCounts[$tierKey] = ($tierCounts[$tierKey] ?? 0) + 1;

    if ($yearTh < $yearMin) $yearMin = $yearTh;
    if ($yearTh > $yearMax) $yearMax = $yearTh;

    // Build entry preserving all metadata
    $entry = [
        'id'                => $idStr,
        'type'              => $type,
        'language'          => $language,
        'tier'              => $tier,
        'category'          => $category,
        'title'             => $title,
        'authors'           => $authors,
        'teacher_ids'       => $teacherIds,
        'year_th'           => $yearTh,
        'year_en'           => $yearEn,
        'month'             => $month,
        'date'              => $date,
        'published_date'    => $publishedDate,
        'published_date_th' => $publishedDateTh,
        'journal_name'      => !empty($item['journal_name']) ? trim($item['journal_name']) : (($type === 'journal') ? trim($item['publisher'] ?? '') : null),
        'journal_abbr'      => !empty($item['journal_abbr']) ? trim($item['journal_abbr']) : null,
        'volume'            => !empty($item['volume']) ? strval($item['volume']) : null,
        'issue'             => !empty($item['issue']) ? strval($item['issue']) : null,
        'month_range'       => !empty($item['month_range']) ? trim($item['month_range']) : null,
        'pages'             => !empty($item['pages']) ? trim($item['pages']) : null,
        'conference_name'   => !empty($item['conference_name']) ? trim($item['conference_name']) : (($type === 'conference') ? trim($item['publisher'] ?? '') : null),
        'city'              => !empty($item['city']) ? trim($item['city']) : null,
        'country'           => !empty($item['country']) ? trim($item['country']) : ($language === 'en' ? 'ต่างประเทศ' : 'ไทย'),
        'publisher'         => !empty($item['publisher']) ? trim($item['publisher']) : null,
        'doi'               => trim($item['doi'] ?? ''),
        'url'               => trim($item['url'] ?? '')
    ];

    // Preserve optional master-database fields if available
    if (!empty($item['journal_id'])) $entry['journal_id'] = trim($item['journal_id']);
    if (!empty($item['status'])) $entry['status'] = trim($item['status']);
    if (!empty($item['created_at'])) $entry['created_at'] = trim($item['created_at']);
    if (!empty($item['verified_at'])) $entry['verified_at'] = trim($item['verified_at']);
    if (!empty($item['verified_by'])) $entry['verified_by'] = trim($item['verified_by']);

    $finalList[] = $entry;
}

// 4. Sort strictly from newest year to oldest year
usort($finalList, function($a, $b) {
    if ($b['year_th'] !== $a['year_th']) {
        return $b['year_th'] <=> $a['year_th'];
    }
    if ($b['month'] !== $a['month']) {
        return $b['month'] <=> $a['month'];
    }
    if ($b['date'] !== $a['date']) {
        return $b['date'] <=> $a['date'];
    }
    return strcmp($a['title'], $b['title']);
});

// 5. Output JSON (UTF-8 without BOM)
$jsonFormatted = json_encode($finalList, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

// Write to publications.json
file_put_contents($targetDb, $jsonFormatted);

// 6. Terminal Summary Report
echo "✅ Build Completed Successfully!" . PHP_EOL;
echo "📊 Total Publications: " . count($finalList) . " items" . PHP_EOL;
echo "   ├── 📰 Journals     : {$statJournal} items (" . round(($statJournal / count($finalList)) * 100, 1) . "%)" . PHP_EOL;
echo "   └── 👥 Conferences  : {$statConf} items (" . round(($statConf / count($finalList)) * 100, 1) . "%)" . PHP_EOL;
echo "📅 Year Coverage      : พ.ศ. {$yearMin} - {$yearMax}" . PHP_EOL;
echo "🏷️  Tier Breakdown    :" . PHP_EOL;
foreach ($tierCounts as $tName => $tCount) {
    printf("   • %-22s : %2d items\n", $tName, $tCount);
}
echo "============================================================" . PHP_EOL;
