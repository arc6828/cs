<?php
$yearNow = (int) date('Y');
$monthNow = (int) date('n');
$academicYear = ($monthNow >= 7) ? $yearNow + 1 + 543 : $yearNow + 543;

$og_title = "หลักสูตรวิทยาการคอมพิวเตอร์ | มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์ (VRU)";
$og_description = "เว็บไซต์อย่างเป็นทางการ หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี มรภ.วไลยอลงกรณ์ (VRU) ก้าวสู่ 40 ปีแห่งความเป็นเลิศ เปิดรับสมัครนักศึกษาใหม่ ปีการศึกษา {$academicYear} ทั้งภาคปกติและเสาร์-อาทิตย์";
$og_url = "https://cs.vru.ac.th/";
$og_image = "https://cs.vru.ac.th/images/tcas/pr-2026-09-19.jpg";

// ดึงบทความล่าสุดจากระบบ API พร้อมกำหนด Timeout เพื่อความเสถียร
$articles = [];
$ctx = stream_context_create(['http' => ['timeout' => 2]]);
$raw_articles = @file_get_contents("https://ckartisan.com/api/article/tagged/computer-science", false, $ctx);
if ($raw_articles) {
    $articles = json_decode($raw_articles) ?? [];
}
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <?php include("layouts/meta.php"); ?>
    <style>
        /* High contrast typography & Dark Gray styling */
        body, .content {
            color: #212529 !important;
        }

        .text-dark-gray {
            color: #343a40 !important;
        }

        /* 40th Anniversary Celebration Banner */
        .celebration-hero {
            background: linear-gradient(135deg, #2e0854 0%, #581845 50%, #701a75 100%);
            color: #ffffff;
            border-radius: 16px;
            padding: 2.25rem 2rem;
            margin-bottom: 2.5rem;
            box-shadow: 0 6px 25px rgba(88, 24, 69, 0.25);
            position: relative;
            overflow: hidden;
        }

        .celebration-hero h2 {
            color: #ffffff;
            font-weight: 800;
        }

        .celebration-hero p {
            color: #f5d0fe;
            line-height: 1.7;
            font-size: 1.05rem;
        }

        /* Stat Counter Cards */
        .stat-highlight-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            padding: 1.5rem 1.25rem;
            text-align: center;
            height: 100%;
            transition: all 0.25s ease-in-out;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }

        .stat-highlight-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 22px rgba(2, 132, 199, 0.12);
            border-color: #0284c7;
        }

        .stat-highlight-number {
            font-size: 2.1rem;
            font-weight: 800;
            color: #0284c7;
            line-height: 1.2;
            margin-bottom: 0.25rem;
        }

        /* Portal Service Cards */
        .portal-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 1.25rem;
            height: 100%;
            transition: all 0.25s ease-in-out;
            display: flex;
            flex-direction: column;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            text-decoration: none !important;
        }

        .portal-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
            border-color: #0284c7;
        }

        .portal-icon-wrapper {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            flex-shrink: 0;
        }

        /* Article Card */
        .article-card-home {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            overflow: hidden;
            height: 100%;
            transition: all 0.25s ease;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            display: flex;
            flex-direction: column;
        }

        .article-card-home:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 22px rgba(0,0,0,0.08);
            border-color: #0284c7;
        }

        .article-thumb {
            width: 100%;
            height: 160px;
            object-fit: cover;
            background: #f1f5f9;
        }

        /* Sidebar Modern Cards */
        .sidebar-card-modern {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.04);
            overflow: hidden;
            margin-bottom: 1.5rem;
            transition: all 0.2s ease;
        }

        .sidebar-card-modern:hover {
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
        }

        /* Owl Carousel Clean Heights */
        .site-blocks-cover,
        .site-block-wrap {
            min-height: 0px;
            height: calc(23vh);
        }

        @media (min-width: 576px) {
            .site-blocks-cover,
            .site-block-wrap {
                min-height: 0px;
                height: calc(26vh);
            }
        }

        @media (min-width: 768px) {
            .site-blocks-cover,
            .site-block-wrap {
                min-height: 0px;
                height: calc(30vh);
            }
        }

        @media (min-width: 992px) {
            .site-blocks-cover,
            .site-block-wrap {
                min-height: 0px;
                height: calc(60vh);
            }
        }

        @media (min-width: 1200px) {
            .site-blocks-cover,
            .site-block-wrap {
                min-height: 0px;
                height: calc(75vh);
            }
        }

        .with-dots .owl-dots {
            margin-top: 0px;
            margin-bottom: 0px;
            bottom: 30px;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php include("layouts/navbar.php"); ?>

    <div class="content">
        <!-- Hero Slider (Owl Carousel) -->
        <?php include("layouts/slider.php"); ?>

        <!-- Highlight Admission Section -->
        <div class="container-fluid py-5 bg-light border-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-4 mb-lg-0">
                        <img class="img-thumbnail shadow-sm rounded-lg" src="images/tcas/pr-2026-09-19.jpg" style="width:100%;" alt="รับสมัครนักศึกษาใหม่ หลักสูตรวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ ปีการศึกษา <?= $academicYear ?>">
                    </div>
                    <div class="col-lg-5">
                        <span class="badge badge-primary font-weight-bold px-3 py-1 mb-2">TCAS & รับสมัครนักศึกษาใหม่</span>
                        <h1 class="h3 font-weight-bold text-dark mb-2">
                            หลักสูตรวิทยาการคอมพิวเตอร์ เปิดรับสมัครนักศึกษาใหม่ ปีการศึกษา <?= $academicYear ?>
                        </h1>
                        <p class="text-secondary mb-3" style="line-height: 1.7;">
                            คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์ 
                            เปิดรับสมัครทั้ง <strong>ภาคปกติ (จันทร์ - ศุกร์)</strong> และ <strong>ภาคพิเศษ (เสาร์ - อาทิตย์)</strong> 
                            หลักสูตรทันสมัย มุ่งเน้นการเขียนโปรแกรม ปัญญาประดิษฐ์ (AI) คลาวด์ และวิศวกรรมซอฟต์แวร์ 
                            พร้อมทุนการศึกษาและรองรับการกู้ยืม กยศ./กรอ. 100%
                        </p>
                        <div class="d-flex flex-wrap">
                            <a class="btn btn-primary font-weight-bold px-4 py-2 mr-2 mb-2 shadow-sm" href="admission.php">
                                <i class="fa fa-pencil-square-o mr-1"></i> รายละเอียดสมัครเรียน
                            </a>
                            <a class="btn btn-success font-weight-bold px-3 py-2 mb-2 text-white shadow-sm" href="#qr-code" style="background-color: #06c755; border-color: #06c755;">
                                <i class="fa fa-comments mr-1"></i> Line กลุ่มผู้สมัคร #70
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-5">

            <!-- 40th Anniversary Celebration Banner -->
            <div class="celebration-hero">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <span class="badge badge-warning text-dark font-weight-bold px-3 py-1 mb-2">
                            <i class="fa fa-star text-danger mr-1"></i> วาระเฉลิมฉลอง: พ.ศ. 2528 – ปัจจุบัน
                        </span>
                        <h2 class="h3 mb-2">ก้าวสู่ทศวรรษที่ 5: 40 ปี วิทยาการคอมพิวเตอร์ วไลยอลงกรณ์</h2>
                        <p class="mb-3">
                            ร่วมเฉลิมฉลองประวัติศาสตร์ 4 ทศวรรษแห่งความมุ่งมั่นในการผลิตบัณฑิตคุณภาพด้านวิทยาการคอมพิวเตอร์สู่สังคม 
                            รากฐานอันมั่นคงและพัฒนาการอย่างต่อเนื่องเพื่อความเป็นเลิศทางวิชาการและเทคโนโลยีดิจิทัล
                        </p>
                        <div class="d-flex flex-wrap">
                            <a href="identity.php" class="btn btn-warning btn-sm font-weight-bold px-3 py-2 text-dark mr-2 mb-2 shadow-xs">
                                <i class="fa fa-id-badge mr-1"></i> ดูตราสัญลักษณ์และอัตลักษณ์ (Brand CI)
                            </a>
                            <a href="history.php" class="btn btn-outline-light btn-sm font-weight-bold px-3 py-2 mb-2">
                                <i class="fa fa-history mr-1"></i> ไทม์ไลน์ประวัติหลักสูตร
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center d-none d-lg-block">
                        <img src="images/logo/logo-anniversary-full.png" alt="โลโก้ฉลอง 40 ปี วิทยาการคอมพิวเตอร์" style="max-height: 150px; background: rgba(255,255,255,0.15); padding: 12px; border-radius: 16px;">
                    </div>
                </div>
            </div>

            <!-- 4 จุดเด่นสำคัญของหลักสูตร (Key Stats & Highlights) -->
            <div class="row mb-5">
                <div class="col-6 col-lg-3 mb-3">
                    <div class="stat-highlight-card">
                        <div class="stat-highlight-number">40+ ปี</div>
                        <h3 class="h6 font-weight-bold text-dark mb-1">เกียรติภูมิและประสบการณ์</h3>
                        <p class="small text-muted mb-0">จัดการเรียนการสอนด้านคอมพิวเตอร์ต่อเนื่องตั้งแต่ พ.ศ. 2528</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3 mb-3">
                    <div class="stat-highlight-card">
                        <div class="stat-highlight-number" style="color: #16a34a;">5 ห้องแล็บ</div>
                        <h3 class="h6 font-weight-bold text-dark mb-1">ห้องปฏิบัติการทันสมัย</h3>
                        <p class="small text-muted mb-0">Mac Lab, AI Lab, Network Lab อุปกรณ์พร้อมใช้งาน 1 คนต่อ 1 เครื่อง</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3 mb-3">
                    <div class="stat-highlight-card">
                        <div class="stat-highlight-number" style="color: #ea580c;">50+ เครือข่าย</div>
                        <h3 class="h6 font-weight-bold text-dark mb-1">พันธมิตรฝึกงานและสหกิจ</h3>
                        <p class="small text-muted mb-0">สถานประกอบการชั้นนำทั้งภาครัฐและเอกชน รองรับการฝึกงานจริง</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3 mb-3">
                    <div class="stat-highlight-card">
                        <div class="stat-highlight-number" style="color: #8b5cf6;">12,000.-</div>
                        <h3 class="h6 font-weight-bold text-dark mb-1">ค่าเทอมสบายกระเป๋า</h3>
                        <p class="small text-muted mb-0">อัตราเดียวเท่ากันทั้งภาคปกติและเสาร์-อาทิตย์ กู้ กยศ. ได้ 100%</p>
                    </div>
                </div>
            </div>

            <!-- ส่วนเนื้อหาหลักและแถบข้าง (Main Content & Sidebar) -->
            <div class="row">
                <!-- ฝั่งซ้าย: ระบบบริการออนไลน์ & ข่าวสารบทความล่าสุด (col-lg-8) -->
                <div class="col-lg-8 mb-5 mb-lg-0">

                    <!-- ระบบบริการนักศึกษาและบุคลากร (Service Portals) -->
                    <div class="mb-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h2 class="h4 font-weight-bold text-dark mb-0">
                                <i class="fa fa-th-large text-primary mr-2"></i>ระบบบริการออนไลน์ (Service Portals)
                            </h2>
                            <span class="badge badge-light border text-muted">บริการหลัก</span>
                        </div>

                        <div class="row">
                            <!-- 1. CMS -->
                            <div class="col-md-6 mb-3">
                                <a href="http://cms.vru.ac.th/login.aspx" target="_blank" rel="noopener" class="portal-card" style="border-top: 4px solid #0284c7;">
                                    <div class="d-flex align-items-center">
                                        <div class="portal-icon-wrapper bg-light text-primary mr-3">
                                            <i class="fa fa-graduation-cap"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <span class="badge badge-light border text-primary small mb-1">E-Learning</span>
                                            <h3 class="h6 font-weight-bold text-dark mb-1">ระบบจัดการเรียนการสอน (CMS)</h3>
                                            <p class="text-secondary small mb-0">เข้าสู่ระบบห้องเรียนออนไลน์ ดาวน์โหลดเอกสาร และส่งการบ้าน</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 2. REG เช็คเกรด -->
                            <div class="col-md-6 mb-3">
                                <a href="http://reg1.vru.ac.th/" target="_blank" rel="noopener" class="portal-card" style="border-top: 4px solid #16a34a;">
                                    <div class="d-flex align-items-center">
                                        <div class="portal-icon-wrapper bg-light text-success mr-3">
                                            <i class="fa fa-id-card-o"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <span class="badge badge-light border text-success small mb-1">งานทะเบียน</span>
                                            <h3 class="h6 font-weight-bold text-dark mb-1">ระบบบริการการศึกษา (REG)</h3>
                                            <p class="text-secondary small mb-0">ตรวจสอบผลการเรียน ลงทะเบียนเรียน ตรวจสอบตารางสอบ</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 3. TQF มคอ. -->
                            <div class="col-md-6 mb-3">
                                <a href="http://reg3.vru.ac.th/acad_mka/" target="_blank" rel="noopener" class="portal-card" style="border-top: 4px solid #8b5cf6;">
                                    <div class="d-flex align-items-center">
                                        <div class="portal-icon-wrapper bg-light mr-3" style="color: #8b5cf6;">
                                            <i class="fa fa-file-text-o"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <span class="badge badge-light border small mb-1" style="color: #8b5cf6;">มาตรฐาน มคอ.</span>
                                            <h3 class="h6 font-weight-bold text-dark mb-1">ระบบสารสนเทศ มคอ. (TQF)</h3>
                                            <p class="text-secondary small mb-0">ระบบกรอบมาตรฐานคุณวุฒิระดับอุดมศึกษาแห่งชาติ</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 4. แจ้งซ่อมแล็บคอม -->
                            <div class="col-md-6 mb-3">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLScRpyhvGXtuXUCRsPSL1aJq3cn14Ek2LbI4MfYkFP9daMvoLA/viewform" target="_blank" rel="noopener" class="portal-card" style="border-top: 4px solid #ea580c;">
                                    <div class="d-flex align-items-center">
                                        <div class="portal-icon-wrapper bg-light text-warning mr-3" style="color: #ea580c;">
                                            <i class="fa fa-wrench"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <span class="badge badge-light border text-warning small mb-1" style="color: #ea580c;">แจ้งซ่อมด่วน</span>
                                            <h3 class="h6 font-weight-bold text-dark mb-1">แจ้งซ่อมอุปกรณ์ห้องแล็บ</h3>
                                            <p class="text-secondary small mb-0">แจ้งคอมพิวเตอร์ จอ เมาส์ คีย์บอร์ด หรือแอร์ห้องแล็บขัดข้อง</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 5. แบบสำรวจความพึงพอใจผู้ใช้บริการห้องแล็บ -->
                            <div class="col-md-6 mb-3">
                                <a href="https://forms.gle/5tiPTzzFoivjKCNV6" target="_blank" rel="noopener" class="portal-card" style="border-top: 4px solid #0284c7;">
                                    <div class="d-flex align-items-center">
                                        <div class="portal-icon-wrapper bg-light text-primary mr-3">
                                            <i class="fa fa-desktop"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <span class="badge badge-light border text-primary small mb-1">แบบสำรวจห้องแล็บ</span>
                                            <h3 class="h6 font-weight-bold text-dark mb-1">ความพึงพอใจผู้ใช้บริการห้องแล็บ</h3>
                                            <p class="text-secondary small mb-0">แบบสำรวจความพึงพอใจของผู้ใช้บริการ ห้องปฏิบัติการคอมพิวเตอร์ อาคาร 75 ปี</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 6. แบบสำรวจความพึงพอใจระบบเครือข่ายคอมพิวเตอร์ -->
                            <div class="col-md-6 mb-3">
                                <a href="https://forms.gle/7StYDzL6H2esgBi1A" target="_blank" rel="noopener" class="portal-card" style="border-top: 4px solid #06b6d4;">
                                    <div class="d-flex align-items-center">
                                        <div class="portal-icon-wrapper bg-light text-info mr-3">
                                            <i class="fa fa-wifi"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <span class="badge badge-light border text-info small mb-1">ระบบเครือข่าย</span>
                                            <h3 class="h6 font-weight-bold text-dark mb-1">ความพึงพอใจระบบเครือข่ายคอมพิวเตอร์</h3>
                                            <p class="text-secondary small mb-0">แบบสำรวจความพึงพอใจระบบเครือข่ายคอมพิวเตอร์ ห้องปฏิบัติการคอมพิวเตอร์ อาคาร 75 ปี</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- ข่าวสารและบทความวิชาการล่าสุด (Latest News & Articles) -->
                    <div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h2 class="h4 font-weight-bold text-dark mb-0">
                                <i class="fa fa-newspaper-o text-primary mr-2"></i>ข่าวสารและบทความวิชาการล่าสุด
                            </h2>
                            <a href="content" class="btn btn-outline-primary btn-sm font-weight-bold">
                                ดูบทความทั้งหมด <i class="fa fa-arrow-right ml-1"></i>
                            </a>
                        </div>

                        <div class="row">
                            <?php 
                            if (!empty($articles)) {
                                $display_articles = array_slice($articles, 0, 3);
                                foreach ($display_articles as $art) { 
                            ?>
                                <div class="col-md-4 mb-4">
                                    <div class="article-card-home">
                                        <a href="content/<?= htmlspecialchars($art->id ?? '') ?>">
                                            <img src="<?= htmlspecialchars($art->image_url ?? 'images/tcas/pr-2026-09-19.jpg') ?>" class="article-thumb" alt="<?= htmlspecialchars($art->title ?? 'บทความ') ?>" loading="lazy">
                                        </a>
                                        <div class="p-3 d-flex flex-column flex-grow-1">
                                            <div class="text-muted small mb-1">
                                                <i class="fa fa-calendar-o mr-1"></i> <?= htmlspecialchars($art->pubDate ?? '') ?>
                                            </div>
                                            <h3 class="h6 font-weight-bold text-dark mb-2" style="line-height: 1.5; font-size: 0.95rem;">
                                                <a href="content/<?= htmlspecialchars($art->id ?? '') ?>" class="text-dark text-decoration-none">
                                                    <?= htmlspecialchars(mb_substr($art->title ?? '', 0, 65)) ?>...
                                                </a>
                                            </h3>
                                            <p class="text-secondary small mb-3 flex-grow-1" style="line-height: 1.6;">
                                                <?= htmlspecialchars(mb_substr(strip_tags($art->first_paragraph ?? ''), 0, 85)) ?>...
                                            </p>
                                            <a href="content/<?= htmlspecialchars($art->id ?? '') ?>" class="btn btn-sm btn-light border font-weight-bold text-primary mt-auto">
                                                อ่านต่อ <i class="fa fa-angle-right ml-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php 
                                } 
                            } else { 
                            ?>
                                <!-- Fallback Card ถ้า API ไม่ตอบสนอง -->
                                <div class="col-12">
                                    <div class="p-4 bg-light rounded text-center text-muted">
                                        <i class="fa fa-book fa-2x mb-2 text-primary"></i>
                                        <h3 class="h6 font-weight-bold text-dark">ติดตามบทความวิชาการและความรู้ด้านวิทยาการคอมพิวเตอร์</h3>
                                        <p class="small mb-2">อัปเดตบทความและเทคโนโลยีการเขียนโปรแกรม ปัญญาประดิษฐ์ และระบบคลาวด์</p>
                                        <a href="content" class="btn btn-primary btn-sm font-weight-bold px-3">
                                            ไปยังหน้ารวมบทความ
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>

                <!-- ฝั่งขวา: แถบข้อมูลสรุปหลักสูตร (Sidebar col-lg-4) -->
                <div class="col-lg-4">

                    <!-- การ์ด 1: ชื่อปริญญา -->
                    <div class="sidebar-card-modern">
                        <div class="p-3 bg-light border-bottom d-flex align-items-center">
                            <i class="fa fa-certificate text-primary mr-2" style="font-size: 1.25rem;"></i>
                            <h2 class="h6 font-weight-bold text-dark mb-0">ชื่อปริญญาที่ได้รับ</h2>
                        </div>
                        <div class="p-3 text-center">
                            <p class="font-weight-bold text-dark mb-1" style="font-size: 1.05rem;">
                                วิทยาศาสตรบัณฑิต (วท.บ.)<br>
                                <span class="text-primary">(วิทยาการคอมพิวเตอร์)</span>
                            </p>
                            <p class="text-muted small mb-3">
                                Bachelor of Science (B.Sc.)<br>
                                in Computer Science
                            </p>
                            <a href="structure.php" class="btn btn-outline-primary btn-sm btn-block font-weight-bold">
                                <i class="fa fa-list-alt mr-1"></i> ดูโครงสร้างหลักสูตร (OBE)
                            </a>
                        </div>
                    </div>

                    <!-- การ์ด 2: ค่าธรรมเนียมการศึกษา -->
                    <div class="sidebar-card-modern">
                        <div class="p-3 bg-light border-bottom d-flex align-items-center">
                            <i class="fa fa-money text-success mr-2" style="font-size: 1.25rem;"></i>
                            <h2 class="h6 font-weight-bold text-dark mb-0">ค่าธรรมเนียมการศึกษา</h2>
                        </div>
                        <div class="p-3">
                            <div class="text-center py-2">
                                <div class="text-muted small">ค่าเทอมเหมาจ่ายคงที่</div>
                                <div class="h2 font-weight-bold text-success mb-0">12,000 <span style="font-size: 1rem; font-weight: normal;">บาท / เทอม</span></div>
                                <div class="badge badge-success text-white px-2 py-1 mt-1">อัตราเท่ากันทั้งภาคปกติ และเสาร์-อาทิตย์</div>
                            </div>
                            <hr class="my-2">
                            <ul class="list-unstyled small text-secondary mb-3 pl-1" style="line-height: 1.8;">
                                <li><i class="fa fa-check text-success mr-1"></i> ภาคปกติ (จันทร์ - ศุกร์): 12,000 บาท</li>
                                <li><i class="fa fa-check text-success mr-1"></i> ภาคพิเศษ (เสาร์ - อาทิตย์): 12,000 บาท</li>
                                <li><i class="fa fa-check text-success mr-1"></i> กู้ยืม กยศ. / กรอ. ได้ 100%</li>
                            </ul>
                            <a href="admission.php" class="btn btn-success btn-sm btn-block font-weight-bold text-white shadow-xs" style="background-color: #16a34a; border-color: #16a34a;">
                                <i class="fa fa-user-plus mr-1"></i> ข้อมูลการสมัครเรียน
                            </a>
                        </div>
                    </div>

                    <!-- การ์ด 3: ประธานหลักสูตร -->
                    <div class="sidebar-card-modern">
                        <div class="p-3 bg-light border-bottom d-flex align-items-center">
                            <i class="fa fa-user-circle text-primary mr-2" style="font-size: 1.25rem;"></i>
                            <h2 class="h6 font-weight-bold text-dark mb-0">ประธานหลักสูตร</h2>
                        </div>
                        <div class="p-3 text-center">
                            <img class="rounded-circle shadow-sm mb-2" src="images/Teacher/Nattira.jpg" alt="ผศ.ณัฏฐิรา ศุขไพบูลย์ ประธานหลักสูตรวิทยาการคอมพิวเตอร์" style="width: 100px; height: 100px; object-fit: cover; border: 3px solid #e2e8f0;">
                            <h3 class="h6 font-weight-bold text-dark mb-0">ผศ.ณัฏฐิรา ศุขไพบูลย์</h3>
                            <div class="text-primary small font-weight-bold mb-1">ประธานหลักสูตรวิทยาการคอมพิวเตอร์</div>
                            <p class="text-muted small mb-3">ห้องพักอาจารย์ IT102 อาคาร 75 ปี</p>
                            <a href="teacher.php" class="btn btn-outline-dark btn-sm btn-block font-weight-bold">
                                <i class="fa fa-users mr-1"></i> ทำเนียบคณาจารย์ทั้งหมด
                            </a>
                        </div>
                    </div>

                    <!-- การ์ด 4: เมนูด่วนสำหรับนักศึกษา -->
                    <div class="sidebar-card-modern">
                        <div class="p-3 bg-light border-bottom d-flex align-items-center">
                            <i class="fa fa-bookmark text-warning mr-2" style="font-size: 1.25rem;"></i>
                            <h2 class="h6 font-weight-bold text-dark mb-0">เมนูสำคัญสำหรับนักศึกษา</h2>
                        </div>
                        <div class="list-group list-group-flush small">
                            <a href="student-guide.php" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center font-weight-bold text-dark py-2">
                                <span><i class="fa fa-book text-primary mr-2"></i> คู่มือนักศึกษา & แผนการเรียน</span>
                                <i class="fa fa-angle-right text-muted"></i>
                            </a>
                            <a href="project-guide.php" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center font-weight-bold text-dark py-2">
                                <span><i class="fa fa-file-code-o text-success mr-2"></i> คู่มือโครงงานนักศึกษา</span>
                                <i class="fa fa-angle-right text-muted"></i>
                            </a>
                            <a href="internship-documents.php" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center font-weight-bold text-dark py-2">
                                <span><i class="fa fa-download text-info mr-2"></i> เอกสารฝึกงานและสหกิจศึกษา</span>
                                <i class="fa fa-angle-right text-muted"></i>
                            </a>
                            <a href="feedback.php" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center font-weight-bold text-dark py-2">
                                <span><i class="fa fa-comments text-danger mr-2"></i> ข้อเสนอแนะและเรื่องร้องเรียน</span>
                                <i class="fa fa-angle-right text-muted"></i>
                            </a>
                            <a href="contact.php" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center font-weight-bold text-dark py-2">
                                <span><i class="fa fa-map-marker text-warning mr-2"></i> ติดต่อเรา & แผนผังอาคาร</span>
                                <i class="fa fa-angle-right text-muted"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Technology Stack Section -->
        <?php include("layouts/technology-stack.php"); ?>

        <!-- Line กลุ่มผู้สมัคร ปี 70 (CS-VRU#70) -->
        <div class="container-fluid py-4 bg-white border-top">
            <?php include("layouts/group-line-qr.php"); ?>
        </div>

        <!-- Structured Data (Schema.org EducationalOrganization) -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "EducationalOrganization",
            "name": "สาขาวิชาวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์",
            "url": "https://cs.vru.ac.th/",
            "logo": "https://cs.vru.ac.th/images/logo/logo-anniversary-full.png",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "เลขที่ 1 หมู่ 20 ถ.พหลโยธิน กม. 48 ต.คลองหนึ่ง อ.คลองหลวง",
                "addressLocality": "ปทุมธานี",
                "postalCode": "13180",
                "addressCountry": "TH"
            },
            "telephone": "0-2529-0674-7 ต่อ 365",
            "sameAs": [
                "https://www.facebook.com/computersciencevru",
                "https://www.facebook.com/cs.vru.ac.th"
            ]
        }
        </script>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>
</body>

</html>
