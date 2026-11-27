<?php
/**
 * Content Front Controller Router
 * Handles /content, /content/{slug}, /content/{id}, and direct physical .php files.
 */

$request = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
$reg = '/content(?:\/(.*))?$/';
preg_match($reg, $request, $match);
$key = $match[0] ?? '';
$value = trim($match[1] ?? '', '/');

// 1. Home listing of content
if ($value === "" || $value === "index.php") {
    require __DIR__ . '/contents.php';
    exit;
}

// 2. Check if a dedicated physical .php file exists (1 article = 1 file)
// e.g., /content/career-opportunities-computer-science -> career-opportunities-computer-science.php
$phpCandidate = __DIR__ . '/' . $value . '.php';
if (file_exists($phpCandidate)) {
    require $phpCandidate;
    exit;
}

// 3. Fallback to dynamic loader (checks json/articles.json by slug or numeric ID)
require __DIR__ . '/content-detail.php';
