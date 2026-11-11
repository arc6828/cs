<?php
$og_title = "โครงสร้างหลักสูตรวิทยาการคอมพิวเตอร์ (พ.ศ. 2565) | มรภ.วไลยอลงกรณ์ (VRU)";
$og_description = "โครงสร้างหลักสูตรและรายวิชา หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์ (หลักสูตรปรับปรุง พ.ศ. 2565) 127 หน่วยกิต สำหรับนักศึกษารหัส 65-69 มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์";
$og_url = "https://cs.vru.ac.th/structure-65.php";
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

        .course-en {
            color: #495057 !important;
            font-size: 0.85rem;
            font-weight: 400;
        }

        /* Version Switcher Navigation */
        .version-switcher-bar {
            background: #ffffff;
            border: 1px solid #ced4da;
            border-radius: 12px;
            padding: 0.85rem 1rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
            margin-bottom: 1.5rem;
        }

        .version-pill {
            display: inline-flex;
            align-items: center;
            padding: 0.55rem 1.15rem;
            border-radius: 50rem;
            font-size: 0.95rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s ease;
            margin-right: 0.5rem;
            margin-bottom: 0.4rem;
        }

        .version-pill.active {
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            color: #ffffff !important;
            box-shadow: 0 4px 10px rgba(0, 123, 255, 0.3);
        }

        .version-pill.inactive {
            background-color: #f1f3f5;
            color: #343a40;
            border: 1px solid #dee2e6;
        }

        .version-pill.inactive:hover {
            background-color: #e2e6ea;
            color: #007bff;
            text-decoration: none;
        }

        /* Clean, Complete & Consistent Table Borders */
        .table-course {
            width: 100%;
            border-collapse: collapse !important;
            border: 1px solid #ced4da !important;
            background-color: #ffffff;
            margin-bottom: 0;
        }

        .table-course th,
        .table-course td {
            border: 1px solid #ced4da !important;
            vertical-align: middle !important;
            padding: 0.65rem 0.75rem !important;
        }

        .table-course thead th {
            background-color: #eef2f7 !important;
            color: #212529 !important;
            font-weight: 600 !important;
            border: 1px solid #ced4da !important;
            border-bottom: 2px solid #adb5bd !important;
        }

        .table-course tbody td {
            color: #212529 !important;
            font-size: 0.95rem;
            background-color: #ffffff;
            font-weight: 400;
        }

        .table-course tbody tr:hover td {
            background-color: #f8f9fa !important;
        }

        .table-course tr.table-group-header td {
            background-color: #f8f9fa !important;
            color: #212529 !important;
            font-weight: 600 !important;
            border: 1px solid #ced4da !important;
            border-top: 2px solid #ced4da !important;
        }

        .table-course tr.table-total td {
            background-color: #f1f3f5 !important;
            color: #212529 !important;
            font-weight: 600 !important;
            border: 1px solid #ced4da !important;
            border-top: 2px solid #adb5bd !important;
        }

        .table-course code {
            color: #0b5ed7 !important;
            background-color: #f0f4f8;
            padding: 0.2rem 0.45rem;
            border-radius: 4px;
            font-weight: 500;
            border: 1px solid #d0d7de;
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
                    <li class="breadcrumb-item"><a href="structure.php">โครงสร้างหลักสูตร</a></li>
                    <li class="breadcrumb-item active" aria-current="page">หลักสูตร พ.ศ. 2565</li>
                </ol>
            </nav>

            <!-- Page Header -->
            <div class="page-header-modern mb-3">
                <h1 class="h2 font-weight-bold text-dark mb-1">
                    <i class="fa fa-book text-primary mr-2"></i>โครงสร้างหลักสูตร พ.ศ. 2565 (รหัส 65 – 69)
                </h1>
                <p class="text-dark-gray mb-0">
                    หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์ (หลักสูตรปรับปรุง พ.ศ. 2565) สำหรับนักศึกษาที่เข้าศึกษาระหว่างปีการศึกษา 2565 – 2569
                </p>
            </div>

            <!-- Version Switcher Bar -->
            <div class="version-switcher-bar d-flex flex-wrap align-items-center justify-content-between mb-4">
                <div class="d-flex flex-wrap align-items-center">
                    <span class="text-dark-gray small font-weight-bold mr-3 my-1">
                        <i class="fa fa-history mr-1"></i> เลือกรุ่นหลักสูตร:
                    </span>
                    <a href="structure.php" class="version-pill inactive" title="หลักสูตรใหม่ล่าสุด พ.ศ. 2570 สำหรับผู้สนใจเข้าศึกษาใหม่">
                        <i class="fa fa-star text-warning mr-2"></i> หลักสูตรใหม่ พ.ศ. 2570 <span class="badge badge-success ml-2">124 นก. (ใหม่ล่าสุด)</span>
                    </a>
                    <a href="structure-65.php" class="version-pill active" title="สำหรับนักศึกษารหัส 65-69 ที่กำลังศึกษา">
                        <i class="fa fa-book mr-1"></i> หลักสูตร พ.ศ. 2565 <span class="badge badge-light text-primary ml-1">127 นก. (รหัส 65-69)</span>
                    </a>
                    <a href="structure-60.php" class="version-pill inactive" title="หลักสูตรเดิมสำหรับอ้างอิง">
                        <i class="fa fa-archive mr-1"></i> หลักสูตร พ.ศ. 2560
                    </a>
                </div>
                <div class="my-1">
                    <span class="badge badge-primary px-3 py-2 font-weight-bold">
                        <i class="fa fa-users mr-1"></i> สำหรับนักศึกษาปัจจุบัน (รหัส 65-69)
                    </span>
                </div>
            </div>

            <!-- Callout Card -->
            <div class="card border shadow-sm mb-4" style="border-radius: 12px; background: linear-gradient(135deg, #f8fbff 0%, #ffffff 100%); border-left: 4px solid #007bff !important; border-color: #ced4da;">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <div>
                            <h2 class="h5 font-weight-bold text-dark mb-1">
                                หลักสูตรปรับปรุง พ.ศ. 2565 (จำนวนหน่วยกิตรวมไม่น้อยกว่า 127 หน่วยกิต)
                            </h2>
                            <p class="text-dark-gray small mb-0">
                                ได้รับความเห็นชอบจากสภาวิชาการ และสำนักงานปลัดกระทรวงการอุดมศึกษา วิทยาศาสตร์ วิจัยและนวัตกรรม (สป.อว.) รับทราบเมื่อวันที่ 3 พฤษภาคม 2565
                            </p>
                        </div>
                        <div class="mt-3 mt-lg-0">
                            <a class="btn btn-outline-primary btn-sm font-weight-bold" href="http://acad.vru.ac.th/about_acad/A/299.pdf" target="_blank" rel="noopener">
                                <i class="fa fa-file-pdf-o mr-1"></i> ดาวน์โหลด มคอ.2 ฉบับเต็ม (PDF)
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 1: Summary Table -->
            <div class="card border shadow-sm mb-4" style="border-radius: 12px; overflow: hidden; border-color: #ced4da !important;">
                <div class="card-header bg-white py-3 border-bottom" style="border-color: #ced4da !important;">
                    <h2 class="h6 font-weight-bold text-dark mb-0">
                        <i class="fa fa-pie-chart text-primary mr-2"></i>1. โครงสร้างหมวดหมู่วิชา (Curriculum Credit Structure)
                    </h2>
                </div>
                <div class="table-responsive">
                    <table class="table-course table-hover">
                        <thead>
                            <tr>
                                <th>หมวดวิชา</th>
                                <th class="text-center" style="width: 25%;">จำนวนหน่วยกิตที่กำหนด</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div>1) หมวดวิชาศึกษาทั่วไป</div>
                                    <div class="course-en">ใช้หลักสูตรหมวดวิชาศึกษาทั่วไปของมหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์</div>
                                </td>
                                <td class="text-center font-weight-bold">30 หน่วยกิต</td>
                            </tr>
                            <tr>
                                <td>
                                    <div>2) หมวดวิชาเฉพาะ</div>
                                    <div class="mt-2 pl-3 small text-dark-gray">
                                        <div>• 2.1) กลุ่มวิชาแกน (Core Courses): 12 หน่วยกิต</div>
                                        <div>• 2.2) กลุ่มวิชาเฉพาะด้านบังคับ (Specialized Required Courses): 51 หน่วยกิต</div>
                                        <div class="pl-3 text-dark-gray">
                                            - กลุ่มประเด็นด้านองค์การและระบบสารสนเทศ 15 นก.<br>
                                            - กลุ่มเทคโนโลยีเพื่องานประยุกต์ 7 นก.<br>
                                            - กลุ่มเทคโนโลยีและวิธีการทางซอฟต์แวร์ 13 นก.<br>
                                            - กลุ่มโครงสร้างพื้นฐานของระบบ 13 นก.<br>
                                            - กลุ่มฮาร์ดแวร์และสถาปัตยกรรมคอมพิวเตอร์ 3 นก.
                                        </div>
                                        <div>• 2.3) กลุ่มวิชาเฉพาะด้านเลือก (Major Electives): 21 หน่วยกิต</div>
                                        <div>• 2.4) กลุ่มวิชาปฏิบัติการและฝึกประสบการณ์วิชาชีพ: 7 หน่วยกิต</div>
                                    </div>
                                </td>
                                <td class="text-center font-weight-bold">91 หน่วยกิต</td>
                            </tr>
                            <tr>
                                <td>
                                    <div>3) หมวดวิชาเลือกเสรี</div>
                                    <div class="course-en">เลือกเรียนรายวิชาใดๆ ที่เปิดสอนในระดับปริญญาตรีของมหาวิทยาลัยตามเกณฑ์</div>
                                </td>
                                <td class="text-center font-weight-bold">6 หน่วยกิต</td>
                            </tr>
                            <tr class="table-total">
                                <td>รวมจำนวนหน่วยกิตตลอดหลักสูตร</td>
                                <td class="text-center">127 หน่วยกิต</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Section 2: Detailed Course Inventory -->
            <div class="card border shadow-sm mb-4" style="border-radius: 12px; overflow: hidden; border-color: #ced4da !important;">
                <div class="card-header bg-white py-3 border-bottom" style="border-color: #ced4da !important;">
                    <h2 class="h6 font-weight-bold text-dark mb-0">
                        <i class="fa fa-list text-primary mr-2"></i>2. รายชื่อวิชาหมวดวิชาเฉพาะ (91 หน่วยกิต)
                    </h2>
                </div>
                <div class="card-body p-4">

                    <!-- 2.1 กลุ่มวิชาแกน -->
                    <div class="mb-4">
                        <h3 class="h6 font-weight-bold text-dark border-bottom pb-2 mb-2">
                            2.1) กลุ่มวิชาแกน (บังคับเรียน 12 หน่วยกิต)
                        </h3>
                        <div class="table-responsive">
                            <table class="table-course table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 15%;">รหัสวิชา</th>
                                        <th style="width: 50%;">ชื่อวิชาภาษาไทย</th>
                                        <th style="width: 20%;">Course Title (English)</th>
                                        <th class="text-center" style="width: 15%;">น(ท-ป-ศ)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td><code>SMS101</code></td><td>แคลคูลัสและเรขาคณิตวิเคราะห์ 1</td><td class="course-en">Calculus & Analytic Geometry 1</td><td class="text-center">3(3-0-6)</td></tr>
                                    <tr><td><code>SMS203</code></td><td>ความน่าจะเป็นและสถิติเบื้องต้น</td><td class="course-en">Probability & Statistics</td><td class="text-center">3(3-0-6)</td></tr>
                                    <tr><td><code>SCS112</code></td><td>คณิตศาสตร์ดิสครีตสำหรับวิทยาการคอมพิวเตอร์</td><td class="course-en">Discrete Math for CS</td><td class="text-center">3(3-0-6)</td></tr>
                                    <tr><td><code>SCS113</code></td><td>สถิติสำหรับนักวิทยาการคอมพิวเตอร์</td><td class="course-en">Statistics for CS</td><td class="text-center">3(3-0-6)</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- 2.2 กลุ่มวิชาเฉพาะด้านบังคับ -->
                    <div class="mb-4">
                        <h3 class="h6 font-weight-bold text-dark border-bottom pb-2 mb-2">
                            2.2) กลุ่มวิชาเฉพาะด้านบังคับ (บังคับเรียน 51 หน่วยกิต)
                        </h3>
                        <div class="table-responsive">
                            <table class="table-course table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 15%;">รหัสวิชา</th>
                                        <th style="width: 50%;">ชื่อวิชาภาษาไทย</th>
                                        <th style="width: 20%;">Course Title (English)</th>
                                        <th class="text-center" style="width: 15%;">น(ท-ป-ศ)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-group-header"><td colspan="4">กลุ่มประเด็นด้านองค์การและระบบสารสนเทศ (15 หน่วยกิต)</td></tr>
                                    <tr><td><code>SCS216</code></td><td>การศึกษาเรียนรู้ชุมชน</td><td class="course-en">Community Studies</td><td class="text-center">2(1-2-3)</td></tr>
                                    <tr><td><code>SCS217</code></td><td>การศึกษาวิเคราะห์ปัญหาชุมชน</td><td class="course-en">Analytical Study of Community Issues</td><td class="text-center">2(1-2-3)</td></tr>
                                    <tr><td><code>SCS410</code></td><td>การพัฒนานวัตกรรมคอมพิวเตอร์และบริการชุมชน</td><td class="course-en">Computer Innovation & Community Services</td><td class="text-center">3(2-2-5)</td></tr>
                                    <tr><td><code>SCS221</code></td><td>ความมั่นคงปลอดภัยไซเบอร์</td><td class="course-en">Cyber Security</td><td class="text-center">3(2-2-5)</td></tr>
                                    <tr><td><code>SCS214</code></td><td>การวิเคราะห์และออกแบบระบบสารสนเทศ</td><td class="course-en">Analysis & Design of Info Systems</td><td class="text-center">3(2-2-5)</td></tr>
                                    <tr><td><code>SCS409</code></td><td>การเตรียมโครงงานวิทยาการคอมพิวเตอร์</td><td class="course-en">Preparation for CS Project</td><td class="text-center">2(1-2-3)</td></tr>

                                    <tr class="table-group-header"><td colspan="4">กลุ่มเทคโนโลยีเพื่องานประยุกต์ (7 หน่วยกิต)</td></tr>
                                    <tr><td><code>SCS218</code></td><td>การออกแบบและพัฒนาเว็บ</td><td class="course-en">Web Design and Development</td><td class="text-center">3(2-2-5)</td></tr>
                                    <tr><td><code>SCS215</code></td><td>ระบบฐานข้อมูล</td><td class="course-en">Database Systems</td><td class="text-center">3(2-2-5)</td></tr>
                                    <tr><td><code>SCS335</code></td><td>สัมมนาวิทยาการคอมพิวเตอร์</td><td class="course-en">Computer Science Seminar</td><td class="text-center">1(0-2-1)</td></tr>

                                    <tr class="table-group-header"><td colspan="4">กลุ่มเทคโนโลยีและวิธีการทางซอฟต์แวร์ (13 หน่วยกิต)</td></tr>
                                    <tr><td><code>SCS114</code></td><td>การโปรแกรมคอมพิวเตอร์เบื้องต้น</td><td class="course-en">Basic Computer Programming</td><td class="text-center">3(2-2-5)</td></tr>
                                    <tr><td><code>SCS115</code></td><td>การโปรแกรมเชิงวัตถุ</td><td class="course-en">Object Oriented Programming</td><td class="text-center">3(2-2-5)</td></tr>
                                    <tr><td><code>SCS116</code></td><td>ขั้นตอนวิธีและโครงสร้างข้อมูล</td><td class="course-en">Algorithms and Data Structures</td><td class="text-center">3(2-2-5)</td></tr>
                                    <tr><td><code>SCS220</code></td><td>การพัฒนาผลิตภัณฑ์ซอฟต์แวร์</td><td class="course-en">Software Product Development</td><td class="text-center">3(2-2-5)</td></tr>
                                    <tr><td><code>SCS411</code></td><td>โครงงานวิทยาการคอมพิวเตอร์</td><td class="course-en">Computer Science Project</td><td class="text-center">1(0-2-1)</td></tr>

                                    <tr class="table-group-header"><td colspan="4">กลุ่มโครงสร้างพื้นฐานของระบบ (13 หน่วยกิต)</td></tr>
                                    <tr><td><code>SCS223</code></td><td>ระบบการสื่อสารข้อมูล</td><td class="course-en">Data Communication Systems</td><td class="text-center">3(2-2-5)</td></tr>
                                    <tr><td><code>SCS222</code></td><td>เครือข่ายคอมพิวเตอร์</td><td class="course-en">Computer Networks</td><td class="text-center">3(2-2-5)</td></tr>
                                    <tr><td><code>SCS219</code></td><td>การพัฒนาโปรแกรมประยุกต์บนเว็บสำหรับองค์กร</td><td class="course-en">Web App Dev for Enterprises</td><td class="text-center">3(2-2-5)</td></tr>
                                    <tr><td><code>SCS339</code></td><td>การบริหารระบบและเครือข่าย</td><td class="course-en">System and Network Administration</td><td class="text-center">4(3-2-7)</td></tr>

                                    <tr class="table-group-header"><td colspan="4">กลุ่มฮาร์ดแวร์และสถาปัตยกรรมคอมพิวเตอร์ (3 หน่วยกิต)</td></tr>
                                    <tr><td><code>SCS117</code></td><td>สถาปัตยกรรมและระบบปฏิบัติการคอมพิวเตอร์</td><td class="course-en">Architecture and OS</td><td class="text-center">3(2-2-5)</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- 2.3 กลุ่มวิชาเลือก -->
                    <div class="mb-4">
                        <h3 class="h6 font-weight-bold text-dark border-bottom pb-2 mb-2">
                            2.3) กลุ่มวิชาเฉพาะด้านเลือก (เลือกเรียนไม่น้อยกว่า 21 หน่วยกิต)
                        </h3>
                        <div class="table-responsive">
                            <table class="table-course table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 15%;">รหัสวิชา</th>
                                        <th style="width: 50%;">ชื่อวิชาภาษาไทย</th>
                                        <th style="width: 20%;">Course Title (English)</th>
                                        <th class="text-center" style="width: 15%;">น(ท-ป-ศ)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td><code>SCS334</code></td><td>การประมวลผลบนคลาวด์</td><td class="course-en">Cloud Computing</td><td class="text-center">3(2-2-5)</td></tr>
                                    <tr><td><code>SCS337</code></td><td>การพัฒนาแอปพลิเคชันบนอุปกรณ์เคลื่อนที่</td><td class="course-en">Mobile Application Development</td><td class="text-center">3(2-2-5)</td></tr>
                                    <tr><td><code>SCS340</code></td><td>อินเทอร์เน็ตในทุกสิ่ง</td><td class="course-en">Internet of Things (IoT)</td><td class="text-center">3(2-2-5)</td></tr>
                                    <tr><td><code>SCS345</code></td><td>พื้นฐานวิทยาการข้อมูล</td><td class="course-en">Data Science Fundamentals</td><td class="text-center">3(2-2-5)</td></tr>
                                    <tr><td><code>SCS346</code></td><td>เทคโนโลยีคลังและเหมืองข้อมูล</td><td class="course-en">Data Warehouse & Data Mining</td><td class="text-center">3(2-2-5)</td></tr>
                                    <tr><td><code>SCS347</code></td><td>การวิเคราะห์ข้อมูลขนาดใหญ่เชิงธุรกิจ</td><td class="course-en">Big Data Analytics in Business</td><td class="text-center">3(2-2-5)</td></tr>
                                    <tr><td><code>SCS348</code></td><td>เทคโนโลยีสื่อเสมือนจริง</td><td class="course-en">Virtual Media Technology</td><td class="text-center">3(2-2-5)</td></tr>
                                    <tr><td><code>SCS349</code></td><td>ปัญญาประดิษฐ์และการเรียนรู้ของเครื่องจักร</td><td class="course-en">AI & Machine Learning</td><td class="text-center">3(2-2-5)</td></tr>
                                    <tr><td><code>SCS350</code></td><td>การจัดการธุรกิจด้วยคอมพิวเตอร์</td><td class="course-en">Business Management with Computers</td><td class="text-center">3(2-2-5)</td></tr>
                                    <tr><td><code>SCS351</code></td><td>ระบบฐานข้อมูลกราฟสำหรับการวิเคราะห์</td><td class="course-en">Graph Database for Analytics</td><td class="text-center">3(2-2-5)</td></tr>
                                    <tr><td><code>SCS352</code></td><td>เทคโนโลยีเกิดใหม่ด้านวิทยาการคอมพิวเตอร์</td><td class="course-en">Emerging Tech in Computer Science</td><td class="text-center">3(2-2-5)</td></tr>
                                    <tr><td><code>SCS353</code></td><td>การปฏิสัมพันธ์ระหว่างมนุษย์และคอมพิวเตอร์</td><td class="course-en">Human-Computer Interaction (HCI)</td><td class="text-center">3(2-2-5)</td></tr>
                                    <tr><td><code>SCS354</code></td><td>คอมพิวเตอร์กราฟิกส์และการประมวลผลภาพ</td><td class="course-en">Computer Graphics & Image Processing</td><td class="text-center">3(2-2-5)</td></tr>
                                    <tr><td><code>SCS355</code></td><td>ระบบสารสนเทศภูมิศาสตร์</td><td class="course-en">Geographic Information System (GIS)</td><td class="text-center">3(2-2-5)</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- 2.4 กลุ่มวิชาปฏิบัติการและฝึกประสบการณ์วิชาชีพ -->
                    <div>
                        <h3 class="h6 font-weight-bold text-dark border-bottom pb-2 mb-2">
                            2.4) กลุ่มวิชาปฏิบัติการและฝึกประสบการณ์วิชาชีพ (เลือก 7 หน่วยกิต)
                        </h3>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <div class="p-3 border rounded bg-light" style="border-color: #ced4da !important;">
                                    <div class="font-weight-bold text-dark mb-1">กลุ่มสหกิจศึกษา (Cooperative Education)</div>
                                    <ul class="list-unstyled small mb-0 text-dark-gray">
                                        <li>• <code>SCS406</code> การเตรียมสหกิจศึกษาวิทยาการคอมพิวเตอร์ : 1(45)</li>
                                        <li>• <code>SCS407</code> การฝึกสหกิจศึกษาด้านวิทยาการคอมพิวเตอร์ : 6(640)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="p-3 border rounded bg-light" style="border-color: #ced4da !important;">
                                    <div class="font-weight-bold text-dark mb-1">กลุ่มการสร้างผู้ประกอบการ (Entrepreneurship)</div>
                                    <ul class="list-unstyled small mb-0 text-dark-gray">
                                        <li>• <code>UBI101</code> การสร้างและพัฒนาศักยภาพผู้ประกอบการใหม่ : 7(640)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Footer switcher links -->
            <div class="d-flex justify-content-between align-items-center flex-wrap pt-2 border-top">
                <a class="btn btn-outline-primary btn-sm my-1" href="structure.php">
                    <i class="fa fa-star text-warning mr-1"></i> ดูโครงสร้างหลักสูตรใหม่ พ.ศ. 2570
                </a>
                <a class="btn btn-outline-secondary btn-sm my-1" href="structure-60.php">
                    <i class="fa fa-archive mr-1"></i> ดูโครงสร้างหลักสูตร พ.ศ. 2560
                </a>
            </div>

        </div>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>
</body>

</html>
