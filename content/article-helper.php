<?php
/**
 * Article Helper Functions for CS-VRU
 * Handles JSON data access, author resolution, and SEO helpers.
 */

function get_all_articles() {
    static $articles = null;
    if ($articles !== null) {
        return $articles;
    }

    $jsonPath = __DIR__ . '/../json/articles.json';
    if (file_exists($jsonPath)) {
        $content = file_get_contents($jsonPath);
        $articles = json_decode($content, true);
        if (is_array($articles)) {
            return $articles;
        }
    }
    return [];
}

function get_article_by_slug_or_id($key) {
    $articles = get_all_articles();
    $keyStr = trim((string)$key);
    
    // Match by slug first
    foreach ($articles as $art) {
        if (isset($art['slug']) && $art['slug'] === $keyStr) {
            return $art;
        }
    }
    
    // Match by ID
    foreach ($articles as $art) {
        if (isset($art['id']) && (string)$art['id'] === $keyStr) {
            return $art;
        }
    }
    
    return null;
}

function get_author_profile($authorName) {
    static $teachers = null;
    if ($teachers === null) {
        $teachersPath = __DIR__ . '/../json/teacher.json';
        if (file_exists($teachersPath)) {
            $data = json_decode(file_get_contents($teachersPath), true);
            $teachers = $data['people'] ?? [];
        } else {
            $teachers = [];
        }
    }
    
    $cleanName = trim((string)$authorName);
    
    foreach ($teachers as $teacher) {
        $tName = $teacher['name'] ?? '';
        $tFull = $teacher['full_name'] ?? '';
        if ($tName && (mb_strpos($cleanName, $tName) !== false || mb_strpos($tName, $cleanName) !== false)) {
            return [
                'name' => $teacher['full_name'] ?? $tName,
                'role' => $teacher['role'] ?? 'อาจารย์ประจำหลักสูตร',
                'academic_position' => $teacher['academic_position'] ?? '',
                'image' => $teacher['image'] ?? '',
                'education' => $teacher['education'] ?? '',
                'expertise' => $teacher['expertise'] ?? [],
                'office' => $teacher['office'] ?? '',
                'email' => $teacher['email'] ?? '',
                'profile_url' => 'teacher.php#' . urlencode($tName)
            ];
        }
    }
    
    return [
        'name' => $authorName,
        'role' => 'คณาจารย์หลักสูตรวิทยาการคอมพิวเตอร์',
        'academic_position' => '',
        'image' => 'images/logo/logo-anniversary-full.png',
        'education' => '',
        'expertise' => ['วิทยาการคอมพิวเตอร์'],
        'office' => 'คณะวิทยาศาสตร์และเทคโนโลยี มรภ.วไลยอลงกรณ์',
        'email' => 'cs@vru.ac.th',
        'profile_url' => 'teacher.php'
    ];
}

function format_thai_date($dateStr, $full = false) {
    if (!$dateStr) return '';
    $timestamp = strtotime($dateStr);
    if (!$timestamp) return $dateStr;
    
    $thaiMonthsShort = [
        1 => 'ม.ค.', 2 => 'ก.พ.', 3 => 'มี.ค.', 4 => 'เม.ย.',
        5 => 'พ.ค.', 6 => 'มิ.ย.', 7 => 'ก.ค.', 8 => 'ส.ค.',
        9 => 'ก.ย.', 10 => 'ต.ค.', 11 => 'พ.ย.', 12 => 'ธ.ค.'
    ];
    $thaiMonthsFull = [
        1 => 'มกราคม', 2 => 'กุมภาพันธ์', 3 => 'มีนาคม', 4 => 'เมษายน',
        5 => 'พฤษภาคม', 6 => 'มิถุนายน', 7 => 'กรกฎาคม', 8 => 'สิงหาคม',
        9 => 'กันยายน', 10 => 'ตุลาคม', 11 => 'พฤศจิกายน', 12 => 'ธันวาคม'
    ];
    
    $day = date('j', $timestamp);
    $monthNum = (int)date('n', $timestamp);
    $year = (int)date('Y', $timestamp) + 543;
    
    if ($full) {
        $timeStr = date('H:i', $timestamp);
        $monthName = $thaiMonthsFull[$monthNum] ?? '';
        return "{$day} {$monthName} {$year} เวลา {$timeStr} น.";
    }
    
    $monthName = $thaiMonthsShort[$monthNum] ?? '';
    return "{$day} {$monthName} {$year}";
}

function get_related_articles($currentId, $category = null, $limit = 3) {
    $articles = get_all_articles();
    $related = [];
    
    foreach ($articles as $art) {
        if ($art['id'] === (string)$currentId) continue;
        
        $matchScore = 0;
        if ($category && is_array($art['category'])) {
            $catArr = is_array($category) ? $category : [$category];
            foreach ($catArr as $c) {
                if (in_array($c, $art['category'])) {
                    $matchScore++;
                }
            }
        }
        
        $art['_score'] = $matchScore;
        $related[] = $art;
    }
    
    usort($related, function($a, $b) {
        if ($a['_score'] === $b['_score']) {
            return strcmp($b['pubDate'] ?? '', $a['pubDate'] ?? '');
        }
        return $b['_score'] - $a['_score'];
    });
    
    return array_slice($related, 0, $limit);
}
