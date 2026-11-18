<?php
$og_title = "แจ้งข้อเสนอแนะและเรื่องร้องเรียน | วิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ (VRU)";
$og_description = "ช่องทางรับฟังความคิดเห็น แจ้งข้อเสนอแนะ และเรื่องร้องเรียน/อุทธรณ์ของนักศึกษา ตามเกณฑ์ มคอ.2 หมวด 8 หลักสูตรวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์";
$og_url = "https://cs.vru.ac.th/feedback.php";
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <?php include("layouts/meta.php"); ?>
    <style>
        body, .content {
            color: #212529 !important;
        }

        .feedback-hero {
            background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 50%, #0369a1 100%);
            color: #ffffff;
            border-radius: 16px;
            padding: 2.5rem 2rem;
            margin-bottom: 2rem;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.12);
        }

        .feedback-hero h1 {
            color: #ffffff !important;
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .feedback-hero p {
            color: #e0f2fe !important;
            font-size: 1.05rem;
            max-width: 820px;
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

        .channel-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 1.5rem;
            height: 100%;
            transition: all 0.2s ease;
            box-shadow: 0 2px 8px rgba(0,0,0,0.03);
            display: flex;
            flex-direction: column;
        }

        .channel-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.06);
            border-color: #cbd5e1;
        }

        .channel-icon {
            width: 52px;
            height: 52px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .policy-box {
            background: #ffffff;
            border: 1px solid #fed7aa;
            border-left: 5px solid #f97316;
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 2px 8px rgba(249, 115, 22, 0.05);
        }

        .step-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #0284c7;
            color: #ffffff;
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            margin-right: 1rem;
            flex-shrink: 0;
        }

        .timeline-step {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1.25rem;
        }

        .timeline-step:last-child {
            margin-bottom: 0;
        }

        .topic-pill {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 0.85rem 1rem;
            margin-bottom: 0.75rem;
            display: flex;
            align-items: center;
        }

        .topic-pill i {
            font-size: 1.15rem;
            margin-right: 0.75rem;
            color: #0284c7;
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
                    <li class="breadcrumb-item active text-dark font-weight-bold" aria-current="page">แจ้งข้อเสนอแนะและเรื่องร้องเรียน</li>
                </ol>
            </nav>

            <!-- Hero Banner -->
            <div class="feedback-hero">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <span class="badge badge-warning text-dark font-weight-bold px-3 py-1 mb-2">มคอ.2 หมวด 8: การจัดการข้อร้องเรียนและการอุทธรณ์</span>
                        <h1 class="h2 mb-2">ช่องทางรับฟังความคิดเห็นและเรื่องร้องเรียน</h1>
                        <p class="mb-0">
                            หลักสูตรวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ ในพระบรมราชูปถัมภ์ 
                            เปิดรับฟังทุกความคิดเห็น ข้อเสนอแนะในการพัฒนาการจัดการเรียนการสอน 
                            ตลอดจนเรื่องร้องเรียนและการอุทธรณ์ของนักศึกษา ด้วยระบบที่โปร่งใส เป็นธรรม และรักษาความลับอย่างสูงสุด
                        </p>
                    </div>
                    <div class="col-lg-4 text-center d-none d-lg-block">
                        <i class="fa fa-comments-o" style="font-size: 6.5rem; opacity: 0.2; color: #ffffff;"></i>
                    </div>
                </div>
            </div>

            <!-- นโยบายการคุ้มครองและรักษาความลับ (Confidentiality & Whistleblower Protection) -->
            <div class="policy-box">
                <div class="d-flex align-items-start">
                    <i class="fa fa-shield fa-2x text-warning mr-3 mt-1"></i>
                    <div>
                        <h2 class="h5 font-weight-bold text-dark mb-1">
                            นโยบายการคุ้มครองและรักษาความลับของผู้ร้องเรียน (Protection & Privacy Policy)
                        </h2>
                        <p class="text-secondary small mb-2" style="line-height: 1.7;">
                            ข้อมูลส่วนบุคคล รายละเอียดคำร้อง และเอกสารประกอบทั้งหมดจะถูกเก็บรักษาไว้เป็นความลับสูงสุด 
                            เข้าถึงได้เฉพาะคณะกรรมการตรวจสอบข้อเท็จจริงที่ได้รับการแต่งตั้งเท่านั้น 
                            <strong>ผู้ร้องเรียนสามารถเลือกไม่ระบุชื่อ-นามสกุลได้</strong> และการยื่นข้อเสนอแนะหรือข้อร้องเรียน
                            <strong>จะไม่มีผลกระทบในทางลบใด ๆ ต่อผลการเรียน สิทธิประโยชน์ หรือสถานภาพการเป็นนักศึกษาโดยเด็ดขาด</strong>
                        </p>
                        <div class="small text-muted font-weight-bold">
                            <i class="fa fa-check-circle text-success mr-1"></i> ปฏิบัติตาม พ.ร.บ. คุ้มครองข้อมูลส่วนบุคคล (PDPA) และเกณฑ์ประกันคุณภาพการศึกษา AUN-QA
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4 ช่องทางการยื่นข้อเสนอแนะ ร้องเรียน และแจ้งซ่อม -->
            <div class="mb-5">
                <div class="section-header d-flex justify-content-between align-items-center">
                    <h2><i class="fa fa-bullhorn text-primary mr-2"></i>ช่องทางการรับฟังความคิดเห็น ยื่นเรื่องร้องเรียน และแจ้งซ่อม</h2>
                    <span class="badge badge-light border font-weight-bold">4 ช่องทางหลัก</span>
                </div>

                <div class="row">
                    <!-- ช่องทางที่ 1: ออนไลน์ (Google Form ร้องเรียน/ข้อเสนอแนะ) -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="channel-card" style="border-top: 4px solid #dc3545;">
                            <div class="channel-icon bg-light text-danger">
                                <i class="fa fa-pencil-square-o"></i>
                            </div>
                            <h3 class="h6 font-weight-bold text-dark mb-2">1. ข้อเสนอแนะและเรื่องร้องเรียน</h3>
                            <p class="text-secondary small mb-3 flex-grow-1" style="line-height: 1.6;">
                                ด้านการเรียนการสอน หลักสูตร หรืออุทธรณ์ผลการเรียน ส่งได้ตลอด 24 ชม. เลือกไม่ระบุชื่อได้
                            </p>
                            <div class="p-2 bg-light rounded small text-muted mb-3" style="font-size: 0.8rem;">
                                <i class="fa fa-lock text-success mr-1"></i> ข้อมูลเป็นความลับสูงสุด
                            </div>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdcDaa-Y7jOzt_gpBs3vgmJqMeRXcBQDh02E3Xlec_u9j0PWA/viewform" 
                               target="_blank" rel="noopener noreferrer" 
                               class="btn btn-danger btn-block font-weight-bold btn-sm py-2 shadow-xs">
                                <i class="fa fa-external-link mr-1"></i> ฟอร์มข้อร้องเรียน
                            </a>
                        </div>
                    </div>

                    <!-- ช่องทางที่ 2: ออนไลน์ (Google Form แจ้งซ่อมอุปกรณ์ห้องแล็บ) -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="channel-card" style="border-top: 4px solid #ea580c;">
                            <div class="channel-icon bg-light" style="color: #ea580c;">
                                <i class="fa fa-wrench"></i>
                            </div>
                            <h3 class="h6 font-weight-bold text-dark mb-2">2. แจ้งซ่อมอุปกรณ์ห้องแล็บ</h3>
                            <p class="text-secondary small mb-3 flex-grow-1" style="line-height: 1.6;">
                                คอมพิวเตอร์ขัดข้อง จอภาพ เมาส์ คีย์บอร์ด ระบบเครือข่าย หรือแอร์ในห้องแล็บ IT401–IT504
                            </p>
                            <div class="p-2 bg-light rounded small text-muted mb-3" style="font-size: 0.8rem;">
                                <i class="fa fa-cog text-warning mr-1"></i> ดูแลโดยฝ่ายสนับสนุนห้องแล็บ
                            </div>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLScRpyhvGXtuXUCRsPSL1aJq3cn14Ek2LbI4MfYkFP9daMvoLA/viewform" 
                               target="_blank" rel="noopener noreferrer" 
                               class="btn btn-warning btn-block font-weight-bold btn-sm py-2 shadow-xs text-dark" style="background-color: #f97316; border-color: #ea580c; color: #ffffff !important;">
                                <i class="fa fa-wrench mr-1"></i> ฟอร์มแจ้งซ่อมอุปกรณ์
                            </a>
                        </div>
                    </div>

                    <!-- ช่องทางที่ 3: ตู้รับความคิดเห็น ณ สาขาวิชา -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="channel-card" style="border-top: 4px solid #0284c7;">
                            <div class="channel-icon bg-light text-primary">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <h3 class="h6 font-weight-bold text-dark mb-2">3. ตู้รับฟังความคิดเห็น</h3>
                            <p class="text-secondary small mb-3 flex-grow-1" style="line-height: 1.6;">
                                เขียนข้อเสนอแนะหรือคำร้องใส่ซองปิดผนึก หย่อนลงในตู้รับฟังความคิดเห็นของสาขาวิชา
                            </p>
                            <div class="p-2 bg-light rounded small text-muted mb-3" style="font-size: 0.8rem;">
                                <i class="fa fa-map-marker text-danger mr-1"></i> ชั้น 2 ห้อง IT201 อาคาร 75 ปี
                            </div>
                            <a href="contact.php" class="btn btn-outline-primary btn-block font-weight-bold btn-sm py-2">
                                <i class="fa fa-map mr-1"></i> แผนที่ห้องพักสาขาวิชา
                            </a>
                        </div>
                    </div>

                    <!-- ช่องทางที่ 4: ติดต่ออาจารย์ที่ปรึกษา / ประธานหลักสูตร -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="channel-card" style="border-top: 4px solid #16a34a;">
                            <div class="channel-icon bg-light text-success">
                                <i class="fa fa-user-md"></i>
                            </div>
                            <h3 class="h6 font-weight-bold text-dark mb-2">4. ติดต่ออาจารย์โดยตรง</h3>
                            <p class="text-secondary small mb-3 flex-grow-1" style="line-height: 1.6;">
                                เข้าพบปรึกษาหารือกับอาจารย์ที่ปรึกษาประจำตัว หรือยื่นคำร้องต่อประธานหลักสูตรโดยตรง
                            </p>
                            <div class="p-2 bg-light rounded small text-muted mb-3" style="font-size: 0.8rem;">
                                <i class="fa fa-user text-primary mr-1"></i> ผศ.ณัฏฐิรา (ประธานหลักสูตร)
                            </div>
                            <a href="teacher.php" class="btn btn-outline-success btn-block font-weight-bold btn-sm py-2">
                                <i class="fa fa-address-book mr-1"></i> ทำเนียบคณาจารย์
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- กรอบเวลาและขั้นตอนการพิจารณาเรื่องร้องเรียน (Grievance Procedure) -->
            <div class="card p-4 shadow-sm border mb-5" style="border-radius: 12px; background: #ffffff;">
                <div class="section-header d-flex justify-content-between align-items-center mb-4">
                    <h2 class="h5 font-weight-bold mb-0">
                        <i class="fa fa-clock-o text-primary mr-2"></i>ขั้นตอนและกรอบเวลาการดำเนินงาน (Grievance Timeline)
                    </h2>
                    <span class="badge badge-primary px-3 py-1 font-weight-bold">เสร็จสิ้นใน 15–30 วันทำการ</span>
                </div>

                <div class="row">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <div class="timeline-step">
                            <div class="step-circle">1</div>
                            <div>
                                <div class="font-weight-bold text-dark mb-1">รับเรื่อง / คำร้อง</div>
                                <small class="text-secondary">ผู้รับผิดชอบรวบรวมเรื่องจากทุกช่องทาง และลงทะเบียนรับเรื่อง (ภายใน 1–3 วันทำการ)</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <div class="timeline-step">
                            <div class="step-circle" style="background: #eab308;">2</div>
                            <div>
                                <div class="font-weight-bold text-dark mb-1">ตรวจสอบข้อเท็จจริง</div>
                                <small class="text-secondary">คณะกรรมการรวบรวมพยานหลักฐานและข้อเท็จจริงอย่างรอบด้านและเป็นกลาง</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <div class="timeline-step">
                            <div class="step-circle" style="background: #f97316;">3</div>
                            <div>
                                <div class="font-weight-bold text-dark mb-1">ประชุมพิจารณา</div>
                                <small class="text-secondary">คณะกรรมการหลักสูตรกำหนดมาตรการแก้ไข บรรเทาผลกระทบ และแนวทางป้องกัน</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="timeline-step">
                            <div class="step-circle" style="background: #16a34a;">4</div>
                            <div>
                                <div class="font-weight-bold text-dark mb-1">แจ้งผลและติดตาม</div>
                                <small class="text-secondary">แจ้งผลการพิจารณาให้ผู้ร้องเรียนทราบเป็นลายลักษณ์อักษร หรือผ่านช่องทางที่ระบุ (ภายใน 15–30 วันทำการ)</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ประเด็นและหมวดหมู่ที่เปิดรับฟัง -->
            <div class="row mb-4">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="section-header">
                        <h2 class="h6 font-weight-bold mb-0">
                            <i class="fa fa-list-ul text-primary mr-2"></i>ประเด็นที่เปิดรับฟังและให้ข้อเสนอแนะ
                        </h2>
                    </div>
                    <div class="topic-pill">
                        <i class="fa fa-graduation-cap"></i>
                        <div>
                            <div class="font-weight-bold text-dark" style="font-size: 0.92rem;">การจัดการเรียนการสอนและอาจารย์ผู้สอน</div>
                            <small class="text-muted">เนื้อหารายวิชา คุณภาพการสอน สื่อการสอน และการให้คำปรึกษา</small>
                        </div>
                    </div>
                    <div class="topic-pill justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-desktop"></i>
                            <div>
                                <div class="font-weight-bold text-dark" style="font-size: 0.92rem;">สิ่งสนับสนุนการเรียนรู้และเทคโนโลยี</div>
                                <small class="text-muted">คอมพิวเตอร์ในห้องแล็บ ซอฟต์แวร์ลิขสิทธิ์ ความเร็วเครือข่ายอินเทอร์เน็ต</small>
                            </div>
                        </div>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLScRpyhvGXtuXUCRsPSL1aJq3cn14Ek2LbI4MfYkFP9daMvoLA/viewform" target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary btn-sm ml-2 font-weight-bold text-nowrap" style="font-size: 0.75rem;">
                            <i class="fa fa-wrench mr-1"></i> แจ้งซ่อมห้องแล็บ
                        </a>
                    </div>
                    <div class="topic-pill">
                        <i class="fa fa-check-square-o"></i>
                        <div>
                            <div class="font-weight-bold text-dark" style="font-size: 0.92rem;">การวัดผลและการอุทธรณ์ผลการเรียน</div>
                            <small class="text-muted">ความโปร่งใสในเกณฑ์การตัดเกรด การตรวจข้อสอบ และการยื่นคำร้องขอทบทวนคะแนน</small>
                        </div>
                    </div>
                    <div class="topic-pill">
                        <i class="fa fa-building-o"></i>
                        <div>
                            <div class="font-weight-bold text-dark" style="font-size: 0.92rem;">การฝึกงานและสหกิจศึกษา</div>
                            <small class="text-muted">การประสานงานสถานประกอบการ สวัสดิการ และการนิเทศงานของอาจารย์</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="section-header">
                        <h2 class="h6 font-weight-bold mb-0">
                            <i class="fa fa-question-circle text-primary mr-2"></i>คำถามที่พบบ่อย (FAQ)
                        </h2>
                    </div>
                    <div class="card p-3 mb-2 border shadow-xs" style="border-radius: 8px;">
                        <div class="font-weight-bold text-dark mb-1" style="font-size: 0.92rem;">
                            Q: ถ้าไม่ระบุชื่อ คณะกรรมการจะดำเนินการให้หรือไม่?
                        </div>
                        <div class="small text-secondary">
                            A: ดำเนินการแน่นอนครับ หากข้อร้องเรียนมีรายละเอียด ข้อมูล พยานหลักฐาน หรือสถานที่ชัดเจน คณะกรรมการจะนำเข้าสู่กระบวนการตรวจสอบทันที
                        </div>
                    </div>
                    <div class="card p-3 mb-2 border shadow-xs" style="border-radius: 8px;">
                        <div class="font-weight-bold text-dark mb-1" style="font-size: 0.92rem;">
                            Q: มีช่องทางยื่นคำร้องระดับคณะหรือมหาวิทยาลัยหรือไม่?
                        </div>
                        <div class="small text-secondary">
                            A: สามารถยื่นคำร้องทั่วไปผ่านสำนักงานคณบดี คณะวิทยาศาสตร์และเทคโนโลยี หรือยื่นผ่านศูนย์ดำรงธรรม/งานนิติการ มรภ.วไลยอลงกรณ์ฯ ได้เช่นกันครับ
                        </div>
                    </div>
                    <div class="card p-3 border shadow-xs" style="border-radius: 8px;">
                        <div class="font-weight-bold text-dark mb-1" style="font-size: 0.92rem;">
                            Q: จะได้รับแจ้งผลการพิจารณาทางใด?
                        </div>
                        <div class="small text-secondary">
                            A: หากผู้ร้องเรียนระบุอีเมลหรือเบอร์โทรศัพท์ คณะกรรมการจะแจ้งผลเป็นความลับโดยตรงไปยังช่องทางดังกล่าวภายใน 15–30 วันทำการครับ
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>
</body>

</html>
