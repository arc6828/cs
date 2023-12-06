<?php

$request = $_SERVER['REQUEST_URI'];
$reg = '/content\/(.*)/';
preg_match($reg, $request, $match);
// echo $request;
// echo "<br>";
// print_r($match);
[$key, $value] = $match;
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
