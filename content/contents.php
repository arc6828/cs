<?php
/**
 * Modern Content Listing Page
 * Displays articles from local json/articles.json with Live Search & Category Filtering.
 */

require_once __DIR__ . '/article-helper.php';

$articles = get_all_articles();

// Safety fallback if local JSON is empty
if (empty($articles)) {
    $fallbackJson = @file_get_contents("https://ckartisan.com/api/article/tagged/computer-science");
    if ($fallbackJson) {
        $rawArticles = json_decode($fallbackJson, true);
        if (is_array($rawArticles)) {
            $articles = $rawArticles;
        }
    }
}

// Collect unique categories for filter pills
$allCategories = [];
foreach ($articles as $art) {
    if (!empty($art['category']) && is_array($art['category'])) {
        foreach ($art['category'] as $c) {
            $c = trim($c);
            if ($c !== '' && !in_array($c, $allCategories)) {
                $allCategories[] = $c;
            }
        }
    }
}

$og_title = "บทความวิชาการและสาระน่ารู้ | หลักสูตรวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ (VRU)";
$og_description = "คลังบทความวิชาการ นวัตกรรมเทคโนโลยี แนะแนวการศึกษา และแนวโน้มอาชีพด้านวิทยาการคอมพิวเตอร์ โดยคณาจารย์ผู้เชี่ยวชาญ มรภ.วไลยอลงกรณ์";
$og_url = "https://cs.vru.ac.th/content";
$og_type = "website";
$root_path = '../';

