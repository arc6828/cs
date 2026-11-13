<?php
$og_title = "อาจารย์ประจำหลักสูตร | วิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ (VRU)";
$og_description = "ทำเนียบคณาจารย์ผู้รับผิดชอบหลักสูตร (5 ท่าน) และอาจารย์ประจำหลักสูตร วิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ พร้อมวุฒิการศึกษา รายวิชาที่สอน และช่องทางติดต่อ";
$og_url = "https://cs.vru.ac.th/teacher.php";

$teacher_file = "json/teacher.json";
$people_obj = json_decode(file_get_contents($teacher_file), true);
$people = $people_obj["people"] ?? [];

$total_teachers = count($people);
$curriculum_count = 0;
$regular_count = 0;
$phd_count = 0;
$asst_prof_count = 0;
$total_years = 0;

foreach ($people as $p) {
    if (strpos($p["full_name"], "ดร.") !== false || strpos($p["education"], "Ph.D.") !== false || strpos($p["education"], "ปร.ด.") !== false) {
        $phd_count++;
    }
    if (($p["academic_position"] ?? '') === "ผู้ช่วยศาสตราจารย์" || strpos($p["prefix"] ?? '', "ผศ.") !== false) {
        $asst_prof_count++;
    }
    if (strpos($p["role"] ?? '', "ผู้รับผิดชอบ") !== false) {
        $curriculum_count++;
    } else {
        $regular_count++;
    }
    $total_years += (int)($p["teaching_exp_years"] ?? 0);
}
$avg_years = $total_teachers > 0 ? round($total_years / $total_teachers, 1) : 0;
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

        /* Stat Cards */
        .stat-card-faculty {
            background: #ffffff;
            border: 1px solid #ced4da;
            border-radius: 12px;
            padding: 1.25rem 1rem;
            text-align: center;
            height: 100%;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .stat-card-faculty:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 123, 255, 0.08);
            border-color: #b8daff;
        }

        .stat-faculty-icon {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            margin-bottom: 0.65rem;
        }

        /* Filter Controls */
        .faculty-filter-bar {
            background: #ffffff;
            border: 1px solid #ced4da;
            border-radius: 12px;
            padding: 0.75rem 1.25rem;
            margin-bottom: 2rem;
            box-shadow: 0 2px 6px rgba(0,0,0,0.03);
        }

        .faculty-filter-btn {
            display: inline-flex;
            align-items: center;
            padding: 0.45rem 1.1rem;
            border-radius: 50rem;
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            border: 1px solid #dee2e6;
            background-color: #f8f9fa;
            color: #495057;
            margin-right: 0.5rem;
            margin-bottom: 0.35rem;
            transition: all 0.2s ease;
        }

        .faculty-filter-btn:hover {
            background-color: #e9ecef;
            color: #007bff;
        }

        .faculty-filter-btn.active {
            background-color: #007bff !important;
            border-color: #007bff !important;
            color: #ffffff !important;
            box-shadow: 0 3px 8px rgba(0, 123, 255, 0.25);
        }

        /* ============================================================
           Redesigned Faculty Vertical Card (Top Image Layout)
           ============================================================ */
        .faculty-vcard {
            background: #ffffff;
            border: 1px solid #ced4da;
            border-radius: 14px;
            overflow: hidden;
            height: 100%;
            transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
        }

        .faculty-vcard:hover {
            transform: translateY(-5px);
            box-shadow: 0 14px 30px rgba(0, 123, 255, 0.12);
            border-color: #80bdff;
        }

        /* Top Image Banner Container */
        .faculty-vcard-header {
            position: relative;
            background: linear-gradient(180deg, #f1f4f8 0%, #e2e8f0 100%);
            padding-top: 1.5rem;
            text-align: center;
            border-bottom: 1px solid #eef2f7;
        }

        .faculty-avatar-wrap {
            width: 150px;
            height: 150px;
            margin: 0 auto;
            border-radius: 50%;
            overflow: hidden;
            border: 4px solid #ffffff;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.12);
            background: #ffffff;
            position: relative;
        }

        .faculty-avatar-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top center;
            transition: transform 0.35s ease;
        }

        .faculty-vcard:hover .faculty-avatar-wrap img {
            transform: scale(1.05);
        }

        .faculty-role-pill {
            display: inline-block;
            font-size: 0.78rem;
            font-weight: 700;
            padding: 0.25rem 0.85rem;
            border-radius: 50rem;
            margin-top: 0.85rem;
            margin-bottom: -0.75rem;
            position: relative;
            z-index: 2;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        /* Card Content Area */
        .faculty-vcard-body {
            padding: 1.5rem 1.4rem 1.2rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .faculty-name {
            font-size: 1.2rem;
            font-weight: 700;
            color: #212529;
            text-align: center;
            margin-top: 0.4rem;
            margin-bottom: 0.25rem;
            line-height: 1.35;
        }

        .faculty-meta-sub {
            text-align: center;
            font-size: 0.82rem;
            color: #495057;
            margin-bottom: 1.1rem;
        }

        /* Education Mini Timeline */
        .v-edu-box {
            background: #f8fafc;
            border: 1px solid #eef2f7;
            border-radius: 10px;
            padding: 0.85rem 1rem;
            margin-bottom: 1rem;
        }

        .v-edu-title {
            font-size: 0.82rem;
            font-weight: 700;
            color: #343a40;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
        }

        .v-edu-item {
            position: relative;
            padding-left: 1.1rem;
            margin-bottom: 0.4rem;
            font-size: 0.82rem;
            line-height: 1.4;
        }

        .v-edu-item:last-child {
            margin-bottom: 0;
        }

        .v-edu-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0.45rem;
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background-color: #007bff;
        }

        .v-edu-degree {
            font-weight: 700;
            color: #212529;
        }

        .v-edu-inst {
            color: #6c757d;
            font-size: 0.77rem;
        }

        /* Courses Mini Tag List */
        .v-course-box {
            margin-bottom: 1.2rem;
        }

        .v-course-title {
            font-size: 0.82rem;
            font-weight: 700;
            color: #343a40;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
        }

        .v-course-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.3rem;
        }

        .v-course-tag {
            font-size: 0.76rem;
            background-color: #ffffff;
            color: #343a40;
            border: 1px solid #ced4da;
            border-radius: 6px;
            padding: 0.2rem 0.5rem;
            line-height: 1.35;
            transition: all 0.2s ease;
        }

        .v-course-tag:hover {
            border-color: #80bdff;
            background-color: #f0f7ff;
            color: #0056b3;
        }

        /* Card Footer */
        .faculty-vcard-footer {
            margin-top: auto;
            padding-top: 0.85rem;
            border-top: 1px solid #eef2f7;
            font-size: 0.82rem;
        }

        .v-contact-line {
            display: flex;
            align-items: center;
            color: #495057;
            margin-bottom: 0.4rem;
        }

        .v-contact-line a {
            color: #007bff;
            text-decoration: none;
        }

        .v-contact-line a:hover {
            text-decoration: underline;
        }

        .btn-pub-block {
            display: block;
            width: 100%;
            text-align: center;
            font-size: 0.82rem;
            font-weight: 600;
            padding: 0.35rem 0.5rem;
            border-radius: 6px;
            border: 1px solid #b8daff;
            background: #f0f7ff;
            color: #0056b3;
            margin-top: 0.6rem;
            transition: all 0.2s ease;
        }

        .btn-pub-block:hover {
            background: #007bff;
            color: #ffffff !important;
            border-color: #007bff;
            text-decoration: none;
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
                    <li class="breadcrumb-item active" aria-current="page">อาจารย์และบุคลากร</li>
                    <li class="breadcrumb-item active" aria-current="page">อาจารย์ประจำหลักสูตร</li>
                </ol>
            </nav>

            <!-- Page Header -->
            <div class="page-header-modern mb-4">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div>
                        <h1 class="h2 font-weight-bold text-dark mb-1">
                            <i class="fa fa-users text-primary mr-2"></i>คณาจารย์ประจำหลักสูตร (Faculty Members)
                        </h1>
                        <p class="text-dark-gray mb-0">
                            ทำเนียบคณาจารย์ผู้รับผิดชอบหลักสูตรและอาจารย์ประจำหลักสูตรวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์ (มคอ.2 พ.ศ. 2570)
                        </p>
                    </div>
                    <div class="mt-3 mt-lg-0">
                        <a href="support.php" class="btn btn-outline-secondary btn-sm font-weight-bold mr-1">
                            <i class="fa fa-user-circle mr-1"></i> บุคลากรสายสนับสนุน
                        </a>
                        <a href="publication.php" class="btn btn-outline-primary btn-sm font-weight-bold">
                            <i class="fa fa-book mr-1"></i> ผลงานตีพิมพ์ของหลักสูตร
                        </a>
                    </div>
                </div>
            </div>

            <!-- Faculty Stat Highlights -->
            <div class="row mb-4">
                <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="stat-card-faculty shadow-sm">
                        <div class="stat-faculty-icon bg-light text-primary">
                            <i class="fa fa-user-tie"></i>
                        </div>
                        <h2 class="h6 text-dark-gray mb-1">คณาจารย์ทั้งหมด</h2>
                        <div class="h4 font-weight-bold text-primary mb-0"><?php echo $total_teachers; ?> ท่าน</div>
                        <small class="text-muted">ผู้รับผิดชอบ 5 | ประจำ 1 ท่าน</small>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="stat-card-faculty shadow-sm">
                        <div class="stat-faculty-icon bg-light text-success">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <h2 class="h6 text-dark-gray mb-1">วุฒิระดับปริญญาเอก</h2>
                        <div class="h4 font-weight-bold text-success mb-0"><?php echo $phd_count; ?> ท่าน</div>
                        <small class="text-muted">สัดส่วน 50% ของคณาจารย์</small>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="stat-card-faculty shadow-sm">
                        <div class="stat-faculty-icon bg-light text-info">
                            <i class="fa fa-award"></i>
                        </div>
                        <h2 class="h6 text-dark-gray mb-1">ตำแหน่งวิชาการ ผศ.</h2>
                        <div class="h4 font-weight-bold text-info mb-0"><?php echo $asst_prof_count; ?> ท่าน</div>
                        <small class="text-muted">ผู้ช่วยศาสตราจารย์ (33.3%)</small>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="stat-card-faculty shadow-sm">
                        <div class="stat-faculty-icon bg-light text-warning">
                            <i class="fa fa-history"></i>
                        </div>
                        <h2 class="h6 text-dark-gray mb-1">ประสบการณ์สอนเฉลี่ย</h2>
                        <div class="h4 font-weight-bold text-dark mb-0"><?php echo $avg_years; ?> ปี</div>
                        <small class="text-muted">ความเชี่ยวชาญการสอนภาคปฏิบัติ</small>
                    </div>
                </div>
            </div>

            <!-- Role Filter Bar -->
            <div class="faculty-filter-bar d-flex flex-wrap align-items-center justify-content-between">
                <div class="d-flex flex-wrap align-items-center" id="facultyFilters">
                    <span class="text-dark-gray small font-weight-bold mr-3 my-1">
                        <i class="fa fa-filter mr-1"></i> แสดงตามกลุ่ม:
                    </span>
                    <button type="button" class="faculty-filter-btn active" data-filter="all">
                        ทั้งหมด <span class="badge badge-light ml-1"><?php echo $total_teachers; ?></span>
                    </button>
                    <button type="button" class="faculty-filter-btn" data-filter="curriculum">
                        อาจารย์ผู้รับผิดชอบหลักสูตร <span class="badge badge-light ml-1"><?php echo $curriculum_count; ?></span>
                    </button>
                    <button type="button" class="faculty-filter-btn" data-filter="regular">
                        อาจารย์ประจำหลักสูตร <span class="badge badge-light ml-1"><?php echo $regular_count; ?></span>
                    </button>
                </div>
                <div class="text-dark-gray small font-weight-bold my-1">
                    แสดง <span id="facultyMatchCount" class="text-primary font-weight-bold"><?php echo $total_teachers; ?></span> ท่าน
                </div>
            </div>

            <!-- Faculty Grid (Modern Vertical 3-Column Layout: Cards with Top Photo) -->
            <div class="row" id="facultyList">
                <?php foreach ($people as $index => $row): 
                    $role_name = $row["role"] ?? '';
                    $is_curriculum = (strpos($role_name, "ผู้รับผิดชอบ") !== false);
                    $filter_tag = $is_curriculum ? "curriculum" : "regular";
                    
                    if ($is_curriculum) {
                        $badge_class = "badge-primary text-white";
                        $badge_icon = "fa-check-circle";
                    } else {
                        $badge_class = "badge-secondary text-white";
                        $badge_icon = "fa-user-circle";
                    }

                    $raw_edus = explode(" | ", $row["education"] ?? '');
                    $courses = $row["courses"] ?? [];
                    $exp_years = $row["teaching_exp_years"] ?? 0;
                ?>
                    <div class="col-lg-4 col-md-6 mb-4 faculty-card-item" data-role="<?php echo $filter_tag; ?>">
                        <div class="faculty-vcard">
                            
                            <!-- Top Image Banner & Circular Avatar -->
                            <div class="faculty-vcard-header">
                                <div class="faculty-avatar-wrap">
                                    <img src="<?php echo htmlspecialchars($row["image"]); ?>" 
                                         alt="<?php echo htmlspecialchars($row["full_name"]); ?> อาจารย์ประจำหลักสูตรวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์" 
                                         loading="lazy"
                                         onerror="this.onerror=null; this.src='images/person_default.png';">
                                </div>
                                <span class="faculty-role-pill <?php echo $badge_class; ?>">
                                    <i class="fa <?php echo $badge_icon; ?> mr-1"></i> <?php echo htmlspecialchars($role_name); ?>
                                </span>
                            </div>

                            <!-- Card Body Information -->
                            <div class="faculty-vcard-body">
                                
                                <h2 class="faculty-name">
                                    <?php echo htmlspecialchars($row["full_name"]); ?>
                                </h2>

                                <div class="faculty-meta-sub">
                                    <?php if ($exp_years > 0): ?>
                                        <i class="fa fa-clock-o text-primary mr-1"></i> ประสบการณ์สอน <?php echo $exp_years; ?> ปี
                                    <?php endif; ?>
                                </div>

                                <!-- Education Box -->
                                <div class="v-edu-box">
                                    <div class="v-edu-title">
                                        <i class="fa fa-graduation-cap text-primary mr-1"></i> ประวัติการศึกษา
                                    </div>
                                    <?php foreach ($raw_edus as $edu_str): 
                                        $parts = explode(" - ", $edu_str, 2);
                                        $degree = trim($parts[0] ?? $edu_str);
                                        $inst_year = trim($parts[1] ?? '');
                                    ?>
                                        <div class="v-edu-item">
                                            <div class="v-edu-degree"><?php echo htmlspecialchars($degree); ?></div>
                                            <?php if (!empty($inst_year)): ?>
                                                <div class="v-edu-inst"><?php echo htmlspecialchars($inst_year); ?></div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                                <!-- Teaching Courses Box -->
                                <?php if (!empty($courses)): ?>
                                    <div class="v-course-box">
                                        <div class="v-course-title">
                                            <i class="fa fa-book text-info mr-1"></i> รายวิชาที่รับผิดชอบสอน (มคอ.2)
                                        </div>
                                        <div class="v-course-tags">
                                            <?php foreach ($courses as $c_item): ?>
                                                <span class="v-course-tag">
                                                    <?php echo htmlspecialchars($c_item); ?>
                                                </span>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <!-- Footer Contacts & Action Link -->
                                <div class="faculty-vcard-footer">
                                    <div class="v-contact-line">
                                        <i class="fa fa-map-marker text-danger mr-2" style="width: 14px; text-align: center;"></i>
                                        <span><?php echo htmlspecialchars($row["office"]); ?></span>
                                    </div>
                                    <div class="v-contact-line">
                                        <i class="fa fa-envelope text-primary mr-2" style="width: 14px; text-align: center;"></i>
                                        <a href="mailto:<?php echo htmlspecialchars($row["email"]); ?>">
                                            <?php echo htmlspecialchars($row["email"]); ?>
                                        </a>
                                    </div>
                                    <a href="publication.php" class="btn-pub-block" title="ดูผลงานวิจัยตีพิมพ์">
                                        <i class="fa fa-file-text-o mr-1"></i> ดูผลงานตีพิมพ์
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Quick Navigation Footer -->
            <div class="card border shadow-sm my-3" style="border-radius: 14px; border-color: #ced4da !important; background: linear-gradient(135deg, #f8fbff 0%, #ffffff 100%);">
                <div class="card-body p-4 text-center">
                    <h3 class="h5 font-weight-bold text-dark mb-2">สนใจร่วมเป็นส่วนหนึ่งของครอบครัววิทยาการคอมพิวเตอร์?</h3>
                    <p class="text-dark-gray small mb-3">
                        คณาจารย์ทั้ง 6 ท่านพร้อมดูแลและให้คำปรึกษาอย่างใกล้ชิด ทั้งการเรียน การทำโครงงาน และการเตรียมความพร้อมสู่อาชีพยุค AI
                    </p>
                    <a href="structure.php" class="btn btn-outline-primary font-weight-bold mr-2 mb-2">
                        <i class="fa fa-cubes mr-1"></i> ดูโครงสร้างหลักสูตร 2570
                    </a>
                    <a href="course-descriptions.php" class="btn btn-outline-secondary font-weight-bold mr-2 mb-2">
                        <i class="fa fa-book mr-1"></i> คำอธิบายรายวิชา 53 วิชา
                    </a>
                    <a href="tcas.php" class="btn btn-primary font-weight-bold mb-2">
                        <i class="fa fa-user-plus mr-1"></i> สมัครเรียน / รอบ TCAS
                    </a>
                </div>
            </div>

        </div>

        <!-- Schema.org Person & ItemList Structured Data -->
        <?php
        $item_list = [];
        foreach ($people as $index => $row) {
            $item_list[] = [
                "@type" => "ListItem",
                "position" => $index + 1,
                "item" => [
                    "@type" => "Person",
                    "name" => $row["full_name"],
                    "jobTitle" => ($row["academic_position"] ?? 'อาจารย์') . " (" . ($row["role"] ?? '') . ")",
                    "email" => $row["email"] ?? '',
                    "image" => $row["image"] ?? '',
                    "workLocation" => [
                        "@type" => "Place",
                        "name" => $row["office"] ?? ''
                    ],
                    "knowsAbout" => $row["courses"] ?? [],
                    "worksFor" => [
                        "@type" => "CollegeOrUniversity",
                        "name" => "มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์",
                        "url" => "https://cs.vru.ac.th"
                    ]
                ]
            ];
        }
        ?>
        <script type="application/ld+json">
        <?php echo json_encode([
            "@context" => "https://schema.org",
            "@type" => "ItemList",
            "name" => "คณาจารย์ประจำหลักสูตรวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์",
            "itemListElement" => $item_list
        ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
        </script>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>

    <!-- Role Filter JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var filterBtns = document.querySelectorAll('#facultyFilters .faculty-filter-btn');
            var facultyItems = document.querySelectorAll('#facultyList .faculty-card-item');
            var matchCount = document.getElementById('facultyMatchCount');

            filterBtns.forEach(function (btn) {
                btn.addEventListener('click', function () {
                    filterBtns.forEach(function (b) { b.classList.remove('active'); });
                    this.classList.add('active');

                    var filterVal = this.getAttribute('data-filter');
                    var count = 0;

                    facultyItems.forEach(function (item) {
                        var role = item.getAttribute('data-role');
                        if (filterVal === 'all' || role === filterVal) {
                            item.style.display = '';
                            count++;
                        } else {
                            item.style.display = 'none';
                        }
                    });

                    if (matchCount) {
                        matchCount.textContent = count;
                    }
                });
            });
        });
    </script>
</body>

</html>
