<?php
$yearNow = (int) date('Y');   // ค.ศ. ปัจจุบัน เช่น 2026
$monthNow = (int) date('n');  // เดือน 1-12

// ถ้าเดือนกรกฎาคมขึ้นไป (7-12) จะเป็นการเตรียมรับสมัครของปีการศึกษาถัดไป
$academicYear = ($monthNow >= 7)
    ? $yearNow + 1 + 543
    : $yearNow + 0 + 543;

$og_url = "https://cs.vru.ac.th/admission.php";
$og_type = "article";
$og_title = "รับสมัครนักศึกษาใหม่ ปริญญาตรี ปีการศึกษา {$academicYear} | วิทยาการคอมพิวเตอร์ VRU";
$og_description = "หลักสูตรวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์ รับสมัครนักศึกษาปริญญาตรี (จันทร์-ศุกร์ และ เสาร์-อาทิตย์) วุฒิ ม.6 ทุกสายการเรียน, ปวช., ปวส. เทียบโอนเรียน 2 ปี ไม่ต้องใช้คะแนน TCAS สมัครออนไลน์ได้ทันที";
$og_image = "https://cs.vru.ac.th/images/tcas/pr-2026-09-19.jpg";
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <?php include("layouts/meta.php"); ?>
    <style>
        /* High contrast typography - Dark Charcoal for readability */
        body, .content {
            color: #212529 !important;
            font-family: 'Sarabun', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }

        .text-muted {
            color: #343a40 !important; /* ปรับจากสีเทาอ่อน #6c757d เป็นสีเทาเข้มคมชัด #343a40 */
        }

        .text-secondary {
            color: #343a40 !important;
        }

        .text-dark-gray {
            color: #212529 !important;
        }

        .small.text-muted, p.text-muted, div.text-muted, span.text-muted, ul.text-muted {
            color: #343a40 !important;
        }

        p, li, td, th {
            color: #212529;
        }

        .page-header-modern {
            border-left: 5px solid #007bff;
            padding-left: 1.25rem;
            margin-bottom: 1.5rem;
        }

        /* Banner & Card Highlights */
        .admission-hero-card {
            background: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.2s ease;
        }

        .feature-card {
            background: #ffffff;
            border: 1px solid #e9ecef;
            border-radius: 10px;
            padding: 1.5rem;
            height: 100%;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }

        .feature-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
            border-color: #007bff;
        }

        .feature-icon-circle {
            width: 54px;
            height: 54px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 1rem;
        }

        .program-type-card {
            border: 2px solid #e9ecef;
            border-radius: 12px;
            background: #ffffff;
            padding: 1.75rem;
            height: 100%;
            transition: all 0.2s ease;
        }

        .program-type-card.active-primary {
            border-color: #007bff;
            background: #fdfefe;
        }

        .program-type-card.active-success {
            border-color: #28a745;
            background: #fdfefe;
        }

        .career-badge-item {
            background: #f8f9fa;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 1rem;
            margin-bottom: 0.75rem;
            transition: all 0.15s ease;
        }

        .career-badge-item:hover {
            background: #ffffff;
            border-color: #007bff;
            box-shadow: 0 3px 10px rgba(0,123,255,0.08);
        }

        .step-bubble {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #007bff;
            color: #ffffff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.1rem;
            margin-right: 0.75rem;
            flex-shrink: 0;
        }

        .table-fee th, .table-fee td {
            vertical-align: middle !important;
        }

        /* 4-Year Study Plan Cards */
        .year-card {
            background: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 12px;
            overflow: hidden;
            height: 100%;
            box-shadow: 0 3px 12px rgba(0,0,0,0.04);
            transition: all 0.2s ease;
        }

        .year-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(0,0,0,0.08);
            border-color: #007bff;
        }

        .year-card-header {
            padding: 1.1rem 1.25rem;
            color: #ffffff;
        }

        .course-chip {
            display: inline-block;
            background: #f1f3f5;
            color: #212529;
            padding: 0.2rem 0.55rem;
            border-radius: 6px;
            font-size: 0.82rem;
            margin: 0.2rem 0.2rem 0.2rem 0;
            border: 1px solid #dee2e6;
            font-weight: 500;
        }

        /* Beautiful Fee Cards */
        .fee-plan-card {
            background: #ffffff;
            border: 2px solid #dee2e6;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 4px 16px rgba(0,0,0,0.05);
            transition: all 0.2s ease;
            height: 100%;
        }

        .fee-plan-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 28px rgba(0,0,0,0.09);
        }

        .fee-plan-card.plan-primary {
            border-color: #007bff;
        }

        .fee-plan-card.plan-success {
            border-color: #28a745;
        }

        .fee-header-primary {
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            color: #ffffff;
            padding: 1.5rem;
            text-align: center;
        }

        .fee-header-success {
            background: linear-gradient(135deg, #28a745 0%, #1e7e34 100%);
            color: #ffffff;
            padding: 1.5rem;
            text-align: center;
        }

        .fee-price-large {
            font-size: 2.3rem;
            font-weight: 800;
            line-height: 1;
        }

        .fee-detail-row {
            padding: 0.75rem 1.25rem;
            border-bottom: 1px solid #e9ecef;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.95rem;
        }

        .fee-detail-row:last-child {
            border-bottom: none;
        }

        /* Responsive typography */
        @media (max-width: 768px) {
            .page-header-modern {
                padding-left: 0.75rem;
            }
        }
    </style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php include("layouts/navbar.php"); ?>

    <div class="content">

        <!-- Breadcrumb & Top Bar -->
        <div class="container pt-4 pb-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent p-0 mb-3" style="font-size: 0.95rem;">
                    <li class="breadcrumb-item"><a href="index.php" class="text-primary"><i class="fa fa-home"></i> หน้าแรก</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-secondary">นักศึกษา</a></li>
                    <li class="breadcrumb-item active text-dark font-weight-bold" aria-current="page">รับสมัครนักศึกษาใหม่</li>
                </ol>
            </nav>

            <div class="page-header-modern d-flex flex-wrap align-items-center justify-content-between">
                <div>
                    <h1 class="h2 font-weight-bold text-dark mb-1">
                        <i class="fa fa-graduation-cap text-primary mr-2"></i>รับสมัครนักศึกษาใหม่ ปีการศึกษา <?= $academicYear ?>
                    </h1>
                    <p class="text-muted mb-0" style="font-size: 1.05rem;">
                        หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์ (วท.บ.) มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์
                    </p>
                </div>
                <div class="mt-3 mt-md-0">
                    <a href="http://ent.vru.ac.th/" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-lg shadow-sm font-weight-bold">
                        <i class="fa fa-external-link mr-1"></i> สมัครเรียนออนไลน์ (ent.vru.ac.th)
                    </a>
                </div>
            </div>
        </div>

        <!-- Hero Notice Alert & Banner -->
        <div class="container mb-4">
            <div class="alert alert-primary border-primary shadow-sm p-3 mb-4" role="alert" style="border-radius: 10px; background-color: #ebf5ff;">
                <div class="d-flex align-items-center flex-wrap">
                    <div class="mr-3 text-primary" style="font-size: 1.8rem;">
                        <i class="fa fa-bullhorn"></i>
                    </div>
                    <div style="flex: 1; min-width: 250px;">
                        <h2 class="h6 font-weight-bold text-dark mb-1">
                            รับตรงผ่านระบบมหาวิทยาลัยตลอดทั้งปี (ไม่เข้าระบบ TCAS)
                        </h2>
                        <div class="text-dark small">
                            เปิดรับผู้สำเร็จการศึกษา <strong>ม.6 (ทุกแผนการเรียน), ปวช. (ทุกสาขา), ปวส. (เทียบโอนเรียนต่อ 2 ปี)</strong> และปริญญาตรีใบที่ 2 ทั้ง <strong>ภาคปกติ (จันทร์ - ศุกร์)</strong> และ <strong>ภาคพิเศษ (เสาร์ - อาทิตย์)</strong>
                        </div>
                    </div>
                    <div class="mt-2 mt-md-0 ml-md-3">
                        <a href="tel:029091432,14" class="btn btn-outline-primary btn-sm font-weight-bold">
                            <i class="fa fa-phone mr-1"></i> โทร. 02-909-1432 ต่อ 14
                        </a>
                    </div>
                </div>
            </div>

            <!-- Banner Visual Card -->
            <div class="admission-hero-card mb-4">
                <div class="row no-gutters">
                    <div class="col-lg-7 text-center bg-dark">
                        <img src="images/tcas/pr-2026-09-19.jpg" 
                             alt="โปสเตอร์รับสมัครนักศึกษาใหม่ หลักสูตรวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ฯ" 
                             class="img-fluid" 
                             style="max-height: 520px; object-fit: contain; width: 100%;"
                             onerror="this.onerror=null; this.src='images/tcas/pr-2020-05-14.jpg';">
                    </div>
                    <div class="col-lg-5 p-4 d-flex flex-column justify-content-between" style="background: #fafbfc;">
                        <div>
                            <span class="badge badge-primary px-3 py-2 font-weight-bold mb-3" style="font-size: 0.9rem;">
                                <i class="fa fa-check-circle mr-1"></i> หลักสูตรปรับปรุง พ.ศ. 2570
                            </span>
                            <h2 class="h4 font-weight-bold text-dark mb-3">
                                ก้าวสู่นักพัฒนามืออาชีพ และวิศวกรปัญญาประดิษฐ์ (AI)
                            </h2>
                            <p class="text-muted" style="line-height: 1.7;">
                                เรียนรู้เทคโนโลยีที่ตลาดงานต้องการจริง: Full-Stack Web & Mobile Development, AI & Machine Learning, Data Analytics, Cloud Computing และ Cybersecurity พร้อมเครือข่ายสหกิจศึกษาที่สร้างโอกาสได้งานทำ 100%
                            </p>

                            <ul class="list-unstyled mb-4" style="line-height: 2;">
                                <li><i class="fa fa-check text-success mr-2 font-weight-bold"></i> <strong>ไม่ต้องใช้คะแนน TGAT / TPAT / A-Level</strong></li>
                                <li><i class="fa fa-check text-success mr-2 font-weight-bold"></i> <strong>มีค่ายปรับพื้นฐาน Coding ฟรี</strong> ก่อนเปิดเทอม</li>
                                <li><i class="fa fa-check text-success mr-2 font-weight-bold"></i> <strong>ผ่อนชำระค่าเล่าเรียนได้</strong> และกู้ยืม กยศ. / กรอ. ได้</li>
                                <li><i class="fa fa-check text-success mr-2 font-weight-bold"></i> <strong>ร่วมมือกับสมาคมโปรแกรมเมอร์ไทย</strong> และพันธมิตรไอที</li>
                            </ul>
                        </div>

                        <div>
                            <a href="http://ent.vru.ac.th/" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-block py-2 font-weight-bold shadow-sm mb-2">
                                <i class="fa fa-pencil-square-o mr-1"></i> สมัครเรียนผ่าน ent.vru.ac.th
                            </a>
                            <a href="#qr-code" class="btn btn-success btn-block py-2 font-weight-bold mb-2 text-white" style="background-color: #06c755; border-color: #06c755;">
                                <i class="fa fa-comments mr-1"></i> เข้า Line กลุ่มผู้สมัคร ปี 70 (CS-VRU#70)
                            </a>
                            <a href="#fee" class="btn btn-outline-secondary btn-block py-2 font-weight-bold">
                                <i class="fa fa-calculator mr-1"></i> ดูอัตราค่าเล่าเรียนและค่าธรรมเนียม
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4 จุดเด่นสำคัญของหลักสูตร (Key Highlights) -->
        <div class="container-fluid py-5 bg-light">
            <div class="container">
                <div class="text-center mb-5">
                    <span class="badge badge-primary px-3 py-1 font-weight-bold text-uppercase mb-2">Highlights</span>
                    <h2 class="h3 font-weight-bold text-dark">ทำไมต้องเลือกเรียนวิทยาการคอมพิวเตอร์ ที่วไลยอลงกรณ์?</h2>
                    <p class="text-muted">ความพร้อมทางวิชาการและสภาพแวดล้อมที่ส่งเสริมการเรียนรู้จริง</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="feature-card">
                            <div class="feature-icon-circle bg-primary text-white">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <h3 class="h5 font-weight-bold text-dark">หลักสูตร 124 นก. ทันสมัย</h3>
                            <p class="text-muted small mb-0">
                                อัปเดตรายวิชาสอดรับตลาดงานยุค AI เน้นปฏิบัติการจริงในห้องแล็บสเปกสูง 8 ห้องปฏิบัติการ พร้อมเครื่อง Mac และอุปกรณ์ IoT ครบครัน
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="feature-card">
                            <div class="feature-icon-circle bg-success text-white">
                                <i class="fa fa-users"></i>
                            </div>
                            <h3 class="h5 font-weight-bold text-dark">เปิดรับทุกสายการเรียน</h3>
                            <p class="text-muted small mb-0">
                                ม.6 วิทย์-คณิต ศิลป์-คำนวณ ศิลป์-ภาษา หรือ ปวช. ทุกสาขาเรียนได้ มีระบบพี่ติวน้อง และค่าย Pre-College ปรับพื้นฐานฟรี
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="feature-card">
                            <div class="feature-icon-circle bg-info text-white">
                                <i class="fa fa-handshake-o"></i>
                            </div>
                            <h3 class="h5 font-weight-bold text-dark">MOU สมาคมโปรแกรมเมอร์</h3>
                            <p class="text-muted small mb-0">
                                บันทึกข้อตกลงความร่วมมืออย่างเป็นทางการกับสมาคมโปรแกรมเมอร์ไทย (TPA) และ สสวท. รองรับการฝึกงานและสหกิจศึกษาในบริษัทชั้นนำ
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="feature-card">
                            <div class="feature-icon-circle bg-warning text-dark">
                                <i class="fa fa-money"></i>
                            </div>
                            <h3 class="h5 font-weight-bold text-dark">ค่าเทอมสบายกระเป๋า</h3>
                            <p class="text-muted small mb-0">
                                ภาคปกติเพียง 12,000 บาท/เทอม (ตลอดหลักสูตร 96,000 บาท) แบ่งผ่อนชำระได้ และรองรับการกู้ยืม กยศ. / กรอ. 100%
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- รูปแบบการจัดการเรียนการสอน (2 รูปแบบ) -->
        <div class="container py-5">
            <div class="text-center mb-5">
                <span class="badge badge-success px-3 py-1 font-weight-bold text-uppercase mb-2">Study Options</span>
                <h2 class="h3 font-weight-bold text-dark">2 รูปแบบการเรียนที่ตอบโจทย์ทุกไลฟ์สไตล์</h2>
                <p class="text-muted">เลือกเรียนได้ตามความสะดวกของนักเรียนใหม่และคนทำงาน</p>
            </div>

            <div class="row">
                <!-- ภาคปกติ -->
                <div class="col-lg-6 mb-4">
                    <div class="program-type-card active-primary shadow-sm">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="badge badge-primary px-3 py-2 font-weight-bold">ภาคปกติ (Regular Program)</span>
                            <span class="text-primary font-weight-bold"><i class="fa fa-clock-o mr-1"></i> จันทร์ - ศุกร์</span>
                        </div>
                        <h3 class="h4 font-weight-bold text-dark mb-2">ปริญญาตรี เรียนวันจันทร์ - ศุกร์</h3>
                        <p class="text-muted mb-3">
                            เวลาเรียน 08.30 – 16.30 น. เหมาะสำหรับผู้สำเร็จการศึกษาชั้น ม.6 หรือ ปวช. ที่ต้องการเรียนเต็มเวลา ทำแล็บ และเข้าร่วมกิจกรรมมหาวิทยาลัย
                        </p>

                        <div class="p-3 bg-light rounded mb-3">
                            <div class="row text-center">
                                <div class="col-6 border-right">
                                    <div class="text-muted small">ระยะเวลาศึกษา</div>
                                    <div class="h5 font-weight-bold text-dark mb-0">4 ปี</div>
                                </div>
                                <div class="col-6">
                                    <div class="text-muted small">ค่าธรรมเนียมต่อเทอม</div>
                                    <div class="h5 font-weight-bold text-primary mb-0">12,000 บาท</div>
                                </div>
                            </div>
                        </div>

                        <ul class="text-muted small pl-3 mb-4" style="line-height: 1.8;">
                            <li>รับผู้จบ ม.6 ทุกแผนการเรียน, ปวช. ทุกสาขา และเทียบเท่า</li>
                            <li>ฟรีค่าสมัครสอบคัดเลือกทุกรอบ</li>
                            <li>มีสิทธิ์ขอรับทุนการศึกษา และกู้ยืม กยศ. / กรอ.</li>
                            <li>ฝึกสหกิจศึกษาในชั้นปีที่ 4 เทอม 2 พร้อมโอกาสได้รับการจ้างงานทันที</li>
                        </ul>

                        <a href="http://ent.vru.ac.th/" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-block font-weight-bold">
                            <i class="fa fa-pencil-square-o mr-1"></i> สมัครเรียนภาคปกติ (จันทร์ - ศุกร์)
                        </a>
                    </div>
                </div>

                <!-- ภาคพิเศษ / สมทบ -->
                <div class="col-lg-6 mb-4">
                    <div class="program-type-card active-success shadow-sm">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="badge badge-success px-3 py-2 font-weight-bold">ภาคพิเศษ / สมทบ (Weekend)</span>
                            <span class="text-success font-weight-bold"><i class="fa fa-calendar-check-o mr-1"></i> เสาร์ - อาทิตย์</span>
                        </div>
                        <h3 class="h4 font-weight-bold text-dark mb-2">ปริญญาตรี เรียนวันเสาร์ - อาทิตย์</h3>
                        <p class="text-muted mb-3">
                            เวลาเรียน 08.00 – 17.00 น. เหมาะสำหรับคนทำงาน หรือผู้ที่ต้องการเรียนต่อยอดวุฒิปริญญาตรีด้านเทคโนโลยีควบคู่กับการทำงาน
                        </p>

                        <div class="p-3 bg-light rounded mb-3">
                            <div class="row text-center">
                                <div class="col-6 border-right">
                                    <div class="text-muted small">ระยะเวลาศึกษา</div>
                                    <div class="h5 font-weight-bold text-dark mb-0">4 ปี</div>
                                </div>
                                <div class="col-6">
                                    <div class="text-muted small">ค่าธรรมเนียมต่อเทอม</div>
                                    <div class="h5 font-weight-bold text-success mb-0">12,000 บาท</div>
                                </div>
                            </div>
                        </div>

                        <ul class="text-muted small pl-3 mb-4" style="line-height: 1.8;">
                            <li><strong>ระยะเวลาศึกษา 4 ปี</strong> (เรียนวันเสาร์ - อาทิตย์ 08.00 – 17.00 น.)</li>
                            <li>หากสำเร็จการศึกษา <strong>ปวส. หรือ ปริญญาตรี</strong> สามารถยื่นขอเทียบโอนผลการเรียนเพื่อลดระยะเวลาเรียนลงได้</li>
                            <li>ทำงานประจำควบคู่กับการเรียนได้ ไม่กระทบเวลาทำงานปกติ</li>
                            <li>อาจารย์ผู้สอนดูแลใกล้ชิด สามารถปรึกษาและทำโปรเจกต์นอกเวลาได้</li>
                        </ul>

                        <a href="http://ent.vru.ac.th/" target="_blank" rel="noopener noreferrer" class="btn btn-success btn-block font-weight-bold">
                            <i class="fa fa-pencil-square-o mr-1"></i> สมัครเรียนภาคพิเศษ (เสาร์ - อาทิตย์)
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- แต่ละชั้นปี เรียนอะไรบ้าง (4-Year Study Roadmap จาก มคอ.2 พ.ศ. 2570) -->
        <div class="container-fluid py-5 bg-light" id="curriculum-roadmap">
            <div class="container">
                <div class="text-center mb-5">
                    <span class="badge badge-primary px-3 py-1 font-weight-bold text-uppercase mb-2">Curriculum Roadmap</span>
                    <h2 class="h3 font-weight-bold text-dark">แต่ละชั้นปี เรียนอะไรบ้าง? (หลักสูตรปรับปรุง พ.ศ. 2570)</h2>
                    <p class="text-muted">เส้นทางการเรียนรู้ตลอด 4 ปี (124 หน่วยกิต) จากพื้นฐานการเขียนโปรแกรม สู่ผู้เชี่ยวชาญด้านซอฟต์แวร์และ AI</p>
                </div>

                <div class="row">
                    <!-- ชั้นปีที่ 1 -->
                    <div class="col-lg-6 mb-4">
                        <div class="year-card">
                            <div class="year-card-header bg-primary d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="badge badge-light text-primary font-weight-bold mr-2" style="font-size: 1rem; padding: 0.35rem 0.65rem;">ปี 1</span>
                                    <span class="h5 mb-0 text-white font-weight-bold">วางรากฐานการโปรแกรม & เว็บไซต์</span>
                                </div>
                                <span class="badge badge-light text-dark font-weight-bold">36 หน่วยกิต (18 + 18)</span>
                            </div>
                            <div class="p-4">
                                <p class="text-dark small mb-3" style="line-height: 1.7;">
                                    <strong>เป้าหมายชั้นปีที่ 1:</strong> ปรับพื้นฐานการคิดเชิงคำนวณ ตรรกศาสตร์ สถาปัตยกรรมคอมพิวเตอร์ เริ่มต้นเขียนโค้ดและพัฒนาเว็บไซต์ที่รองรับทุกหน้าจอ (Responsive Web)
                                </p>
                                <div class="mb-3">
                                    <div class="text-muted small font-weight-bold mb-2"><i class="fa fa-book text-primary mr-1"></i> รายวิชาแกนและวิชาเฉพาะที่สำคัญ:</div>
                                    <span class="course-chip">65SCS105 การโปรแกรมคอมพิวเตอร์เบื้องต้น</span>
                                    <span class="course-chip">65SCS201 การออกแบบและพัฒนาเว็บแบบเรสพอนซีฟ</span>
                                    <span class="course-chip">65SCS101 ตัวแบบเชิงคณิตศาสตร์</span>
                                    <span class="course-chip">65SCS107 สถาปัตยกรรมและระบบปฏิบัติการ</span>
                                    <span class="course-chip">65SCS106 ขั้นตอนวิธีและโครงสร้างข้อมูล</span>
                                    <span class="course-chip">65SCS202 ระบบฐานข้อมูล</span>
                                    <span class="course-chip">65SCS203 การวิเคราะห์และออกแบบระบบ</span>
                                    <span class="course-chip">65SCS102 คณิตศาสตร์ดิสครีต</span>
                                </div>
                                <div class="p-2 bg-light rounded text-muted small">
                                    <i class="fa fa-star text-warning mr-1"></i> <strong>ทักษะที่ได้รับ:</strong> HTML5/CSS3/JS, Python/Java พื้นฐาน, SQL Database, System Design
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ชั้นปีที่ 2 -->
                    <div class="col-lg-6 mb-4">
                        <div class="year-card">
                            <div class="year-card-header bg-info d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="badge badge-light text-info font-weight-bold mr-2" style="font-size: 1rem; padding: 0.35rem 0.65rem;">ปี 2</span>
                                    <span class="h5 mb-0 text-white font-weight-bold">การพัฒนาซอฟต์แวร์องค์กร & ความมั่นคงไซเบอร์</span>
                                </div>
                                <span class="badge badge-light text-dark font-weight-bold">36 หน่วยกิต (18 + 18)</span>
                            </div>
                            <div class="p-4">
                                <p class="text-dark small mb-3" style="line-height: 1.7;">
                                    <strong>เป้าหมายชั้นปีที่ 2:</strong> เขียนโปรแกรมเชิงวัตถุ พัฒนาเว็บแอปพลิเคชันระดับองค์กร (Enterprise) ออกแบบประสบการณ์ผู้ใช้ (UX/UI) บริหารเครือข่ายและความปลอดภัย
                                </p>
                                <div class="mb-3">
                                    <div class="text-muted small font-weight-bold mb-2"><i class="fa fa-book text-info mr-1"></i> รายวิชาแกนและวิชาเฉพาะที่สำคัญ:</div>
                                    <span class="course-chip">65SCS212 การเขียนโปรแกรมเชิงวัตถุ (OOP)</span>
                                    <span class="course-chip">65SCS206 การพัฒนาเว็บแอปพลิเคชันองค์กร</span>
                                    <span class="course-chip">65SCS204 การพัฒนาผลิตภัณฑ์ซอฟต์แวร์</span>
                                    <span class="course-chip">65SCS205 ประสบการณ์ผู้ใช้และการปฏิสัมพันธ์ (UX/UI)</span>
                                    <span class="course-chip">65SCS207 การสื่อสารข้อมูลและเครือข่ายคอมพิวเตอร์</span>
                                    <span class="course-chip">65SCS209 ความมั่นคงปลอดภัยไซเบอร์</span>
                                    <span class="course-chip">65SCS103 ความน่าจะเป็นและสถิติเบื้องต้น</span>
                                    <span class="course-chip">65SCS104 สถิติเพื่อการวิจัย</span>
                                </div>
                                <div class="p-2 bg-light rounded text-muted small">
                                    <i class="fa fa-star text-warning mr-1"></i> <strong>ทักษะที่ได้รับ:</strong> OOP, Full-Stack Web, Network Configuration, UX/UI Design, Cyber Defense
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ชั้นปีที่ 3 -->
                    <div class="col-lg-6 mb-4">
                        <div class="year-card">
                            <div class="year-card-header bg-warning d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="badge badge-dark font-weight-bold mr-2" style="font-size: 1rem; padding: 0.35rem 0.65rem;">ปี 3</span>
                                    <span class="h5 mb-0 text-dark font-weight-bold">ปัญญาประดิษฐ์ (AI), IoT & โครงงานระยะที่ 1</span>
                                </div>
                                <span class="badge badge-dark font-weight-bold">33 หน่วยกิต (18 + 15)</span>
                            </div>
                            <div class="p-4">
                                <p class="text-dark small mb-3" style="line-height: 1.7;">
                                    <strong>เป้าหมายชั้นปีที่ 3:</strong> พัฒนาโมเดล Machine Learning และ AI เชื่อมโยงอุปกรณ์ฮาร์ดแวร์อัจฉริยะ (IoT) วิเคราะห์ Data และเริ่มพัฒนาโครงงานนวัตกรรม (Project 1)
                                </p>
                                <div class="mb-3">
                                    <div class="text-muted small font-weight-bold mb-2"><i class="fa fa-book text-dark mr-1"></i> รายวิชาแกนและวิชาเฉพาะที่สำคัญ:</div>
                                    <span class="course-chip">65SCS210 ปัญญาประดิษฐ์และการเรียนรู้ของเครื่องจักร (AI/ML)</span>
                                    <span class="course-chip">65SCS208 อินเทอร์เน็ตในทุกสิ่ง (IoT)</span>
                                    <span class="course-chip">65SCS211 การรวบรวมข้อมูลและการนำเสนอ (Data Viz)</span>
                                    <span class="course-chip">65SCS216 การวิเคราะห์และออกแบบโครงงาน (Project 1)</span>
                                    <span class="course-chip">65SCS213 ทักษะการสื่อสารสำหรับนักวิทย์คอม</span>
                                    <span class="course-chip">65SCS214 ระเบียบวิธีวิจัยด้านวิทยาการคอมพิวเตอร์</span>
                                    <span class="course-chip">65SCS3xx กลุ่มวิชาเลือกเฉพาะด้าน (Electives 1–3)</span>
                                </div>
                                <div class="p-2 bg-light rounded text-muted small">
                                    <i class="fa fa-star text-warning mr-1"></i> <strong>ทักษะที่ได้รับ:</strong> AI Model Training, IoT Embedded Coding, Data Analytics, Project Prototype
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ชั้นปีที่ 4 -->
                    <div class="col-lg-6 mb-4">
                        <div class="year-card">
                            <div class="year-card-header bg-success d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="badge badge-light text-success font-weight-bold mr-2" style="font-size: 1rem; padding: 0.35rem 0.65rem;">ปี 4</span>
                                    <span class="h5 mb-0 text-white font-weight-bold">พัฒนาระบบสมบูรณ์ & สหกิจศึกษา (Co-op)</span>
                                </div>
                                <span class="badge badge-light text-dark font-weight-bold">19 หน่วยกิต (13 + 6)</span>
                            </div>
                            <div class="p-4">
                                <p class="text-dark small mb-3" style="line-height: 1.7;">
                                    <strong>เป้าหมายชั้นปีที่ 4:</strong> พัฒนาและส่งมอบผลงานโครงงานฉบับสมบูรณ์ (Project 2) และออกปฏิบัติงานสหกิจศึกษาในสถานประกอบการจริง 16 สัปดาห์เต็ม สร้างโอกาสได้งานทำ 100%
                                </p>
                                <div class="mb-3">
                                    <div class="text-muted small font-weight-bold mb-2"><i class="fa fa-book text-success mr-1"></i> รายวิชาแกนและวิชาเฉพาะที่สำคัญ:</div>
                                    <span class="course-chip">65SCS217 การพัฒนาระบบและนวัตกรรม (Project 2)</span>
                                    <span class="course-chip">65SCS3xx กลุ่มวิชาเลือกเฉพาะด้านขั้นสูง (Electives 4–5)</span>
                                    <span class="course-chip">65SCS401 การเตรียมสหกิจศึกษา</span>
                                    <span class="course-chip">65SCS402 สหกิจศึกษาด้านวิทยาการคอมพิวเตอร์ (16 สัปดาห์)</span>
                                    <span class="course-chip">หรือ 65SCS404 การฝึกประสบการณ์วิชาชีพ (450 ชม.)</span>
                                </div>
                                <div class="p-2 bg-light rounded text-muted small">
                                    <i class="fa fa-star text-warning mr-1"></i> <strong>ทักษะที่ได้รับ:</strong> Full System Deployment, Software Testing, Real-world Work Experience, Job Placement
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-3">
                    <a href="structure.php" class="btn btn-outline-primary font-weight-bold">
                        <i class="fa fa-list-alt mr-1"></i> ดูคำอธิบายรายวิชาและโครงสร้างหลักสูตรฉบับเต็ม
                    </a>
                </div>

                <!-- Technology & Tools Showcase (ดึงข้อมูลจำเป็นจาก Technology Stack) -->
                <div class="card border-0 shadow-sm p-4 mt-4" style="border-radius: 12px; background: #ffffff;">
                    <div class="row align-items-center">
                        <div class="col-lg-3 text-center text-lg-left mb-3 mb-lg-0 border-right">
                            <span class="badge badge-primary px-3 py-1 font-weight-bold text-uppercase mb-2">Tech Stack</span>
                            <h3 class="h5 font-weight-bold text-dark mb-1"><i class="fa fa-rocket text-primary mr-1"></i> เทคโนโลยี & เครื่องมือ</h3>
                            <p class="text-muted small mb-2">ภาษาและเครื่องมือที่ได้ลงมือปฏิบัติจริงตลอด 4 ปี</p>
                            <a href="images/technology-stack.jpg" target="_blank" rel="noopener noreferrer" class="btn btn-outline-secondary btn-sm font-weight-bold" style="font-size: 0.8rem;">
                                <i class="fa fa-image mr-1"></i> ดูแผนผังภาพรวม
                            </a>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="small font-weight-bold text-dark mb-1"><i class="fa fa-code text-primary mr-1"></i> ภาษาโปรแกรม & การพัฒนาเว็บ:</div>
                                    <span class="course-chip">Python</span>
                                    <span class="course-chip">Java</span>
                                    <span class="course-chip">JavaScript / TypeScript</span>
                                    <span class="course-chip">PHP</span>
                                    <span class="course-chip">C / C++</span>
                                    <span class="course-chip">HTML5 / CSS3</span>
                                    <span class="course-chip">Bootstrap / Tailwind</span>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="small font-weight-bold text-dark mb-1"><i class="fa fa-database text-info mr-1"></i> ฐานข้อมูล (SQL & NoSQL):</div>
                                    <span class="course-chip">MySQL / MariaDB</span>
                                    <span class="course-chip">PostgreSQL</span>
                                    <span class="course-chip">MongoDB</span>
                                    <span class="course-chip">Database Design & Query Tuning</span>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="small font-weight-bold text-dark mb-1"><i class="fa fa-cogs text-warning mr-1"></i> ปัญญาประดิษฐ์ & ข้อมูล (AI & Data):</div>
                                    <span class="course-chip">Machine Learning</span>
                                    <span class="course-chip">Deep Learning</span>
                                    <span class="course-chip">Data Analytics (Pandas/NumPy)</span>
                                    <span class="course-chip">IoT / Sensors (Arduino/ESP32)</span>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="small font-weight-bold text-dark mb-1"><i class="fa fa-cloud text-success mr-1"></i> โครงสร้างพื้นฐาน & DevOps:</div>
                                    <span class="course-chip">Git / GitHub</span>
                                    <span class="course-chip">Docker Container</span>
                                    <span class="course-chip">Linux Server</span>
                                    <span class="course-chip">Cloud Computing (GCP/Azure)</span>
                                    <span class="course-chip">Cybersecurity</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- คุณสมบัติผู้สมัคร และการเทียบโอนหน่วยกิต -->
        <div class="container-fluid py-5 bg-light" id="qualification">
            <div class="container">
                <div class="text-center mb-5">
                    <span class="badge badge-secondary px-3 py-1 font-weight-bold text-uppercase mb-2">Qualifications</span>
                    <h2 class="h3 font-weight-bold text-dark">คุณสมบัติของผู้สมัครเข้าศึกษา</h2>
                    <p class="text-muted">เปิดโอกาสกว้างขวาง ไม่จำกัดแผนการเรียนเดิม</p>
                </div>

                <div class="row">
                    <!-- ม.6 -->
                    <div class="col-md-6 col-lg-3 mb-3">
                        <div class="card h-100 border-0 shadow-sm" style="border-radius: 10px;">
                            <div class="card-body p-3">
                                <div class="text-primary mb-2" style="font-size: 1.5rem;"><i class="fa fa-graduation-cap"></i></div>
                                <h3 class="h6 font-weight-bold text-dark mb-2">วุฒิ ม.6 หรือเทียบเท่า (กศน.)</h3>
                                <p class="text-muted small mb-0">
                                    รับผู้จบชั้นมัธยมศึกษาตอนปลาย <strong>ทุกแผนการเรียน</strong> (วิทย์-คณิต, ศิลป์-คำนวณ, ศิลป์-ภาษา หรือทั่วไป) เรียนครบ 4 ปี (124 หน่วยกิต)
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- ปวช. -->
                    <div class="col-md-6 col-lg-3 mb-3">
                        <div class="card h-100 border-0 shadow-sm" style="border-radius: 10px;">
                            <div class="card-body p-3">
                                <div class="text-success mb-2" style="font-size: 1.5rem;"><i class="fa fa-cogs"></i></div>
                                <h3 class="h6 font-weight-bold text-dark mb-2">วุฒิ ปวช. ทุกประเภทวิชา</h3>
                                <p class="text-muted small mb-0">
                                    รับผู้จบ ปวช. ทุกสาขา เช่น ช่างอิเล็กทรอนิกส์, ช่างไฟฟ้า, คอมพิวเตอร์ธุรกิจ, เทคโนโลยีสารสนเทศ เรียนต่อ ป.ตรี 4 ปีได้ทันที
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- ปวส. -->
                    <div class="col-md-6 col-lg-3 mb-3">
                        <div class="card h-100 border-0 shadow-sm" style="border-radius: 10px;">
                            <div class="card-body p-3">
                                <div class="text-info mb-2" style="font-size: 1.5rem;"><i class="fa fa-exchange"></i></div>
                                <h3 class="h6 font-weight-bold text-dark mb-2">วุฒิ ปวส. (เทียบโอน)</h3>
                                <p class="text-muted small mb-0">
                                    เทียบโอนวิชาศึกษาทั่วไปและวิชาเฉพาะที่สอดคล้องได้ทันที ทำให้เหลือวิชาที่ต้องเรียนเพียงประมาณ 2 – 2.5 ปี (ทั้งรอบปกติและเสาร์-อาทิตย์)
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- ปริญญาตรีใบที่ 2 -->
                    <div class="col-md-6 col-lg-3 mb-3">
                        <div class="card h-100 border-0 shadow-sm" style="border-radius: 10px;">
                            <div class="card-body p-3">
                                <div class="text-warning mb-2" style="font-size: 1.5rem;"><i class="fa fa-bookmark"></i></div>
                                <h3 class="h6 font-weight-bold text-dark mb-2">ปริญญาตรีใบที่ 2 / ย้ายโอน</h3>
                                <p class="text-muted small mb-0">
                                    เทียบโอนหมวดศึกษาทั่วไปได้เต็ม 30 หน่วยกิตทันที และเทียบโอนวิชาอื่นๆ จากสถาบันเดิมได้ตามเกณฑ์ ใช้เวลาเรียนสั้นลงอย่างมาก
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-3">
                    <a href="structure.php" class="btn btn-outline-primary btn-sm font-weight-bold">
                        <i class="fa fa-book mr-1"></i> ดูรายละเอียดโครงสร้างหลักสูตร 124 หน่วยกิต
                    </a>
                </div>
            </div>
        </div>

        <!-- 6 สายอาชีพเป้าหมาย (Careers) -->
        <div class="container py-5">
            <div class="text-center mb-5">
                <span class="badge badge-primary px-3 py-1 font-weight-bold text-uppercase mb-2">Career Pathways</span>
                <h2 class="h3 font-weight-bold text-dark">6 สายอาชีพหลักที่พร้อมทำงานทันทีหลังสำเร็จการศึกษา</h2>
                <p class="text-muted">หลักสูตรออกแบบตามสมรรถนะวิชาชีพที่ตลาดแรงงานเทคโนโลยีต้องการสูงสุด</p>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="career-badge-item">
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge badge-primary mr-2">01</span>
                            <h3 class="h6 font-weight-bold text-dark mb-0">นักพัฒนาซอฟต์แวร์ (Software Developer)</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            พัฒนา Web Application, Mobile Application, Full-Stack และ Enterprise System ด้วยภาษาและเครื่องมือมาตรฐานสากล
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="career-badge-item">
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge badge-success mr-2">02</span>
                            <h3 class="h6 font-weight-bold text-dark mb-0">วิศวกรปัญญาประดิษฐ์ (AI Engineer)</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            ออกแบบ สร้าง และประยุกต์ใช้โมเดล Machine Learning, Generative AI และ Data Analytics สำหรับภาคธุรกิจและอุตสาหกรรม
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="career-badge-item">
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge badge-info mr-2">03</span>
                            <h3 class="h6 font-weight-bold text-dark mb-0">ผู้บริหารโครงการซอฟต์แวร์ (Project Manager)</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            วางแผน ประสานงาน และบริหารทีมพัฒนาซอฟต์แวร์ด้วยกระบวนการแบบ Agile / Scrum ให้ส่งมอบงานได้ตรงเวลาและคุณภาพสูง
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="career-badge-item">
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge badge-warning text-dark mr-2">04</span>
                            <h3 class="h6 font-weight-bold text-dark mb-0">นักวิเคราะห์ระบบ (System Analyst)</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            รวบรวม Requirement วิเคราะห์ความต้องการผู้ใช้ ออกแบบสถาปัตยกรรมระบบสารสนเทศ และออกแบบ UI/UX ที่ตอบโจทย์การใช้งาน
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="career-badge-item">
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge badge-secondary mr-2">05</span>
                            <h3 class="h6 font-weight-bold text-dark mb-0">ผู้ดูแลระบบเครือข่ายและคลาวด์ (Cloud & DevOps)</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            ดูแล Server, Cloud Infrastructure, Docker, เครือข่ายคอมพิวเตอร์ และมาตรการความมั่นคงปลอดภัยทางไซเบอร์ (Cybersecurity)
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="career-badge-item">
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge badge-dark mr-2">06</span>
                            <h3 class="h6 font-weight-bold text-dark mb-0">นักวิชาการคอมพิวเตอร์ (IT Specialist)</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            ปฏิบัติงานด้านเทคโนโลยีสารสนเทศในหน่วยงานราชการ สถาบันการศึกษา รัฐวิสาหกิจ หรือองค์กรธุรกิจเอกชน
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ขั้นตอนการสมัครเรียน (5 ขั้นตอนง่ายๆ) -->
        <div class="container-fluid py-5 bg-light" id="steps">
            <div class="container">
                <div class="text-center mb-5">
                    <span class="badge badge-primary px-3 py-1 font-weight-bold text-uppercase mb-2">How to Apply</span>
                    <h2 class="h3 font-weight-bold text-dark">5 ขั้นตอนการสมัครเรียนง่าย ๆ ผ่านระบบออนไลน์</h2>
                    <p class="text-muted">ไม่ต้องเดินทางมามหาวิทยาลัยในขั้นตอนการสมัครเบื้องต้น</p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="card border-0 shadow-sm p-4" style="border-radius: 12px; background: #ffffff;">
                            <div class="d-flex align-items-start mb-4">
                                <div class="step-bubble">1</div>
                                <div>
                                    <h3 class="h6 font-weight-bold text-dark mb-1">กรอกใบสมัครออนไลน์</h3>
                                    <p class="text-muted small mb-0">
                                        เข้าสู่เว็บไซต์รับสมัครกลางของมหาวิทยาลัยที่ <a href="http://ent.vru.ac.th/" target="_blank" rel="noopener noreferrer" class="font-weight-bold">http://ent.vru.ac.th/</a> เลือกคณะวิทยาศาสตร์และเทคโนโลยี ➔ สาขาวิชาวิทยาการคอมพิวเตอร์
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex align-items-start mb-4">
                                <div class="step-bubble">2</div>
                                <div>
                                    <h3 class="h6 font-weight-bold text-dark mb-1">แนบเอกสารและหลักฐานการศึกษา</h3>
                                    <p class="text-muted small mb-0">
                                        อัปโหลดสำเนาใบ ปพ.1 หรือ Transcript (5 หรือ 6 ภาคเรียน), สำเนาบัตรประชาชน และรูปถ่ายหน้าตรงในระบบรับสมัคร
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex align-items-start mb-4">
                                <div class="step-bubble">3</div>
                                <div>
                                    <h3 class="h6 font-weight-bold text-dark mb-1">ตรวจสอบรายชื่อและสอบสัมภาษณ์</h3>
                                    <p class="text-muted small mb-0">
                                        ตรวจสอบประกาศรายชื่อผู้มีสิทธิ์สอบสัมภาษณ์ในระบบรับสมัคร โดยการสอบสัมภาษณ์มุ่งเน้นความสนใจ ความตั้งใจ และทัศนคติต่อสายงานคอมพิวเตอร์
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex align-items-start mb-4">
                                <div class="step-bubble">4</div>
                                <div>
                                    <h3 class="h6 font-weight-bold text-dark mb-1">ประกาศผลและชำระค่าธรรมเนียมแรกเข้า</h3>
                                    <p class="text-muted small mb-0">
                                        หลังประกาศรายชื่อผู้มีสิทธิ์เข้าศึกษา ให้พิมพ์ใบชำระเงินและชำระค่าธรรมเนียมแรกเข้า/ค่าลงทะเบียนผ่านเคาน์เตอร์เซอร์วิส 7-11 หรือโอนเงินผ่านระบบธนาคาร
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex align-items-start">
                                <div class="step-bubble">5</div>
                                <div>
                                    <h3 class="h6 font-weight-bold text-dark mb-1">ปฐมนิเทศและเปิดภาคการศึกษา</h3>
                                    <p class="text-muted small mb-0">
                                        เข้าร่วมกิจกรรมปฐมนิเทศนักศึกษาใหม่ ค่ายปรับพื้นฐาน Coding Camp และเปิดภาคเรียนที่ 1 ในช่วงเดือนมิถุนายนของทุกปีการศึกษา
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- อัตราค่าธรรมเนียมการศึกษาแบบเหมาจ่าย (Tuition Fees) -->
        <div class="container py-5" id="fee">
            <div class="text-center mb-5">
                <span class="badge badge-primary px-3 py-1 font-weight-bold text-uppercase mb-2">Tuition & Fees</span>
                <h2 class="h3 font-weight-bold text-dark">อัตราค่าธรรมเนียมการศึกษาแบบเหมาจ่าย</h2>
                <p class="text-muted">โปร่งใส ชัดเจน ไม่มีค่าใช้จ่ายแอบแฝง สามารถแบ่งผ่อนชำระได้ตามระเบียบมหาวิทยาลัย</p>
            </div>

            <!-- 2 Comparison Cards (Regular vs Weekend) -->
            <div class="row mb-4">
                <!-- ภาคปกติ -->
                <div class="col-lg-6 mb-4">
                    <div class="fee-plan-card plan-primary">
                        <div class="fee-header-primary">
                            <span class="badge badge-light text-primary font-weight-bold px-3 py-1 mb-2">ภาคปกติ (จันทร์ - ศุกร์)</span>
                            <h3 class="h4 font-weight-bold text-white mb-2">ปริญญาตรี 4 ปี (เรียนวันธรรมดา)</h3>
                            <div class="d-flex align-items-baseline justify-content-center">
                                <span class="fee-price-large">12,000</span>
                                <span class="ml-2 font-weight-bold" style="font-size: 1.1rem;">บาท / ภาคเรียน</span>
                            </div>
                            <div class="small text-white-50 mt-1">อัตราค่าธรรมเนียมเหมาจ่าย รวมค่าหน่วยกิตและค่าบำรุงแล้ว</div>
                        </div>

                        <div class="bg-white">
                            <div class="fee-detail-row">
                                <span class="text-dark font-weight-bold"><i class="fa fa-calendar-o text-primary mr-2"></i> ภาคการศึกษาที่ 1 (มิ.ย. – ต.ค.)</span>
                                <span class="text-primary font-weight-bold">12,000 บาท</span>
                            </div>
                            <div class="fee-detail-row">
                                <span class="text-dark font-weight-bold"><i class="fa fa-calendar-o text-primary mr-2"></i> ภาคการศึกษาที่ 2 (พ.ย. – มี.ค.)</span>
                                <span class="text-primary font-weight-bold">12,000 บาท</span>
                            </div>
                            <div class="fee-detail-row">
                                <span class="text-muted"><i class="fa fa-sun-o text-muted mr-2"></i> ภาคฤดูร้อน (เม.ย. – พ.ค.)</span>
                                <span class="text-muted font-italic">ไม่มี (ปิดภาคเรียน)</span>
                            </div>
                            <div class="fee-detail-row bg-light">
                                <span class="text-dark font-weight-bold">รวมค่าเล่าเรียนต่อปี:</span>
                                <span class="text-dark font-weight-bold" style="font-size: 1.05rem;">24,000 บาท / ปี</span>
                            </div>
                            <div class="fee-detail-row" style="background-color: #ebf5ff;">
                                <span class="text-primary font-weight-bold" style="font-size: 1.05rem;">
                                    <i class="fa fa-trophy mr-1"></i> รวมตลอดหลักสูตร 4 ปี (8 เทอม):
                                </span>
                                <span class="badge badge-primary font-weight-bold px-3 py-2" style="font-size: 1.15rem;">
                                    96,000 บาท
                                </span>
                            </div>
                        </div>

                        <div class="p-3 bg-light text-center border-top">
                            <span class="text-success small font-weight-bold mr-3"><i class="fa fa-check mr-1"></i> ฟรีค่าสมัคร</span>
                            <span class="text-primary small font-weight-bold mr-3"><i class="fa fa-check mr-1"></i> กู้ กยศ./กรอ. ได้ 100%</span>
                            <span class="text-dark small font-weight-bold"><i class="fa fa-check mr-1"></i> ผ่อนชำระได้</span>
                        </div>
                    </div>
                </div>

                <!-- ภาคพิเศษ -->
                <div class="col-lg-6 mb-4">
                    <div class="fee-plan-card plan-success">
                        <div class="fee-header-success">
                            <span class="badge badge-light text-success font-weight-bold px-3 py-1 mb-2">ภาคพิเศษ (เสาร์ - อาทิตย์)</span>
                            <h3 class="h4 font-weight-bold text-white mb-2">ปริญญาตรี 4 ปี (เรียนวันหยุด)</h3>
                            <div class="d-flex align-items-baseline justify-content-center">
                                <span class="fee-price-large">12,000</span>
                                <span class="ml-2 font-weight-bold" style="font-size: 1.1rem;">บาท / ภาคเรียน</span>
                            </div>
                            <div class="small text-white-50 mt-1">ออกแบบมาสำหรับคนทำงาน เพื่อเพิ่มวุฒิการศึกษา</div>
                        </div>

                        <div class="bg-white">
                            <div class="fee-detail-row">
                                <span class="text-dark font-weight-bold"><i class="fa fa-calendar-o text-success mr-2"></i> ภาคการศึกษาที่ 1 (มิ.ย. – ต.ค.)</span>
                                <span class="text-success font-weight-bold">12,000 บาท</span>
                            </div>
                            <div class="fee-detail-row">
                                <span class="text-dark font-weight-bold"><i class="fa fa-calendar-o text-success mr-2"></i> ภาคการศึกษาที่ 2 (พ.ย. – มี.ค.)</span>
                                <span class="text-success font-weight-bold">12,000 บาท</span>
                            </div>
                            <div class="fee-detail-row">
                                <span class="text-dark font-weight-bold"><i class="fa fa-sun-o text-warning mr-2"></i> ภาคฤดูร้อน (เม.ย. – พ.ค.)</span>
                                <span class="text-success font-weight-bold">6,000 บาท</span>
                            </div>
                            <div class="fee-detail-row bg-light">
                                <span class="text-dark font-weight-bold">รวมค่าเล่าเรียนต่อปี:</span>
                                <span class="text-dark font-weight-bold" style="font-size: 1.05rem;">30,000 บาท / ปี</span>
                            </div>
                            <div class="fee-detail-row" style="background-color: #eafaf1;">
                                <span class="text-success font-weight-bold" style="font-size: 1.05rem;">
                                    <i class="fa fa-trophy mr-1"></i> รวมตลอดหลักสูตร 4 ปี:
                                </span>
                                <span class="badge badge-success font-weight-bold px-3 py-2" style="font-size: 1.15rem;">
                                    120,000 บาท*
                                </span>
                            </div>
                        </div>

                        <div class="p-3 bg-light text-center border-top">
                            <span class="text-muted small">*ผู้เทียบโอน ปวส./ป.ตรี ค่าใช้จ่ายจะลดลงตามจำนวนวิชาที่เทียบโอนได้</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ค่าธรรมเนียมอื่นๆ และสิทธิประโยชน์ 3 กล่อง -->
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card h-100 border-0 shadow-sm p-3" style="border-radius: 10px; background: #ffffff;">
                        <div class="d-flex align-items-center mb-2">
                            <div class="feature-icon-circle bg-primary text-white mr-2" style="width: 38px; height: 38px; font-size: 1rem; margin-bottom: 0;">
                                <i class="fa fa-id-card"></i>
                            </div>
                            <h3 class="h6 font-weight-bold text-dark mb-0">ค่าแรกเข้าและเอกสาร</h3>
                        </div>
                        <ul class="small text-muted pl-3 mb-0" style="line-height: 1.8;">
                            <li><strong>ค่าแรกเข้า:</strong> 1,500 บาท (ชำระครั้งเดียวเมื่อขึ้นทะเบียน)</li>
                            <li><strong>บัตรนักศึกษา Smart Card:</strong> 500 บาท (เดบิต ใช้งานได้ 4 ปี)</li>
                            <li><strong>ค่าสมัครสอบ:</strong> ฟรีสำหรับภาคปกติ / 0 - 300 บาท สำหรับภาคพิเศษ</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card h-100 border-0 shadow-sm p-3" style="border-radius: 10px; background: #ffffff;">
                        <div class="d-flex align-items-center mb-2">
                            <div class="feature-icon-circle bg-success text-white mr-2" style="width: 38px; height: 38px; font-size: 1rem; margin-bottom: 0;">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <h3 class="h6 font-weight-bold text-dark mb-0">ทุนการศึกษา & กยศ./กรอ.</h3>
                        </div>
                        <ul class="small text-muted pl-3 mb-0" style="line-height: 1.8;">
                            <li><strong>กองทุน กยศ. / กรอ.:</strong> รองรับการกู้ยืมค่าเทอมและค่าครองชีพ 100%</li>
                            <li><strong>ทุนการศึกษาคณะ:</strong> มีทุนสนับสนุนนักศึกษาเรียนดีและขาดแคลนทุนทรัพย์</li>
                            <li><strong>แบ่งผ่อนชำระ:</strong> ผ่อนผันค่าเล่าเรียนได้ตามงวดของมหาวิทยาลัย</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card h-100 border-0 shadow-sm p-3" style="border-radius: 10px; background: #ffffff;">
                        <div class="d-flex align-items-center mb-2">
                            <div class="feature-icon-circle bg-info text-white mr-2" style="width: 38px; height: 38px; font-size: 1rem; margin-bottom: 0;">
                                <i class="fa fa-exchange"></i>
                            </div>
                            <h3 class="h6 font-weight-bold text-dark mb-0">การเทียบโอนหน่วยกิต</h3>
                        </div>
                        <ul class="small text-muted pl-3 mb-0" style="line-height: 1.8;">
                            <li><strong>ค่าธรรมเนียมเทียบโอน:</strong> หน่วยกิตละ 100 บาท</li>
                            <li><strong>วุฒิ ปวส.:</strong> เทียบโอนวิชาศึกษาทั่วไปและวิชาเฉพาะที่สอดคล้อง</li>
                            <li><strong>วุฒิ ป.ตรี:</strong> เทียบโอนวิชาศึกษาทั่วไปได้เต็ม 30 หน่วยกิตทันที</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Line กลุ่มผู้สมัครเรียน ปี 70 (CS-VRU#70) -->
        <div class="bg-white border-top border-bottom py-2">
            <?php include("layouts/group-line-qr.php"); ?>
        </div>

        <!-- ติดต่อสอบถามข้อมูลการรับสมัคร -->
        <div class="container-fluid py-5 bg-light" id="contact">
            <div class="container">
                <div class="text-center mb-5">
                    <span class="badge badge-success px-3 py-1 font-weight-bold text-uppercase mb-2">Get in Touch</span>
                    <h2 class="h3 font-weight-bold text-dark">ช่องทางติดต่อและสอบถามข้อมูลการรับสมัคร</h2>
                    <p class="text-muted">สอบถามรายละเอียดการเรียน การเทียบโอน หรือการสมัครเรียนได้โดยตรง</p>
                </div>

                <div class="row">
                    <!-- การ์ด 1: โทรศัพท์สายตรง -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 border-0 shadow-sm p-4 text-center" style="border-radius: 12px; background: #ffffff;">
                            <div class="feature-icon-circle bg-primary text-white mx-auto">
                                <i class="fa fa-phone"></i>
                            </div>
                            <h3 class="h5 font-weight-bold text-dark mb-2">โทรศัพท์สอบถาม</h3>
                            <p class="text-muted small mb-3">พูดคุยกับเจ้าหน้าที่และอาจารย์ประจำหลักสูตรโดยตรง</p>
                            <div class="p-3 bg-light rounded mb-3">
                                <div class="h5 font-weight-bold text-primary mb-1">
                                    <a href="tel:029091432,14" class="text-primary text-decoration-none">02-909-1432 ต่อ 14</a>
                                </div>
                                <div class="small text-muted">ห้องปฏิบัติการสาขาวิชา IT201</div>
                                <div class="small text-muted">หรือ 0-2529-0674-7 ต่อ 365</div>
                            </div>
                            <div class="small text-muted mt-auto">
                                <i class="fa fa-clock-o mr-1"></i> เวลาทำการ: จันทร์ - ศุกร์ 08.30 - 16.30 น.
                            </div>
                        </div>
                    </div>

                    <!-- การ์ด 2: Facebook Inbox -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 border-0 shadow-sm p-4 text-center" style="border-radius: 12px; background: #ffffff;">
                            <div class="feature-icon-circle text-white mx-auto" style="background-color: #1877f2;">
                                <i class="fa fa-facebook"></i>
                            </div>
                            <h3 class="h5 font-weight-bold text-dark mb-2">Facebook Page</h3>
                            <p class="text-muted small mb-3">ส่งข้อความ Inbox สอบถามข้อมูลได้ตลอด 24 ชั่วโมง</p>
                            <div class="p-3 bg-light rounded mb-3">
                                <div class="font-weight-bold text-dark mb-1">Computer Science VRU</div>
                                <div class="small text-muted">เพจทางการ สาขาวิชาวิทยาการคอมพิวเตอร์</div>
                            </div>
                            <a href="https://www.facebook.com/computersciencevru" target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary btn-block font-weight-bold btn-sm mt-auto">
                                <i class="fa fa-comments mr-1"></i> ส่งข้อความทาง Facebook Inbox
                            </a>
                        </div>
                    </div>

                    <!-- การ์ด 3: สถานที่ติดต่อ -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 border-0 shadow-sm p-4 text-center" style="border-radius: 12px; background: #ffffff;">
                            <div class="feature-icon-circle bg-danger text-white mx-auto">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <h3 class="h5 font-weight-bold text-dark mb-2">สถานที่ติดต่อ</h3>
                            <p class="text-muted small mb-3">เข้ามาติดต่อและเยี่ยมชมห้องปฏิบัติการจริง</p>
                            <div class="p-3 bg-light rounded text-left mb-3">
                                <div class="font-weight-bold text-dark small mb-1">สาขาวิชาวิทยาการคอมพิวเตอร์</div>
                                <div class="small text-muted">
                                    ชั้น 2 ห้อง IT201 อาคาร 75 ปี วไลยอลงกรณ์<br>
                                    คณะวิทยาศาสตร์และเทคโนโลยี มรภ.วไลยอลงกรณ์ฯ
                                </div>
                            </div>
                            <a href="contact.php" class="btn btn-outline-secondary btn-block font-weight-bold btn-sm mt-auto">
                                <i class="fa fa-map mr-1"></i> ดูแผนที่และการเดินทาง
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Call to action button -->
                <div class="text-center mt-3">
                    <a href="http://ent.vru.ac.th/" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-lg shadow-sm font-weight-bold">
                        <i class="fa fa-external-link mr-1"></i> เข้าสู่ระบบรับสมัครออนไลน์ มรภ.วไลยอลงกรณ์ (ent.vru.ac.th)
                    </a>
                </div>
            </div>
        </div>

    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>

    <!-- Schema.org EducationalOccupationalProgram Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "EducationalOccupationalProgram",
      "name": "หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์",
      "description": "หลักสูตรปริญญาตรี 4 ปี (124 หน่วยกิต) มุ่งเน้นการพัฒนานักพัฒนาซอฟต์แวร์, วิศวกรปัญญาประดิษฐ์ (AI), และผู้เชี่ยวชาญด้านระบบคลาวด์และไซเบอร์ซีเคียวริตี้",
      "provider": {
        "@type": "CollegeOrUniversity",
        "name": "มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์",
        "url": "https://www.vru.ac.th"
      },
      "educationalProgramMode": ["Full-time", "Part-time"],
      "programType": "Bachelor's Degree",
      "timeToComplete": "P4Y",
      "offers": {
        "@type": "Offer",
        "price": "12000",
        "priceCurrency": "THB",
        "category": "Tuition per semester"
      }
    }
    </script>
</body>

</html>

