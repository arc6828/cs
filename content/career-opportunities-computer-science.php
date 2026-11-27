<?php
/**
 * บทความ: อาชีพที่สามารถประกอบได้หลังเรียนจบวิทยาการคอมพิวเตอร์
 * URL: https://cs.vru.ac.th/content/career-opportunities-computer-science
 */

require_once __DIR__ . '/article-helper.php';

$article = get_article_by_slug_or_id('career-opportunities-computer-science');

if (!$article) {
    http_response_code(404);
    header("Location: ../content");
    exit;
}

require __DIR__ . '/template-article.php';
