<?php
$og_title = "ห้องปฏิบัติการคอมพิวเตอร์ | วิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ (VRU)";
$og_description = "ภาพบรรยากาศและข้อมูลห้องปฏิบัติการคอมพิวเตอร์ อาคาร 75 ปี วไลยอลงกรณ์ สาขาวิชาวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์";
$og_url = "https://cs.vru.ac.th/LAB.php";

// ข้อมูลห้องปฏิบัติการ (สามารถปรับแก้รายละเอียดจำนวนที่นั่งและคำอธิบายได้ที่อาเรย์นี้)
$labs = [
    [
        "code" => "IT501",
        "name" => "ห้องสื่อนิเวศดิจิทัล (Digital Media & Ecosystem Lab)",
        "floor" => "ชั้น 5 อาคาร 75 ปี วไลยอลงกรณ์",
        "capacity" => "40 ที่นั่ง",
        "badge" => "ห้องปฏิบัติการเฉพาะทาง",
        "badge_class" => "badge-primary",
        "description" => "ห้องปฏิบัติการสำหรับการออกแบบสื่อดิจิทัล กราฟิก มัลติมีเดีย การออกแบบ UX/UI และการผลิตสื่อสร้างสรรค์สมัยใหม่ พร้อมอุปกรณ์แสดงผลและระบบเสียงสำหรับการนำเสนอผลงาน",
        "tags" => ["Digital Media", "UX/UI Design", "คอมพิวเตอร์กราฟิก", "Interactive Learning"],
        "images" => [
            ["src" => "images/LAB/IMG_7511.JPG", "alt" => "ห้องปฏิบัติการคอมพิวเตอร์ IT501 ห้องสื่อนิเวศดิจิทัล ภาพที่ 1"],
            ["src" => "images/LAB/IMG_7515.JPG", "alt" => "ห้องปฏิบัติการคอมพิวเตอร์ IT501 ห้องสื่อนิเวศดิจิทัล ภาพที่ 2"]
        ]
    ],
    [
        "code" => "IT304",
        "name" => "ห้องเรียนรู้ด้วยตนเอง (Self-Student Learning Space)",
        "floor" => "ชั้น 3 อาคาร 75 ปี วไลยอลงกรณ์",
        "capacity" => "30 ที่นั่ง",
        "badge" => "พื้นที่การเรียนรู้ (Co-Working)",
        "badge_class" => "badge-success",
        "description" => "พื้นที่สำหรับให้นักศึกษาใช้ค้นคว้าหาข้อมูลด้วยตนเอง ทำงานกลุ่ม ประชุมวางแผนโครงงาน (Senior Project) และฝึกซ้อมการนำเสนอผลงานนอกเวลาเรียน",
        "tags" => ["Self-Study", "Co-Working Space", "Project Discussion", "Free Wi-Fi"],
        "images" => [
            ["src" => "images/LAB/304-1.jpg", "alt" => "ห้องเรียนรู้ด้วยตนเอง IT304 Self-Student ภาพที่ 1"],
            ["src" => "images/LAB/304-2.jpg", "alt" => "ห้องเรียนรู้ด้วยตนเอง IT304 Self-Student ภาพที่ 2"]
        ]
    ],
    [
        "code" => "IT402",
        "name" => "ห้องปฏิบัติการคอมพิวเตอร์ (Programming & Algorithm Lab)",
        "floor" => "ชั้น 4 อาคาร 75 ปี วไลยอลงกรณ์",
        "capacity" => "45 ที่นั่ง",
        "badge" => "ห้องปฏิบัติการคอมพิวเตอร์",
        "badge_class" => "badge-info",
        "description" => "ใช้สำหรับจัดการเรียนการสอนรายวิชาการเขียนโปรแกรมพื้นฐาน โครงสร้างข้อมูลและอัลกอริทึม และการเขียนโปรแกรมเชิงวัตถุ (Python, C, Java) รองรับการฝึกปฏิบัติแบบ 1 คนต่อ 1 เครื่อง",
        "tags" => ["Python / C / Java", "Data Structures", "OOP", "Algorithm"],
        "images" => [
            ["src" => "images/LAB/IMG_7521.JPG", "alt" => "ห้องปฏิบัติการคอมพิวเตอร์ IT402 ภาพที่ 1"],
            ["src" => "images/LAB/IMG_7522.JPG", "alt" => "ห้องปฏิบัติการคอมพิวเตอร์ IT402 ภาพที่ 2"]
        ]
    ],
    [
        "code" => "IT502",
        "name" => "ห้องปฏิบัติการคอมพิวเตอร์ (Web & Full-Stack Development Lab)",
        "floor" => "ชั้น 5 อาคาร 75 ปี วไลยอลงกรณ์",
        "capacity" => "45 ที่นั่ง",
        "badge" => "ห้องปฏิบัติการคอมพิวเตอร์",
        "badge_class" => "badge-info",
        "description" => "ใช้สำหรับการเรียนการสอนด้านการพัฒนาเว็บแอปพลิเคชันทั้งส่วน Frontend และ Backend ระบบจัดการฐานข้อมูล (SQL / NoSQL) และการจำลองแม่ข่ายสำหรับการทดสอบระบบ",
        "tags" => ["Web Development", "Full-Stack", "Database SQL/NoSQL", "Git"],
        "images" => [
            ["src" => "images/LAB/IMG_7516.JPG", "alt" => "ห้องปฏิบัติการคอมพิวเตอร์ IT502 ภาพที่ 1"],
            ["src" => "images/LAB/IMG_7517.JPG", "alt" => "ห้องปฏิบัติการคอมพิวเตอร์ IT502 ภาพที่ 2"]
        ]
    ],
    [
        "code" => "IT601",
        "name" => "ห้องปฏิบัติการคอมพิวเตอร์ (Software Engineering & System Analysis Lab)",
        "floor" => "ชั้น 6 อาคาร 75 ปี วไลยอลงกรณ์",
        "capacity" => "45 ที่นั่ง",
        "badge" => "ห้องปฏิบัติการคอมพิวเตอร์",
        "badge_class" => "badge-info",
        "description" => "รองรับการเรียนการสอนวิชาวิศวกรรมซอฟต์แวร์ การวิเคราะห์และออกแบบระบบสารสนเทศ และการบริหารจัดการโครงการซอฟต์แวร์ด้วยเครื่องมือมาตรฐานอุตสาหกรรม",
        "tags" => ["Software Engineering", "System Analysis", "UML / CASE Tools", "Software Testing"],
        "images" => [
            ["src" => "images/LAB/IMG_7508.JPG", "alt" => "ห้องปฏิบัติการคอมพิวเตอร์ IT601 ภาพที่ 1"],
            ["src" => "images/LAB/IMG_7509.JPG", "alt" => "ห้องปฏิบัติการคอมพิวเตอร์ IT601 ภาพที่ 2"]
        ]
    ],
    [
        "code" => "IT603",
        "name" => "ห้องปฏิบัติการคอมพิวเตอร์ (Mobile Application & IoT Lab)",
        "floor" => "ชั้น 6 อาคาร 75 ปี วไลยอลงกรณ์",
        "capacity" => "40 ที่นั่ง",
        "badge" => "ห้องปฏิบัติการคอมพิวเตอร์",
        "badge_class" => "badge-info",
        "description" => "ใช้สำหรับการฝึกปฏิบัติพัฒนาแอปพลิเคชันบนอุปกรณ์เคลื่อนที่ (Cross-Platform Mobile App) และการเชื่อมต่อระบบสมองกลฝังตัวและอินเทอร์เน็ตในทุกสิ่ง (Internet of Things)",
        "tags" => ["Mobile App", "React Native / Flutter", "IoT", "API Integration"],
        "images" => [
            ["src" => "images/LAB/IMG_7506.JPG", "alt" => "ห้องปฏิบัติการคอมพิวเตอร์ IT603 ภาพที่ 1"],
            ["src" => "images/LAB/IMG_7507.JPG", "alt" => "ห้องปฏิบัติการคอมพิวเตอร์ IT603 ภาพที่ 2"]
        ]
    ],
    [
        "code" => "IT701",
        "name" => "ห้องปฏิบัติการคอมพิวเตอร์ (Network & Cybersecurity Lab)",
        "floor" => "ชั้น 7 อาคาร 75 ปี วไลยอลงกรณ์",
        "capacity" => "45 ที่นั่ง",
        "badge" => "ห้องปฏิบัติการคอมพิวเตอร์",
        "badge_class" => "badge-info",
        "description" => "ใช้สำหรับปฏิบัติการด้านการสื่อสารข้อมูล เครือข่ายคอมพิวเตอร์ การจำลองสถาปัตยกรรมเครือข่าย ระบบปฏิบัติการ และความมั่นคงปลอดภัยทางไซเบอร์",
        "tags" => ["Computer Network", "Cybersecurity", "Linux / OS", "Network Simulation"],
        "images" => [
            ["src" => "images/LAB/IMG_7504.JPG", "alt" => "ห้องปฏิบัติการคอมพิวเตอร์ IT701 ภาพที่ 1"],
            ["src" => "images/LAB/IMG_7505.JPG", "alt" => "ห้องปฏิบัติการคอมพิวเตอร์ IT701 ภาพที่ 2"]
        ]
    ],
    [
        "code" => "IT703",
        "name" => "ห้องปฏิบัติการคอมพิวเตอร์ (Cloud Computing & DevOps Lab)",
        "floor" => "ชั้น 7 อาคาร 75 ปี วไลยอลงกรณ์",
        "capacity" => "45 ที่นั่ง",
        "badge" => "ห้องปฏิบัติการคอมพิวเตอร์",
        "badge_class" => "badge-info",
        "description" => "รองรับการฝึกปฏิบัติการจัดการโครงสร้างพื้นฐานบนระบบคลาวด์ (Cloud Infrastructure) การจำลองสภาพแวดล้อมด้วยคอนเทนเนอร์ (Docker / Kubernetes) และการนำระบบขึ้นใช้งานจริง",
        "tags" => ["Cloud Computing", "Docker / Containers", "DevOps", "Server Deployment"],
        "images" => [
            ["src" => "images/LAB/IMG_7502.JPG", "alt" => "ห้องปฏิบัติการคอมพิวเตอร์ IT703 ภาพที่ 1"],
            ["src" => "images/LAB/IMG_7503.JPG", "alt" => "ห้องปฏิบัติการคอมพิวเตอร์ IT703 ภาพที่ 2"]
        ]
    ],
    [
        "code" => "IT802",
        "name" => "ห้องปฏิบัติการคอมพิวเตอร์ (Data Science & Artificial Intelligence Lab)",
        "floor" => "ชั้น 8 อาคาร 75 ปี วไลยอลงกรณ์",
        "capacity" => "45 ที่นั่ง",
        "badge" => "ห้องปฏิบัติการคอมพิวเตอร์",
        "badge_class" => "badge-info",
        "description" => "ใช้สำหรับการเรียนการสอนด้านวิทยาการข้อมูล (Data Science) การวิเคราะห์ข้อมูลขนาดใหญ่ การเรียนรู้ของเครื่อง (Machine Learning) และปัญญาประดิษฐ์ (AI)",
        "tags" => ["Data Science", "Artificial Intelligence", "Machine Learning", "Data Visualization"],
        "images" => [
            ["src" => "images/LAB/IMG_7499.JPG", "alt" => "ห้องปฏิบัติการคอมพิวเตอร์ IT802 ภาพที่ 1"],
            ["src" => "images/LAB/IMG_7500.JPG", "alt" => "ห้องปฏิบัติการคอมพิวเตอร์ IT802 ภาพที่ 2"]
        ]
    ],
    [
        "code" => "IT803",
        "name" => "ห้องปฏิบัติการคอมพิวเตอร์ (General Computing & Academic Training Lab)",
        "floor" => "ชั้น 8 อาคาร 75 ปี วไลยอลงกรณ์",
        "capacity" => "50 ที่นั่ง",
        "badge" => "ห้องปฏิบัติการและอบรมวิชาการ",
        "badge_class" => "badge-secondary",
        "description" => "ห้องปฏิบัติการคอมพิวเตอร์ขนาดใหญ่สำหรับการเรียนการสอนวิชาเทคโนโลยีดิจิทัล การสอบปฏิบัติด้วยระบบคอมพิวเตอร์ และการจัดโครงการอบรมบริการวิชาการแก่โรงเรียนและชุมชน",
        "tags" => ["Academic Training", "Workshop", "Computer Exam", "Community Service"],
        "images" => [
            ["src" => "images/LAB/IMG_7497.JPG", "alt" => "ห้องปฏิบัติการคอมพิวเตอร์ IT803 ภาพที่ 1"],
            ["src" => "images/LAB/IMG_7498.JPG", "alt" => "ห้องปฏิบัติการคอมพิวเตอร์ IT803 ภาพที่ 2"]
        ]
    ]
];
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

        .lab-stat-box {
            background: linear-gradient(135deg, #ffffff 0%, #f8fbff 100%);
            border: 1px solid #e3eefc;
            border-radius: 12px;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .lab-stat-box:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(0, 123, 255, 0.12);
        }

        .lab-stat-value {
            font-size: 1.65rem;
            font-weight: 700;
            color: #0056b3;
            line-height: 1.2;
        }

        .lab-card {
            border: 1px solid #e9ecef;
            border-radius: 14px;
            overflow: hidden;
            transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
        }

        .lab-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.08) !important;
            border-color: #b8daff;
        }

        .lab-room-code {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: #007bff;
            color: #ffffff;
            font-weight: 700;
            font-size: 1.1rem;
            padding: 0.35rem 0.9rem;
            border-radius: 8px;
            letter-spacing: 0.5px;
        }

        .lab-img-wrapper {
            overflow: hidden;
            border-radius: 10px;
            border: 1px solid #eaeaea;
            background-color: #f8f9fa;
        }

        .lab-img-wrapper img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform 0.35s ease;
        }

        .lab-img-wrapper:hover img {
            transform: scale(1.04);
        }

        .lab-tag {
            display: inline-block;
            font-size: 0.8rem;
            color: #495057;
            background-color: #f1f3f5;
            border: 1px solid #dee2e6;
            padding: 0.2rem 0.65rem;
            border-radius: 2rem;
            margin-right: 0.35rem;
            margin-bottom: 0.35rem;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php include("layouts/navbar.php"); ?>

    <div class="content">
        <div class="container py-5">

            <!-- Page Header -->
            <div class="page-header-modern mb-4" data-aos="fade-up">
                <h1 class="h2 font-weight-bold text-dark mb-1">ห้องปฏิบัติการคอมพิวเตอร์</h1>
                <p class="text-muted mb-0">
                    สิ่งอำนวยความสะดวกและห้องปฏิบัติการคอมพิวเตอร์ อาคาร 75 ปี วไลยอลงกรณ์ คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์
                </p>
            </div>

            <!-- Highlight Stats -->
            <div class="row mb-5" data-aos="fade-up" data-aos-delay="50">
                <div class="col-6 col-md-3 mb-3">
                    <div class="lab-stat-box p-3 text-center h-100">
                        <div class="lab-stat-value">10 ห้อง</div>
                        <div class="small text-muted mt-1">ห้องปฏิบัติการและพื้นที่เรียนรู้</div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <div class="lab-stat-box p-3 text-center h-100">
                        <div class="lab-stat-value">1 : 1</div>
                        <div class="small text-muted mt-1">เครื่องคอมพิวเตอร์ต่อนักศึกษา</div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <div class="lab-stat-box p-3 text-center h-100">
                        <div class="lab-stat-value">ชั้น 3 – 8</div>
                        <div class="small text-muted mt-1">อาคาร 75 ปี วไลยอลงกรณ์</div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <div class="lab-stat-box p-3 text-center h-100">
                        <div class="lab-stat-value">High-Speed</div>
                        <div class="small text-muted mt-1">เครือข่าย LAN & Wi-Fi ทุกห้อง</div>
                    </div>
                </div>
            </div>

            <!-- Lab Cards List -->
            <div class="row">
                <?php foreach ($labs as $lab) { ?>
                    <div class="col-12 mb-4" data-aos="fade-up">
                        <div class="card lab-card shadow-sm">
                            <div class="card-body p-4">
                                <div class="d-flex flex-wrap align-items-center justify-content-between mb-3">
                                    <div class="d-flex align-items-center flex-wrap">
                                        <span class="lab-room-code mr-3 mb-2 mb-sm-0"><?= htmlspecialchars($lab["code"]) ?></span>
                                        <div>
                                            <h2 class="h5 font-weight-bold text-dark mb-1"><?= htmlspecialchars($lab["name"]) ?></h2>
                                            <div class="small text-muted">
                                                <i class="fa fa-building-o text-primary mr-1"></i> <?= htmlspecialchars($lab["floor"]) ?>
                                                <span class="mx-2">|</span>
                                                <i class="fa fa-desktop text-primary mr-1"></i> ความจุประมาณ <?= htmlspecialchars($lab["capacity"]) ?>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="badge <?= htmlspecialchars($lab["badge_class"]) ?> px-3 py-2 mt-2 mt-md-0" style="font-size: 0.85rem; border-radius: 2rem;">
                                        <?= htmlspecialchars($lab["badge"]) ?>
                                    </span>
                                </div>

                                <p class="text-secondary mb-3">
                                    <?= htmlspecialchars($lab["description"]) ?>
                                </p>

                                <div class="mb-3">
                                    <?php foreach ($lab["tags"] as $tag) { ?>
                                        <span class="lab-tag"><i class="fa fa-check-circle text-primary mr-1"></i><?= htmlspecialchars($tag) ?></span>
                                    <?php } ?>
                                </div>

                                <div class="row">
                                    <?php foreach ($lab["images"] as $img) { ?>
                                        <div class="col-md-6 mb-3 mb-md-0">
                                            <div class="lab-img-wrapper">
                                                <img src="<?= htmlspecialchars($img["src"]) ?>" alt="<?= htmlspecialchars($img["alt"]) ?>" loading="lazy">
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>
</body>

</html>
