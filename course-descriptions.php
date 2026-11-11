<?php
require_once("data/courses-2570.php");

$og_title = "คำอธิบายรายวิชา (Course Descriptions) | วิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ (VRU)";
$og_description = "คลังคำอธิบายรายวิชาฉบับเต็ม 53 วิชา (ไทย-อังกฤษ) หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ พร้อมระบบค้นหาและตัวกรองหมวดหมู่วิชา";
$og_url = "https://cs.vru.ac.th/course-descriptions.php";

$count_total = count($courses_2570);
$count_ge = count(array_filter($courses_2570, fn($c) => $c['cat'] === 'ge'));
$count_core = count(array_filter($courses_2570, fn($c) => $c['cat'] === 'core'));
$count_elective = count(array_filter($courses_2570, fn($c) => $c['cat'] === 'elective'));
$count_practicum = count(array_filter($courses_2570, fn($c) => $c['cat'] === 'practicum'));
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <?php include("layouts/meta.php"); ?>
    <style>
        .page-header-modern {
            border-left: 5px solid #007bff;
            padding-left: 1.25rem;
        }

        /* High contrast typography & Dark Gray styling */
        body, .content {
            color: #212529 !important;
        }

        .text-dark-gray {
            color: #343a40 !important;
        }

        .text-muted, .text-secondary {
            color: #495057 !important;
        }

        /* Search & Filter Control Bar */
        .search-filter-box {
            background: #ffffff;
            border: 1px solid #ced4da;
            border-radius: 12px;
            padding: 1.25rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
            margin-bottom: 2rem;
        }

        .search-input-group {
            position: relative;
        }

        .search-input-group i {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
            font-size: 1.1rem;
        }

        .search-input-control {
            padding-left: 2.75rem !important;
            padding-right: 2.5rem !important;
            border-radius: 50rem !important;
            border: 1px solid #ced4da !important;
            height: calc(2.75rem + 2px);
            font-size: 1rem;
            transition: all 0.2s ease;
        }

        .search-input-control:focus {
            border-color: #007bff !important;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.15) !important;
        }

        .search-clear-btn {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #adb5bd;
            cursor: pointer;
            display: none;
        }

        .search-clear-btn:hover {
            color: #495057;
        }

        .filter-btn-pill {
            display: inline-flex;
            align-items: center;
            padding: 0.45rem 1rem;
            border-radius: 50rem;
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            border: 1px solid #dee2e6;
            background-color: #f8f9fa;
            color: #495057;
            margin-right: 0.4rem;
            margin-bottom: 0.4rem;
            transition: all 0.2s ease;
        }

        .filter-btn-pill:hover {
            background-color: #e9ecef;
            color: #007bff;
        }

        .filter-btn-pill.active {
            background-color: #007bff !important;
            border-color: #007bff !important;
            color: #ffffff !important;
            box-shadow: 0 3px 8px rgba(0, 123, 255, 0.25);
        }

        /* Course Card */
        .course-card {
            background: #ffffff;
            border: 1px solid #ced4da;
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 1.25rem;
            transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
            position: relative;
        }

        .course-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
            border-color: #80bdff;
        }

        .course-card.highlighted {
            border-color: #007bff !important;
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.25) !important;
        }

        .course-code-tag {
            font-family: monospace;
            font-size: 1.05rem;
            font-weight: 700;
            color: #0056b3;
            background-color: #e7f1ff;
            border: 1px solid #b8daff;
            padding: 0.25rem 0.65rem;
            border-radius: 6px;
            display: inline-block;
        }

        .course-credit-tag {
            font-size: 0.85rem;
            font-weight: 600;
            color: #495057;
            background-color: #f1f3f5;
            border: 1px solid #dee2e6;
            padding: 0.25rem 0.65rem;
            border-radius: 6px;
            display: inline-block;
        }

        .course-desc-block {
            background-color: #fcfdfe;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            padding: 1rem 1.15rem;
            margin-top: 0.85rem;
        }

        .course-desc-label {
            font-weight: 700;
            font-size: 0.85rem;
            color: #007bff;
            margin-bottom: 0.35rem;
            display: flex;
            align-items: center;
        }

        .course-desc-text {
            color: #212529;
            font-size: 0.95rem;
            line-height: 1.7;
            text-align: justify;
        }

        .course-desc-en {
            color: #343a40;
            font-size: 0.9rem;
            line-height: 1.65;
            text-align: justify;
        }

        .copy-link-btn {
            color: #adb5bd;
            font-size: 0.9rem;
            cursor: pointer;
            transition: color 0.2s ease;
            border: none;
            background: none;
            padding: 0 0.5rem;
        }

        .copy-link-btn:hover {
            color: #007bff;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php include("layouts/navbar.php"); ?>

    <div class="content">
        <div class="container py-4">

            <!-- Breadcrumb Navigation -->
            <nav aria-label="breadcrumb" class="mb-3">
                <ol class="breadcrumb bg-light py-2 px-3 rounded">
                    <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i> หน้าแรก</a></li>
                    <li class="breadcrumb-item"><a href="structure.php">เกี่ยวกับหลักสูตร</a></li>
                    <li class="breadcrumb-item active" aria-current="page">คำอธิบายรายวิชา</li>
                </ol>
            </nav>

            <!-- Page Header -->
            <div class="page-header-modern mb-4">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div>
                        <h1 class="h2 font-weight-bold text-dark mb-1">
                            <i class="fa fa-book text-primary mr-2"></i>คำอธิบายรายวิชา (Course Descriptions)
                        </h1>
                        <p class="text-dark-gray mb-0">
                            คลังคำอธิบายรายวิชาฉบับเต็มภาษาไทยและภาษาอังกฤษ ครบทั้ง 53 รายวิชา ตามหลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์ (หลักสูตรปรับปรุง พ.ศ. 2570)
                        </p>
                    </div>
                    <div class="mt-3 mt-lg-0">
                        <a href="structure.php" class="btn btn-outline-primary btn-sm font-weight-bold mr-1">
                            <i class="fa fa-cubes mr-1"></i> ดูโครงสร้าง & แผน 4 ปี
                        </a>
                        <a href="Description.php" class="btn btn-outline-info btn-sm font-weight-bold">
                            <i class="fa fa-graduation-cap mr-1"></i> รายละเอียดหลักสูตร
                        </a>
                    </div>
                </div>
            </div>

            <!-- Search & Filter Controls -->
            <div class="search-filter-box">
                <div class="search-input-group mb-3">
                    <i class="fa fa-search"></i>
                    <input type="text" id="courseSearchInput" class="form-control search-input-control" placeholder="ค้นหาด้วยรหัสวิชา, ชื่อวิชาภาษาไทย, ชื่อภาษาอังกฤษ หรือคำสำคัญ (เช่น 65SCS210, AI, Python, Web, Cloud, ฐานข้อมูล...)" autocomplete="off">
                    <button type="button" id="searchClearBtn" class="search-clear-btn" title="ล้างการค้นหา">
                        <i class="fa fa-times-circle"></i>
                    </button>
                </div>

                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div class="d-flex flex-wrap align-items-center" id="categoryFilters">
                        <button type="button" class="filter-btn-pill active" data-filter="all">
                            ทั้งหมด <span class="badge badge-light ml-1"><?php echo $count_total; ?></span>
                        </button>
                        <button type="button" class="filter-btn-pill" data-filter="ge">
                            ศึกษาทั่วไป <span class="badge badge-light ml-1"><?php echo $count_ge; ?></span>
                        </button>
                        <button type="button" class="filter-btn-pill" data-filter="core">
                            วิชาเฉพาะด้านบังคับ <span class="badge badge-light ml-1"><?php echo $count_core; ?></span>
                        </button>
                        <button type="button" class="filter-btn-pill" data-filter="elective">
                            วิชาเฉพาะด้านเลือก <span class="badge badge-light ml-1"><?php echo $count_elective; ?></span>
                        </button>
                        <button type="button" class="filter-btn-pill" data-filter="practicum">
                            ฝึกงาน / สหกิจ <span class="badge badge-light ml-1"><?php echo $count_practicum; ?></span>
                        </button>
                    </div>
                    <div class="text-dark-gray small font-weight-bold my-1">
                        แสดง <span id="matchCounter" class="text-primary font-weight-bold"><?php echo $count_total; ?></span> จาก <?php echo $count_total; ?> รายวิชา
                    </div>
                </div>
            </div>

            <!-- No Results Message -->
            <div id="noResultsAlert" class="alert alert-warning border text-center py-4 d-none" style="border-radius: 12px;">
                <i class="fa fa-exclamation-circle text-warning mb-2" style="font-size: 2rem;"></i>
                <div class="h5 font-weight-bold text-dark mb-1">ไม่พบรายวิชาที่ตรงกับคำค้นหา</div>
                <p class="text-dark-gray mb-3 small">โปรดลองตรวจสอบตัวสะกด หรือค้นหาด้วยคำสำคัญอื่นๆ เช่น "การเขียนโปรแกรม", "AI", "เว็บ" หรือรหัสวิชา</p>
                <button type="button" class="btn btn-primary btn-sm" id="resetSearchBtn">
                    <i class="fa fa-refresh mr-1"></i> ล้างการค้นหาทั้งหมด
                </button>
            </div>

            <!-- Course Catalog Cards -->
            <div id="courseCatalogList">
                <?php foreach ($courses_2570 as $index => $c): ?>
                    <div class="course-card" 
                         id="<?php echo htmlspecialchars($c['code']); ?>"
                         data-code="<?php echo htmlspecialchars(strtolower($c['code'])); ?>"
                         data-name-th="<?php echo htmlspecialchars(strtolower($c['name_th'])); ?>"
                         data-name-en="<?php echo htmlspecialchars(strtolower($c['name_en'])); ?>"
                         data-desc-th="<?php echo htmlspecialchars(strtolower($c['desc_th'])); ?>"
                         data-desc-en="<?php echo htmlspecialchars(strtolower($c['desc_en'])); ?>"
                         data-cat="<?php echo htmlspecialchars($c['cat']); ?>">
                        
                        <!-- Top Metadata Row -->
                        <div class="d-flex flex-wrap align-items-center justify-content-between mb-2">
                            <div class="d-flex align-items-center flex-wrap">
                                <span class="course-code-tag mr-2 mb-1">
                                    <?php echo htmlspecialchars($c['code']); ?>
                                </span>
                                <span class="badge <?php echo htmlspecialchars($c['badge_class']); ?> py-1 px-2 mr-2 mb-1">
                                    <?php echo htmlspecialchars($c['cat_name']); ?>
                                </span>
                                <span class="course-credit-tag mb-1">
                                    <i class="fa fa-clock-o mr-1"></i> <?php echo htmlspecialchars($c['credits']); ?> หน่วยกิต
                                </span>
                            </div>
                            <div>
                                <button type="button" class="copy-link-btn" title="คัดลอกลิงก์ไปยังรายวิชานี้" onclick="copyCourseLink('<?php echo htmlspecialchars($c['code']); ?>')">
                                    <i class="fa fa-link"></i> <span class="small d-none d-sm-inline">แชร์วิชานี้</span>
                                </button>
                            </div>
                        </div>

                        <!-- Titles -->
                        <h2 class="h5 font-weight-bold text-dark mb-1">
                            <?php echo htmlspecialchars($c['name_th']); ?>
                        </h2>
                        <div class="text-dark-gray mb-3 font-italic" style="font-size: 0.95rem;">
                            <?php echo htmlspecialchars($c['name_en']); ?>
                        </div>

                        <!-- Descriptions Block -->
                        <div class="course-desc-block">
                            <!-- Thai Description -->
                            <div class="mb-3">
                                <div class="course-desc-label">
                                    <i class="fa fa-file-text-o mr-1"></i> คำอธิบายรายวิชา (ภาษาไทย)
                                </div>
                                <div class="course-desc-text">
                                    <?php echo htmlspecialchars($c['desc_th']); ?>
                                </div>
                            </div>

                            <!-- English Description -->
                            <div class="border-top pt-3">
                                <div class="course-desc-label text-secondary">
                                    <i class="fa fa-globe mr-1"></i> Course Description (English)
                                </div>
                                <div class="course-desc-en">
                                    <?php echo htmlspecialchars($c['desc_en']); ?>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Footer Quick Navigation -->
            <div class="card border shadow-sm my-4" style="border-radius: 12px; border-color: #ced4da !important; background: linear-gradient(135deg, #f8fbff 0%, #ffffff 100%);">
                <div class="card-body p-4 text-center">
                    <h3 class="h5 font-weight-bold text-dark mb-2">สนใจดูโครงสร้างแผนการศึกษาตลอด 4 ปี?</h3>
                    <p class="text-dark-gray small mb-3">
                        สำรวจแผนการลงทะเบียนเรียนรายเทอม หมวดหมู่วิชา และเส้นทางการเทียบโอน ปวส. 2 – 2.5 ปี
                    </p>
                    <a href="structure.php" class="btn btn-primary font-weight-bold mr-2 mb-2">
                        <i class="fa fa-cubes mr-1"></i> ไปยังโครงสร้างหลักสูตร 2570
                    </a>
                    <a href="tcas.php" class="btn btn-outline-success font-weight-bold mb-2">
                        <i class="fa fa-user-plus mr-1"></i> สมัครเรียน / รอบ TCAS
                    </a>
                </div>
            </div>

        </div>

        <!-- Schema.org Course Catalog Structured Data -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ItemList",
            "name": "คำอธิบายรายวิชา หลักสูตรวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์",
            "description": "คลังคำอธิบายรายวิชา 53 วิชา หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์ (หลักสูตรปรับปรุง พ.ศ. 2570)",
            "numberOfItems": <?php echo $count_total; ?>,
            "itemListElement": [
                <?php 
                $schema_items = [];
                foreach ($courses_2570 as $i => $c) {
                    $schema_items[] = json_encode([
                        "@type" => "Course",
                        "position" => $i + 1,
                        "courseCode" => $c['code'],
                        "name" => $c['name_th'] . " (" . $c['name_en'] . ")",
                        "description" => $c['desc_th'],
                        "provider" => [
                            "@type" => "CollegeOrUniversity",
                            "name" => "มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์"
                        ]
                    ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
                }
                echo implode(",\n                ", $schema_items);
                ?>
            ]
        }
        </script>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>

    <!-- Real-time Filter & Search JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var searchInput = document.getElementById('courseSearchInput');
            var searchClearBtn = document.getElementById('searchClearBtn');
            var categoryFilterBtns = document.querySelectorAll('#categoryFilters .filter-btn-pill');
            var courseCards = document.querySelectorAll('#courseCatalogList .course-card');
            var matchCounter = document.getElementById('matchCounter');
            var noResultsAlert = document.getElementById('noResultsAlert');
            var resetSearchBtn = document.getElementById('resetSearchBtn');

            var currentFilter = 'all';

            function filterCourses() {
                var query = searchInput.value.trim().toLowerCase();
                var visibleCount = 0;

                searchClearBtn.style.display = query ? 'block' : 'none';

                courseCards.forEach(function (card) {
                    var code = card.getAttribute('data-code') || '';
                    var nameTh = card.getAttribute('data-name-th') || '';
                    var nameEn = card.getAttribute('data-name-en') || '';
                    var descTh = card.getAttribute('data-desc-th') || '';
                    var descEn = card.getAttribute('data-desc-en') || '';
                    var cat = card.getAttribute('data-cat') || '';

                    // Check Category Filter
                    var matchesCat = (currentFilter === 'all') || (cat === currentFilter);

                    // Check Search Query
                    var matchesQuery = true;
                    if (query) {
                        matchesQuery = (code.indexOf(query) !== -1) ||
                                       (nameTh.indexOf(query) !== -1) ||
                                       (nameEn.indexOf(query) !== -1) ||
                                       (descTh.indexOf(query) !== -1) ||
                                       (descEn.indexOf(query) !== -1);
                    }

                    if (matchesCat && matchesQuery) {
                        card.style.display = '';
                        visibleCount++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                matchCounter.textContent = visibleCount;
                if (visibleCount === 0) {
                    noResultsAlert.classList.remove('d-none');
                } else {
                    noResultsAlert.classList.add('d-none');
                }
            }

            // Search Input Event
            searchInput.addEventListener('input', filterCourses);

            // Clear Button
            searchClearBtn.addEventListener('click', function () {
                searchInput.value = '';
                filterCourses();
                searchInput.focus();
            });

            // Reset Button
            if (resetSearchBtn) {
                resetSearchBtn.addEventListener('click', function () {
                    searchInput.value = '';
                    currentFilter = 'all';
                    categoryFilterBtns.forEach(function (btn) {
                        btn.classList.toggle('active', btn.getAttribute('data-filter') === 'all');
                    });
                    filterCourses();
                    searchInput.focus();
                });
            }

            // Category Filter Buttons
            categoryFilterBtns.forEach(function (btn) {
                btn.addEventListener('click', function () {
                    categoryFilterBtns.forEach(function (b) { b.classList.remove('active'); });
                    this.classList.add('active');
                    currentFilter = this.getAttribute('data-filter');
                    filterCourses();
                });
            });

            // Deep-link anchor scroll
            if (window.location.hash) {
                var targetId = window.location.hash.substring(1);
                var targetCard = document.getElementById(targetId);
                if (targetCard) {
                    targetCard.classList.add('highlighted');
                    setTimeout(function () {
                        targetCard.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }, 300);
                }
            }
        });

        function copyCourseLink(code) {
            var url = window.location.origin + window.location.pathname + '#' + code;
            if (navigator.clipboard && navigator.clipboard.writeText) {
                navigator.clipboard.writeText(url).then(function () {
                    alert('คัดลอกลิงก์รายวิชา ' + code + ' เรียบร้อยแล้ว:\n' + url);
                });
            } else {
                prompt('คัดลอกลิงก์รายวิชานี้:', url);
            }
        }
    </script>
</body>

</html>

