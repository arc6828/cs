<?php
$og_title = "รายละเอียดหลักสูตรวิทยาศาสตรบัณฑิต (วท.บ. วิทยาการคอมพิวเตอร์) | มรภ.วไลยอลงกรณ์ (VRU)";
$og_description = "ข้อมูลหลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ รหัสหลักสูตร 25471531100273 แผนการศึกษา 4 ปี ภาคปกติและเสาร์-อาทิตย์ พร้อมสายอาชีพเป้าหมายยุค AI & Full-Stack";
$og_url = "https://cs.vru.ac.th/Description.php";
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

        .highlight-stat-card {
            background: #ffffff;
            border: 1px solid #e3e8ee;
            border-radius: 12px;
            padding: 1.25rem 1rem;
            text-align: center;
            height: 100%;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .highlight-stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(0, 123, 255, 0.08);
            border-color: #b8daff;
        }

        .highlight-stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.35rem;
            margin-bottom: 0.75rem;
        }

        .info-table-card {
            background: #ffffff;
            border: 1px solid #e3e8ee;
            border-radius: 12px;
            overflow: hidden;
        }

        .info-table-card .card-header {
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            color: #ffffff;
            padding: 1rem 1.25rem;
            font-weight: 700;
        }

        .table-custom-spec th {
            width: 32%;
            background-color: #f8fbff;
            color: #333333;
            font-weight: 600;
            vertical-align: middle;
            border-color: #ebf1f7;
        }

        .table-custom-spec td {
            vertical-align: middle;
            border-color: #ebf1f7;
            color: #495057;
        }

        .career-card {
            background: #ffffff;
            border: 1px solid #e3e8ee;
            border-radius: 12px;
            padding: 1.4rem;
            height: 100%;
            transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
            position: relative;
        }

        .career-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(0, 123, 255, 0.1);
            border-color: #007bff;
        }

        .career-icon-box {
            width: 46px;
            height: 46px;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            margin-bottom: 1rem;
        }

        .career-badge {
            position: absolute;
            top: 1.25rem;
            right: 1.25rem;
            font-size: 0.75rem;
            padding: 0.25rem 0.6rem;
            border-radius: 50rem;
            font-weight: 600;
        }

        .tech-pill {
            display: inline-block;
            font-size: 0.75rem;
            padding: 0.2rem 0.55rem;
            background-color: #eef2f7;
            color: #495057;
            border-radius: 4px;
            margin-right: 0.3rem;
            margin-bottom: 0.35rem;
            font-weight: 500;
        }

        .accreditation-item {
            padding: 0.75rem 1rem;
            border-radius: 8px;
            background-color: #f8fbff;
            border: 1px solid #dce9f8;
            margin-bottom: 0.75rem;
            display: flex;
            align-items: flex-start;
        }

        .accreditation-item i {
            font-size: 1.35rem;
            color: #28a745;
            margin-right: 0.85rem;
            margin-top: 0.2rem;
            flex-shrink: 0;
        }

        .cta-box-curriculum {
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            border-radius: 12px;
            color: #ffffff;
            padding: 2rem;
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
                    <li class="breadcrumb-item active" aria-current="page">เกี่ยวกับหลักสูตร</li>
                    <li class="breadcrumb-item active" aria-current="page">รายละเอียดหลักสูตร</li>
                </ol>
            </nav>

            <!-- Page Header -->
            <div class="page-header-modern mb-4">
                <h1 class="h2 font-weight-bold text-dark mb-1">
                    <i class="fa fa-graduation-cap text-primary mr-2"></i>รายละเอียดหลักสูตร (Curriculum Details)
                </h1>
                <p class="text-muted mb-2">
                    หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์ (วท.บ. วิทยาการคอมพิวเตอร์ / B.Sc. Computer Science) มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์
                </p>
                <div class="d-flex flex-wrap pt-1">
                    <span class="badge badge-primary px-3 py-2 mr-2 mb-2 font-weight-bold">
                        <i class="fa fa-id-card-o mr-1"></i> รหัสหลักสูตร 25471531100273
                    </span>
                    <span class="badge badge-info px-3 py-2 mr-2 mb-2 font-weight-bold">
                        <i class="fa fa-clock-o mr-1"></i> หลักสูตรปริญญาตรี 4 ปี
                    </span>
                    <span class="badge badge-success px-3 py-2 mr-2 mb-2 font-weight-bold">
                        <i class="fa fa-check-circle mr-1"></i> ก.พ. / ก.ค.ศ. / สป.อว. รับรอง
                    </span>
                    <span class="badge badge-warning px-3 py-2 mr-2 mb-2 font-weight-bold text-dark">
                        <i class="fa fa-calendar mr-1"></i> ภาคปกติ & เสาร์-อาทิตย์
                    </span>
                </div>
            </div>

            <!-- Quick Stat Highlights -->
            <div class="row mb-4">
                <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="highlight-stat-card shadow-sm">
                        <div class="highlight-stat-icon bg-light text-primary">
                            <i class="fa fa-book"></i>
                        </div>
                        <h2 class="h6 text-muted mb-1">จำนวนหน่วยกิตรวม</h2>
                        <div class="h4 font-weight-bold text-primary mb-0">124 – 127</div>
                        <small class="text-muted">หน่วยกิตตลอดหลักสูตร</small>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="highlight-stat-card shadow-sm">
                        <div class="highlight-stat-icon bg-light text-success">
                            <i class="fa fa-hourglass-half"></i>
                        </div>
                        <h2 class="h6 text-muted mb-1">ระยะเวลาการศึกษา</h2>
                        <div class="h4 font-weight-bold text-success mb-0">4 ปี</div>
                        <small class="text-muted">ปวส. เทียบโอน 2–2.5 ปี</small>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="highlight-stat-card shadow-sm">
                        <div class="highlight-stat-icon bg-light text-info">
                            <i class="fa fa-calendar-check-o"></i>
                        </div>
                        <h2 class="h6 text-muted mb-1">รูปแบบการศึกษา</h2>
                        <div class="h4 font-weight-bold text-info mb-0">2 รูปแบบ</div>
                        <small class="text-muted">จันทร์–ศุกร์ & เสาร์–อาทิตย์</small>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="highlight-stat-card shadow-sm">
                        <div class="highlight-stat-icon bg-light text-warning">
                            <i class="fa fa-building-o"></i>
                        </div>
                        <h2 class="h6 text-muted mb-1">สถานที่จัดการเรียน</h2>
                        <div class="h4 font-weight-bold text-dark mb-0">อาคาร 75 ปี</div>
                        <small class="text-muted">10 ห้องปฏิบัติการคอมพิวเตอร์</small>
                    </div>
                </div>
            </div>

            <!-- Program Identity Specifications Table -->
            <div class="info-table-card shadow-sm mb-4">
                <div class="card-header d-flex align-items-center">
                    <i class="fa fa-list-alt mr-2"></i> ข้อมูลอัตลักษณ์และโครงสร้างพื้นฐานของหลักสูตร (Curriculum Specifications)
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-custom-spec mb-0">
                        <tbody>
                            <tr>
                                <th>ชื่อสถาบันอุดมศึกษา</th>
                                <td>
                                    <strong>มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์ จังหวัดปทุมธานี</strong>
                                    <div class="text-muted small">Valaya Alongkorn Rajabhat University under the Royal Patronage (VRU)</div>
                                </td>
                            </tr>
                            <tr>
                                <th>คณะ / หน่วยงานรับผิดชอบ</th>
                                <td>
                                    <strong>คณะวิทยาศาสตร์และเทคโนโลยี</strong> (สาขาวิชาวิทยาการคอมพิวเตอร์)
                                </td>
                            </tr>
                            <tr>
                                <th>รหัสหลักสูตร</th>
                                <td>
                                    <span class="badge badge-secondary px-2 py-1 font-weight-bold" style="font-size: 0.95rem;">25471531100273</span>
                                </td>
                            </tr>
                            <tr>
                                <th>ชื่อหลักสูตร</th>
                                <td>
                                    <div><strong>ภาษาไทย :</strong> หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์</div>
                                    <div><strong>ภาษาอังกฤษ :</strong> Bachelor of Science Program in Computer Science</div>
                                </td>
                            </tr>
                            <tr>
                                <th>ชื่อปริญญาและสาขาวิชา</th>
                                <td>
                                    <div class="row">
                                        <div class="col-md-6 mb-2 mb-md-0">
                                            <div class="font-weight-bold text-primary">ภาษาไทย</div>
                                            <div>ชื่อเต็ม : วิทยาศาสตรบัณฑิต (วิทยาการคอมพิวเตอร์)</div>
                                            <div>ชื่อย่อ : วท.บ. (วิทยาการคอมพิวเตอร์)</div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="font-weight-bold text-primary">ภาษาอังกฤษ</div>
                                            <div>ชื่อเต็ม : Bachelor of Science (Computer Science)</div>
                                            <div>ชื่อย่อ : B.Sc. (Computer Science)</div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>รูปแบบของหลักสูตร</th>
                                <td>
                                    <div>• <strong>ประเภทหลักสูตร :</strong> หลักสูตรระดับปริญญาตรี 4 ปี ทางวิชาการ</div>
                                    <div>• <strong>ภาษาที่ใช้ในการจัดการเรียนการสอน :</strong> จัดการเรียนการสอนเป็นภาษาไทยและภาษาอังกฤษ (เอกสารประกอบการสอนและคำศัพท์ทางเทคนิค)</div>
                                    <div>• <strong>การรับเข้าศึกษา :</strong> รับทั้งนักศึกษาไทยและนักศึกษาต่างชาติที่มีทักษะการสื่อสารภาษาไทยได้</div>
                                </td>
                            </tr>
                            <tr>
                                <th>คุณสมบัติของผู้เข้าศึกษา</th>
                                <td>
                                    <ul class="mb-0 pl-3">
                                        <li><strong>ผู้สำเร็จการศึกษาระดับ ม.6 :</strong> รับผู้สำเร็จการศึกษาระดับมัธยมศึกษาตอนปลาย <em>ทุกแผนการเรียน</em> (วิทย์-คณิต, ศิลป์-คำนวณ, ศิลป์-ภาษา หรือทั่วไป)</li>
                                        <li><strong>ผู้สำเร็จการศึกษาระดับ ปวช. :</strong> รับผู้สำเร็จการศึกษาระดับประกาศนียบัตรวิชาชีพ <em>ทุกสาขาวิชาชีพ</em></li>
                                        <li><strong>ผู้สำเร็จการศึกษาระดับ ปวส. :</strong> สามารถสมัครเข้าศึกษาและดำเนินการ <em>เทียบโอนหน่วยกิต</em> ตามเกณฑ์มหาวิทยาลัย (ใช้เวลาศึกษาประมาณ 2–2.5 ปี)</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th>วัน-เวลาในการจัดการเรียนการสอน</th>
                                <td>
                                    <div class="row">
                                        <div class="col-md-6 mb-2 mb-md-0">
                                            <div class="font-weight-bold text-dark"><i class="fa fa-sun-o text-warning mr-1"></i> ภาคปกติ (Regular Program)</div>
                                            <div class="text-muted small">วันจันทร์ – ศุกร์ เวลา 08.30 – 16.30 น. เหมาะสำหรับผู้สำเร็จการศึกษา ม.6 หรือ ปวช. ที่ต้องการเรียนเต็มเวลา</div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="font-weight-bold text-dark"><i class="fa fa-moon-o text-info mr-1"></i> ภาคพิเศษ / สมทบ (Weekend Program)</div>
                                            <div class="text-muted small">วันเสาร์ – อาทิตย์ เวลา 08.00 – 17.00 น. เหมาะสำหรับผู้สำเร็จการศึกษา ปวส. หรือคนทำงานในสถานประกอบการ</div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>การรับรองและสถานะการอนุมัติ</th>
                                <td>
                                    <div class="accreditation-item">
                                        <i class="fa fa-check-circle"></i>
                                        <div>
                                            <strong>สำนักงานปลัดกระทรวงการอุดมศึกษา วิทยาศาสตร์ วิจัยและนวัตกรรม (สป.อว.):</strong>
                                            <div class="text-muted small">รับทราบการให้ความเห็นชอบหลักสูตร เมื่อวันที่ 3 พฤษภาคม 2565</div>
                                        </div>
                                    </div>
                                    <div class="accreditation-item">
                                        <i class="fa fa-check-circle"></i>
                                        <div>
                                            <strong>สำนักงานคณะกรรมการข้าราชการพลเรือน (ก.พ.):</strong>
                                            <div class="text-muted small">รับรองคุณวุฒิเพื่อประโยชน์ในการบรรจุและแต่งตั้งเป็นข้าราชการพลเรือน เมื่อวันที่ 14 พฤศจิกายน 2565</div>
                                        </div>
                                    </div>
                                    <div class="accreditation-item">
                                        <i class="fa fa-check-circle"></i>
                                        <div>
                                            <strong>สำนักงานคณะกรรมการข้าราชการครูและบุคลากรทางการศึกษา (ก.ค.ศ.):</strong>
                                            <div class="text-muted small">รับรองคุณวุฒิเพื่อประโยชน์ในการบรรจุและแต่งตั้งเป็นข้าราชการครู เมื่อวันที่ 28 พฤศจิกายน 2565</div>
                                        </div>
                                    </div>
                                    <div class="accreditation-item mb-0">
                                        <i class="fa fa-check-circle text-primary"></i>
                                        <div>
                                            <strong>สภาวิชาการมหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์:</strong>
                                            <div class="text-muted small">ให้ความเห็นชอบหลักสูตรฉบับปรับปรุง พ.ศ. 2570 ในการประชุมครั้งที่ 8/2569 เมื่อวันที่ 13 สิงหาคม 2569</div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Target Careers Section -->
            <div class="mb-5">
                <div class="text-center mb-4">
                    <h2 class="h4 font-weight-bold text-dark mb-1">
                        <i class="fa fa-briefcase text-primary mr-2"></i>สายอาชีพเป้าหมายหลังสำเร็จการศึกษา (Career Opportunities)
                    </h2>
                    <p class="text-muted mb-0">
                        หลักสูตรออกแบบเพื่อรองรับความต้องการของตลาดแรงงานดิจิทัลในยุคปัญญาประดิษฐ์ (AI-Driven Era) ครอบคลุมทั้งสายงานพัฒนาซอฟต์แวร์ คลาวด์ ข้อมูล และงานบริหารจัดการ
                    </p>
                </div>

                <div class="row">

                    <!-- Career 1 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="career-card shadow-sm">
                            <span class="career-badge badge-primary text-white">Full-Stack / App</span>
                            <div class="career-icon-box bg-light text-primary">
                                <i class="fa fa-code"></i>
                            </div>
                            <h3 class="h6 font-weight-bold text-dark mb-1">1. นักพัฒนาซอฟต์แวร์</h3>
                            <div class="text-muted small mb-2">Software Developer / Engineer</div>
                            <p class="text-secondary small mb-3" style="line-height: 1.6;">
                                พัฒนาโปรแกรมประยุกต์ เว็บแอปพลิเคชัน (Frontend & Backend), โมบายแอปพลิเคชัน (iOS/Android), และระบบงานองค์กรด้วยเทคโนโลยีสมัยใหม่
                            </p>
                            <div>
                                <span class="tech-pill">Python</span>
                                <span class="tech-pill">JavaScript</span>
                                <span class="tech-pill">PHP</span>
                                <span class="tech-pill">Java</span>
                                <span class="tech-pill">REST APIs</span>
                                <span class="tech-pill">Git</span>
                            </div>
                        </div>
                    </div>

                    <!-- Career 2 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="career-card shadow-sm">
                            <span class="career-badge badge-success text-white">AI & Data</span>
                            <div class="career-icon-box bg-light text-success">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <h3 class="h6 font-weight-bold text-dark mb-1">2. วิศวกรปัญญาประดิษฐ์และข้อมูล</h3>
                            <div class="text-muted small mb-2">AI Engineer / Data Scientist</div>
                            <p class="text-secondary small mb-3" style="line-height: 1.6;">
                                ออกแบบ พัฒนา และปรับแต่งโมเดล Machine Learning, Deep Learning, Generative AI / LLMs และการวิเคราะห์ข้อมูลขนาดใหญ่เพื่อสนับสนุนการตัดสินใจ
                            </p>
                            <div>
                                <span class="tech-pill">Machine Learning</span>
                                <span class="tech-pill">Deep Learning</span>
                                <span class="tech-pill">Python</span>
                                <span class="tech-pill">GenAI</span>
                                <span class="tech-pill">Big Data</span>
                            </div>
                        </div>
                    </div>

                    <!-- Career 3 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="career-card shadow-sm">
                            <span class="career-badge badge-info text-white">Agile & QA</span>
                            <div class="career-icon-box bg-light text-info">
                                <i class="fa fa-tasks"></i>
                            </div>
                            <h3 class="h6 font-weight-bold text-dark mb-1">3. ผู้บริหารโครงการและประกันคุณภาพ</h3>
                            <div class="text-muted small mb-2">Project Manager / Scrum Master / QA</div>
                            <p class="text-secondary small mb-3" style="line-height: 1.6;">
                                วางแผน ประสานงาน และบริหารจัดการทีมพัฒนาซอฟต์แวร์ด้วยแนวทาง Agile / Scrum พร้อมตรวจทดสอบคุณภาพซอฟต์แวร์ (Manual & Automated Testing)
                            </p>
                            <div>
                                <span class="tech-pill">Agile/Scrum</span>
                                <span class="tech-pill">Project Planning</span>
                                <span class="tech-pill">Software QA</span>
                                <span class="tech-pill">Test Automation</span>
                            </div>
                        </div>
                    </div>

                    <!-- Career 4 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="career-card shadow-sm">
                            <span class="career-badge badge-warning text-dark">Architecture & UX</span>
                            <div class="career-icon-box bg-light text-warning">
                                <i class="fa fa-sitemap"></i>
                            </div>
                            <h3 class="h6 font-weight-bold text-dark mb-1">4. นักวิเคราะห์ระบบและสถาปัตยกรรม</h3>
                            <div class="text-muted small mb-2">System Analyst / UX/UI Designer</div>
                            <p class="text-secondary small mb-3" style="line-height: 1.6;">
                                รวบรวมและวิเคราะห์ความต้องการของผู้ใช้ ออกแบบสถาปัตยกรรมระบบสารสนเทศ จัดทำเอกสารข้อกำหนด และออกแบบประสบการณ์ส่วนต่อประสานผู้ใช้
                            </p>
                            <div>
                                <span class="tech-pill">UML Design</span>
                                <span class="tech-pill">Requirements</span>
                                <span class="tech-pill">UX/UI</span>
                                <span class="tech-pill">Figma</span>
                                <span class="tech-pill">Database Design</span>
                            </div>
                        </div>
                    </div>

                    <!-- Career 5 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="career-card shadow-sm">
                            <span class="career-badge badge-secondary text-white">Cloud & Security</span>
                            <div class="career-icon-box bg-light text-secondary">
                                <i class="fa fa-cloud"></i>
                            </div>
                            <h3 class="h6 font-weight-bold text-dark mb-1">5. ผู้ดูแลระบบคลาวด์และเครือข่าย</h3>
                            <div class="text-muted small mb-2">Network & Cloud / DevOps Engineer</div>
                            <p class="text-secondary small mb-3" style="line-height: 1.6;">
                                บริหารจัดการโครงสร้างพื้นฐานบนคลาวด์ (AWS, GCP, Azure), ระบบคอนเทนเนอร์ (Docker/K8s), การป้องกันภัยไซเบอร์ และส่งมอบงานแบบ CI/CD
                            </p>
                            <div>
                                <span class="tech-pill">Cloud (AWS/GCP)</span>
                                <span class="tech-pill">Linux Admin</span>
                                <span class="tech-pill">Docker</span>
                                <span class="tech-pill">DevOps / CI/CD</span>
                                <span class="tech-pill">Cybersecurity</span>
                            </div>
                        </div>
                    </div>

                    <!-- Career 6 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="career-card shadow-sm">
                            <span class="career-badge badge-dark text-white">Public & Startup</span>
                            <div class="career-icon-box bg-light text-dark">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <h3 class="h6 font-weight-bold text-dark mb-1">6. นักวิชาการคอมพิวเตอร์และสตาร์ทอัป</h3>
                            <div class="text-muted small mb-2">IT Officer / Tech Entrepreneur / Freelance</div>
                            <p class="text-secondary small mb-3" style="line-height: 1.6;">
                                ปฏิบัติงานสายวิชาชีพคอมพิวเตอร์ในหน่วยงานภาครัฐและเอกชน, นักสนับสนุนเทคโนโลยีสารสนเทศ หรือประกอบธุรกิจสตาร์ทอัปและผู้ประกอบการอิสระ
                            </p>
                            <div>
                                <span class="tech-pill">IT Support</span>
                                <span class="tech-pill">System Maintenance</span>
                                <span class="tech-pill">Freelance</span>
                                <span class="tech-pill">Digital Business</span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Skill Mapping Summary Table -->
                <div class="card border-0 shadow-sm mt-3">
                    <div class="card-header bg-light font-weight-bold">
                        <i class="fa fa-table text-primary mr-1"></i> สรุปการเชื่อมโยงสายอาชีพกับทักษะของบัณฑิต (Skill Mapping Matrix)
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0 small">
                            <thead class="thead-light">
                                <tr>
                                    <th style="width: 28%;">กลุ่มสายอาชีพ</th>
                                    <th style="width: 32%;">ทักษะทั่วไป (General Skills)</th>
                                    <th style="width: 40%;">ทักษะเฉพาะทางวิชาชีพ (Specific Technical Skills)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="font-weight-bold text-primary">นักพัฒนาซอฟต์แวร์</td>
                                    <td>การคิดแก้ปัญหาเชิงตรรกะ, การสื่อสารในทีม, การศึกษาเรียนรู้ด้วยตนเอง</td>
                                    <td>Full-Stack Web & Mobile, Python/Java/JS/PHP, ฐานข้อมูล SQL/NoSQL, REST API, Git</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold text-success">วิศวกร AI และข้อมูล</td>
                                    <td>การคิดวิเคราะห์เชิงตัวเลข, การตั้งสมมติฐาน, จริยธรรม AI</td>
                                    <td>Machine Learning, Deep Learning, Python Data Science Stack, Big Data, Prompt Engineering</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold text-info">ผู้บริหารโครงการ & QA</td>
                                    <td>ความเป็นผู้นำ, การเจรจาต่อรอง, การบริหารเวลา</td>
                                    <td>Agile / Scrum Framework, การบริหารงบประมาณ/ความเสี่ยง, Automated Testing, QA Standards</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold text-warning">นักวิเคราะห์ระบบ & UX/UI</td>
                                    <td>การคิดเชิงระบบ, การสัมภาษณ์ผู้ใช้, การจับประเด็นความต้องการ</td>
                                    <td>UML & System Architecture, Wireframing (Figma), UX Research, ออกแบบฐานข้อมูลและความปลอดภัย</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold text-secondary">ผู้ดูแลระบบคลาวด์และเครือข่าย</td>
                                    <td>การแก้ปัญหาเฉพาะหน้า, ความละเอียดรอบคอบ, การสื่อสารช่วยเหลือ</td>
                                    <td>Linux/Windows Server, Routing & Switching, Docker/Kubernetes, Cloud Infrastructure, Security</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold text-dark">นักวิชาการคอมพิวเตอร์ & สตาร์ทอัป</td>
                                    <td>จิตบริการ (Service Mind), ความคิดสร้างสรรค์, จรรยาบรรณวิชาชีพ</td>
                                    <td>การบำรุงรักษาระบบคอมพิวเตอร์, การดูแลเว็บไซต์องค์กร, การบริหารทรัพยากรดิจิทัล, การสร้างธุรกิจ</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Curriculum Structure Snapshot Card -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h2 class="h5 font-weight-bold text-dark mb-2">
                                <i class="fa fa-cubes text-primary mr-2"></i>โครงสร้างหมวดหมู่วิชาในหลักสูตร (Curriculum Structure Snapshot)
                            </h2>
                            <p class="text-muted small mb-3">
                                โครงสร้างรายวิชาแบ่งออกเป็น 3 หมวดวิชาหลัก รวมตลอดหลักสูตรไม่น้อยกว่า <strong>124–127 หน่วยกิต</strong>
                            </p>
                            <div class="row small">
                                <div class="col-sm-4 mb-2">
                                    <div class="p-2 border rounded bg-light">
                                        <div class="font-weight-bold text-primary">หมวดวิชาศึกษาทั่วไป</div>
                                        <div>30 หน่วยกิต</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-2">
                                    <div class="p-2 border rounded bg-light">
                                        <div class="font-weight-bold text-success">หมวดวิชาเฉพาะ</div>
                                        <div>88 – 91 หน่วยกิต</div>
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-2">
                                    <div class="p-2 border rounded bg-light">
                                        <div class="font-weight-bold text-info">หมวดวิชาเลือกเสรี</div>
                                        <div>6 หน่วยกิต</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 text-lg-right mt-3 mt-lg-0">
                            <a href="structure.php" class="btn btn-outline-primary btn-block py-2">
                                <i class="fa fa-search mr-1"></i> ดูรายละเอียดโครงสร้างรายวิชาทั้งหมด
                            </a>
                            <a href="philosophy.php" class="btn btn-outline-info btn-block py-2 mt-2">
                                <i class="fa fa-bullseye mr-1"></i> ดูผลลัพธ์การเรียนรู้ (PLOs 1–10)
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Admissions Banner -->
            <div class="cta-box-curriculum shadow-sm mb-4">
                <div class="row align-items-center">
                    <div class="col-lg-8 mb-3 mb-lg-0">
                        <h2 class="h4 font-weight-bold mb-2">สนใจสมัครเข้าศึกษาต่อในหลักสูตร?</h2>
                        <p class="mb-0 text-white-50" style="font-size: 0.95rem;">
                            เปิดรับสมัครทั้งผู้สำเร็จการศึกษา ม.6, ปวช. และเทียบโอนหน่วยกิตจาก ปวส. เรียนได้ทั้งภาคปกติและภาคเสาร์-อาทิตย์ พร้อมทุนการศึกษาและสิ่งอำนวยความสะดวกครบครัน
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a href="tcas.php" class="btn btn-light btn-lg font-weight-bold text-primary shadow-sm mr-2 mb-2">
                            <i class="fa fa-user-plus mr-1"></i> สมัครเรียน / TCAS
                        </a>
                        <a href="teacher.php" class="btn btn-outline-light btn-lg font-weight-bold shadow-sm mb-2">
                            <i class="fa fa-users mr-1"></i> ทำความรู้จักคณาจารย์
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Schema.org Structured Data -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Course",
            "name": "หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์",
            "alternateName": "Bachelor of Science Program in Computer Science",
            "courseCode": "25471531100273",
            "description": "หลักสูตรปริญญาตรีวิทยาการคอมพิวเตอร์ 4 ปี มรภ.วไลยอลงกรณ์ จัดการเรียนการสอนภาคปกติและเสาร์-อาทิตย์ รองรับสายงาน Software Developer, AI Engineer, Cloud & DevOps, System Analyst",
            "educationalCredentialAwarded": "วิทยาศาสตรบัณฑิต (วิทยาการคอมพิวเตอร์)",
            "numberOfCredits": 124,
            "provider": {
                "@type": "CollegeOrUniversity",
                "name": "มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์",
                "url": "https://www.vru.ac.th"
            },
            "occupationalCategory": [
                "Software Developer",
                "Artificial Intelligence Engineer",
                "Software Project Manager",
                "System Analyst",
                "Cloud & Network Administrator",
                "Computer Technical Officer"
            ]
        }
        </script>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>
</body>

</html>