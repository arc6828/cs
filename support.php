<?php
$og_title = "บุคลากรประจำหลักสูตร | วิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ (VRU)";
$og_description = "รายชื่อและข้อมูลติดต่อบุคลากรสายสนับสนุน นักวิชาการคอมพิวเตอร์ ประจำหลักสูตรวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์";
$og_url = "https://cs.vru.ac.th/support.php";

$support_file = "json/support.json";
$people_obj = json_decode(file_get_contents($support_file), true);
$people = $people_obj["people"] ?? [];
$total_support = count($people);
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

        /* ============================================================
           Support Staff Vertical Cards (Consistent with teacher.php)
           ============================================================ */
        .support-vcard {
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

        .support-vcard:hover {
            transform: translateY(-5px);
            box-shadow: 0 14px 30px rgba(0, 123, 255, 0.12);
            border-color: #80bdff;
        }

        /* Top Banner & Circular Avatar */
        .support-vcard-header {
            position: relative;
            background: linear-gradient(180deg, #f1f4f8 0%, #e2e8f0 100%);
            padding-top: 1.75rem;
            text-align: center;
            border-bottom: 1px solid #eef2f7;
        }

        .support-avatar-wrap {
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

        .support-avatar-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top center;
            transition: transform 0.35s ease;
        }

        .support-vcard:hover .support-avatar-wrap img {
            transform: scale(1.05);
        }

        .support-role-pill {
            display: inline-block;
            font-size: 0.8rem;
            font-weight: 700;
            padding: 0.25rem 0.95rem;
            border-radius: 50rem;
            margin-top: 0.9rem;
            margin-bottom: -0.75rem;
            position: relative;
            z-index: 2;
            background-color: #17a2b8;
            color: #ffffff;
            box-shadow: 0 2px 8px rgba(23, 162, 184, 0.25);
        }

        /* Card Content Area */
        .support-vcard-body {
            padding: 1.6rem 1.5rem 1.4rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .support-name {
            font-size: 1.25rem;
            font-weight: 700;
            color: #212529;
            text-align: center;
            margin-top: 0.4rem;
            margin-bottom: 0.25rem;
            line-height: 1.35;
        }

        .support-meta-sub {
            text-align: center;
            font-size: 0.85rem;
            color: #495057;
            margin-bottom: 1.25rem;
        }

        /* Education Mini Box */
        .support-edu-box {
            background: #f8fafc;
            border: 1px solid #eef2f7;
            border-radius: 10px;
            padding: 0.9rem 1.1rem;
            margin-bottom: 1.25rem;
        }

        .support-edu-title {
            font-size: 0.84rem;
            font-weight: 700;
            color: #343a40;
            margin-bottom: 0.45rem;
            display: flex;
            align-items: center;
        }

        .support-edu-item {
            position: relative;
            padding-left: 1.1rem;
            font-size: 0.84rem;
            line-height: 1.45;
        }

        .support-edu-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0.45rem;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background-color: #17a2b8;
        }

        .support-edu-degree {
            font-weight: 700;
            color: #212529;
        }

        .support-edu-inst {
            color: #6c757d;
            font-size: 0.79rem;
        }

        /* Card Footer Contacts */
        .support-vcard-footer {
            margin-top: auto;
            padding-top: 0.95rem;
            border-top: 1px solid #eef2f7;
            font-size: 0.85rem;
        }

        .support-contact-line {
            display: flex;
            align-items: center;
            color: #495057;
            margin-bottom: 0.45rem;
        }

        .support-contact-line:last-child {
            margin-bottom: 0;
        }

        .support-contact-line a {
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
        }

        .support-contact-line a:hover {
            text-decoration: underline;
        }

        .support-contact-line i {
            width: 18px;
            text-align: center;
            margin-right: 0.5rem;
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
                    <li class="breadcrumb-item active" aria-current="page">บุคลากรประจำหลักสูตร</li>
                </ol>
            </nav>

            <!-- Page Header -->
            <div class="page-header-modern mb-4">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div>
                        <h1 class="h2 font-weight-bold text-dark mb-1">
                            <i class="fa fa-user-circle text-info mr-2"></i>บุคลากรประจำหลักสูตร (Supporting Staff)
                        </h1>
                        <p class="text-dark-gray mb-0">
                            นักวิชาการคอมพิวเตอร์และบุคลากรสายสนับสนุนการเรียนการสอน หลักสูตรวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์
                        </p>
                    </div>
                    <div class="mt-3 mt-lg-0">
                        <a href="teacher.php" class="btn btn-outline-primary btn-sm font-weight-bold mr-1">
                            <i class="fa fa-users mr-1"></i> คณาจารย์ประจำหลักสูตร
                        </a>
                        <a href="staff.php" class="btn btn-outline-secondary btn-sm font-weight-bold">
                            <i class="fa fa-download mr-1"></i> แบบฟอร์มสำหรับบุคลากร
                        </a>
                    </div>
                </div>
            </div>

            <!-- Support Staff Grid (Centered 2-Column Vertical Cards) -->
            <div class="row justify-content-center">
                <?php foreach ($people as $row): 
                    $raw_edu = $row["education"] ?? '';
                    $parts = explode(" - ", $raw_edu, 2);
                    $degree = trim($parts[0] ?? $raw_edu);
                    $inst = trim($parts[1] ?? '');
                ?>
                    <div class="col-lg-5 col-md-6 mb-4">
                        <div class="support-vcard">
                            
                            <!-- Top Banner & Circular Avatar -->
                            <div class="support-vcard-header">
                                <div class="support-avatar-wrap">
                                    <img src="<?php echo htmlspecialchars($row["image"]); ?>" 
                                         alt="<?php echo htmlspecialchars($row["full_name"] ?? $row["name"]); ?> นักวิชาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์" 
                                         loading="lazy"
                                         onerror="this.onerror=null; this.src='images/person_default.png';">
                                </div>
                                <span class="support-role-pill">
                                    <i class="fa fa-id-badge mr-1"></i> <?php echo htmlspecialchars($row["position"] ?? $row["role"]); ?>
                                </span>
                            </div>

                            <!-- Card Body Information -->
                            <div class="support-vcard-body">
                                
                                <h2 class="support-name">
                                    <?php echo htmlspecialchars($row["full_name"] ?? $row["name"]); ?>
                                </h2>

                                <div class="support-meta-sub">
                                    <span class="text-muted">บุคลากรสายสนับสนุน • คณะวิทยาศาสตร์และเทคโนโลยี</span>
                                </div>

                                <!-- Education Box -->
                                <div class="support-edu-box">
                                    <div class="support-edu-title">
                                        <i class="fa fa-graduation-cap text-info mr-1"></i> ประวัติการศึกษา
                                    </div>
                                    <div class="support-edu-item">
                                        <div class="support-edu-degree"><?php echo htmlspecialchars($degree); ?></div>
                                        <?php if (!empty($inst)): ?>
                                            <div class="support-edu-inst"><?php echo htmlspecialchars($inst); ?></div>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <!-- Footer Contacts -->
                                <div class="support-vcard-footer">
                                    <div class="support-contact-line">
                                        <i class="fa fa-map-marker text-danger"></i>
                                        <span><?php echo htmlspecialchars($row["office"]); ?></span>
                                    </div>
                                    <div class="support-contact-line">
                                        <i class="fa fa-envelope text-primary"></i>
                                        <a href="mailto:<?php echo htmlspecialchars($row["email"]); ?>">
                                            <?php echo htmlspecialchars($row["email"]); ?>
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Supporting Facilities & Services Note -->
            <div class="card border shadow-sm my-3" style="border-radius: 14px; border-color: #ced4da !important; background: linear-gradient(135deg, #f8fbff 0%, #ffffff 100%);">
                <div class="card-body p-4 text-center">
                    <h3 class="h5 font-weight-bold text-dark mb-2">บริการสนับสนุนห้องปฏิบัติการและระบบคอมพิวเตอร์</h3>
                    <p class="text-dark-gray small mb-3">
                        บุคลากรสายสนับสนุนประจำหลักสูตรพร้อมให้บริการแก่นักศึกษาและคณาจารย์ ณ อาคาร 75 ปี วไลยอลงกรณ์
                    </p>
                    <a href="lab.php" class="btn btn-outline-info font-weight-bold mr-2 mb-2">
                        <i class="fa fa-desktop mr-1"></i> ดูห้องปฏิบัติการคอมพิวเตอร์
                    </a>
                    <a href="teacher.php" class="btn btn-outline-primary font-weight-bold mr-2 mb-2">
                        <i class="fa fa-users mr-1"></i> ทำเนียบคณาจารย์
                    </a>
                </div>
            </div>

        </div>

        <!-- Schema.org Structured Data -->
        <?php
        $support_item_list = [];
        foreach ($people as $index => $row) {
            $support_item_list[] = [
                "@type" => "ListItem",
                "position" => $index + 1,
                "item" => [
                    "@type" => "Person",
                    "name" => $row["full_name"] ?? $row["name"],
                    "jobTitle" => $row["position"] ?? $row["role"],
                    "email" => $row["email"] ?? '',
                    "image" => $row["image"] ?? '',
                    "workLocation" => [
                        "@type" => "Place",
                        "name" => $row["office"] ?? ''
                    ],
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
            "name" => "บุคลากรสายสนับสนุนหลักสูตรวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์",
            "itemListElement" => $support_item_list
        ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
        </script>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>
</body>

</html>
