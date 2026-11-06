<?php

$request = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
$reg = '/content(?:\/(.*))?$/';
preg_match($reg, $request, $match);
$key = $match[0] ?? '';
$value = $match[1] ?? '';
// echo __DIR__."<br>";
// echo "$request<br>";
// echo "$key<br>";
// echo "$value<br>";
if ($value == "" || $value == "index.php") {
    // contents page
    require __DIR__ . '/contents.php';
} else {
    // a content
    require __DIR__ . '/content-detail.php';
}
