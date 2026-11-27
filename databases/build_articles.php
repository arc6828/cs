<?php
/**
 * Script to fetch current articles from ckartisan API and compile into local json/articles.json
 */
$apiUrl = "https://ckartisan.com/api/article/tagged/computer-science";
$listJson = @file_get_contents($apiUrl);

if (!$listJson) {
    echo "Error: Cannot fetch article list from $apiUrl\n";
    exit(1);
}

$list = json_decode($listJson, true);
if (!is_array($list)) {
    echo "Error: Invalid JSON response\n";
    exit(1);
}

echo "Fetched " . count($list) . " articles from API.\n";

// Map slugs for existing articles
$slugMap = [
    21 => "career-opportunities-computer-science",
    11 => "admission-bachelor-computer-science",
    12 => "student-loan-fund-student-guide",
    7  => "mon-culture-tradition-luknu-racing",
    14 => "course-credit-transfer-guide",
    15 => "weekday-vs-weekend-computer-science-comparison",
    22 => "pre-degree-credit-bank-project"
];

$compiledArticles = [];

foreach ($list as $item) {
    $id = (int)$item['id'];
    echo "Fetching full detail for article #$id ({$item['title']})...\n";
    
    $detailUrl = "https://ckartisan.com/api/article/{$id}";
    $detailJson = @file_get_contents($detailUrl);
    
    $detail = $detailJson ? json_decode($detailJson, true) : null;
    $artData = $detail['article'] ?? $item;
    $writerData = $detail['writer'] ?? null;
    
    // Parse categories safely
    $categories = [];
    if (isset($artData['category'])) {
        if (is_array($artData['category'])) {
            $categories = $artData['category'];
        } else {
            $decodedCat = json_decode($artData['category'], true);
            $categories = is_array($decodedCat) ? $decodedCat : [$artData['category']];
        }
    }
    
    $slug = $slugMap[$id] ?? "article-{$id}";
    
    $fullContent = $artData['contentEncoded'] ?? $artData['content'] ?? '';
    
    // Estimate reading time (approx 500 characters/min in Thai)
    $cleanText = strip_tags($fullContent ?: ($artData['first_paragraph'] ?? ''));
    $charCount = mb_strlen($cleanText, 'UTF-8');
    $readMinutes = max(1, (int)ceil($charCount / 500));
    
    $compiledArticles[] = [
        'id' => (string)$id,
        'slug' => $slug,
        'title' => $artData['title'] ?? '',
        'first_paragraph' => $artData['first_paragraph'] ?? '',
        'content' => $fullContent,
        'category' => $categories,
        'image_url' => $artData['image_url'] ?? '',
        'creator' => $artData['creator'] ?? '',
        'pubDate' => $artData['pubDate'] ?? '',
        'updated_at' => $artData['updated_at'] ?? $artData['pubDate'] ?? '',
        'reading_time_minutes' => $readMinutes,
        'writer' => [
            'name' => $writerData['name'] ?? $artData['creator'] ?? '',
            'title' => $writerData['title'] ?? 'อาจารย์ประจำหลักสูตร',
            'image_url' => $writerData['image_url'] ?? '',
            'role' => $writerData['role'] ?? ''
        ]
    ];
}

$targetPath = dirname(__DIR__) . '/json/articles.json';
$output = json_encode($compiledArticles, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
file_put_contents($targetPath, $output);

echo "Successfully wrote " . count($compiledArticles) . " articles to $targetPath (" . strlen($output) . " bytes).\n";
