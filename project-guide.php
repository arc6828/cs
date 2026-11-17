<?php
/**
 * Senior Project Guide (คู่มือและแบบฟอร์มโครงงานนักศึกษา)
 * หลักสูตรวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์
 * ครอบคลุม: หลักสูตร 2565 เป็นต้นไป (และหลักสูตรปรับปรุง พ.ศ. 2570) & คลังเอกสารหลักสูตร 2560
 */
$og_title = "คู่มือและแบบฟอร์มโครงงานนักศึกษา Project Guide | วิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์";
$og_description = "ศูนย์รวมคู่มือ เทมเพลต และแบบฟอร์มการจัดทำโครงงานวิทยาการคอมพิวเตอร์ 1 และ 2 ตามเกณฑ์หลักสูตร 2565/2570 และคลังแบบฟอร์ม มรภ.วไลยอลงกรณ์ ในพระบรมราชูปถัมภ์";
$og_url = "https://cs.vru.ac.th/project-guide.php";
$og_image = "https://cs.vru.ac.th/images/banner_computer_science.png";

// รายการแบบฟอร์มและเอกสารโครงงานทั้งหมด (18 รายการ)
$projectForms = [
    // 🌟 หลักสูตร 2565 เป็นต้นไป (และหลักสูตร 2570)
    [
        "code" => "Drive",
        "category" => "curr65",
        "cat_label" => "หลักสูตร 65+",
        "badge_class" => "badge-primary",
        "name" => "คู่มือจัดทำเอกสารโครงงานชุมชนด้านวิทยาการคอมพิวเตอร์และแบบประเมินผล",
        "desc" => "คลังเอกสารและแบบประเมินผลบน Google Drive",
        "file" => "https://drive.google.com/drive/folders/1AGHUaS5qpTqASVjpEPEIDzZOrJMzjP8j",
        "ext" => "Drive",
        "is_external" => true
    ],
    [
        "code" => "SCS410",
        "category" => "curr65",
        "cat_label" => "หลักสูตร 65+",
        "badge_class" => "badge-primary",
        "name" => "แบบฟอร์มเรียนเชิญอาจารย์ที่ปรึกษาโครงงาน รายวิชาการพัฒนานวัตกรรมคอมพิวเตอร์และบริการชุมชน",
        "desc" => "แบบฟอร์มขอความอนุเคราะห์อาจารย์ที่ปรึกษา SCS410",
        "file" => "uploads/11-25/Form-SCS410.pdf",
        "ext" => "PDF",
        "is_external" => false
    ],

    // 📚 คู่มือและเทมเพลตทั่วไป (หลักสูตร 2560)
    [
        "code" => "Template",
        "category" => "curr60",
        "cat_label" => "หลักสูตร 60",
        "badge_class" => "badge-secondary",
        "name" => "Template รูปเล่มคู่มือโครงงานด้านวิทยาการคอมพิวเตอร์ (Word จัดหน้าและสารบัญ)",
        "desc" => "ไฟล์เทมเพลต Word ต้นแบบ",
        "file" => "uploads/07-21/Template.zip",
        "ext" => "ZIP",
        "is_external" => false
    ],
    [
        "code" => "Form-01",
        "category" => "curr60",
        "cat_label" => "หลักสูตร 60",
        "badge_class" => "badge-secondary",
        "name" => "คู่มือโครงงานด้านวิทยาการคอมพิวเตอร์ (ฉบับปรับปรุง 2560 พิมพ์ครั้งที่ 1-3)",
        "desc" => "เล่มคู่มือระเบียบปฏิบัติฉบับสมบูรณ์",
        "file" => "uploads/07-21/Form-01.pdf",
        "ext" => "PDF",
        "is_external" => false
    ],
    [
        "code" => "Form-14",
        "category" => "curr60",
        "cat_label" => "หลักสูตร 60",
        "badge_class" => "badge-secondary",
        "name" => "แบบประเมินโครงงานด้านวิทยาการคอมพิวเตอร์ 1",
        "desc" => "ตารางเกณฑ์การให้คะแนนโครงงาน 1",
        "file" => "uploads/07-21/Form-14.xlsx",
        "ext" => "XLSX",
        "is_external" => false
    ],
    [
        "code" => "Form-15",
        "category" => "curr60",
        "cat_label" => "หลักสูตร 60",
        "badge_class" => "badge-secondary",
        "name" => "แบบประเมินโครงงานด้านวิทยาการคอมพิวเตอร์ 2",
        "desc" => "ตารางเกณฑ์การให้คะแนนโครงงาน 2",
        "file" => "uploads/07-21/Form-15.xlsx",
        "ext" => "XLSX",
        "is_external" => false
    ],

    // 💡 แบบฟอร์มโครงงาน 1 (Form-02 ถึง Form-07)
    [
        "code" => "Form-07",
        "category" => "project1",
        "cat_label" => "โครงงาน 1",
        "badge_class" => "badge-info",
        "name" => "แบบฟอร์มเสนอหัวข้อโครงงานด้านวิทยาการคอมพิวเตอร์ 1",
        "desc" => "ยื่นเสนอหัวข้อและขอบเขตโครงงาน 1",
        "file" => "uploads/07-21/Form-07.pdf",
        "ext" => "PDF",
        "is_external" => false
    ],
    [
        "code" => "Form-06",
        "category" => "project1",
        "cat_label" => "โครงงาน 1",
        "badge_class" => "badge-info",
        "name" => "แบบฟอร์มเรียนเชิญอาจารย์ที่ปรึกษาโครงงานด้านวิทยาการคอมพิวเตอร์ 1",
        "desc" => "ขอความอนุเคราะห์เป็นอาจารย์ที่ปรึกษาโครงงาน 1",
        "file" => "uploads/07-21/Form-06.pdf",
        "ext" => "PDF",
        "is_external" => false
    ],
    [
        "code" => "Form-04",
        "category" => "project1",
        "cat_label" => "โครงงาน 1",
        "badge_class" => "badge-info",
        "name" => "แบบฟอร์มพบอาจารย์ที่ปรึกษาโครงงานด้านวิทยาการคอมพิวเตอร์ 1",
        "desc" => "บันทึกการเข้าพบและคำแนะนำของที่ปรึกษาโครงงาน 1",
        "file" => "uploads/07-21/Form-04.pdf",
        "ext" => "PDF",
        "is_external" => false
    ],
    [
        "code" => "Form-05",
        "category" => "project1",
        "cat_label" => "โครงงาน 1",
        "badge_class" => "badge-info",
        "name" => "แบบฟอร์มรายงานติดตามความคืบหน้าโครงงานด้านวิทยาการคอมพิวเตอร์ 1",
        "desc" => "รายงานความก้าวหน้าโครงงาน 1",
        "file" => "uploads/07-21/Form-05.pdf",
        "ext" => "PDF",
        "is_external" => false
    ],
    [
        "code" => "Form-03",
        "category" => "project1",
        "cat_label" => "โครงงาน 1",
        "badge_class" => "badge-info",
        "name" => "แบบฟอร์มขอสอบปลายภาคโครงงานด้านวิทยาการคอมพิวเตอร์ 1",
        "desc" => "ยื่นขอสอบข้อเสนอโครงงานและต้นแบบ",
        "file" => "uploads/07-21/Form-03.pdf",
        "ext" => "PDF",
        "is_external" => false
    ],
    [
        "code" => "Form-02",
        "category" => "project1",
        "cat_label" => "โครงงาน 1",
        "badge_class" => "badge-info",
        "name" => "แบบฟอร์มขอพักการทำโครงงานด้านวิทยาการคอมพิวเตอร์ 1 ชั่วคราว",
        "desc" => "คำร้องกรณีจำเป็นต้องชะลอโครงงาน 1",
        "file" => "uploads/07-21/Form-02.pdf",
        "ext" => "PDF",
        "is_external" => false
    ],

    // 🏆 แบบฟอร์มโครงงาน 2 (Form-08 ถึง Form-13)
    [
        "code" => "Form-13",
        "category" => "project2",
        "cat_label" => "โครงงาน 2",
        "badge_class" => "badge-success",
        "name" => "แบบฟอร์มเรียนเชิญอาจารย์ที่ปรึกษาโครงงานด้านวิทยาการคอมพิวเตอร์ 2",
        "desc" => "เชิญอาจารย์ที่ปรึกษาต่อเนื่องระยะที่ 2",
        "file" => "uploads/07-21/Form-13.pdf",
        "ext" => "PDF",
        "is_external" => false
    ],
    [
        "code" => "Form-08",
        "category" => "project2",
        "cat_label" => "โครงงาน 2",
        "badge_class" => "badge-success",
        "name" => "แบบฟอร์มขอเปลี่ยนหัวข้อโครงงาน - ขอเปลี่ยนอาจารย์ที่ปรึกษาโครงงาน 2",
        "desc" => "คำร้องขอปรับเปลี่ยนขอบเขตหรือที่ปรึกษา",
        "file" => "uploads/07-21/Form-08.pdf",
        "ext" => "PDF",
        "is_external" => false
    ],
    [
        "code" => "Form-11",
        "category" => "project2",
        "cat_label" => "โครงงาน 2",
        "badge_class" => "badge-success",
        "name" => "แบบฟอร์มพบอาจารย์ที่ปรึกษาโครงงานด้านวิทยาการคอมพิวเตอร์ 2",
        "desc" => "บันทึกการเข้าพบและติดตามการพัฒนาระบบโครงงาน 2",
        "file" => "uploads/07-21/Form-11.pdf",
        "ext" => "PDF",
        "is_external" => false
    ],
    [
        "code" => "Form-12",
        "category" => "project2",
        "cat_label" => "โครงงาน 2",
        "badge_class" => "badge-success",
        "name" => "แบบฟอร์มรายงานติดตามความคืบหน้าโครงงานด้านวิทยาการคอมพิวเตอร์ 2",
        "desc" => "รายงานผลการพัฒนาและทดสอบระบบ",
        "file" => "uploads/07-21/Form-12.pdf",
        "ext" => "PDF",
        "is_external" => false
    ],
    [
        "code" => "Form-10",
        "category" => "project2",
        "cat_label" => "โครงงาน 2",
        "badge_class" => "badge-success",
        "name" => "แบบฟอร์มขอสอบปลายภาคโครงงานด้านวิทยาการคอมพิวเตอร์ 2",
        "desc" => "ยื่นขอสอบป้องกันโครงงานฉบับสมบูรณ์",
        "file" => "uploads/07-21/Form-10.pdf",
        "ext" => "PDF",
        "is_external" => false
    ],
    [
        "code" => "Form-09",
        "category" => "project2",
        "cat_label" => "โครงงาน 2",
        "badge_class" => "badge-success",
        "name" => "แบบฟอร์มขอพักการทำโครงงานด้านวิทยาการคอมพิวเตอร์ 2 ชั่วคราว",
        "desc" => "คำร้องกรณีจำเป็นต้องชะลอโครงงาน 2",
        "file" => "uploads/07-21/Form-09.pdf",
        "ext" => "PDF",
        "is_external" => false
    ]
];
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <?php include("layouts/meta.php"); ?>
    <style>
        body, .content {
            color: #212529 !important;
        }

        .project-hero {
            background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%);
            color: #ffffff;
            border-radius: 16px;
            padding: 2.5rem 2rem;
            margin-bottom: 2rem;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.15);
        }

        .project-hero h1 {
            color: #ffffff !important;
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .project-hero p {
            color: #e2e8f0 !important;
            font-size: 1.05rem;
            max-width: 800px;
        }

        .project-card {
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            background: #ffffff;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            height: 100%;
        }

        .section-header {
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 0.65rem;
            margin-bottom: 1.25rem;
        }

        .section-header h2 {
            font-weight: 700;
            color: #1e293b;
            font-size: 1.3rem;
        }

        /* Two-stage roadmap */
        .stage-box {
            border-radius: 10px;
            padding: 1.25rem;
            border: 1px solid #e2e8f0;
            background: #ffffff;
            height: 100%;
        }

        .stage-badge {
            font-size: 0.8rem;
            font-weight: 700;
            padding: 0.3rem 0.65rem;
            border-radius: 6px;
            text-transform: uppercase;
        }

        /* Search Toolbar (Style เหมือน staff-forms.php) */
        .project-search-bar {
            background: #ffffff;
            border: 1px solid #ced4da;
            border-radius: 10px;
            padding: 0.65rem 1rem;
            margin-bottom: 1.25rem;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.03);
        }

        .search-input-wrap {
            position: relative;
        }

        .search-input-wrap i {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
        }

        .search-input-wrap input {
            padding-left: 2.5rem;
            border-radius: 50rem;
            border: 1px solid #ced4da;
            height: 38px;
            font-size: 0.9rem;
        }

        .search-input-wrap input:focus {
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.15);
        }

        /* 1-Line List Group (Style เหมือน staff-forms.php บรรทัดเดียวจบ) */
        .form-list-group {
            background: #ffffff;
            border: 1px solid #ced4da;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.02);
            margin-bottom: 1.5rem;
        }

        .form-row-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0.65rem 1rem;
            border-bottom: 1px solid #edf2f7;
            transition: background-color 0.15s ease;
            text-decoration: none !important;
            color: inherit;
        }

        .form-row-item:last-child {
            border-bottom: none;
        }

        .form-row-item:hover {
            background-color: #f8fbff;
        }

        .form-row-left {
            display: flex;
            align-items: center;
            flex-grow: 1;
            min-width: 0;
            padding-right: 1rem;
        }

        .form-row-code {
            font-size: 0.78rem;
            font-weight: 700;
            color: #495057;
            background: #eef2f7;
            border: 1px solid #dee2e6;
            padding: 0.15rem 0.55rem;
            border-radius: 4px;
            margin-right: 0.5rem;
            white-space: nowrap;
            min-width: 65px;
            text-align: center;
        }

        .form-row-category-badge {
            font-size: 0.72rem;
            font-weight: 600;
            padding: 0.15rem 0.5rem;
            border-radius: 4px;
            margin-right: 0.75rem;
            white-space: nowrap;
        }

        .form-row-name {
            font-size: 0.92rem;
            font-weight: 500;
            color: #212529;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .form-row-item:hover .form-row-name {
            color: #007bff;
        }

        .form-row-right {
            display: flex;
            align-items: center;
            flex-shrink: 0;
        }

        .badge-ext {
            font-size: 0.75rem;
            font-weight: 700;
            padding: 0.2rem 0.55rem;
            border-radius: 4px;
            margin-right: 0.75rem;
            min-width: 48px;
            text-align: center;
        }

        .badge-pdf { background-color: #fee2e2; color: #dc2626; border: 1px solid #fca5a5; }
        .badge-zip { background-color: #fef3c7; color: #d97706; border: 1px solid #fde68a; }
        .badge-xlsx { background-color: #dcfce7; color: #16a34a; border: 1px solid #86efac; }
        .badge-drive { background-color: #e0f2fe; color: #0284c7; border: 1px solid #7dd3fc; }

        .btn-download-action {
            font-size: 0.8rem;
            padding: 0.2rem 0.65rem;
            border-radius: 4px;
            white-space: nowrap;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php include("layouts/navbar.php"); ?>

    <div class="content">
        <div class="container py-4">

            <!-- Breadcrumb Navigation -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent p-0 mb-3" style="font-size: 0.9rem;">
                    <li class="breadcrumb-item"><a href="index.php" class="text-primary">หน้าหลัก</a></li>
                    <li class="breadcrumb-item"><a href="student-guide.php" class="text-secondary">นักศึกษา</a></li>
                    <li class="breadcrumb-item active text-dark font-weight-bold" aria-current="page">คู่มือโครงงานนักศึกษา (Project Guide)</li>
                </ol>
            </nav>

            <!-- Hero Section -->
            <div class="project-hero">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <span class="badge badge-warning text-dark font-weight-bold px-3 py-1 mb-2">Senior Project Resource Center</span>
                        <h1 class="h2 mb-2">คู่มือและแบบฟอร์มโครงงานนักศึกษา</h1>
                        <p class="mb-0">
                            ศูนย์รวมเอกสารคู่มือจัดทำโครงงาน เทมเพลตรูปเล่มรายงาน และแบบฟอร์มขออนุมัติทุกขั้นตอน 
                            สำหรับโครงงานวิทยาการคอมพิวเตอร์ 1 และโครงงานวิทยาการคอมพิวเตอร์ 2 
                            หลักสูตรวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ ในพระบรมราชูปถัมภ์
                        </p>
                    </div>
                    <div class="col-lg-4 text-center d-none d-lg-block">
                        <i class="fa fa-code-fork" style="font-size: 6rem; opacity: 0.2; color: #ffffff;"></i>
                    </div>
                </div>
            </div>

            <!-- Two-Stage Process Roadmap (Compact) -->
            <div class="mb-4">
                <div class="section-header d-flex justify-content-between align-items-center">
                    <h2><i class="fa fa-sitemap text-primary mr-2"></i>ขั้นตอนการดำเนินโครงงาน 2 ระยะ (Two-Stage Process)</h2>
                    <span class="badge badge-light border">ตามเกณฑ์ มคอ.2 พ.ศ. 2570</span>
                </div>
                
                <div class="row">
                    <!-- Stage 1 -->
                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <div class="stage-box shadow-sm" style="border-top: 3px solid #0284c7;">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="stage-badge bg-info text-white">ระยะที่ 1 (ปี 3 เทอม 2) &bull; 3 นก.</span>
                                <span class="badge badge-light border font-weight-bold">65SCS216</span>
                            </div>
                            <h3 class="h6 font-weight-bold text-dark mb-2">
                                การวิเคราะห์ปัญหาและออกแบบโครงงานคอมพิวเตอร์
                            </h3>
                            <div class="small text-secondary" style="line-height: 1.7;">
                                รวมกลุ่ม 2–3 คน &bull; ยื่นเสนอหัวข้อและอาจารย์ที่ปรึกษา &bull; วิเคราะห์ความต้องการและออกแบบระบบ &bull; สร้างต้นแบบชิ้นงาน (Working Prototype) &bull; สอบ Proposal
                            </div>
                        </div>
                    </div>

                    <!-- Stage 2 -->
                    <div class="col-lg-6">
                        <div class="stage-box shadow-sm" style="border-top: 3px solid #16a34a;">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="stage-badge bg-success text-white">ระยะที่ 2 (ปี 4 เทอม 1) &bull; 3 นก.</span>
                                <span class="badge badge-light border font-weight-bold">65SCS217</span>
                            </div>
                            <h3 class="h6 font-weight-bold text-dark mb-2">
                                การพัฒนาระบบและนวัตกรรมด้านวิทยาการคอมพิวเตอร์
                            </h3>
                            <div class="small text-secondary" style="line-height: 1.7;">
                                พัฒนาระบบฉบับสมบูรณ์ (Full Implementation) &bull; ทดสอบระบบ (Software Testing) &bull; จัดทำรูปเล่มรายงานคู่มือ &bull; สอบป้องกันโครงงานและสาธิตโปรแกรม (Final Defense)
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Documents & Forms (1-Line Compact List เหมือน staff-forms.php ไม่ใช้ Tab) -->
            <div class="mb-4">
                <div class="section-header d-flex flex-wrap justify-content-between align-items-center">
                    <div>
                        <h2 class="h5 font-weight-bold mb-1">
                            <i class="fa fa-folder-open text-primary mr-2"></i>แบบฟอร์มและเอกสารดาวน์โหลด (Forms & Downloads)
                        </h2>
                        <div class="small text-muted">คลิกรายการเพื่อดาวน์โหลด หรือพิมพ์ค้นหาตามรหัส/ชื่อแบบฟอร์ม</div>
                    </div>
                    <div class="mt-2 mt-md-0">
                        <span class="badge badge-light border font-weight-bold">
                            รวม <?php echo count($projectForms); ?> รายการ
                        </span>
                    </div>
                </div>

                <!-- Search Toolbar -->
                <div class="project-search-bar">
                    <div class="row align-items-center">
                        <div class="col-md-8 col-lg-6">
                            <div class="search-input-wrap">
                                <i class="fa fa-search"></i>
                                <input type="text" id="projectSearch" class="form-control" placeholder="พิมพ์ค้นหาแบบฟอร์ม เช่น SCS410, Template, เสนอหัวข้อ, ขอสอบ, Form-01..." autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-6 text-md-right mt-2 mt-md-0">
                            <span class="small text-muted font-weight-bold" id="formCounter">แสดง <?php echo count($projectForms); ?> จาก <?php echo count($projectForms); ?> รายการ</span>
                        </div>
                    </div>
                </div>

                <!-- Box 1: หลักสูตร 2565 เป็นต้นไป (และหลักสูตร 2570) -->
                <div class="card mb-4 shadow-sm border" id="boxCurr65">
                    <div class="card-header bg-white py-2 px-3 border-bottom d-flex justify-content-between align-items-center">
                        <h3 class="h6 font-weight-bold text-dark mb-0">
                            <i class="fa fa-star text-warning mr-2"></i>หลักสูตร 2565 เป็นต้นไป (และหลักสูตรปรับปรุง พ.ศ. 2570)
                        </h3>
                        <span class="badge badge-primary px-2 py-1 font-weight-bold">2 รายการ</span>
                    </div>
                    <div class="card-body p-0">
                        <div class="form-list-group border-0 rounded-0 mb-0">
                            <?php 
                            $forms65 = array_filter($projectForms, function($f) { return $f['category'] === 'curr65'; });
                            foreach ($forms65 as $idx => $f): 
                            ?>
                                <a href="<?php echo htmlspecialchars($f['file']); ?>" 
                                   <?php echo $f['is_external'] ? 'target="_blank" rel="noopener"' : 'target="_blank" download'; ?> 
                                   class="form-row-item project-form-row" 
                                   data-box="curr65"
                                   data-code="<?php echo strtolower($f['code']); ?>"
                                   data-name="<?php echo strtolower($f['name']); ?>"
                                   title="<?php echo htmlspecialchars($f['name']); ?>">
                                    
                                    <div class="form-row-left">
                                        <span class="form-row-code"><?php echo $f['code']; ?></span>
                                        <span class="badge form-row-category-badge <?php echo $f['badge_class']; ?>">
                                            <?php echo $f['cat_label']; ?>
                                        </span>
                                        <span class="form-row-name">
                                            <?php echo $f['name']; ?>
                                        </span>
                                    </div>

                                    <div class="form-row-right">
                                        <?php
                                        $ext = strtoupper($f['ext']);
                                        $extClass = ($ext === 'DRIVE') ? 'badge-drive' : 'badge-pdf';
                                        ?>
                                        <span class="badge-ext <?php echo $extClass; ?>"><?php echo $ext; ?></span>
                                        <?php if ($f['is_external']): ?>
                                            <span class="btn btn-outline-primary btn-sm btn-download-action">
                                                เปิด Drive <i class="fa fa-external-link ml-1"></i>
                                            </span>
                                        <?php else: ?>
                                            <span class="btn btn-outline-secondary btn-sm btn-download-action">
                                                <i class="fa fa-download"></i> ดาวน์โหลด
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- Box 2: คลังแบบฟอร์มและเทมเพลต (หลักสูตร 2560) -->
                <div class="card mb-4 shadow-sm border" id="boxCurr60">
                    <div class="card-header bg-white py-2 px-3 border-bottom d-flex justify-content-between align-items-center">
                        <h3 class="h6 font-weight-bold text-dark mb-0">
                            <i class="fa fa-archive text-secondary mr-2"></i>คลังแบบฟอร์มและเทมเพลต (หลักสูตร 2560)
                        </h3>
                        <span class="badge badge-secondary px-2 py-1 font-weight-bold">16 รายการ</span>
                    </div>
                    <div class="card-body p-0">
                        <div class="form-list-group border-0 rounded-0 mb-0">
                            <?php 
                            $forms60 = array_filter($projectForms, function($f) { return $f['category'] !== 'curr65'; });
                            foreach ($forms60 as $idx => $f): 
                            ?>
                                <a href="<?php echo htmlspecialchars($f['file']); ?>" 
                                   <?php echo $f['is_external'] ? 'target="_blank" rel="noopener"' : 'target="_blank" download'; ?> 
                                   class="form-row-item project-form-row" 
                                   data-box="curr60"
                                   data-code="<?php echo strtolower($f['code']); ?>"
                                   data-name="<?php echo strtolower($f['name']); ?>"
                                   title="<?php echo htmlspecialchars($f['name']); ?>">
                                    
                                    <div class="form-row-left">
                                        <span class="form-row-code"><?php echo $f['code']; ?></span>
                                        <span class="badge form-row-category-badge <?php echo $f['badge_class']; ?>">
                                            <?php echo $f['cat_label']; ?>
                                        </span>
                                        <span class="form-row-name">
                                            <?php echo $f['name']; ?>
                                        </span>
                                    </div>

                                    <div class="form-row-right">
                                        <?php
                                        $ext = strtoupper($f['ext']);
                                        $extClass = 'badge-pdf';
                                        if ($ext === 'ZIP') $extClass = 'badge-zip';
                                        elseif ($ext === 'XLSX') $extClass = 'badge-xlsx';
                                        ?>
                                        <span class="badge-ext <?php echo $extClass; ?>"><?php echo $ext; ?></span>
                                        <span class="btn btn-outline-secondary btn-sm btn-download-action">
                                            <i class="fa fa-download"></i> ดาวน์โหลด
                                        </span>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- Empty Search Result Alert -->
                <div id="noResultsAlert" class="alert alert-light border text-center py-4" style="display: none;">
                    <i class="fa fa-search-minus fa-2x text-muted mb-2"></i>
                    <p class="mb-0 text-secondary">ไม่พบแบบฟอร์มที่ตรงกับคำค้นหา กรุณาลองค้นหาด้วยคำอื่น</p>
                </div>
            </div>

            <!-- FAQ & Quick Links Row -->
            <div class="row">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="project-card p-4">
                        <div class="section-header d-flex justify-content-between align-items-center mb-3">
                            <h2 class="h6 font-weight-bold mb-0">
                                <i class="fa fa-question-circle text-primary mr-2"></i>คำถามที่พบบ่อย (FAQ & Guidelines)
                            </h2>
                            <span class="badge badge-light border">Tips</span>
                        </div>
                        
                        <div class="mb-2 pb-2 border-bottom">
                            <div class="font-weight-bold text-dark" style="font-size: 0.95rem;">Q: โครงงานวิทยาการคอมพิวเตอร์สามารถทำคนเดียวได้หรือไม่?</div>
                            <div class="small text-secondary mt-1">
                                A: ตามเกณฑ์หลักสูตรกำหนดให้รวมกลุ่มจำนวน <strong>2–3 คนต่อกลุ่ม</strong> เพื่อส่งเสริมทักษะการทำงานร่วมกันเป็นทีม (Team Collaboration)
                            </div>
                        </div>

                        <div class="mb-2 pb-2 border-bottom">
                            <div class="font-weight-bold text-dark" style="font-size: 0.95rem;">Q: ลำดับการลงทะเบียนโครงงาน 1 และ 2 เป็นอย่างไร?</div>
                            <div class="small text-secondary mt-1">
                                A: ต้องลงทะเบียน `65SCS216` ในเทอม 3/2 และต้องสอบผ่านข้อเสนอโครงงานจึงจะมีสิทธิ์ลงทะเบียน `65SCS217` ในเทอม 4/1
                            </div>
                        </div>

                        <div>
                            <div class="font-weight-bold text-dark" style="font-size: 0.95rem;">Q: มีเครื่องมือช่วยตรวจการคัดลอกวรรณกรรม (Plagiarism) หรือไม่?</div>
                            <div class="small text-secondary mt-1">
                                A: สามารถติดต่อขอตรวจ Turnitin หรือ อักขราวิสุทธิ์ ผ่านสำนักวิทยบริการและเทคโนโลยีสารสนเทศ (หอสมุด VRU) ก่อนส่งรูปเล่มฉบับสมบูรณ์
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Quick Links -->
                <div class="col-lg-4">
                    <div class="project-card p-4">
                        <div class="section-header mb-3">
                            <h2 class="h6 font-weight-bold mb-0">
                                <i class="fa fa-external-link text-info mr-2"></i>ลิงก์ที่เกี่ยวข้อง
                            </h2>
                        </div>
                        <ul class="list-unstyled mb-3" style="line-height: 2; font-size: 0.92rem;">
                            <li>
                                <a href="publication-new.php" class="text-primary font-weight-bold">
                                    <i class="fa fa-book text-muted mr-1"></i> คลังผลงานวิจัยของหลักสูตร
                                </a>
                            </li>
                            <li>
                                <a href="student-guide.php" class="text-dark">
                                    <i class="fa fa-graduation-cap text-muted mr-1"></i> แผนการศึกษา 4 ปี (124 นก.)
                                </a>
                            </li>
                            <li>
                                <a href="teacher.php" class="text-dark">
                                    <i class="fa fa-users text-muted mr-1"></i> ทำเนียบคณาจารย์ที่ปรึกษา
                                </a>
                            </li>
                            <li>
                                <a href="https://library.vru.ac.th/" target="_blank" rel="noopener" class="text-dark">
                                    <i class="fa fa-university text-muted mr-1"></i> ฐานข้อมูลวิทยานิพนธ์ VRU Library
                                </a>
                            </li>
                        </ul>

                        <div class="p-3 bg-light rounded border text-center">
                            <small class="d-block font-weight-bold text-dark mb-1">ติดต่อสอบถามเรื่องโครงงาน</small>
                            <span class="small text-muted d-block mb-2">ห้องพักสาขาวิชา IT201 ชั้น 2 อาคาร 75 ปี</span>
                            <a href="https://m.me/computersciencevru" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm btn-block">
                                <i class="fa fa-comments mr-1"></i> ส่งข้อความผ่าน Facebook
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>

    <!-- Client-side Instant Search Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const searchInput = document.getElementById("projectSearch");
            const formRows = document.querySelectorAll(".project-form-row");
            const box65 = document.getElementById("boxCurr65");
            const box60 = document.getElementById("boxCurr60");
            const noResultsAlert = document.getElementById("noResultsAlert");
            const formCounter = document.getElementById("formCounter");

            searchInput.addEventListener("input", function(e) {
                const term = e.target.value.trim().toLowerCase();
                let visibleCount = 0;
                let visible65 = 0;
                let visible60 = 0;

                formRows.forEach(function(row) {
                    const rowBox = row.getAttribute("data-box");
                    const rowCode = row.getAttribute("data-code") || "";
                    const rowName = row.getAttribute("data-name") || "";

                    if (term === "" || rowCode.includes(term) || rowName.includes(term)) {
                        row.style.display = "flex";
                        visibleCount++;
                        if (rowBox === "curr65") visible65++;
                        else visible60++;
                    } else {
                        row.style.display = "none";
                    }
                });

                if (box65) box65.style.display = (visible65 > 0) ? "block" : "none";
                if (box60) box60.style.display = (visible60 > 0) ? "block" : "none";
                if (noResultsAlert) noResultsAlert.style.display = (visibleCount === 0) ? "block" : "none";
                if (formCounter) formCounter.textContent = `แสดง ${visibleCount} จาก ${formRows.length} รายการ`;
            });
        });
    </script>
</body>

</html>
