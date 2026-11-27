<?php
/**
 * Modern Article Top Layout (Header, Meta, Navbar, Breadcrumbs, Hero, Featured Image, TOC)
 * Can be included in any content/*.php article file.
 */

require_once __DIR__ . '/article-helper.php';

// Resolve article meta from $article or $slug
if (!isset($article) && isset($slug)) {
    $article = get_article_by_slug_or_id($slug);
}

$articleId    = $article['id'] ?? ($articleId ?? '');
$articleSlug  = $article['slug'] ?? ($slug ?? "article-{$articleId}");
$title        = $article['title'] ?? ($pageTitle ?? 'บทความ');
$firstPara    = $article['first_paragraph'] ?? ($pageDescription ?? '');
$imageUrl     = !empty($article['image_url']) ? $article['image_url'] : ($coverImage ?? 'https://cs.vru.ac.th/images/logo5.png');
$creator      = $article['creator'] ?? ($authorName ?? 'วิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์');
$pubDate      = $article['pubDate'] ?? ($publishDate ?? date('Y-m-d H:i:s'));
$updatedAt    = $article['updated_at'] ?? $pubDate;
$categories   = is_array($article['category'] ?? null) ? $article['category'] : (isset($category) ? (is_array($category) ? $category : [$category]) : ['วิทยาการคอมพิวเตอร์']);
$readingTime  = $article['reading_time_minutes'] ?? ($readingTimeMinutes ?? 3);

$primaryCategory = !empty($categories[0]) ? $categories[0] : 'วิทยาการคอมพิวเตอร์';
$authorProfile   = get_author_profile($creator);
$relatedArticles = get_related_articles($articleId, $categories, 3);

// SEO Meta Variables for layouts/meta.php
$canonicalUrl    = "https://cs.vru.ac.th/content/" . urlencode($articleSlug);
$og_title        = "{$title} | หลักสูตรวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์";
$og_description  = mb_substr(strip_tags($firstPara), 0, 160);
$og_image        = $imageUrl;
$og_url          = $canonicalUrl;
$og_type         = "article";
$og_author       = $authorProfile['name'] ?? $creator;
$og_keywords     = implode(', ', array_merge($categories, ['วิทยาการคอมพิวเตอร์', 'วไลยอลงกรณ์', 'เรียนต่อคอม']));