// Filter by URL param ?category=... if present
$selectedCategory = isset($_GET['category']) ? trim($_GET['category']) : '';
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <?php include(__DIR__ . "/../layouts/meta.php"); ?>
    <style>
        .page-header-box {
            background: linear-gradient(135deg, #1e1b4b 0%, #312e81 50%, #4c1d95 100%);
            color: #ffffff;
            padding: 3.5rem 0 2.5rem;
            margin-bottom: 2.5rem;
            border-bottom: 4px solid #7c3aed;
        }
        .search-filter-card {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.06);
            padding: 1.5rem;
            margin-top: -2.5rem;
            margin-bottom: 2.5rem;
            border: 1px solid #e2e8f0;
        }
        .category-pill {
            display: inline-block;
            padding: 6px 14px;
            margin: 3px;
            border-radius: 20px;
            background: #f1f5f9;
            color: #475569;
            font-size: 0.88rem;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.15s ease-in-out;
            cursor: pointer;
            border: 1px solid transparent;
        }
        .category-pill:hover, .category-pill.active {
            background: #6f42c1;
            color: #ffffff;
            border-color: #6f42c1;
            text-decoration: none;
            box-shadow: 0 2px 8px rgba(111, 66, 193, 0.3);
        }
        .article-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            overflow: hidden;
            height: 100%;
            display: flex;
            flex-direction: column;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .article-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.09);
        }
        .card-img-wrapper {
            position: relative;
            height: 200px;
            overflow: hidden;
            background: #f1f5f9;
        }
        .card-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .article-card:hover .card-img-wrapper img {
            transform: scale(1.04);
        }
        .card-reading-badge {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(4px);
            color: #fff;
            padding: 3px 10px;
            border-radius: 20px;
            font-size: 0.78rem;
            font-weight: 500;
        }
        .article-card-body {
            padding: 1.25rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }
        .article-card-title {
            font-size: 1.15rem;
            font-weight: 700;
            line-height: 1.4;
            margin-bottom: 0.6rem;
        }
        .article-card-title a {
            color: #1e293b;
            text-decoration: none;
            transition: color 0.15s;
        }
        .article-card-title a:hover {
            color: #6f42c1;
        }
        .article-card-excerpt {
            color: #64748b;
            font-size: 0.92rem;
            line-height: 1.6;
            margin-bottom: 1rem;
            flex-grow: 1;
        }
        .article-card-footer {
            border-top: 1px solid #f1f5f9;
            padding-top: 0.85rem;
            margin-top: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 0.84rem;
            color: #94a3b8;
        }
        .admission-card-banner {
            background: linear-gradient(135deg, #3b0764, #581c87 50%, #6b21a8);
            border-radius: 14px;
            color: #fff;
            padding: 2.5rem 2rem;
            margin-top: 3.5rem;
            text-align: center;
        }
        .admission-card-banner h3 {
            color: #fff;
            font-weight: 700;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php include(__DIR__ . "/../layouts/navbar.php"); ?>

    <div class="content p-0">
        <!-- Page Hero Banner -->
        <header class="page-header-box">
            <div class="container text-center">
                <span class="badge badge-pill badge-warning px-3 py-1 text-dark font-weight-bold mb-2">CS-VRU Articles & Knowledge</span>
                <h1 class="h2 font-weight-bold">บทความและสาระน่ารู้</h1>
                <p class="lead mb-0 text-white-50" style="font-size: 1.05rem;">
                    เจาะลึกวิทยาการคอมพิวเตอร์ เทคโนโลยี AI แนะแนวสายอาชีพ และข่าวสารจากหลักสูตร มรภ.วไลยอลงกรณ์
                </p>
            </div>
        </header>

        <div class="container">
            <!-- Search & Filter Card -->
            <div class="search-filter-card">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white border-right-0"><i class="fa fa-search text-muted"></i></span>
                            </div>
                            <input type="text" id="articleSearchInput" class="form-control border-left-0" placeholder="พิมพ์คำค้นหา เช่น AI, อาชีพ, เสาร์-อาทิตย์, กยศ. ..." aria-label="ค้นหาบทความ">
                        </div>
                    </div>
                    <div class="col-lg-6 text-lg-right">
                        <span class="text-muted small font-weight-bold mr-2"><i class="fa fa-tags"></i> หมวดหมู่:</span>
                        <div class="d-inline-block" id="categoryPillContainer">
                            <span class="category-pill <?= empty($selectedCategory) ? 'active' : '' ?>" data-cat="all">ทั้งหมด</span>
                            <?php 
                            $topCategories = array_slice($allCategories, 0, 6);
                            foreach ($topCategories as $cat) { 
                                $isActive = ($selectedCategory === $cat);
                            ?>
                                <span class="category-pill <?= $isActive ? 'active' : '' ?>" data-cat="<?= htmlspecialchars($cat) ?>"><?= htmlspecialchars($cat) ?></span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Article Grid -->
            <div class="row" id="articleGrid">
                <?php foreach ($articles as $row) { 
                    $rowSlug = $row['slug'] ?? "article-{$row['id']}";
                    $rowTarget = $root_path . 'content/' . htmlspecialchars($rowSlug);
                    $rowImg = !empty($row['image_url']) ? $row['image_url'] : $root_path . 'images/logo5.png';
                    $rowExcerpt = mb_substr(strip_tags($row['first_paragraph'] ?? $row['content'] ?? ''), 0, 140);
                    $cats = is_array($row['category'] ?? null) ? $row['category'] : [];
                    $catsJson = htmlspecialchars(json_encode($cats, JSON_UNESCAPED_UNICODE));
                    $readMins = $row['reading_time_minutes'] ?? 2;
                ?>
                    <div class="col-md-6 col-lg-4 mb-4 article-item" 
                         data-title="<?= htmlspecialchars(mb_strtolower($row['title'] ?? '')) ?>" 
                         data-creator="<?= htmlspecialchars(mb_strtolower($row['creator'] ?? '')) ?>"
                         data-categories='<?= $catsJson ?>'>
                        <div class="article-card">
                            <a href="<?= $rowTarget ?>" class="card-img-wrapper" tabindex="-1" aria-hidden="true">
                                <img src="<?= htmlspecialchars($rowImg) ?>" alt="<?= htmlspecialchars($row['title']) ?>" loading="lazy" onerror="this.src='<?= $root_path ?>images/logo5.png'">
                                <span class="card-reading-badge"><i class="fa fa-clock-o mr-1"></i> <?= (int)$readMins ?> นาที</span>
                            </a>
                            <div class="article-card-body">
                                <div class="mb-2">
                                    <?php foreach (array_slice($cats, 0, 2) as $c) { ?>
                                        <span class="badge badge-light text-primary border mr-1 font-weight-normal"><?= htmlspecialchars($c) ?></span>
                                    <?php } ?>
                                </div>
                                <h2 class="article-card-title">
                                    <a href="<?= $rowTarget ?>"><?= htmlspecialchars($row['title']) ?></a>
                                </h2>
                                <p class="article-card-excerpt">
                                    <?= htmlspecialchars($rowExcerpt) ?>...
                                </p>
                                <div class="article-card-footer">
                                    <span><i class="fa fa-user-circle mr-1"></i> <?= htmlspecialchars($row['creator'] ?? '') ?></span>
                                    <span><i class="fa fa-calendar mr-1"></i> <?= format_thai_date($row['pubDate'] ?? '') ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <!-- No Results Message (Hidden by default) -->
            <div id="noResultsBox" class="text-center py-5" style="display: none;">
                <div class="mb-3 text-muted"><i class="fa fa-search fa-3x"></i></div>
                <h3 class="h5 font-weight-bold text-dark">ไม่พบบทความที่ตรงกับคำค้นหา</h3>
                <p class="text-muted">ลองค้นหาด้วยคำอื่น หรือคลิกหมวดหมู่ "ทั้งหมด" เพื่อดูบทความทั้งหมด</p>
                <button type="button" class="btn btn-outline-primary btn-sm" onclick="resetFilters()">แสดงบทความทั้งหมด</button>
            </div>

            <!-- Admission Call to Action Banner -->
            <div class="admission-card-banner">
                <h3>พร้อมเริ่มต้นเส้นทางสู่อาชีพสายเทคโนโลยีแล้วหรือยัง?</h3>
                <p class="lead text-white-50 mx-auto" style="max-width: 650px; font-size: 1rem;">
                    หลักสูตร วท.บ. วิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ เปิดรับสมัครนักศึกษาใหม่ทั้งรอบ Portfolio, โควตา และรอบทั่วไป สมัครได้ทั้งภาคปกติและภาคพิเศษเสาร์-อาทิตย์
                </p>
                <div class="mt-3">
                    <a href="<?= $root_path ?>admission.php" class="btn btn-light text-primary font-weight-bold px-4 py-2 mr-2 mb-2">
                        <i class="fa fa-graduation-cap mr-1"></i> สมัครเรียน / ข้อมูลรับสมัคร
                    </a>
                    <a href="<?= $root_path ?>structure.php" class="btn btn-outline-light font-weight-bold px-4 py-2 mb-2">
                        <i class="fa fa-book mr-1"></i> แผนการเรียน 4 ปี
                    </a>
                </div>
            </div>

        </div>
    </div>

    <?php include(__DIR__ . "/../layouts/footer-content.php"); ?>
    <?php include(__DIR__ . "/../layouts/scripts.php"); ?>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var searchInput = document.getElementById("articleSearchInput");
            var pills = document.querySelectorAll(".category-pill");
            var items = document.querySelectorAll(".article-item");
            var noResults = document.getElementById("noResultsBox");
            var currentCategory = "<?= addslashes($selectedCategory ?: 'all') ?>";

            function filterArticles() {
                var query = searchInput.value.trim().toLowerCase();
                var visibleCount = 0;

                items.forEach(function(item) {
                    var title = item.getAttribute("data-title") || "";
                    var creator = item.getAttribute("data-creator") || "";
                    var catData = [];
                    try {
                        catData = JSON.parse(item.getAttribute("data-categories") || "[]");
                    } catch(e) {}

                    var matchesQuery = (query === "" || title.indexOf(query) !== -1 || creator.indexOf(query) !== -1);
                    var matchesCategory = (currentCategory === "all" || catData.indexOf(currentCategory) !== -1);

                    if (matchesQuery && matchesCategory) {
                        item.style.display = "";
                        visibleCount++;
                    } else {
                        item.style.display = "none";
                    }
                });

                if (noResults) {
                    noResults.style.display = (visibleCount === 0) ? "block" : "none";
                }
            }

            if (searchInput) {
                searchInput.addEventListener("input", filterArticles);
            }

            pills.forEach(function(pill) {
                pill.addEventListener("click", function() {
                    pills.forEach(function(p) { p.classList.remove("active"); });
                    pill.classList.add("active");
                    currentCategory = pill.getAttribute("data-cat");
                    filterArticles();
                });
            });

            window.resetFilters = function() {
                if (searchInput) searchInput.value = "";
                currentCategory = "all";
                pills.forEach(function(p) { 
                    if (p.getAttribute("data-cat") === "all") p.classList.add("active");
                    else p.classList.remove("active");
                });
                filterArticles();
            };

            // Run initial filter if URL has category
            if (currentCategory !== 'all') {
                filterArticles();
            }
        });
    </script>
</body>
</html>
