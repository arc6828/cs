<?php
/**
 * Student Guide (คู่มือนักศึกษา) - Computer Science, VRU
 * อ้างอิงตามหลักสูตรวิทยาศาสตรบัณฑิต วท.บ. (วิทยาการคอมพิวเตอร์) มคอ.2 พ.ศ. 2570
 * และสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์
 */
$og_title = "คู่มือนักศึกษา Student Guide | วิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์";
$og_description = "ศูนย์รวมคู่มือนักศึกษารายปี แผนการศึกษา 4 ปี (124 หน่วยกิต) เกณฑ์สำเร็จการศึกษา และลิงก์ระบบบริการการศึกษา หลักสูตรวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ ในพระบรมราชูปถัมภ์";
$og_url = "https://cs.vru.ac.th/student-guide.php";
$og_image = "https://cs.vru.ac.th/images/banner_computer_science.png";
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <?php include("layouts/meta.php"); ?>
    <style>
        body, .content {
            color: #212529 !important;
        }

        .guide-hero {
            background: linear-gradient(135deg, #1b3557 0%, #0d1b2a 100%);
            color: #ffffff;
            border-radius: 16px;
            padding: 3rem 2rem;
            margin-bottom: 2.5rem;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(13, 27, 42, 0.15);
        }

        .guide-hero h1 {
            color: #ffffff !important;
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .guide-hero p {
            color: #e0e6ed !important;
            font-size: 1.1rem;
            max-width: 800px;
        }

        .guide-card {
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            background: #ffffff;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            height: 100%;
        }

        .guide-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.08);
            border-color: #cbd5e1;
        }

        .section-header {
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 0.75rem;
            margin-bottom: 1.5rem;
        }

        .section-header h2 {
            font-weight: 700;
            color: #1e293b;
            font-size: 1.4rem;
        }

        .manual-year-card {
            border-left: 4px solid #0284c7;
            background: #f8fafc;
            padding: 1rem 1.25rem;
            border-radius: 8px;
            margin-bottom: 0.75rem;
            transition: all 0.2s ease;
        }

        .manual-year-card:hover {
            background: #f0f9ff;
            border-left-color: #0369a1;
            transform: translateX(4px);
        }

        .badge-year {
            background-color: #0284c7;
            color: #ffffff;
            font-weight: 600;
            padding: 0.35rem 0.65rem;
            border-radius: 6px;
        }

        .portal-btn {
            display: flex;
            align-items: center;
            padding: 1rem 1.25rem;
            border-radius: 10px;
            background: #ffffff;
            border: 1px solid #e2e8f0;
            color: #1e293b;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s ease;
            box-shadow: 0 2px 4px rgba(0,0,0,0.03);
            margin-bottom: 1rem;
        }

        .portal-btn:hover {
            background: #f8fafc;
            color: #0284c7;
            border-color: #0284c7;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(2, 132, 199, 0.1);
            text-decoration: none;
        }

        .portal-icon {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            background: #e0f2fe;
            color: #0284c7;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            margin-right: 1rem;
            flex-shrink: 0;
        }

        .nav-pills-custom .nav-link {
            border-radius: 8px;
            font-weight: 600;
            color: #475569;
            padding: 0.6rem 1.25rem;
            margin-right: 0.5rem;
            background: #f1f5f9;
        }

        .nav-pills-custom .nav-link.active {
            background: #0284c7;
            color: #ffffff;
        }

        .checklist-item {
            display: flex;
            align-items: flex-start;
            padding: 0.85rem 0;
            border-bottom: 1px dashed #e2e8f0;
        }

        .checklist-item:last-child {
            border-bottom: none;
        }

        .checklist-icon {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: #dcfce7;
            color: #16a34a;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
            margin-right: 0.85rem;
            flex-shrink: 0;
            margin-top: 2px;
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
                    <li class="breadcrumb-item text-secondary">นักศึกษา</li>
                    <li class="breadcrumb-item active text-dark font-weight-bold" aria-current="page">คู่มือนักศึกษา (Student Guide)</li>
                </ol>
            </nav>

            <!-- Hero Section -->
            <div class="guide-hero">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <span class="badge badge-warning text-dark font-weight-bold px-3 py-1 mb-2">CS Student Resource Hub</span>
                        <h1 class="h2 mb-3">คู่มือนักศึกษา (Student Guide)</h1>
                        <p class="mb-0">
                            ศูนย์รวมคู่มือนักศึกษารายปี ข้อบังคับ ระเบียบการจัดการศึกษาระดับปริญญาตรี 
                            แผนการศึกษา 4 ปี (124 หน่วยกิต) เกณฑ์สำเร็จการศึกษา และลิงก์บริการการศึกษาสำคัญ 
                            หลักสูตรวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์
                        </p>
                    </div>
                    <div class="col-lg-4 text-center d-none d-lg-block">
                        <i class="fa fa-graduation-cap" style="font-size: 7rem; opacity: 0.2; color: #ffffff;"></i>
                    </div>
                </div>
            </div>

            <!-- Notice: Line Group for Applicants / New Students -->
            <div class="alert alert-success d-flex flex-wrap align-items-center justify-content-between p-3 mb-4 shadow-sm" style="border-radius: 10px; background: #f0fdf4; border-color: #bbf7d0;">
                <div class="d-flex align-items-center mb-2 mb-md-0">
                    <div class="mr-3" style="font-size: 1.8rem; color: #16a34a;">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div>
                        <div class="font-weight-bold text-dark" style="font-size: 0.95rem;">Line กลุ่มผู้สมัครเรียน ปี 70 (CS-VRU#70)</div>
                        <small class="text-secondary">สำหรับผู้สมัครและนักศึกษาใหม่ ภาคปกติ (จันทร์-ศุกร์) และภาคพิเศษ (เสาร์-อาทิตย์)</small>
                    </div>
                </div>
                <div>
                    <a href="admission.php#qr-code" class="btn btn-success btn-sm font-weight-bold px-3 py-2 text-white" style="background-color: #06c755; border-color: #06c755;">
                        <i class="fa fa-qrcode mr-1"></i> ดู QR Code และเข้า Line กลุ่มผู้สมัคร #70
                    </a>
                </div>
            </div>

            <!-- Quick Service Portals Row -->
            <div class="mb-5">
                <div class="section-header d-flex justify-content-between align-items-center">
                    <h2><i class="fa fa-link text-primary mr-2"></i>ระบบบริการการศึกษาและช่องทางสำคัญ (Essential Student Portals)</h2>
                    <span class="small text-muted font-weight-bold">เชื่อมต่อบริการมหาวิทยาลัย</span>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <a href="https://reg1.vru.ac.th/" target="_blank" rel="noopener" class="portal-btn">
                            <div class="portal-icon">
                                <i class="fa fa-id-card-o"></i>
                            </div>
                            <div>
                                <div>ระบบบริการการศึกษา (REG VRU)</div>
                                <small class="text-muted font-weight-normal">ลงทะเบียนเรียน ตรวจผลการเรียน (GPA)</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="https://acad.vru.ac.th/student_calendar.php" target="_blank" rel="noopener" class="portal-btn">
                            <div class="portal-icon" style="background: #fef3c7; color: #d97706;">
                                <i class="fa fa-calendar-check-o"></i>
                            </div>
                            <div>
                                <div>ปฏิทินการศึกษาประจำปี</div>
                                <small class="text-muted font-weight-normal">กำหนดการลงทะเบียน สอบ เพิ่ม-ถอน</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="https://lib.vru.ac.th/" target="_blank" rel="noopener" class="portal-btn">
                            <div class="portal-icon" style="background: #dcfce7; color: #16a34a;">
                                <i class="fa fa-book"></i>
                            </div>
                            <div>
                                <div>สำนักวิทยบริการฯ (หอสมุด)</div>
                                <small class="text-muted font-weight-normal">สืบค้นฐานข้อมูลวิจัย E-Book วิทยานิพนธ์</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="https://dsd.vru.ac.th/" target="_blank" rel="noopener" class="portal-btn">
                            <div class="portal-icon" style="background: #f3e8ff; color: #9333ea;">
                                <i class="fa fa-heartbeat"></i>
                            </div>
                            <div>
                                <div>กองพัฒนานักศึกษา (กยศ./กิจกรรม)</div>
                                <small class="text-muted font-weight-normal">ทุนการศึกษา กู้ยืม กยศ. กิจกรรมจิตอาสา</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="https://acad.vru.ac.th/student.php" target="_blank" rel="noopener" class="portal-btn">
                            <div class="portal-icon" style="background: #ffe4e6; color: #e11d48;">
                                <i class="fa fa-file-pdf-o"></i>
                            </div>
                            <div>
                                <div>สำนักส่งเสริมวิชาการฯ บริการนักศึกษา</div>
                                <small class="text-muted font-weight-normal">คลังคู่มือนักศึกษาและอื่นๆ</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a href="project-guide.php" class="portal-btn">
                            <div class="portal-icon" style="background: #cffafe; color: #0891b2;">
                                <i class="fa fa-code-fork"></i>
                            </div>
                            <div>
                                <div>คู่มือโครงงานคอมพิวเตอร์</div>
                                <small class="text-muted font-weight-normal">ขั้นตอนและแบบฟอร์ม Project 1 & 2</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Two Columns: Manuals Archive & Graduation Checklist -->
            <div class="row mb-5">
                
                <!-- Column 1: Annual Student Handbooks Archive -->
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="guide-card p-4">
                        <div class="section-header d-flex justify-content-between align-items-center mb-3">
                            <h2 class="h5 font-weight-bold mb-0">
                                <i class="fa fa-archive text-primary mr-2"></i>คลังคู่มือนักศึกษารายปี (Student Handbooks Archive)
                            </h2>
                            <span class="badge badge-light border">PDF Official</span>
                        </div>
                        <p class="text-secondary small mb-3">
                            รวบรวมเล่มคู่มือนักศึกษาฉบับสมบูรณ์ที่จัดทำโดยสำนักส่งเสริมวิชาการและงานทะเบียน (สวท.) 
                            ประกอบด้วยข้อบังคับมหาวิทยาลัย กฎเกณฑ์การศึกษา และรายละเอียดหลักสูตรตามปีการศึกษาที่เข้าศึกษา:
                        </p>

                        <!-- Year 2569 -->
                        <div class="manual-year-card d-flex align-items-center justify-content-between">
                            <div>
                                <span class="badge-year mr-2">ปีการศึกษา 2569</span>
                                <span class="font-weight-bold text-dark">คู่มือนักศึกษา มรภ.วไลยอลงกรณ์ฯ</span>
                                <div class="small text-muted mt-1">
                                    <i class="fa fa-check-circle text-success mr-1"></i>หลักสูตรปรับปรุง พ.ศ. 2570 (124 หน่วยกิต)
                                </div>
                            </div>
                            <div class="text-right">
                                <a href="https://acad.vru.ac.th/pdf-handbook/std_manual_69/student_2569.pdf" target="_blank" rel="noopener" class="btn btn-primary btn-sm px-3 font-weight-bold">
                                    <i class="fa fa-download mr-1"></i> PDF
                                </a>
                                <a href="https://acad.vru.ac.th/ac_study_manual_69.php" target="_blank" rel="noopener" class="btn btn-outline-secondary btn-sm ml-1" title="ดูสารบัญแยกหมวด">
                                    <i class="fa fa-list"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Year 2568 -->
                        <div class="manual-year-card d-flex align-items-center justify-content-between">
                            <div>
                                <span class="badge-year mr-2">ปีการศึกษา 2568</span>
                                <span class="font-weight-bold text-dark">คู่มือนักศึกษา มรภ.วไลยอลงกรณ์ฯ</span>
                            </div>
                            <div class="text-right">
                                <a href="https://acad.vru.ac.th/pdf-handbook/std_manual_68/student_2568.pdf" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm px-3">
                                    <i class="fa fa-download mr-1"></i> PDF
                                </a>
                                <a href="https://acad.vru.ac.th/ac_study_manual_68.php" target="_blank" rel="noopener" class="btn btn-outline-secondary btn-sm ml-1" title="ดูสารบัญแยกหมวด">
                                    <i class="fa fa-list"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Year 2567 -->
                        <div class="manual-year-card d-flex align-items-center justify-content-between">
                            <div>
                                <span class="badge-year mr-2" style="background-color: #475569;">ปีการศึกษา 2567</span>
                                <span class="font-weight-bold text-dark">คู่มือนักศึกษา มรภ.วไลยอลงกรณ์ฯ</span>
                            </div>
                            <div class="text-right">
                                <a href="https://acad.vru.ac.th/pdf-handbook/std_manual_67/student_2567.pdf" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm px-3">
                                    <i class="fa fa-download mr-1"></i> PDF
                                </a>
                                <a href="https://acad.vru.ac.th/ac_study_manual_67.php" target="_blank" rel="noopener" class="btn btn-outline-secondary btn-sm ml-1" title="ดูสารบัญแยกหมวด">
                                    <i class="fa fa-list"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Year 2566 -->
                        <div class="manual-year-card d-flex align-items-center justify-content-between">
                            <div>
                                <span class="badge-year mr-2" style="background-color: #475569;">ปีการศึกษา 2566</span>
                                <span class="font-weight-bold text-dark">คู่มือนักศึกษา มรภ.วไลยอลงกรณ์ฯ</span>
                            </div>
                            <div class="text-right">
                                <a href="https://acad.vru.ac.th/pdf-handbook/std_manual_66/stude_2566.pdf" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm px-3">
                                    <i class="fa fa-download mr-1"></i> PDF
                                </a>
                                <a href="https://acad.vru.ac.th/ac_study_manual.php" target="_blank" rel="noopener" class="btn btn-outline-secondary btn-sm ml-1" title="ดูสารบัญแยกหมวด">
                                    <i class="fa fa-list"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Older Years (Collapsible / Archive Dropdown) -->
                        <div class="mt-3 text-center">
                            <button class="btn btn-light btn-sm border text-secondary" type="button" data-toggle="collapse" data-target="#olderManuals" aria-expanded="false" aria-controls="olderManuals">
                                <i class="fa fa-history mr-1"></i> ดูคู่มือปีการศึกษาย้อนหลัง (2565 - 2561) <i class="fa fa-angle-down ml-1"></i>
                            </button>
                        </div>

                        <div class="collapse mt-3" id="olderManuals">
                            <div class="p-3 bg-light rounded border">
                                <div class="row" style="font-size: 0.9rem;">
                                    <div class="col-md-6 mb-2">
                                        <a href="https://acad.vru.ac.th/pdf-handbook/stude_2565.pdf" target="_blank" rel="noopener" class="text-dark">
                                            <i class="fa fa-file-pdf-o text-danger mr-1"></i> คู่มือนักศึกษา ปีการศึกษา 2565
                                        </a>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <a href="https://acad.vru.ac.th/pdf-handbook/stude_2564.pdf" target="_blank" rel="noopener" class="text-dark">
                                            <i class="fa fa-file-pdf-o text-danger mr-1"></i> คู่มือนักศึกษา ปีการศึกษา 2564
                                        </a>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <a href="https://acad.vru.ac.th/pdf-handbook/stude_2563.pdf" target="_blank" rel="noopener" class="text-dark">
                                            <i class="fa fa-file-pdf-o text-danger mr-1"></i> คู่มือนักศึกษา ปีการศึกษา 2563
                                        </a>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <a href="https://acad.vru.ac.th/pdf-handbook/stude_2562.pdf" target="_blank" rel="noopener" class="text-dark">
                                            <i class="fa fa-file-pdf-o text-danger mr-1"></i> คู่มือนักศึกษา ปีการศึกษา 2562
                                        </a>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <a href="https://acad.vru.ac.th/pdf-handbook/stude_2561.pdf" target="_blank" rel="noopener" class="text-dark">
                                            <i class="fa fa-file-pdf-o text-danger mr-1"></i> คู่มือนักศึกษา ปีการศึกษา 2561
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 pt-3 border-top text-center">
                            <a href="https://acad.vru.ac.th/studen_manual.php" target="_blank" rel="noopener" class="btn btn-outline-info btn-sm">
                                <i class="fa fa-external-link mr-1"></i> เข้าสู่หน้าคลังคู่มือทางการของสำนักส่งเสริมวิชาการฯ (acad.vru.ac.th)
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Column 2: Graduation Requirements Checklist -->
                <div class="col-lg-5">
                    <div class="guide-card p-4">
                        <div class="section-header d-flex justify-content-between align-items-center mb-3">
                            <h2 class="h5 font-weight-bold mb-0">
                                <i class="fa fa-certificate text-success mr-2"></i>เกณฑ์สำเร็จการศึกษา (Graduation Checklist)
                            </h2>
                            <span class="badge badge-success">วท.บ. คอมพิวเตอร์</span>
                        </div>
                        <p class="text-secondary small mb-3">
                            เงื่อนไขสำคัญที่นักศึกษาต้องผ่านเกณฑ์ครบถ้วน เพื่อเสนอชื่อขออนุมัติปริญญาตามเกณฑ์ มคอ.2 พ.ศ. 2570:
                        </p>

                        <div class="checklist-item">
                            <div class="checklist-icon"><i class="fa fa-check"></i></div>
                            <div>
                                <div class="font-weight-bold text-dark">1. เรียนครบ 124 หน่วยกิต</div>
                                <small class="text-muted">ศึกษารายวิชาครบถ้วนตามโครงสร้างหลักสูตร (ศึกษาทั่วไป, วิชาเฉพาะ, วิชาเลือกเสรี)</small>
                            </div>
                        </div>

                        <div class="checklist-item">
                            <div class="checklist-icon"><i class="fa fa-check"></i></div>
                            <div>
                                <div class="font-weight-bold text-dark">2. คะแนนเฉลี่ยสะสม (GPAX) &ge; 2.00</div>
                                <small class="text-muted">ได้ระดับคะแนนเฉลี่ยสะสมตลอดหลักสูตรไม่ต่ำกว่า 2.00 จากระบบ 4.00</small>
                            </div>
                        </div>

                        <div class="checklist-item">
                            <div class="checklist-icon"><i class="fa fa-check"></i></div>
                            <div>
                                <div class="font-weight-bold text-dark">3. ผ่านโครงงานคอมพิวเตอร์ 2 ระยะ</div>
                                <small class="text-muted">สอบผ่าน `65SCS216` โครงงาน 1 (ปี 3) และ `65SCS217` โครงงาน 2 (ปี 4)</small>
                            </div>
                        </div>

                        <div class="checklist-item">
                            <div class="checklist-icon"><i class="fa fa-check"></i></div>
                            <div>
                                <div class="font-weight-bold text-dark">4. ผ่านสหกิจศึกษา หรือ ฝึกประสบการณ์วิชาชีพ</div>
                                <small class="text-muted">ผ่านรายวิชา `65SCS402` สหกิจศึกษา (16 สัปดาห์) หรือ `65SCS404` ฝึกงาน (&ge; 450 ชม.)</small>
                            </div>
                        </div>

                        <div class="checklist-item">
                            <div class="checklist-icon"><i class="fa fa-check"></i></div>
                            <div>
                                <div class="font-weight-bold text-dark">5. ผ่านเกณฑ์ภาษาอังกฤษ</div>
                                <small class="text-muted">ผ่านเกณฑ์ทดสอบความรู้ภาษาอังกฤษตามประกาศของมหาวิทยาลัยฯ (VRU-TEP / CEFR)</small>
                            </div>
                        </div>

                        <div class="checklist-item">
                            <div class="checklist-icon"><i class="fa fa-check"></i></div>
                            <div>
                                <div class="font-weight-bold text-dark">6. ผ่านเกณฑ์ทักษะดิจิทัล (Digital Literacy)</div>
                                <small class="text-muted">ผ่านการทดสอบสมรรถนะความรู้ด้านเทคโนโลยีดิจิทัลตามเกณฑ์มาตรฐานมหาวิทยาลัย</small>
                            </div>
                        </div>

                        <div class="checklist-item">
                            <div class="checklist-icon"><i class="fa fa-check"></i></div>
                            <div>
                                <div class="font-weight-bold text-dark">7. ครบชั่วโมงกิจกรรม & ไม่มีภาระหนี้สิน</div>
                                <small class="text-muted">เข้าร่วมกิจกรรมเสริมหลักสูตรครบตามเกณฑ์ของกองพัฒนานักศึกษา และชำระค่าธรรมเนียมครบถ้วน</small>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <!-- 4-Year Study Plan Roadmap (124 Credits) -->
            <div class="guide-card p-4 mb-5">
                <div class="section-header d-flex flex-wrap justify-content-between align-items-center">
                    <div>
                        <h2 class="h5 font-weight-bold mb-1">
                            <i class="fa fa-calendar text-primary mr-2"></i>แผนการลงทะเบียนเรียน 4 ปี (Curriculum Study Plan - 124 หน่วยกิต)
                        </h2>
                        <div class="small text-muted">โครงสร้างรายวิชาและลำดับการเรียน 8 ภาคการศึกษาปกติ ตามเกณฑ์ มคอ.2 พ.ศ. 2570</div>
                    </div>
                    <div class="mt-2 mt-md-0">
                        <span class="badge badge-primary px-3 py-2 font-weight-bold">รวม 124 หน่วยกิต</span>
                    </div>
                </div>

                <!-- Tabs: Year 1 to 4 -->
                <ul class="nav nav-pills nav-pills-custom mb-3" id="studyPlanTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="year1-tab" data-toggle="pill" href="#year1" role="tab" aria-controls="year1" aria-selected="true">
                            <i class="fa fa-leaf mr-1"></i> ชั้นปีที่ 1 (36 นก.)
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="year2-tab" data-toggle="pill" href="#year2" role="tab" aria-controls="year2" aria-selected="false">
                            <i class="fa fa-cogs mr-1"></i> ชั้นปีที่ 2 (36 นก.)
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="year3-tab" data-toggle="pill" href="#year3" role="tab" aria-controls="year3" aria-selected="false">
                            <i class="fa fa-rocket mr-1"></i> ชั้นปีที่ 3 (33 นก.)
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="year4-tab" data-toggle="pill" href="#year4" role="tab" aria-controls="year4" aria-selected="false">
                            <i class="fa fa-trophy mr-1"></i> ชั้นปีที่ 4 (19 นก.)
                        </a>
                    </li>
                </ul>

                <div class="tab-content" id="studyPlanTabContent">
                    
                    <!-- Year 1 -->
                    <div class="tab-pane fade show active" id="year1" role="tabpanel" aria-labelledby="year1-tab">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="p-3 bg-light rounded border h-100">
                                    <div class="font-weight-bold text-primary mb-2 border-bottom pb-1">
                                        ภาคเรียนที่ 1 (ปี 1 เทอม 1) &bull; 18 หน่วยกิต
                                    </div>
                                    <ul class="list-unstyled mb-0" style="font-size: 0.95rem; line-height: 1.8;">
                                        <li><span class="badge badge-light border text-dark">65VGE101</span> อัตลักษณ์บัณฑิตวไลยอลงกรณ์ (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">65VGE102</span> ภาษาไทยเพื่อการสื่อสารอย่างสร้างสรรค์ (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">65SCS101</span> ตัวแบบเชิงคณิตศาสตร์สำหรับวิทยาการคอมฯ (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">65SCS105</span> การโปรแกรมคอมพิวเตอร์เบื้องต้น (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">65SCS107</span> สถาปัตยกรรมและระบบปฏิบัติการคอมฯ (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">65SCS201</span> การออกแบบและพัฒนาเว็บแบบเรสพอนซีฟ (3 นก.)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="p-3 bg-light rounded border h-100">
                                    <div class="font-weight-bold text-primary mb-2 border-bottom pb-1">
                                        ภาคเรียนที่ 2 (ปี 1 เทอม 2) &bull; 18 หน่วยกิต
                                    </div>
                                    <ul class="list-unstyled mb-0" style="font-size: 0.95rem; line-height: 1.8;">
                                        <li><span class="badge badge-light border text-dark">65VGE103</span> ภาษาอังกฤษ: ประตูสู่สากล (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">65VGE104</span> การออกแบบชีวิตและสังคมแห่งความสุข (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">65SCS102</span> คณิตศาสตร์ดิสครีตสำหรับวิทยาการคอมฯ (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">65SCS106</span> ขั้นตอนวิธีและโครงสร้างข้อมูล (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">65SCS202</span> ระบบฐานข้อมูล (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">65SCS203</span> การวิเคราะห์และออกแบบระบบสารสนเทศ (3 นก.)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Year 2 -->
                    <div class="tab-pane fade" id="year2" role="tabpanel" aria-labelledby="year2-tab">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="p-3 bg-light rounded border h-100">
                                    <div class="font-weight-bold text-primary mb-2 border-bottom pb-1">
                                        ภาคเรียนที่ 1 (ปี 2 เทอม 1) &bull; 18 หน่วยกิต
                                    </div>
                                    <ul class="list-unstyled mb-0" style="font-size: 0.95rem; line-height: 1.8;">
                                        <li><span class="badge badge-light border text-dark">65VGE105</span> คนรุ่นใหม่หัวใจดิจิทัล (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">65VGE106</span> การคิดเชิงออกแบบ (Design Thinking) (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">65SCS103</span> ความน่าจะเป็นและสถิติเบื้องต้นฯ (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">65SCS204</span> การพัฒนาผลิตภัณฑ์ซอฟต์แวร์และธุรกิจดิจิทัล (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">65SCS207</span> ระบบการสื่อสารข้อมูลและเครือข่ายคอมฯ (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">65SCS212</span> การเขียนโปรแกรมเชิงวัตถุ (OOP) (3 นก.)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="p-3 bg-light rounded border h-100">
                                    <div class="font-weight-bold text-primary mb-2 border-bottom pb-1">
                                        ภาคเรียนที่ 2 (ปี 2 เทอม 2) &bull; 18 หน่วยกิต
                                    </div>
                                    <ul class="list-unstyled mb-0" style="font-size: 0.95rem; line-height: 1.8;">
                                        <li><span class="badge badge-light border text-dark">65VGE107</span> แบกเป้เที่ยว (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">65VGE108</span> การประกอบการทางสังคม (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">65SCS104</span> สถิติเพื่อการวิจัยสำหรับวิทยาการคอมฯ (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">65SCS205</span> ประสบการณ์ผู้ใช้และการปฏิสัมพันธ์ (UX/UI & HCI) (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">65SCS206</span> การพัฒนาเว็บสำหรับองค์กร (Web Enterprise) (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">65SCS209</span> ความมั่นคงปลอดภัยไซเบอร์ (Cybersecurity) (3 นก.)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Year 3 -->
                    <div class="tab-pane fade" id="year3" role="tabpanel" aria-labelledby="year3-tab">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="p-3 bg-light rounded border h-100">
                                    <div class="font-weight-bold text-primary mb-2 border-bottom pb-1">
                                        ภาคเรียนที่ 1 (ปี 3 เทอม 1) &bull; 18 หน่วยกิต
                                    </div>
                                    <ul class="list-unstyled mb-0" style="font-size: 0.95rem; line-height: 1.8;">
                                        <li><span class="badge badge-light border text-dark">65SCS208</span> อินเทอร์เน็ตในทุกสิ่ง (IoT) (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">65SCS210</span> ปัญญาประดิษฐ์และการเรียนรู้ของเครื่อง (AI & ML) (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">65SCS213</span> ทักษะการสื่อสารสำหรับนักวิทยาการคอมฯ (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">65SCS214</span> ระเบียบวิธีวิจัยด้านวิทยาการคอมฯ (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">65SCS215</span> การเรียนรู้ชุมชนและบริการวิชาการ (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">65SCS3xx</span> วิชาเฉพาะด้านเลือก 1 (3 นก.)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="p-3 bg-light rounded border h-100">
                                    <div class="font-weight-bold text-primary mb-2 border-bottom pb-1">
                                        ภาคเรียนที่ 2 (ปี 3 เทอม 2) &bull; 15 หน่วยกิต
                                    </div>
                                    <ul class="list-unstyled mb-0" style="font-size: 0.95rem; line-height: 1.8;">
                                        <li><span class="badge badge-light border text-dark">65SCS211</span> การรวบรวมข้อมูลและการนำเสนอ (Data Visualization) (3 นก.)</li>
                                        <li><span class="badge badge-success">65SCS216</span> <strong>การวิเคราะห์และออกแบบโครงงาน (Project 1)</strong> (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">65SCS3xx</span> วิชาเฉพาะด้านเลือก 2 (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">65SCS3xx</span> วิชาเฉพาะด้านเลือก 3 (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">xxxxxx</span> วิชาเลือกเสรี 1 (3 นก.)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Year 4 -->
                    <div class="tab-pane fade" id="year4" role="tabpanel" aria-labelledby="year4-tab">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="p-3 bg-light rounded border h-100">
                                    <div class="font-weight-bold text-primary mb-2 border-bottom pb-1">
                                        ภาคเรียนที่ 1 (ปี 4 เทอม 1) &bull; 13–14 หน่วยกิต
                                    </div>
                                    <ul class="list-unstyled mb-0" style="font-size: 0.95rem; line-height: 1.8;">
                                        <li><span class="badge badge-success">65SCS217</span> <strong>การพัฒนาระบบและนวัตกรรมคอมฯ (Project 2)</strong> (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">65SCS3xx</span> วิชาเฉพาะด้านเลือก 4 (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">65SCS3xx</span> วิชาเฉพาะด้านเลือก 5 (3 นก.)</li>
                                        <li><span class="badge badge-light border text-dark">xxxxxx</span> วิชาเลือกเสรี 2 (3 นก.)</li>
                                        <li><span class="badge badge-info">65SCS401</span> การเตรียมสหกิจศึกษา (1 นก.) <em>หรือ</em> <span class="badge badge-info">65SCS403</span> เตรียมฝึกประสบการณ์ฯ (2 นก.)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="p-3 bg-light rounded border h-100">
                                    <div class="font-weight-bold text-primary mb-2 border-bottom pb-1">
                                        ภาคเรียนที่ 2 (ปี 4 เทอม 2) &bull; 5–6 หน่วยกิต
                                    </div>
                                    <ul class="list-unstyled mb-0" style="font-size: 0.95rem; line-height: 1.8;">
                                        <li class="mb-2">
                                            <span class="badge badge-warning text-dark">แผนสหกิจศึกษา:</span><br>
                                            <span class="badge badge-light border text-dark">65SCS402</span> <strong>สหกิจศึกษาด้านวิทยาการคอมพิวเตอร์</strong> (6 นก.)<br>
                                            <small class="text-muted">ปฏิบัติงานจริงเต็มเวลา ณ สถานประกอบการ ไม่น้อยกว่า 16 สัปดาห์</small>
                                        </li>
                                        <li>
                                            <span class="badge badge-warning text-dark">แผนฝึกงานปกติ:</span><br>
                                            <span class="badge badge-light border text-dark">65SCS404</span> <strong>การฝึกประสบการณ์วิชาชีพฯ</strong> (5 นก.)<br>
                                            <small class="text-muted">ฝึกประสบการณ์วิชาชีพในหน่วยงาน ไม่น้อยกว่า 450 ชั่วโมง</small>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="mt-3 text-center">
                    <a href="course-descriptions.php" class="btn btn-outline-primary btn-sm font-weight-bold">
                        <i class="fa fa-book mr-1"></i> ดูคำอธิบายรายวิชาฉบับเต็มทุกหมวด (Course Descriptions)
                    </a>
                </div>
            </div>

            <!-- Need Help / Contact Card -->
            <div class="p-4 bg-light rounded border text-center">
                <h3 class="h6 font-weight-bold text-dark mb-2">มีข้อสงสัยเกี่ยวกับระเบียบการศึกษา หรือต้องการคำปรึกษาเพิ่มเติม?</h3>
                <p class="text-secondary small mb-3">
                    สามารถติดต่อขอรับคำปรึกษาได้ที่สำนักงานหลักสูตรวิทยาการคอมพิวเตอร์ หรือพบอาจารย์ที่ปรึกษาประจำตัว
                </p>
                <div class="d-inline-flex flex-wrap justify-content-center">
                    <span class="badge badge-white border text-dark px-3 py-2 mr-2 mb-2">
                        <i class="fa fa-map-marker text-danger mr-1"></i> ห้อง IT201 ชั้น 2 อาคาร 75 ปี วไลยอลงกรณ์
                    </span>
                    <span class="badge badge-white border text-dark px-3 py-2 mr-2 mb-2">
                        <i class="fa fa-phone text-primary mr-1"></i> โทรศัพท์: 0-2529-0674-7 ต่อ 365
                    </span>
                    <a href="https://m.me/computersciencevru" target="_blank" rel="noopener" class="badge badge-primary px-3 py-2 mb-2 text-white">
                        <i class="fa fa-comments mr-1"></i> ติดต่อผ่าน Facebook Inbox
                    </a>
                </div>
            </div>

        </div>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>
</body>

</html>
