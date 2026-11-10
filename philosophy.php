<?php
$og_title = "ปรัชญา วิสัยทัศน์ พันธกิจ และผลลัพธ์การเรียนรู้ (PLOs) | วิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ (VRU)";
$og_description = "ปรัชญาการศึกษา วิสัยทัศน์ พันธกิจ วัตถุประสงค์ และผลลัพธ์การเรียนรู้ระดับหลักสูตร (PLOs 1-10) ตามแนวทาง Outcome-Based Education (OBE) หลักสูตรวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์";
$og_url = "https://cs.vru.ac.th/philosophy.php";
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

        .highlight-quote-card {
            background: linear-gradient(135deg, #ffffff 0%, #f8fbff 100%);
            border: 1px solid #dce9f8;
            border-left: 4px solid #007bff;
            border-radius: 12px;
            padding: 1.5rem;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .highlight-quote-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(0, 123, 255, 0.1);
        }

        .mission-step {
            position: relative;
            padding-left: 1.75rem;
            margin-bottom: 0.85rem;
        }

        .mission-step-num {
            position: absolute;
            left: 0;
            top: 0.15rem;
            width: 1.35rem;
            height: 1.35rem;
            border-radius: 50%;
            background-color: #e7f1ff;
            color: #007bff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            font-weight: 700;
        }

        .plo-card {
            background: #ffffff;
            border: 1px solid #e9ecef;
            border-radius: 12px;
            padding: 1.25rem;
            height: 100%;
            transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
        }

        .plo-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            border-color: #b8daff;
        }

        .plo-badge {
            display: inline-block;
            font-weight: 700;
            font-size: 0.85rem;
            padding: 0.25rem 0.75rem;
            border-radius: 2rem;
            margin-bottom: 0.5rem;
        }

        .plo-badge-general {
            background-color: #e7f1ff;
            color: #0056b3;
            border: 1px solid #b8daff;
        }

        .plo-badge-professional {
            background-color: #e6f9ed;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .section-icon-title {
            display: flex;
            align-items: center;
            font-weight: 700;
            color: #212529;
            margin-bottom: 1.25rem;
        }

        .section-icon-title i {
            width: 42px;
            height: 42px;
            border-radius: 10px;
            background-color: #e7f1ff;
            color: #007bff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 0.85rem;
            font-size: 1.25rem;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php include("layouts/navbar.php"); ?>

    <div class="content">
        <div class="container py-5">

            <!-- Page Header -->
            <div class="page-header-modern mb-5" data-aos="fade-up">
                <h1 class="h2 font-weight-bold text-dark mb-1">ปรัชญา วิสัยทัศน์ พันธกิจ และผลลัพธ์การเรียนรู้</h1>
                <p class="text-muted mb-0">
                    ทิศทางการจัดการศึกษา ผลลัพธ์การเรียนรู้ระดับหลักสูตร (PLOs) และความมุ่งมั่นในการผลิตบัณฑิตวิทยาการคอมพิวเตอร์สู่สังคมและเศรษฐกิจดิจิทัลอย่างยั่งยืน
                </p>
            </div>

            <!-- 1. ปรัชญาการศึกษา (Educational Philosophy) -->
            <div class="mb-5" data-aos="fade-up">
                <div class="section-icon-title h4">
                    <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                    <span>ปรัชญาการศึกษา (Educational Philosophy)</span>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="highlight-quote-card h-100">
                            <span class="badge badge-primary px-3 py-1 mb-3" style="border-radius: 2rem;">ปรัชญาการศึกษาของมหาวิทยาลัย</span>
                            <blockquote class="text-dark mb-0 font-italic" style="font-size: 1.05rem; line-height: 1.8;">
                                “เป็นมหาวิทยาลัยที่มุ่งพัฒนาผู้เรียนทุกช่วงวัย ที่จัดการเรียนรู้เชิงรุก การจัดการเรียนรู้แบบผสมผสาน การจัดการเรียนรู้แบบร่วมมือ ตลอดจนกระบวนการคิดเชิงออกแบบ เพื่อพัฒนาบัณฑิตจิตอาสาที่เชี่ยวชาญในศาสตร์ มีทัศนคติที่ดี และถูกต้องต่อบ้านเมือง มีพื้นฐานชีวิตที่มั่นคง เข้มแข็ง มีคุณธรรม มีงานทำ มีอาชีพ และเป็นพลเมืองที่ดี มีระเบียบวินัย”
                            </blockquote>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="highlight-quote-card h-100" style="border-left-color: #28a745; background: linear-gradient(135deg, #ffffff 0%, #f7fdf9 100%);">
                            <span class="badge badge-success px-3 py-1 mb-3" style="border-radius: 2rem;">ปรัชญาการศึกษาของหลักสูตร</span>
                            <blockquote class="text-dark mb-0 font-italic" style="font-size: 1.05rem; line-height: 1.8;">
                                “มุ่งผลิตบัณฑิตที่มีความรู้ ทักษะทางวิทยาการคอมพิวเตอร์ มีคุณธรรม จริยธรรม และทำงานร่วมกับผู้อื่น เพื่อตอบสนองหน่วยงานภาครัฐและเอกชน เพื่อขับเคลื่อนสังคมและเศรษฐกิจดิจิทัลอย่างยั่งยืน”
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. วิสัยทัศน์ & พันธกิจ (Vision & Mission) -->
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="card shadow-sm border-0 h-100" style="border-radius: 12px; background: linear-gradient(145deg, #0062cc, #007bff); color: white;">
                        <div class="card-body p-4 d-flex flex-column justify-content-between">
                            <div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="mr-3" style="width: 44px; height: 44px; border-radius: 10px; background: rgba(255,255,255,0.2); display: flex; align-items: center; justify-content: center; font-size: 1.3rem;">
                                        <i class="fa fa-eye"></i>
                                    </div>
                                    <h2 class="h5 font-weight-bold text-white mb-0">วิสัยทัศน์ (Vision)</h2>
                                </div>
                                <p class="mb-4" style="font-size: 1.1rem; line-height: 1.8; opacity: 0.95;">
                                    “มุ่งผลิตบัณฑิตหลักสูตรวิทยาการคอมพิวเตอร์ ที่มีคุณภาพตามมาตรฐานสากล มีทักษะทันสมัยด้าน AI และนวัตกรรมดิจิทัล สนองความต้องการของท้องถิ่น ชุมชน และภาคอุตสาหกรรมซอฟต์แวร์”
                                </p>
                            </div>
                            <div class="pt-3 border-top" style="border-color: rgba(255,255,255,0.2) !important;">
                                <small class="text-white-50"><i class="fa fa-check-circle mr-1"></i> มุ่งเน้น Outcome-Based Education (OBE)</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card shadow-sm border h-100" style="border-radius: 12px;">
                        <div class="card-body p-4">
                            <div class="section-icon-title h5 mb-3">
                                <i class="fa fa-flag" aria-hidden="true"></i>
                                <span>พันธกิจ (Mission)</span>
                            </div>
                            <p class="text-secondary mb-3">
                                มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์ มีภาระหน้าที่ตามพระราชบัญญัติมหาวิทยาลัยราชภัฏ พ.ศ. 2547 (มาตรา 7 และ 8) ในการเป็นสถาบันอุดมศึกษาเพื่อการพัฒนาท้องถิ่น เสริมสร้างพลังปัญญาของแผ่นดิน และถ่ายทอดเทคโนโลยี โดยสาขาวิชาวิทยาการคอมพิวเตอร์ได้กำหนดแนวทางขับเคลื่อนพันธกิจสำคัญ ดังนี้:
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mission-step">
                                        <span class="mission-step-num">1</span>
                                        <span class="text-dark font-weight-500">ผลิตบัณฑิตที่มีความเป็นเลิศทางวิชาการและวิชาชีพ</span>
                                        <div class="small text-muted">สร้างโปรแกรมเมอร์และวิศวกรคอมพิวเตอร์ที่มีทักษะตรงตามมาตรฐานสากล</div>
                                    </div>
                                    <div class="mission-step">
                                        <span class="mission-step-num">2</span>
                                        <span class="text-dark font-weight-500">วิจัยและสร้างสรรค์นวัตกรรมดิจิทัล</span>
                                        <div class="small text-muted">สร้างองค์ความรู้ใหม่ด้าน AI, Cloud, IoT และระบบสารสนเทศเพื่อแก้ปัญหาจริง</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mission-step">
                                        <span class="mission-step-num">3</span>
                                        <span class="text-dark font-weight-500">บริการวิชาการถ่ายทอดเทคโนโลยีสู่ชุมชน</span>
                                        <div class="small text-muted">ยกระดับวิสาหกิจชุมชน ท้องถิ่น และโรงเรียนในพื้นที่ปทุมธานีและใกล้เคียง</div>
                                    </div>
                                    <div class="mission-step">
                                        <span class="mission-step-num">4</span>
                                        <span class="text-dark font-weight-500">เชื่อมโยงเครือข่ายอุตสาหกรรมซอฟต์แวร์</span>
                                        <div class="small text-muted">ร่วมมือกับสมาคมโปรแกรมเมอร์ไทยและสถานประกอบการเพื่อส่งต่อนักศึกษาสู่การทำงานจริง</div>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-light border mt-3 mb-0 py-2 small text-muted">
                                <i class="fa fa-info-circle text-primary mr-1"></i>
                                สอดคล้องตาม <strong>ยุทธศาสตร์ชาติ 20 ปี</strong>, <strong>แผนพัฒนาเศรษฐกิจและสังคมแห่งชาติ ฉบับที่ 13 (พ.ศ. 2566–2570)</strong> สู่เศรษฐกิจฐานนวัตกรรม และ <strong>แผนพัฒนามหาวิทยาลัยราชภัฏระยะ 20 ปี (พ.ศ. 2560–2579)</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. วัตถุประสงค์ของหลักสูตร (Program Objectives) -->
            <div class="mb-5" data-aos="fade-up">
                <div class="section-icon-title h4">
                    <i class="fa fa-bullseye" aria-hidden="true"></i>
                    <span>วัตถุประสงค์ของหลักสูตร (Program Objectives)</span>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card shadow-sm border h-100 p-3" style="border-radius: 12px; border-top: 4px solid #007bff !important;">
                            <div class="card-body p-2">
                                <div class="h5 font-weight-bold text-primary mb-2">01. ความรู้และทักษะวิชาชีพ</div>
                                <p class="text-secondary mb-0">
                                    เพื่อผลิตบัณฑิตที่มีความรู้ ความสามารถ มีทักษะด้านวิทยาการคอมพิวเตอร์และทักษะภาษาต่างประเทศ ทั้งด้านวิชาการและวิชาชีพ สามารถปฏิบัติงานได้จริงทั้งในหน่วยงานภาครัฐและภาคเอกชน
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card shadow-sm border h-100 p-3" style="border-radius: 12px; border-top: 4px solid #28a745 !important;">
                            <div class="card-body p-2">
                                <div class="h5 font-weight-bold text-success mb-2">02. คุณธรรมและจรรยาบรรณ</div>
                                <p class="text-secondary mb-0">
                                    เพื่อผลิตบัณฑิตที่มีเจตคติที่ดี มีคุณธรรม จริยธรรม มีระเบียบวินัย ขยันหมั่นเพียร มีความสำนึกในจรรยาบรรณวิชาชีพไอที และมีความรับผิดชอบต่อหน้าที่ ตนเอง และสังคม
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow-sm border h-100 p-3" style="border-radius: 12px; border-top: 4px solid #17a2b8 !important;">
                            <div class="card-body p-2">
                                <div class="h5 font-weight-bold text-info mb-2">03. การเรียนรู้ตลอดชีวิต & สังคม</div>
                                <p class="text-secondary mb-0">
                                    เพื่อผลิตบัณฑิตที่มีพื้นฐานความรู้ที่สามารถศึกษาต่อในระดับที่สูงขึ้น สามารถศึกษาเพิ่มเติมได้ด้วยตนเองอย่างต่อเนื่อง (Lifelong Learning) ตลอดจนสามารถถ่ายทอดความรู้ทางเทคโนโลยีสู่ชุมชนได้
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4. ผลลัพธ์การเรียนรู้ระดับหลักสูตร (Program Learning Outcomes: PLOs) -->
            <div class="mb-5" data-aos="fade-up">
                <div class="section-icon-title h4 mb-2">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    <span>ผลลัพธ์การเรียนรู้ระดับหลักสูตร (Program Learning Outcomes: PLOs)</span>
                </div>
                <p class="text-muted mb-4">
                    หลักสูตรจัดการศึกษาตามแนวทาง Outcome-Based Education (OBE) โดยกำหนดผลลัพธ์การเรียนรู้ของบัณฑิตเมื่อสำเร็จการศึกษา จำนวน 10 ด้าน แบ่งเป็นกลุ่มสมรรถนะทั่วไป และกลุ่มสมรรถนะเฉพาะวิชาชีพ:
                </p>

                <!-- 4.1 หมวดสมรรถนะทั่วไป (PLO 1 - 5) -->
                <h2 class="h5 font-weight-bold text-primary mb-3">
                    <i class="fa fa-user-circle mr-1"></i> กลุ่มผลลัพธ์การเรียนรู้ทั่วไป (General Competencies: PLO 1 – 5)
                </h2>
                <div class="row mb-4">
                    <div class="col-md-6 col-lg-4 mb-3">
                        <div class="plo-card">
                            <span class="plo-badge plo-badge-general">PLO 1</span>
                            <h3 class="h6 font-weight-bold text-dark mb-2">อัตลักษณ์บัณฑิตวไลยอลงกรณ์</h3>
                            <p class="small text-secondary mb-0">
                                อธิบายลักษณะการเป็นบัณฑิตวไลยอลงกรณ์ตามเอกลักษณ์และอัตลักษณ์ของความเป็นวไลยอลงกรณ์ได้อย่างถูกต้อง
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-3">
                        <div class="plo-card">
                            <span class="plo-badge plo-badge-general">PLO 2</span>
                            <h3 class="h6 font-weight-bold text-dark mb-2">การสื่อสารในชีวิตประจำวัน</h3>
                            <p class="small text-secondary mb-0">
                                สื่อสารภาษาไทยและภาษาอังกฤษเพื่อการดำเนินชีวิตประจำวันและการทำงานได้อย่างมีประสิทธิภาพ
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-3">
                        <div class="plo-card">
                            <span class="plo-badge plo-badge-general">PLO 3</span>
                            <h3 class="h6 font-weight-bold text-dark mb-2">สุขภาวะและความรับผิดชอบต่อสังคม</h3>
                            <p class="small text-secondary mb-0">
                                ดูแลสุขภาพกายและจิตใจของตนเอง เพื่อตอบสนองต่อความรับผิดชอบของชุมชนและสังคมอย่างสมดุล
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 mb-3">
                        <div class="plo-card">
                            <span class="plo-badge plo-badge-general">PLO 4</span>
                            <h3 class="h6 font-weight-bold text-dark mb-2">พลเมืองดิจิทัล (Digital Citizenship)</h3>
                            <p class="small text-secondary mb-0">
                                ปฏิบัติตามหน้าที่การเป็นพลเมืองในยุคดิจิทัลได้อย่างถูกต้อง มีความตระหนักรู้ด้านความปลอดภัยของข้อมูลและกฎหมายไอที
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 mb-3">
                        <div class="plo-card">
                            <span class="plo-badge plo-badge-general">PLO 5</span>
                            <h3 class="h6 font-weight-bold text-dark mb-2">การคิดเชิงระบบและผู้ประกอบการ</h3>
                            <p class="small text-secondary mb-0">
                                ใช้ทักษะการคิดเชิงระบบในการสร้างแบบจำลองธุรกิจดิจิทัลหรือนวัตกรรม เพื่อเป็นแนวทางในการสร้างอาชีพในอนาคต
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 4.2 หมวดสมรรถนะวิชาชีพวิทยาการคอมพิวเตอร์ (PLO 6 - 10) -->
                <h2 class="h5 font-weight-bold text-success mb-3">
                    <i class="fa fa-code mr-1"></i> กลุ่มผลลัพธ์การเรียนรู้เฉพาะวิชาชีพ (Professional Competencies: PLO 6 – 10)
                </h2>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-3">
                        <div class="plo-card" style="border-top: 3px solid #28a745;">
                            <span class="plo-badge plo-badge-professional">PLO 6</span>
                            <h3 class="h6 font-weight-bold text-dark mb-2">ทฤษฎีและอัลกอริทึม</h3>
                            <p class="small text-secondary mb-0">
                                อธิบายหลักการทางทฤษฎีและแนวคิดพื้นฐานของวิทยาการคอมพิวเตอร์ และประยุกต์ใช้ความรู้ดังกล่าวในการแก้ปัญหาทางเทคนิคได้อย่างมีตรรกะ
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-3">
                        <div class="plo-card" style="border-top: 3px solid #28a745;">
                            <span class="plo-badge plo-badge-professional">PLO 7</span>
                            <h3 class="h6 font-weight-bold text-dark mb-2">วิเคราะห์และพัฒนาระบบที่ปลอดภัย</h3>
                            <p class="small text-secondary mb-0">
                                วิเคราะห์ รวบรวม และประเมินความต้องการของระบบสารสนเทศ เพื่อออกแบบสำหรับการพัฒนาโปรแกรมประยุกต์หรือโครงสร้างพื้นฐานด้านดิจิทัลที่ปลอดภัยและมีประสิทธิภาพ
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-3">
                        <div class="plo-card" style="border-top: 3px solid #28a745;">
                            <span class="plo-badge plo-badge-professional">PLO 8</span>
                            <h3 class="h6 font-weight-bold text-dark mb-2">นวัตกรรมดิจิทัลเพื่อชุมชน</h3>
                            <p class="small text-secondary mb-0">
                                พัฒนานวัตกรรมคอมพิวเตอร์และเทคโนโลยีดิจิทัล หรือสร้างบริการที่ตอบสนองต่อปัญหาและความต้องการของชุมชนและสังคมได้จริง
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 mb-3">
                        <div class="plo-card" style="border-top: 3px solid #28a745;">
                            <span class="plo-badge plo-badge-professional">PLO 9</span>
                            <h3 class="h6 font-weight-bold text-dark mb-2">การสื่อสารเทคนิค & การทำงานเป็นทีม</h3>
                            <p class="small text-secondary mb-0">
                                สื่อสารข้อมูลทางเทคนิคที่ซับซ้อนได้อย่างมีประสิทธิผล ทั้งในรูปแบบการเขียนและการนำเสนอต่อผู้ฟังที่หลากหลาย และสามารถทำงานร่วมกับผู้อื่นในฐานะสมาชิกหรือผู้นำทีม
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 mb-3">
                        <div class="plo-card" style="border-top: 3px solid #28a745;">
                            <span class="plo-badge plo-badge-professional">PLO 10</span>
                            <h3 class="h6 font-weight-bold text-dark mb-2">จรรยาบรรณ & การเรียนรู้ตลอดชีวิต</h3>
                            <p class="small text-secondary mb-0">
                                แสดงออกถึงความรับผิดชอบต่อสังคม จรรยาบรรณวิชาชีพ และประเมินผลกระทบของเทคโนโลยีต่อผู้ใช้งานและสังคม รวมถึงการเรียนรู้และพัฒนาตนเองอย่างต่อเนื่องตามความก้าวหน้าทางเทคโนโลยี
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 5. ความสำคัญของหลักสูตรและจุดเน้นเชิงยุทธศาสตร์ -->
            <div class="card bg-light border-0 p-4" style="border-radius: 14px;" data-aos="fade-up">
                <div class="row align-items-center">
                    <div class="col-lg-8 mb-3 mb-lg-0">
                        <h2 class="h5 font-weight-bold text-dark mb-2">
                            <i class="fa fa-rocket text-primary mr-2"></i>ผลิตบัณฑิตสู่ยุคดิจิทัลและปัญญาประดิษฐ์ (AI-Driven Era)
                        </h2>
                        <p class="text-secondary small mb-0">
                            หลักสูตรมุ่งเน้นการผลิตบัณฑิตที่พร้อมทำงานได้ทันที (Work-Ready) เสริมสร้างทักษะทั้งด้านการพัฒนาซอฟต์แวร์ คลาวด์คอมพิวติ้ง และปัญญาประดิษฐ์ พร้อมเปิดรับทั้งภาคปกติ (จันทร์-ศุกร์) และภาคพิเศษ (เสาร์-อาทิตย์)
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a href="structure.php" class="btn btn-primary mr-2 mb-2 mb-sm-0">
                            <i class="fa fa-book mr-1"></i> ดูโครงสร้างหลักสูตร
                        </a>
                        <a href="tcas.php" class="btn btn-outline-primary mb-2 mb-sm-0">
                            <i class="fa fa-user-plus mr-1"></i> สมัครเรียน
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Course",
            "name": "หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์",
            "description": "มุ่งผลิตบัณฑิตที่มีความรู้ ทักษะทางวิทยาการคอมพิวเตอร์ มีคุณธรรม จริยธรรม และทำงานร่วมกับผู้อื่น เพื่อตอบสนองหน่วยงานภาครัฐและเอกชน เพื่อขับเคลื่อนสังคมและเศรษฐกิจดิจิทัลอย่างยั่งยืน",
            "provider": {
                "@type": "CollegeOrUniversity",
                "name": "มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์",
                "sameAs": "http://www.vru.ac.th"
            }
        }
        </script>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>
</body>

</html>