$root_path = '../';
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <?php include(__DIR__ . "/../layouts/meta.php"); ?>
    
    <!-- Structured Data (JSON-LD) for SEO & Google Rich Snippets -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BlogPosting",
          "@id": "<?= $canonicalUrl ?>#article",
          "isPartOf": {
            "@type": "WebSite",
            "@id": "https://cs.vru.ac.th/#website",
            "name": "หลักสูตรวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์",
            "url": "https://cs.vru.ac.th"
          },
          "headline": <?= json_encode($title, JSON_UNESCAPED_UNICODE) ?>,
          "description": <?= json_encode($og_description, JSON_UNESCAPED_UNICODE) ?>,
          "image": "<?= htmlspecialchars($imageUrl) ?>",
          "datePublished": "<?= date('c', strtotime($pubDate)) ?>",
          "dateModified": "<?= date('c', strtotime($updatedAt)) ?>",
          "mainEntityOfPage": "<?= $canonicalUrl ?>",
          "author": {
            "@type": "Person",
            "name": <?= json_encode($authorProfile['name'] ?? $creator, JSON_UNESCAPED_UNICODE) ?>,
            "jobTitle": <?= json_encode($authorProfile['role'] ?? 'อาจารย์', JSON_UNESCAPED_UNICODE) ?>
          },
          "publisher": {
            "@type": "EducationalOrganization",
            "name": "หลักสูตรวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์",
            "url": "https://cs.vru.ac.th",
            "logo": {
              "@type": "ImageObject",
              "url": "https://cs.vru.ac.th/images/logo/logo-anniversary-full.png"
            }
          }
        },
        {
          "@type": "BreadcrumbList",
          "@id": "<?= $canonicalUrl ?>#breadcrumb",
          "itemListElement": [
            {
              "@type": "ListItem",
              "position": 1,
              "name": "หน้าหลัก",
              "item": "https://cs.vru.ac.th/"
            },
            {
              "@type": "ListItem",
              "position": 2,
              "name": "บทความ",
              "item": "https://cs.vru.ac.th/content"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": <?= json_encode($primaryCategory, JSON_UNESCAPED_UNICODE) ?>,
              "item": "https://cs.vru.ac.th/content?category=<?= urlencode($primaryCategory) ?>"
            },
            {
              "@type": "ListItem",
              "position": 4,
              "name": <?= json_encode($title, JSON_UNESCAPED_UNICODE) ?>,
              "item": "<?= $canonicalUrl ?>"
            }
          ]
        }
      ]
    }
    </script>

    <style>
        /* Reading Progress Bar */
        #readingProgressBar {
            position: fixed;
            top: 0;
            left: 0;
            height: 4px;
            background: linear-gradient(90deg, #6f42c1, #007bff);
            width: 0%;
            z-index: 99999;
            transition: width 0.1s ease-out;
        }

        /* Sub-bar Navigation */
        .article-subbar {
            background-color: #f8f9fa;
            border-bottom: 1px solid #e9ecef;
            padding: 10px 0;
            font-size: 0.9rem;
        }
        .article-subbar .breadcrumb {
            background: transparent;
            padding: 0;
            margin: 0;
            font-size: 0.88rem;
        }

        /* Hero Article Header */
        .article-header {
            padding: 2.5rem 0 1.5rem;
        }
        .article-title {
            font-weight: 700;
            line-height: 1.35;
            color: #212529;
            margin-bottom: 1.2rem;
        }
        .article-meta-bar {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 15px;
            color: #6c757d;
            font-size: 0.92rem;
            margin-bottom: 1.5rem;
        }
        .article-meta-bar img.author-avatar-sm {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #e2e8f0;
        }

        /* Featured Image */
        .featured-image-container {
            margin: 1.5rem 0 2rem;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 16px rgba(0,0,0,0.08);
            background: #f1f5f9;
            text-align: center;
        }
        .featured-image-container img {
            width: 100%;
            max-height: 520px;
            object-fit: cover;
            display: block;
        }

        /* Table of Contents */
        .toc-box {
            background: #fdfdfe;
            border: 1px solid #e2e8f0;
            border-left: 4px solid #6f42c1;
            border-radius: 8px;
            padding: 18px 22px;
            margin: 2rem 0;
        }
        .toc-box .toc-title {
            font-size: 1.05rem;
            font-weight: 600;
            color: #334155;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .toc-box ul {
            list-style: none;
            padding-left: 0;
            margin-bottom: 0;
        }
        .toc-box li {
            margin-bottom: 8px;
            padding-left: 14px;
            position: relative;
        }
        .toc-box li::before {
            content: "•";
            position: absolute;
            left: 0;
            color: #6f42c1;
            font-weight: bold;
        }
        .toc-box li.toc-h3 {
            padding-left: 28px;
            font-size: 0.92rem;
        }
        .toc-box li.toc-h3::before {
            content: "–";
            left: 14px;
        }
        .toc-box a {
            color: #475569;
            text-decoration: none;
            transition: color 0.15s;
        }
        .toc-box a:hover {
            color: #6f42c1;
            text-decoration: underline;
        }

        /* Article Body Typography */
        .article-body {
            font-size: 1.08rem;
            line-height: 1.85;
            color: #2d3748;
        }
        .article-body h2 {
            font-size: 1.6rem;
            font-weight: 700;
            color: #1a202c;
            margin-top: 2.2rem;
            margin-bottom: 1rem;
            padding-bottom: 8px;
            border-bottom: 2px solid #edf2f7;
            scroll-margin-top: 100px;
        }
        .article-body h3 {
            font-size: 1.3rem;
            font-weight: 600;
            color: #2d3748;
            margin-top: 1.8rem;
            margin-bottom: 0.8rem;
            scroll-margin-top: 100px;
        }
        .article-body p {
            margin-bottom: 1.3rem;
        }
        .article-body img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin: 1.5rem auto;
            display: block;
            box-shadow: 0 2px 10px rgba(0,0,0,0.06);
        }
        .article-body blockquote {
            border-left: 4px solid #6f42c1;
            padding: 12px 20px;
            margin: 1.5rem 0;
            background: #f8fafc;
            font-style: italic;
            color: #4a5568;
            border-radius: 0 8px 8px 0;
        }
        .article-body ul, .article-body ol {
            margin-bottom: 1.3rem;
            padding-left: 25px;
        }
        .article-body li {
            margin-bottom: 0.5rem;
        }
        .article-body table {
            width: 100%;
            margin: 1.5rem 0;
            border-collapse: collapse;
            font-size: 0.95rem;
        }
        .article-body table th, .article-body table td {
            border: 1px solid #e2e8f0;
            padding: 10px 14px;
        }
        .article-body table th {
            background-color: #f1f5f9;
            font-weight: 600;
        }

        /* Social Share Buttons */
        .social-share-bar {
            display: flex;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
        }
        .btn-share {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
            text-decoration: none;
            color: #fff !important;
            transition: opacity 0.15s;
        }
        .btn-share:hover {
            opacity: 0.9;
        }
        .btn-share-fb { background: #1877f2; }
        .btn-share-tw { background: #0f1419; }
        .btn-share-line { background: #06c755; }
        .btn-share-copy { background: #64748b; }

        /* Author Box */
        .author-card-box {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 24px;
            margin: 2.5rem 0 2rem;
            box-shadow: 0 2px 12px rgba(0,0,0,0.04);
        }
        .author-card-box img {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #ede9fe;
        }

        /* Admission Call to Action Banner */
        .admission-cta-banner {
            background: linear-gradient(135deg, #4c1d95, #6d28d9 60%, #7c3aed);
            color: #ffffff;
            border-radius: 14px;
            padding: 32px 28px;
            margin: 3rem 0;
            box-shadow: 0 8px 24px rgba(109, 40, 217, 0.25);
            text-align: center;
        }
        .admission-cta-banner h3 {
            color: #ffffff;
            font-weight: 700;
            font-size: 1.55rem;
            margin-bottom: 12px;
        }
        .admission-cta-banner p {
            color: #e9d5ff;
            font-size: 1.05rem;
            max-width: 720px;
            margin: 0 auto 20px;
        }
        .admission-cta-banner .btn-cta-white {
            background: #ffffff;
            color: #5b21b6;
            font-weight: 600;
            padding: 10px 24px;
            border-radius: 30px;
            margin: 4px 6px;
            text-decoration: none;
            display: inline-block;
            transition: transform 0.15s, box-shadow 0.15s;
        }
        .admission-cta-banner .btn-cta-white:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        .admission-cta-banner .btn-cta-outline {
            background: transparent;
            color: #ffffff;
            border: 2px solid #ffffff;
            font-weight: 600;
            padding: 8px 22px;
            border-radius: 30px;
            margin: 4px 6px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.15s;
        }
        .admission-cta-banner .btn-cta-outline:hover {
            background: rgba(255,255,255,0.15);
        }

        /* Related Articles Card */
        .related-card {
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.2s, box-shadow 0.2s;
            height: 100%;
            background: #fff;
        }
        .related-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
        }
        .related-card img {
            height: 160px;
            width: 100%;
            object-fit: cover;
        }
        .badge-cat {
            background: #f3e8ff;
            color: #7e22ce;
            font-weight: 500;
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 0.8rem;
            text-decoration: none;
            display: inline-block;
        }
        .badge-cat:hover {
            background: #7e22ce;
            color: #ffffff;
            text-decoration: none;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <!-- Reading Progress Bar -->
    <div id="readingProgressBar"></div>

    <!-- Main Navigation Header -->
    <?php include(__DIR__ . "/../layouts/navbar.php"); ?>

    <div class="content">
        <!-- Sub-bar: Breadcrumb & Quick Info -->
        <nav class="article-subbar" aria-label="breadcrumb">
            <div class="container">
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= $root_path ?>index.php" class="text-secondary">หน้าหลัก</a></li>
                        <li class="breadcrumb-item"><a href="<?= $root_path ?>content" class="text-secondary">บทความ</a></li>
                        <li class="breadcrumb-item"><a href="<?= $root_path ?>content?category=<?= urlencode($primaryCategory) ?>" class="text-secondary"><?= htmlspecialchars($primaryCategory) ?></a></li>
                        <li class="breadcrumb-item active text-truncate d-none d-md-inline" style="max-width: 320px;" aria-current="page"><?= htmlspecialchars($title) ?></li>
                    </ol>
                    <div class="d-flex align-items-center gap-3">
                        <span class="text-muted mr-3"><i class="fa fa-clock-o"></i> ⏱️ อ่านประมาณ <?= (int)$readingTime ?> นาที</span>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Article Container -->
        <main class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-xl-8">
                    <!-- Article Header -->
                    <header class="article-header">
                        <div class="mb-3">
                            <?php foreach ($categories as $cat) { ?>
                                <a href="<?= $root_path ?>content?category=<?= urlencode($cat) ?>" class="badge-cat mr-1 mb-1"># <?= htmlspecialchars($cat) ?></a>
                            <?php } ?>
                        </div>

                        <h1 class="article-title h2"><?= htmlspecialchars($title) ?></h1>

                        <div class="article-meta-bar">
                            <div class="d-flex align-items-center">
                                <?php if (!empty($authorProfile['image'])) { ?>
                                    <img src="<?= htmlspecialchars($authorProfile['image']) ?>" alt="<?= htmlspecialchars($authorProfile['name']) ?>" class="author-avatar-sm mr-2" onerror="this.src='<?= $root_path ?>images/logo/logo-anniversary-full.png'">
                                <?php } ?>
                                <div>
                                    <div class="font-weight-bold text-dark">
                                        <a href="<?= $root_path ?><?= $authorProfile['profile_url'] ?>" class="text-dark"><?= htmlspecialchars($authorProfile['name']) ?></a>
                                    </div>
                                    <small class="text-muted"><?= htmlspecialchars($authorProfile['academic_position'] ?: $authorProfile['role']) ?></small>
                                </div>
                            </div>
                            <div class="ml-auto text-muted">
                                <span><i class="fa fa-calendar mr-1"></i> เผยแพร่: <?= format_thai_date($pubDate) ?></span>
                            </div>
                        </div>

                        <!-- Social Share Bar (Top) -->
                        <div class="social-share-bar py-2 border-top border-bottom my-3">
                            <span class="text-muted font-weight-bold mr-2"><i class="fa fa-share-alt mr-1"></i> แชร์:</span>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($canonicalUrl) ?>" target="_blank" rel="noopener noreferrer" class="btn-share btn-share-fb">
                                <i class="fa fa-facebook"></i> Facebook
                            </a>
                            <a href="https://twitter.com/intent/tweet?url=<?= urlencode($canonicalUrl) ?>&text=<?= urlencode($title) ?>" target="_blank" rel="noopener noreferrer" class="btn-share btn-share-tw">
                                <i class="fa fa-twitter"></i> X
                            </a>
                            <a href="https://line.me/R/msg/text/?<?= urlencode($title . ' ' . $canonicalUrl) ?>" target="_blank" rel="noopener noreferrer" class="btn-share btn-share-line">
                                <i class="fa fa-comment"></i> LINE
                            </a>
                            <button type="button" class="btn-share btn-share-copy" onclick="copyCurrentLink()">
                                <i class="fa fa-link"></i> คัดลอกลิงก์
                            </button>
                            <span id="copySuccessMsg" class="text-success small ml-2 font-weight-bold" style="display:none;">คัดลอกสำเร็จ!</span>
                        </div>
                    </header>

                    <!-- Featured Cover Image -->
                    <?php if (!empty($imageUrl)) { ?>
                        <div class="featured-image-container">
                            <img src="<?= htmlspecialchars($imageUrl) ?>" alt="<?= htmlspecialchars($title) ?>" loading="lazy" onerror="this.parentElement.style.display='none'">
                        </div>
                    <?php } ?>

                    <!-- Dynamic Table of Contents (Generated by JS) -->
                    <div id="tocContainer" class="toc-box" style="display: none;">
                        <div class="toc-title"><i class="fa fa-list-ul"></i> สารบัญเนื้อหา</div>
                        <ul id="tocList"></ul>
                    </div>

                    <!-- Article Body Content Starts Below in Individual File -->
                    <article class="article-body">
