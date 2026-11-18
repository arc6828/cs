<?php
$og_title = "ติดต่อเรา | หลักสูตรวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ (VRU)";
$og_description = "ข้อมูลการติดต่อหลักสูตรวิทยาการคอมพิวเตอร์ อาคาร 75 ปี วไลยอลงกรณ์ คณะวิทยาศาสตร์และเทคโนโลยี มรภ.วไลยอลงกรณ์ โทร. 0-2529-0674-7 ต่อ 365 แผนที่และการเดินทาง เวลาทำการ และช่องทางออนไลน์";
$og_url = "https://cs.vru.ac.th/contact.php";
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

        .contact-hero {
            background: linear-gradient(135deg, #1e3a8a 0%, #0284c7 100%);
            color: #ffffff;
            border-radius: 16px;
            padding: 2.25rem 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 20px rgba(2, 132, 199, 0.15);
        }

        .contact-hero h1 {
            color: #ffffff;
            font-weight: 800;
        }

        .contact-hero p {
            color: #e0f2fe;
            font-size: 1.05rem;
            margin-bottom: 0;
            line-height: 1.6;
        }

        .contact-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 1.5rem;
            height: 100%;
            transition: all 0.25s ease-in-out;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
            display: flex;
            flex-direction: column;
        }

        .contact-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
            border-color: #0284c7;
        }

        .contact-icon {
            width: 54px;
            height: 54px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
            margin-bottom: 1.25rem;
        }

        .map-wrapper {
            position: relative;
            width: 100%;
            height: 420px;
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid #cbd5e1;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
        }

        .map-wrapper iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        .travel-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-left: 4px solid #0284c7;
            border-radius: 8px;
            padding: 1rem 1.25rem;
            margin-bottom: 1rem;
            transition: all 0.2s ease;
        }

        .travel-item:hover {
            background: #f8fafc;
            border-left-color: #0369a1;
        }

        .directory-badge {
            background: #f1f5f9;
            color: #0f172a;
            font-weight: 700;
            padding: 0.35rem 0.65rem;
            border-radius: 6px;
            font-size: 0.85rem;
            display: inline-block;
        }

        .quick-action-card {
            background: #f8fafc;
            border: 1px dashed #cbd5e1;
            border-radius: 12px;
            padding: 1.25rem;
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
                    <li class="breadcrumb-item active text-dark font-weight-bold" aria-current="page">ติดต่อเรา</li>
                </ol>
            </nav>

            <!-- Hero Banner -->
            <div class="contact-hero">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <span class="badge badge-warning text-dark font-weight-bold px-3 py-1 mb-2">CS-VRU Contact Center</span>
                        <h1 class="h2 mb-2">ติดต่อหลักสูตรวิทยาการคอมพิวเตอร์</h1>
                        <p>
                            คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์<br>
                            ยินดีให้คำปรึกษา แนะนำหลักสูตร การสมัครเรียน และติดต่อประสานงานทุกวันทำการ
                        </p>
                    </div>
                    <div class="col-lg-4 text-center d-none d-lg-block">
                        <i class="fa fa-map-marker" style="font-size: 6rem; opacity: 0.25; color: #ffffff;"></i>
                    </div>
                </div>
            </div>

            <!-- 4 ช่องทางการติดต่อหลัก (4 Core Contact Cards) -->
            <div class="mb-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="h4 font-weight-bold mb-0">
                        <i class="fa fa-address-book text-primary mr-2"></i>ช่องทางการติดต่อหลัก
                    </h2>
                    <span class="badge badge-light border text-muted">4 ช่องทาง</span>
                </div>

                <div class="row">
                    <!-- ช่องทางที่ 1: ที่ตั้งสำนักงาน -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="contact-card" style="border-top: 4px solid #0284c7;">
                            <div class="contact-icon bg-light text-primary">
                                <i class="fa fa-building-o"></i>
                            </div>
                            <h3 class="h6 font-weight-bold text-dark mb-2">ที่ตั้งสำนักงาน & อาคารเรียน</h3>
                            <p class="text-secondary small mb-3 flex-grow-1" style="line-height: 1.6;">
                                อาคาร 75 ปี วไลยอลงกรณ์ (คณะวิทยาศาสตร์และเทคโนโลยี)<br>
                                • ชั้น 1: ห้องพักอาจารย์ (IT102)<br>
                                • ชั้น 2: ห้องประสานงานหลักสูตร (IT201)<br>
                                เลขที่ 1 หมู่ 20 ถ.พหลโยธิน ต.คลองหนึ่ง อ.คลองหลวง จ.ปทุมธานี 13180
                            </p>
                            <a href="#map-section" class="btn btn-outline-primary btn-sm btn-block font-weight-bold">
                                <i class="fa fa-map-marker mr-1"></i> ดูแผนที่ด้านล่าง
                            </a>
                        </div>
                    </div>

                    <!-- ช่องทางที่ 2: หมายเลขโทรศัพท์ -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="contact-card" style="border-top: 4px solid #16a34a;">
                            <div class="contact-icon bg-light text-success">
                                <i class="fa fa-phone"></i>
                            </div>
                            <h3 class="h6 font-weight-bold text-dark mb-2">หมายเลขโทรศัพท์ & โทรสาร</h3>
                            <div class="text-secondary small mb-3 flex-grow-1" style="line-height: 1.6;">
                                <div class="mb-2">
                                    <strong class="text-dark">เบอร์กลางมหาวิทยาลัย:</strong><br>
                                    <span class="text-dark">0-2529-0674-7 ต่อ 365</span>
                                </div>
                                <div class="mb-2">
                                    <strong class="text-dark">เบอร์ตรงคณะวิทย์ฯ:</strong><br>
                                    <span class="text-dark">02-909-1432 ต่อ 14</span>
                                </div>
                                <div>
                                    <strong class="text-dark">โทรสาร (Fax):</strong><br>
                                    <span>02-909-3029</span>
                                </div>
                            </div>
                            <a href="tel:025290674" class="btn btn-success btn-sm btn-block font-weight-bold text-white" style="background-color: #16a34a; border-color: #16a34a;">
                                <i class="fa fa-phone mr-1"></i> โทรออก 02-529-0674
                            </a>
                        </div>
                    </div>

                    <!-- ช่องทางที่ 3: สื่อสังคมออนไลน์ & อีเมล -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="contact-card" style="border-top: 4px solid #8b5cf6;">
                            <div class="contact-icon bg-light text-purple" style="color: #8b5cf6;">
                                <i class="fa fa-globe"></i>
                            </div>
                            <h3 class="h6 font-weight-bold text-dark mb-2">สื่อสังคมออนไลน์ & อีเมล</h3>
                            <p class="text-secondary small mb-3 flex-grow-1" style="line-height: 1.6;">
                                • <strong>Facebook:</strong> สาขาวิชาวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์<br>
                                • <strong>Line กลุ่ม:</strong> ผู้สมัครเรียน ปี 70<br>
                                • <strong>Email:</strong> <a href="mailto:cs@vru.ac.th" class="text-primary font-weight-bold">cs@vru.ac.th</a><br>
                                • <strong>เว็บไซต์คณะ:</strong> <a href="https://sci.vru.ac.th" target="_blank" rel="noopener" class="text-muted">sci.vru.ac.th</a>
                            </p>
                            <a href="https://www.facebook.com/computersciencevru" target="_blank" rel="noopener" class="btn btn-primary btn-sm btn-block font-weight-bold" style="background-color: #1877f2; border-color: #1877f2;">
                                <i class="fa fa-facebook-square mr-1"></i> ส่งข้อความ Facebook
                            </a>
                        </div>
                    </div>

                    <!-- ช่องทางที่ 4: เวลาทำการ -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="contact-card" style="border-top: 4px solid #ea580c;">
                            <div class="contact-icon bg-light text-warning" style="color: #ea580c;">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <h3 class="h6 font-weight-bold text-dark mb-2">เวลาทำการ & การนัดหมาย</h3>
                            <div class="text-secondary small mb-3 flex-grow-1" style="line-height: 1.6;">
                                <div class="mb-2">
                                    <strong class="text-dark">ภาคปกติ (จันทร์ - ศุกร์):</strong><br>
                                    08:30 – 16:30 น.
                                </div>
                                <div class="mb-2">
                                    <strong class="text-dark">ภาคพิเศษ (เสาร์ - อาทิตย์):</strong><br>
                                    08:30 – 17:00 น. (ช่วงเปิดภาคการศึกษา)
                                </div>
                                <div>
                                    <strong class="text-muted">วันหยุดนักขัตฤกษ์:</strong> ปิดทำการ
                                </div>
                            </div>
                            <a href="teacher.php" class="btn btn-outline-dark btn-sm btn-block font-weight-bold">
                                <i class="fa fa-user-circle mr-1"></i> ดูทำเนียบคณาจารย์
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- แผนที่แบบ Responsive (Iframe Embed) และคู่มือการเดินทาง -->
            <div id="map-section" class="mb-5 pt-2">
                <div class="row">
                    <!-- ฝั่งแผนที่ (Google Maps Embed - ปลอดภัย ไม่ต้องใช้ API Key) -->
                    <div class="col-lg-7 mb-4 mb-lg-0">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h2 class="h4 font-weight-bold mb-0">
                                <i class="fa fa-map text-primary mr-2"></i>แผนที่ตั้งมหาวิทยาลัย & อาคาร 75 ปี
                            </h2>
                        </div>
                        <div class="map-wrapper mb-3">
                            <iframe 
                                src="https://maps.google.com/maps?q=14.132371,100.616594+(%E0%B8%AB%E0%B8%A5%E0%B8%B1%E0%B8%81%E0%B8%AA%E0%B8%B9%E0%B8%95%E0%B8%A3%E0%B8%A7%E0%B8%92%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%84%E0%B8%AD%E0%B8%A1%E0%B8%9E%E0%B8%B4%E0%B8%A7%E0%B9%80%E0%B8%95%E0%B8%AD%E0%B8%A3%E0%B9%8C+%E0%B8%A1%E0%B8%A3%E0%B8%A0.%E0%B8%A7%E0%B9%84%E0%B8%A5%E0%B8%A2%E0%B8%AD%E0%B8%A5%E0%B8%87%E0%B8%81%E0%B8%A3%E0%B8%93%E0%B9%8C)&amp;hl=th&amp;z=16&amp;output=embed" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade" 
                                title="แผนที่ตั้งหลักสูตรวิทยาการคอมพิวเตอร์ อาคาร 75 ปี มรภ.วไลยอลงกรณ์">
                            </iframe>
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <span class="text-muted small">
                                <i class="fa fa-compass text-danger mr-1"></i> พิกัด GPS: 14.132371, 100.616594 (กม. 48 ถ.พหลโยธิน)
                            </span>
                            <a href="https://www.google.com/maps/dir/?api=1&destination=14.132371,100.616594" 
                               target="_blank" rel="noopener noreferrer" 
                               class="btn btn-primary btn-sm font-weight-bold px-3 shadow-xs">
                                <i class="fa fa-location-arrow mr-1"></i> นำทางด้วย Google Maps
                            </a>
                        </div>
                    </div>

                    <!-- ฝั่งคำแนะนำการเดินทาง (Transportation Guide) -->
                    <div class="col-lg-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h2 class="h4 font-weight-bold mb-0">
                                <i class="fa fa-bus text-primary mr-2"></i>คำแนะนำการเดินทาง
                            </h2>
                        </div>

                        <div class="travel-item">
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-bus text-primary mr-2 font-weight-bold"></i>
                                <strong class="text-dark">รถโดยสารประจำทาง (ขสมก.)</strong>
                            </div>
                            <p class="text-secondary small mb-0" style="line-height: 1.6;">
                                สาย 39, 510, 520 (ป้ายหน้ามหาวิทยาลัยราชภัฏวไลยอลงกรณ์ฯ ข้ามสะพานลอยเข้าสู่ประตูหน้า)
                            </p>
                        </div>

                        <div class="travel-item">
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-car text-success mr-2 font-weight-bold"></i>
                                <strong class="text-dark">รถตู้โดยสารสาธารณะ</strong>
                            </div>
                            <p class="text-secondary small mb-0" style="line-height: 1.6;">
                                รถตู้สายฟิวเจอร์พาร์ค รังสิต – วไลยอลงกรณ์, สายอยุธยา, สายสระบุรี หรือสายนวนคร
                            </p>
                        </div>

                        <div class="travel-item">
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-train text-danger mr-2 font-weight-bold"></i>
                                <strong class="text-dark">รถไฟ / รถไฟฟ้า (SRT)</strong>
                            </div>
                            <p class="text-secondary small mb-0" style="line-height: 1.6;">
                                • รถไฟฟ้าชานเมืองสายสีแดง ลงสถานีรังสิต ต่อรถตู้หรือรถประจำทาง<br>
                                • รถไฟชานเมือง (สายเหนือ/อีสาน) ลงสถานีเชียงรากน้อย หรือสถานีธรรมศาสตร์
                            </p>
                        </div>

                        <div class="travel-item">
                            <div class="d-flex align-items-center mb-1">
                                <i class="fa fa-automobile text-warning mr-2 font-weight-bold"></i>
                                <strong class="text-dark">รถยนต์ส่วนบุคคล</strong>
                            </div>
                            <p class="text-secondary small mb-0" style="line-height: 1.6;">
                                วิ่งเส้นถนนพหลโยธิน (ทางหลวงหมายเลข 1) กม. 48 เลยนิคมฯ นวนคร 2 กม. เข้าประตูหลัก มีที่จอดรถสะดวกสบายรอบอาคาร 75 ปี
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ผังที่ตั้งภายในอาคาร 75 ปี (Indoor Directory) -->
            <div class="card border-0 shadow-sm mb-5" style="border-radius: 12px; background: #ffffff;">
                <div class="card-body p-4">
                    <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                        <h2 class="h4 font-weight-bold text-dark mb-0">
                            <i class="fa fa-sitemap text-primary mr-2"></i>ผังห้องเรียนและห้องปฏิบัติการ อาคาร 75 ปี วไลยอลงกรณ์
                        </h2>
                        <a href="lab.php" class="btn btn-outline-primary btn-sm font-weight-bold">
                            <i class="fa fa-desktop mr-1"></i> ดูข้อมูลห้องแล็บทั้งหมด
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="p-3 bg-light rounded h-100">
                                <span class="directory-badge mb-2"><i class="fa fa-users text-primary mr-1"></i> ชั้น 1 และ ชั้น 2</span>
                                <h3 class="h6 font-weight-bold text-dark mb-1">สำนักงานและห้องพักอาจารย์</h3>
                                <ul class="list-unstyled small text-secondary mb-0" style="line-height: 1.7;">
                                    <li>• <strong>ห้อง IT102 (ชั้น 1):</strong> ห้องพักอาจารย์ผู้รับผิดชอบหลักสูตร</li>
                                    <li>• <strong>ห้อง IT201 (ชั้น 2):</strong> ห้องประสานงานหลักสูตรวิทยาการคอมพิวเตอร์</li>
                                    <li>• <strong>หน้าห้อง IT201:</strong> ตู้รับฟังความคิดเห็นและเรื่องร้องเรียน</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="p-3 bg-light rounded h-100">
                                <span class="directory-badge mb-2"><i class="fa fa-laptop text-success mr-1"></i> ชั้น 4</span>
                                <h3 class="h6 font-weight-bold text-dark mb-1">ห้องปฏิบัติการคอมพิวเตอร์</h3>
                                <ul class="list-unstyled small text-secondary mb-0" style="line-height: 1.7;">
                                    <li>• <strong>ห้อง IT401:</strong> ห้องปฏิบัติการคอมพิวเตอร์สำหรับการเรียนการสอน</li>
                                    <li>• <strong>ห้อง IT402:</strong> ห้องปฏิบัติการฝึกปฏิบัติการเขียนโปรแกรม</li>
                                    <li>• ระบบเครือข่ายความเร็วสูงและจอ Interactive Board</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="p-3 bg-light rounded h-100">
                                <span class="directory-badge mb-2"><i class="fa fa-cogs text-danger mr-1"></i> ชั้น 5</span>
                                <h3 class="h6 font-weight-bold text-dark mb-1">ศูนย์ปฏิบัติการขั้นสูง & โครงงาน</h3>
                                <ul class="list-unstyled small text-secondary mb-0" style="line-height: 1.7;">
                                    <li>• <strong>ห้อง IT501 - IT504:</strong> ห้องปฏิบัติการโครงงานและวิจัย</li>
                                    <li>• <strong>Mac Lab:</strong> ปฏิบัติการพัฒนาแอปพลิเคชันบนอุปกรณ์พกพา</li>
                                    <li>• <strong>AI & Data Science Lab:</strong> การเรียนรู้เชิงลึกและปัญญาประดิษฐ์</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ทางลัดบริการและข้อเสนอแนะ -->
            <div class="row mb-5">
                <div class="col-md-6 mb-3 mb-md-0">
                    <div class="quick-action-card d-flex align-items-center">
                        <div class="mr-3 text-warning">
                            <i class="fa fa-comments-o fa-2x"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h3 class="h6 font-weight-bold text-dark mb-1">ข้อเสนอแนะและเรื่องร้องเรียน</h3>
                            <p class="text-secondary small mb-0">ระบบรับฟังความคิดเห็นตามเกณฑ์ มคอ.2 หมวด 8 รักษาความลับสูงสุด</p>
                        </div>
                        <a href="feedback.php" class="btn btn-warning btn-sm font-weight-bold text-dark ml-2">
                            ไปที่หน้า Feedback
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="quick-action-card d-flex align-items-center">
                        <div class="mr-3 text-danger">
                            <i class="fa fa-wrench fa-2x"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h3 class="h6 font-weight-bold text-dark mb-1">แจ้งซ่อมอุปกรณ์ในห้องแล็บ</h3>
                            <p class="text-secondary small mb-0">คอมพิวเตอร์ อุปกรณ์ หรือระบบเครือข่ายขัดข้อง แจ้งฝ่ายเทคนิค</p>
                        </div>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLScRpyhvGXtuXUCRsPSL1aJq3cn14Ek2LbI4MfYkFP9daMvoLA/viewform" target="_blank" rel="noopener noreferrer" class="btn btn-outline-danger btn-sm font-weight-bold ml-2">
                            แจ้งซ่อมอุปกรณ์
                        </a>
                    </div>
                </div>
            </div>

            <hr class="my-4">

            <!-- Line กลุ่มผู้สมัคร ปี 70 (CS-VRU#70) -->
            <?php include("layouts/group-line-qr.php"); ?>
        </div>
    </div>

    <!-- Structured Data (Schema.org ContactPage) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ContactPage",
        "name": "ติดต่อหลักสูตรวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์",
        "url": "https://cs.vru.ac.th/contact.php",
        "mainEntity": {
            "@type": "EducationalOrganization",
            "name": "หลักสูตรวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์",
            "url": "https://cs.vru.ac.th/",
            "logo": "https://cs.vru.ac.th/images/css.png",
            "telephone": "0-2529-0674-7 ต่อ 365",
            "faxNumber": "02-909-3029",
            "email": "cs@vru.ac.th",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "อาคาร 75 ปี วไลยอลงกรณ์ คณะวิทยาศาสตร์และเทคโนโลยี เลขที่ 1 หมู่ 20 ถ.พหลโยธิน กม. 48 ต.คลองหนึ่ง อ.คลองหลวง",
                "addressLocality": "ปทุมธานี",
                "postalCode": "13180",
                "addressCountry": "TH"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 14.132371,
                "longitude": 100.616594
            },
            "openingHoursSpecification": [
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": [
                        "Monday",
                        "Tuesday",
                        "Wednesday",
                        "Thursday",
                        "Friday"
                    ],
                    "opens": "08:30",
                    "closes": "16:30"
                },
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": [
                        "Saturday",
                        "Sunday"
                    ],
                    "opens": "08:30",
                    "closes": "17:00"
                }
            ],
            "sameAs": [
                "https://www.facebook.com/computersciencevru",
                "https://www.facebook.com/cs.vru.ac.th"
            ]
        }
    }
    </script>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>
</body>

</html>
