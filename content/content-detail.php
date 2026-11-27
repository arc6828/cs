<?php
/**
 * Dynamic Content Detail Router & Loader
 * Supports both Slug and numeric ID from local json/articles.json with external API fallback.
 */

require_once __DIR__ . '/article-helper.php';

// $value is passed from content/index.php or parsed from URI
if (!isset($value) || $value === '') {
    $request = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
    $reg = '/content(?:\/(.*))?$/';
    preg_match($reg, $request, $match);
    $value = $match[1] ?? '';
}

// 1. Try to find article in local json/articles.json
$article = get_article_by_slug_or_id($value);

// 2. If not found locally, fallback to external API (as safety net)
if (!$article && is_numeric($value)) {
    $url = "https://ckartisan.com/api/article/{$value}";
    $response = @file_get_contents($url);
    if ($response) {
        $article_set = json_decode($response);
        if (!empty($article_set->article)) {
            $art = $article_set->article;
            $writer = $article_set->writer ?? null;
            $categories = [];
            if (!empty($art->category)) {
                $decodedCat = json_decode($art->category, true);
                $categories = is_array($decodedCat) ? $decodedCat : [$art->category];
            }
            $cleanText = strip_tags($art->contentEncoded ?? $art->first_paragraph ?? '');
            $readMinutes = max(1, (int)ceil(mb_strlen($cleanText, 'UTF-8') / 500));
            
            $article = [
                'id' => (string)($art->id ?? $value),
                'slug' => "article-{$value}",
                'title' => $art->title ?? '',
                'first_paragraph' => $art->first_paragraph ?? '',
                'content' => $art->contentEncoded ?? $art->first_paragraph ?? '',
                'category' => $categories,
                'image_url' => $art->image_url ?? '',
                'creator' => $art->creator ?? '',
                'pubDate' => $art->pubDate ?? '',
                'updated_at' => $art->updated_at ?? $art->pubDate ?? '',
                'reading_time_minutes' => $readMinutes,
                'writer' => [
                    'name' => $writer->name ?? $art->creator ?? '',
                    'title' => $writer->title ?? 'อาจารย์ประจำหลักสูตร',
                    'image_url' => $writer->image ?? '',
                    'role' => $writer->role ?? ''
                ]
            ];
        }
    }
}

// 3. If still not found, redirect to content index or show 404
if (!$article) {
    http_response_code(404);
    header("Location: ../content");
    exit;
}

// Render via modern article template
include __DIR__ . '/template-article.php';
