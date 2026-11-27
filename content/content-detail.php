<?php
/**
 * Dynamic Content Detail Router & Backward Compatibility Loader
 * Supports numeric ID backward compatibility and cleanly renders the dedicated .php file.
 */

require_once __DIR__ . '/article-helper.php';

// $value is passed from content/index.php or parsed from URI
if (!isset($value) || $value === '') {
    $request = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
    $reg = '/content(?:\/(.*))?$/';
    preg_match($reg, $request, $match);
    $value = trim($match[1] ?? '', '/');
}

// 1. Check if $value directly matches a dedicated physical .php file
$directPhp = __DIR__ . '/' . $value . '.php';
if (file_exists($directPhp)) {
    require $directPhp;
    exit;
}

// 2. Check if $value is an ID or Slug in json/articles.json
$article = get_article_by_slug_or_id($value);
if ($article && !empty($article['slug'])) {
    $slugPhp = __DIR__ . '/' . $article['slug'] . '.php';
    if (file_exists($slugPhp)) {
        require $slugPhp;
        exit;
    }
}

// 3. Fallback: If not found in local files or JSON, 404/redirect to contents index
http_response_code(404);
header("Location: ../content");
exit;
