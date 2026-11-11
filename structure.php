<?php
$og_title = "โครงสร้างหลักสูตรวิทยาการคอมพิวเตอร์ (หลักสูตรใหม่ พ.ศ. 2570) | มรภ.วไลยอลงกรณ์ (VRU)";
$og_description = "โครงสร้างหลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์ (หลักสูตรปรับปรุง พ.ศ. 2570) 124 หน่วยกิต มุ่งเน้น AI, Full-Stack, Cloud และวิทยาการข้อมูล แผนการเรียน 4 ปี ภาคปกติและเสาร์-อาทิตย์";
$og_url = "https://cs.vru.ac.th/structure.php";
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

        /* Highlight Cards */
        .highlight-feat-card {
            background: #ffffff;
            border: 1px solid #ced4da;
            border-radius: 12px;
            padding: 1.25rem;
            height: 100%;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .highlight-feat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 123, 255, 0.08);
            border-color: #b8daff;
        }

        .feat-icon {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            margin-bottom: 0.75rem;
        }

        /* Main Tabs */
        .nav-tabs-modern {
            border-bottom: 2px solid #ced4da;
        }

        .nav-tabs-modern .nav-link {
            font-weight: 600;
            color: #495057;
            border: none;
            border-bottom: 3px solid transparent;
            padding: 0.75rem 1.25rem;
            transition: all 0.2s ease;
        }

        .nav-tabs-modern .nav-link:hover {
            color: #007bff;
            border-bottom-color: #b8daff;
        }

        .nav-tabs-modern .nav-link.active {
            color: #007bff;
            border-bottom-color: #007bff;
            background: transparent;
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

        .cta-banner-admission {
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
                    <li class="breadcrumb-item active" aria-current="page">โครงสร้างหลักสูตร</li>
                </ol>
            </nav>

            <!-- Page Header -->
            <div class="page-header-modern mb-3">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div>
                        <h1 class="h2 font-weight-bold text-dark mb-1">
                            <i class="fa fa-cubes text-primary mr-2"></i>โครงสร้างหลักสูตรวิทยาการคอมพิวเตอร์
                        </h1>
                        <p class="text-dark-gray mb-0">
                            หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์ (วท.บ. วิทยาการคอมพิวเตอร์) มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์
                        </p>
                    </div>
                </div>
            </div>

            <!-- Version Switcher Bar -->
            <div class="version-switcher-bar d-flex flex-wrap align-items-center justify-content-between mb-4">
                <div class="d-flex flex-wrap align-items-center">
                    <span class="text-dark-gray small font-weight-bold mr-3 my-1">
                        <i class="fa fa-history mr-1"></i> เลือกรุ่นหลักสูตร:
                    </span>
                    <a href="structure.php" class="version-pill active" title="หลักสูตรใหม่ล่าสุด พ.ศ. 2570 สำหรับผู้สนใจเข้าศึกษาใหม่">
                        <i class="fa fa-star text-warning mr-2"></i> หลักสูตรใหม่ พ.ศ. 2570 <span class="badge badge-light text-primary ml-2">124 นก.</span>
                    </a>
                    <a href="structure-65.php" class="version-pill inactive" title="สำหรับนักศึกษารหัส 65-69 ที่กำลังศึกษา">
                        <i class="fa fa-book mr-1"></i> หลักสูตร พ.ศ. 2565 <span class="badge badge-secondary ml-1">127 นก. (รหัส 65-69)</span>
                    </a>
                    <a href="structure-60.php" class="version-pill inactive" title="หลักสูตรเดิมสำหรับอ้างอิง">
                        <i class="fa fa-archive mr-1"></i> หลักสูตร พ.ศ. 2560
                    </a>
                </div>
                <div class="my-1">
                    <span class="badge badge-success px-3 py-2 font-weight-bold">
                        <i class="fa fa-sparkles mr-1"></i> สำหรับผู้สมัครเข้าศึกษาใหม่
                    </span>
                </div>
            </div>

            <!-- Hero Highlights for Prospective Students -->
            <div class="row mb-4">
                <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="highlight-feat-card shadow-sm">
                        <div class="feat-icon bg-light text-primary">
                            <i class="fa fa-bolt"></i>
                        </div>
                        <h2 class="h6 font-weight-bold text-dark mb-1">124 หน่วยกิต กระชับ</h2>
                        <p class="text-dark-gray small mb-0">ปรับลดจากเดิม 127 หน่วยกิต เรียนจบได้จริงใน 4 ปี (เทียบโอน ปวส. เรียน 2–2.5 ปี)</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="highlight-feat-card shadow-sm">
                        <div class="feat-icon bg-light text-success">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <h2 class="h6 font-weight-bold text-dark mb-1">AI & Data Science</h2>
                        <p class="text-dark-gray small mb-0">บรรจุวิชา Machine Learning, Deep Learning, Generative AI และ Big Data ในหลักสูตร</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="highlight-feat-card shadow-sm">
                        <div class="feat-icon bg-light text-info">
                            <i class="fa fa-cloud"></i>
                        </div>
                        <h2 class="h6 font-weight-bold text-dark mb-1">Cloud & Full-Stack</h2>
                        <p class="text-dark-gray small mb-0">เน้นการพัฒนา Web/Mobile สมัยใหม่, ระบบคลาวด์, DevOps, Container และความปลอดภัยไซเบอร์</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-3">
                    <div class="highlight-feat-card shadow-sm">
                        <div class="feat-icon bg-light text-warning">
                            <i class="fa fa-calendar-check-o"></i>
                        </div>
                        <h2 class="h6 font-weight-bold text-dark mb-1">เรียนปกติ & เสาร์-อาทิตย์</h2>
                        <p class="text-dark-gray small mb-0">รองรับทั้งนักเรียน ม.6, ปวช. ทุกแผนการเรียน และคนทำงานที่ต้องการเรียนเสาร์-อาทิตย์</p>
                    </div>
                </div>
            </div>

            <!-- Notice for Current Students -->
            <div class="alert alert-info border-0 shadow-sm rounded-lg d-flex align-items-center justify-content-between flex-wrap mb-4" role="alert">
                <div class="d-flex align-items-center mb-2 mb-md-0">
                    <i class="fa fa-info-circle text-info mr-3" style="font-size: 1.5rem;"></i>
                    <div>
                        <strong>กำลังดูโครงสร้าง: หลักสูตรวิทยาศาสตรบัณฑิต (หลักสูตรปรับปรุง พ.ศ. 2570)</strong>
                        <div class="small text-dark-gray">ออกแบบสำหรับผู้เข้าศึกษาใหม่ หากท่านเป็นนักศึกษาปัจจุบัน (รหัส 65 – 69) สามารถดูแผนเดิมได้ที่นี่</div>
                    </div>
                </div>
                <a href="structure-65.php" class="btn btn-sm btn-info font-weight-bold shadow-sm">
                    <i class="fa fa-arrow-right mr-1"></i> ดูโครงสร้างหลักสูตร 2565 (รหัส 65-69)
                </a>
            </div>

            <!-- Content Tabs -->
            <div class="card border shadow-sm mb-4" style="border-radius: 12px; overflow: hidden; border-color: #ced4da !important;">
                <div class="card-header bg-white p-0">
                    <ul class="nav nav-tabs nav-tabs-modern px-3 pt-2" id="curriculumTabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">
                                <i class="fa fa-pie-chart mr-1"></i> 1. ภาพรวมโครงสร้างหมวดวิชา
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="courses-tab" data-toggle="tab" href="#courses" role="tab" aria-controls="courses" aria-selected="false">
                                <i class="fa fa-list mr-1"></i> 2. รายชื่อวิชาตามหมวด (53 วิชา)
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="studyplan-tab" data-toggle="tab" href="#studyplan" role="tab" aria-controls="studyplan" aria-selected="false">
                                <i class="fa fa-calendar mr-1"></i> 3. แผนการศึกษา 4 ปี (Study Plan)
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="transfer-tab" data-toggle="tab" href="#transfer" role="tab" aria-controls="transfer" aria-selected="false">
                                <i class="fa fa-exchange mr-1"></i> 4. เส้นทางเทียบโอน ปวส.
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="card-body p-4">
                    <div class="tab-content" id="curriculumTabsContent">

                        <!-- TAB 1: ภาพรวมหมวดวิชา -->
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                            <div class="row align-items-center mb-4">
                                <div class="col-lg-7">
                                    <h2 class="h5 font-weight-bold text-dark mb-2">
                                        โครงสร้างหน่วยกิตรวมตลอดหลักสูตร: <span class="text-primary">124 หน่วยกิต</span>
                                    </h2>
                                    <p class="text-dark-gray small mb-3">
                                        หลักสูตรปรับปรุง พ.ศ. 2570 ได้รับการออกแบบตามประกาศกรอบมาตรฐานคุณวุฒิระดับอุดมศึกษาแห่งชาติ โดยปรับลดสัดส่วนวิชาศึกษาทั่วไปและเพิ่มความเข้มข้นในหมวดวิชาเฉพาะด้านเทคโนโลยีคอมพิวเตอร์และปัญญาประดิษฐ์
                                    </p>
                                </div>
                                <div class="col-lg-5 text-lg-right">
                                    <a href="philosophy.php" class="btn btn-outline-primary btn-sm mb-1">
                                        <i class="fa fa-bullseye mr-1"></i> ดูผลลัพธ์การเรียนรู้ (PLOs 1-10)
                                    </a>
                                    <a href="Description.php" class="btn btn-outline-info btn-sm mb-1 ml-1">
                                        <i class="fa fa-graduation-cap mr-1"></i> รายละเอียดหลักสูตร
                                    </a>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table-course table-hover">
                                    <thead>
                                        <tr>
                                            <th>หมวดวิชา</th>
                                            <th class="text-center" style="width: 25%;">จำนวนหน่วยกิตที่กำหนด</th>
                                            <th class="text-center" style="width: 20%;">สัดส่วนร้อยละ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div>1. หมวดวิชาศึกษาทั่วไป (General Education)</div>
                                                <div class="course-en">เสริมสร้างทักษะภาษา การสื่อสาร ความเป็นพลเมือง และทักษะดิจิทัลแห่งศตวรรษที่ 21</div>
                                            </td>
                                            <td class="text-center">24 หน่วยกิต</td>
                                            <td class="text-center">19.35%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>2. หมวดวิชาเฉพาะ (Specialized Courses)</div>
                                                <div class="course-en">ทักษะวิชาชีพคอมพิวเตอร์ทั้งภาคทฤษฎี ปฏิบัติการ และการทำงานจริง</div>
                                                <div class="mt-2 pl-3 small text-dark-gray">
                                                    <div>• กลุ่มวิชาเฉพาะด้านบังคับ (Core Courses): 72 หน่วยกิต (24 วิชา)</div>
                                                    <div>• กลุ่มวิชาเฉพาะด้านเลือก (Elective Courses): 15 หน่วยกิต (5 วิชา)</div>
                                                    <div>• กลุ่มวิชาปฏิบัติการและฝึกประสบการณ์วิชาชีพ: 7 หน่วยกิต (สหกิจศึกษา หรือ ฝึกงาน)</div>
                                                </div>
                                            </td>
                                            <td class="text-center">94 หน่วยกิต</td>
                                            <td class="text-center">75.81%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>3. หมวดวิชาเลือกเสรี (Free Electives)</div>
                                                <div class="course-en">เลือกเรียนรายวิชาใดๆ ที่เปิดสอนในระดับปริญญาตรีของมหาวิทยาลัยตามความสนใจอิสระ</div>
                                            </td>
                                            <td class="text-center">6 หน่วยกิต</td>
                                            <td class="text-center">4.84%</td>
                                        </tr>
                                        <tr class="table-total">
                                            <td>รวมจำนวนหน่วยกิตตลอดหลักสูตร</td>
                                            <td class="text-center">124 หน่วยกิต</td>
                                            <td class="text-center">100.00%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- TAB 2: รายชื่อวิชาตามหมวด -->
                        <div class="tab-pane fade" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                            
                            <!-- Course Description Hub Banner -->
                            <div class="alert alert-light border shadow-sm rounded-lg d-flex align-items-center justify-content-between flex-wrap mb-4" style="border-color: #b8daff !important; background-color: #f8fbff;">
                                <div class="d-flex align-items-center mb-2 mb-md-0">
                                    <i class="fa fa-info-circle text-primary mr-3" style="font-size: 1.6rem;"></i>
                                    <div>
                                        <strong class="text-dark">ต้องการดูคำอธิบายรายวิชาฉบับเต็มทั้ง 53 วิชา?</strong>
                                        <div class="small text-dark-gray">สามารถคลิกที่รหัสวิชาในตาราง หรือค้นหาคำอธิบายรายวิชา (ภาษาไทยและอังกฤษ) ได้ที่คลังคำอธิบายรายวิชา</div>
                                    </div>
                                </div>
                                <a href="course-descriptions.php" class="btn btn-sm btn-primary font-weight-bold shadow-sm">
                                    <i class="fa fa-search mr-1"></i> คลังคำอธิบายรายวิชา (Course Catalog)
                                </a>
                            </div>
                            
                            <!-- 1. หมวดศึกษาทั่วไป -->
                            <div class="mb-4">
                                <h3 class="h6 font-weight-bold text-dark border-bottom pb-2 mb-3">
                                    <i class="fa fa-bookmark text-primary mr-1"></i> 1. หมวดวิชาศึกษาทั่วไป (เรียนครบ 8 วิชา รวม 24 หน่วยกิต)
                                </h3>
                                <div class="table-responsive">
                                    <table class="table-course table-hover">
                                        <thead>
                                            <tr>
                                                <th style="width: 15%;">รหัสวิชา</th>
                                                <th style="width: 45%;">ชื่อวิชาภาษาไทย</th>
                                                <th style="width: 25%;">Course Title (English)</th>
                                                <th class="text-center" style="width: 15%;">หน่วยกิต น(ท-ป-ศ)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="course-descriptions.php#65VGE101" title="คลิกดูคำอธิบายรายวิชา 65VGE101"><code>65VGE101</code></a></td>
                                                <td>อัตลักษณ์บัณฑิตวไลยอลงกรณ์</td>
                                                <td class="course-en">VRU Identity</td>
                                                <td class="text-center">3(2-2-5)</td>
                                            </tr>
                                            <tr>
                                                <td><a href="course-descriptions.php#65VGE102" title="คลิกดูคำอธิบายรายวิชา 65VGE102"><code>65VGE102</code></a></td>
                                                <td>ภาษาไทยเพื่อการสื่อสารอย่างสร้างสรรค์</td>
                                                <td class="course-en">Thai Language for Creative Communication</td>
                                                <td class="text-center">3(2-2-5)</td>
                                            </tr>
                                            <tr>
                                                <td><a href="course-descriptions.php#65VGE103" title="คลิกดูคำอธิบายรายวิชา 65VGE103"><code>65VGE103</code></a></td>
                                                <td>ภาษาอังกฤษ: ประตูสู่สากล</td>
                                                <td class="course-en">Connecting English: Connecting the World</td>
                                                <td class="text-center">3(2-2-5)</td>
                                            </tr>
                                            <tr>
                                                <td><a href="course-descriptions.php#65VGE104" title="คลิกดูคำอธิบายรายวิชา 65VGE104"><code>65VGE104</code></a></td>
                                                <td>การออกแบบชีวิตและสังคมแห่งความสุข</td>
                                                <td class="course-en">Designing Life and a Society of Well-Being</td>
                                                <td class="text-center">3(2-2-5)</td>
                                            </tr>
                                            <tr>
                                                <td><a href="course-descriptions.php#65VGE105" title="คลิกดูคำอธิบายรายวิชา 65VGE105"><code>65VGE105</code></a></td>
                                                <td>คนรุ่นใหม่หัวใจดิจิทัล</td>
                                                <td class="course-en">New Generation with a Digital Heart</td>
                                                <td class="text-center">3(2-2-5)</td>
                                            </tr>
                                            <tr>
                                                <td><a href="course-descriptions.php#65VGE106" title="คลิกดูคำอธิบายรายวิชา 65VGE106"><code>65VGE106</code></a></td>
                                                <td>การคิดเชิงออกแบบ</td>
                                                <td class="course-en">Design Thinking</td>
                                                <td class="text-center">3(2-2-5)</td>
                                            </tr>
                                            <tr>
                                                <td><a href="course-descriptions.php#65VGE107" title="คลิกดูคำอธิบายรายวิชา 65VGE107"><code>65VGE107</code></a></td>
                                                <td>แบกเป้เที่ยว</td>
                                                <td class="course-en">Backpacking</td>
                                                <td class="text-center">3(2-2-5)</td>
                                            </tr>
                                            <tr>
                                                <td><a href="course-descriptions.php#65VGE108" title="คลิกดูคำอธิบายรายวิชา 65VGE108"><code>65VGE108</code></a></td>
                                                <td>การประกอบการทางสังคม</td>
                                                <td class="course-en">Social Entrepreneurship</td>
                                                <td class="text-center">3(2-2-5)</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- 2.1 หมวดเฉพาะด้านบังคับ -->
                            <div class="mb-4">
                                <h3 class="h6 font-weight-bold text-dark border-bottom pb-2 mb-3">
                                    <i class="fa fa-code text-success mr-1"></i> 2.1 กลุ่มวิชาเฉพาะด้านบังคับ (บังคับเรียน 24 วิชา รวม 72 หน่วยกิต)
                                </h3>
                                <div class="table-responsive">
                                    <table class="table-course table-hover">
                                        <thead>
                                            <tr>
                                                <th style="width: 15%;">รหัสวิชา</th>
                                                <th style="width: 45%;">ชื่อวิชาภาษาไทย</th>
                                                <th style="width: 25%;">Course Title (English)</th>
                                                <th class="text-center" style="width: 15%;">หน่วยกิต น(ท-ป-ศ)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><td><a href="course-descriptions.php#65SCS101" title="คลิกดูคำอธิบายรายวิชา 65SCS101"><code>65SCS101</code></a></td><td>ตัวแบบเชิงคณิตศาสตร์สำหรับวิทยาการคอมพิวเตอร์</td><td class="course-en">Mathematical Modeling for CS</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS102" title="คลิกดูคำอธิบายรายวิชา 65SCS102"><code>65SCS102</code></a></td><td>คณิตศาสตร์ดิสครีตสำหรับวิทยาการคอมพิวเตอร์</td><td class="course-en">Discrete Mathematics for CS</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS103" title="คลิกดูคำอธิบายรายวิชา 65SCS103"><code>65SCS103</code></a></td><td>ความน่าจะเป็นและสถิติเบื้องต้นสำหรับวิทยาการคอมพิวเตอร์</td><td class="course-en">Probability and Statistics for CS</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS104" title="คลิกดูคำอธิบายรายวิชา 65SCS104"><code>65SCS104</code></a></td><td>สถิติเพื่อการวิจัยสำหรับนักวิทยาการคอมพิวเตอร์</td><td class="course-en">Statistics for Research in CS</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS105" title="คลิกดูคำอธิบายรายวิชา 65SCS105"><code>65SCS105</code></a></td><td>การโปรแกรมคอมพิวเตอร์เบื้องต้น</td><td class="course-en">Basic Computer Programming</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS106" title="คลิกดูคำอธิบายรายวิชา 65SCS106"><code>65SCS106</code></a></td><td>ขั้นตอนวิธีและโครงสร้างข้อมูล</td><td class="course-en">Algorithms and Data Structures</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS107" title="คลิกดูคำอธิบายรายวิชา 65SCS107"><code>65SCS107</code></a></td><td>สถาปัตยกรรมและระบบปฏิบัติการคอมพิวเตอร์</td><td class="course-en">Computer Architecture & OS</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS201" title="คลิกดูคำอธิบายรายวิชา 65SCS201"><code>65SCS201</code></a></td><td>การออกแบบและพัฒนาเว็บแบบเรสพอนซีฟ</td><td class="course-en">Responsive Web Design & Dev</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS202" title="คลิกดูคำอธิบายรายวิชา 65SCS202"><code>65SCS202</code></a></td><td>ระบบฐานข้อมูล</td><td class="course-en">Database Systems</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS203" title="คลิกดูคำอธิบายรายวิชา 65SCS203"><code>65SCS203</code></a></td><td>การวิเคราะห์และออกแบบระบบสารสนเทศ</td><td class="course-en">Analysis & Design of Info Systems</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS204" title="คลิกดูคำอธิบายรายวิชา 65SCS204"><code>65SCS204</code></a></td><td>การพัฒนาผลิตภัณฑ์ซอฟต์แวร์และธุรกิจดิจิทัล</td><td class="course-en">Software Product Dev & Digital Business</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS205" title="คลิกดูคำอธิบายรายวิชา 65SCS205"><code>65SCS205</code></a></td><td>ประสบการณ์ผู้ใช้งานและปฏิสัมพันธ์มนุษย์กับคอมพิวเตอร์ (UX/UI)</td><td class="course-en">UX & HCI</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS206" title="คลิกดูคำอธิบายรายวิชา 65SCS206"><code>65SCS206</code></a></td><td>การพัฒนาโปรแกรมประยุกต์บนเว็บสำหรับองค์กร</td><td class="course-en">Web App Dev for Enterprises</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS207" title="คลิกดูคำอธิบายรายวิชา 65SCS207"><code>65SCS207</code></a></td><td>ระบบการสื่อสารข้อมูลและเครือข่ายคอมพิวเตอร์</td><td class="course-en">Data Communication & Networks</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS208" title="คลิกดูคำอธิบายรายวิชา 65SCS208"><code>65SCS208</code></a></td><td>อินเทอร์เน็ตในทุกสิ่ง (IoT)</td><td class="course-en">Internet of Things</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS209" title="คลิกดูคำอธิบายรายวิชา 65SCS209"><code>65SCS209</code></a></td><td>ความมั่นคงปลอดภัยไซเบอร์</td><td class="course-en">Cyber Security</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS210" title="คลิกดูคำอธิบายรายวิชา 65SCS210"><code>65SCS210</code></a></td><td>ปัญญาประดิษฐ์และการเรียนรู้ของเครื่องจักร</td><td class="course-en">AI & Machine Learning</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS211" title="คลิกดูคำอธิบายรายวิชา 65SCS211"><code>65SCS211</code></a></td><td>การรวบรวมข้อมูลและการนำเสนอ</td><td class="course-en">Data Collection & Data Visualization</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS212" title="คลิกดูคำอธิบายรายวิชา 65SCS212"><code>65SCS212</code></a></td><td>การเขียนโปรแกรมเชิงวัตถุ</td><td class="course-en">Object Oriented Programming (OOP)</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS213" title="คลิกดูคำอธิบายรายวิชา 65SCS213"><code>65SCS213</code></a></td><td>ทักษะการสื่อสารสำหรับนักวิทยาการคอมพิวเตอร์</td><td class="course-en">Communication Skills for CS</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS214" title="คลิกดูคำอธิบายรายวิชา 65SCS214"><code>65SCS214</code></a></td><td>ระเบียบวิธีวิจัยด้านวิทยาการคอมพิวเตอร์</td><td class="course-en">Research Methodology for CS</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS215" title="คลิกดูคำอธิบายรายวิชา 65SCS215"><code>65SCS215</code></a></td><td>การศึกษาเรียนรู้ชุมชนและบริการวิชาการด้านวิทยาการคอมพิวเตอร์</td><td class="course-en">Community Studies & Academic Service</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS216" title="คลิกดูคำอธิบายรายวิชา 65SCS216"><code>65SCS216</code></a></td><td>การวิเคราะห์ปัญหาและออกแบบโครงงาน (Project 1)</td><td class="course-en">Problem Analysis & Design for CS Projects</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS217" title="คลิกดูคำอธิบายรายวิชา 65SCS217"><code>65SCS217</code></a></td><td>การพัฒนาระบบและนวัตกรรม (Project 2)</td><td class="course-en">Systems & Innovation Development</td><td class="text-center">3(2-2-5)</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- 2.2 หมวดวิชาเฉพาะด้านเลือก -->
                            <div class="mb-4">
                                <h3 class="h6 font-weight-bold text-dark border-bottom pb-2 mb-3">
                                    <i class="fa fa-cubes text-info mr-1"></i> 2.2 กลุ่มวิชาเฉพาะด้านเลือก (เลือกเรียนไม่น้อยกว่า 5 วิชา รวม 15 หน่วยกิต)
                                </h3>
                                <div class="table-responsive">
                                    <table class="table-course table-hover">
                                        <thead>
                                            <tr>
                                                <th style="width: 15%;">รหัสวิชา</th>
                                                <th style="width: 45%;">ชื่อวิชาภาษาไทย</th>
                                                <th style="width: 25%;">Course Title (English)</th>
                                                <th class="text-center" style="width: 15%;">หน่วยกิต น(ท-ป-ศ)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><td><a href="course-descriptions.php#65SCS301" title="คลิกดูคำอธิบายรายวิชา 65SCS301"><code>65SCS301</code></a></td><td>การจัดการธุรกิจด้วยคอมพิวเตอร์</td><td class="course-en">Business Management with Computers</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS302" title="คลิกดูคำอธิบายรายวิชา 65SCS302"><code>65SCS302</code></a></td><td>การประยุกต์ใช้ซอฟต์แวร์สำนักงานอัตโนมัติ</td><td class="course-en">Office Automation Software</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS303" title="คลิกดูคำอธิบายรายวิชา 65SCS303"><code>65SCS303</code></a></td><td>การประมวลผลบนคลาวด์</td><td class="course-en">Cloud Computing</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS304" title="คลิกดูคำอธิบายรายวิชา 65SCS304"><code>65SCS304</code></a></td><td>ระบบฐานข้อมูลกราฟสำหรับการวิเคราะห์</td><td class="course-en">Graph Database Systems for Analytics</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS305" title="คลิกดูคำอธิบายรายวิชา 65SCS305"><code>65SCS305</code></a></td><td>พื้นฐานวิทยาการข้อมูล</td><td class="course-en">Data Science Fundamentals</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS306" title="คลิกดูคำอธิบายรายวิชา 65SCS306"><code>65SCS306</code></a></td><td>เทคโนโลยีคลังและเหมืองข้อมูล</td><td class="course-en">Data Warehouse & Data Mining</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS307" title="คลิกดูคำอธิบายรายวิชา 65SCS307"><code>65SCS307</code></a></td><td>การวิเคราะห์ข้อมูลขนาดใหญ่เชิงธุรกิจ</td><td class="course-en">Big Data Analytics in Business</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS308" title="คลิกดูคำอธิบายรายวิชา 65SCS308"><code>65SCS308</code></a></td><td>การพัฒนาแอปพลิเคชันแบบเขียนโค้ดน้อยลง (Low-Code/No-Code)</td><td class="course-en">Low Code / No Code App Dev</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS309" title="คลิกดูคำอธิบายรายวิชา 65SCS309"><code>65SCS309</code></a></td><td>การพัฒนาแอปพลิเคชันบนอุปกรณ์เคลื่อนที่</td><td class="course-en">Mobile Application Development</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS310" title="คลิกดูคำอธิบายรายวิชา 65SCS310"><code>65SCS310</code></a></td><td>เทคโนโลยีสื่อเสมือนจริง (VR / AR)</td><td class="course-en">Virtual Media Technology</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS311" title="คลิกดูคำอธิบายรายวิชา 65SCS311"><code>65SCS311</code></a></td><td>เทคโนโลยีเกิดใหม่ด้านวิทยาการคอมพิวเตอร์</td><td class="course-en">Emerging Technologies in CS</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS312" title="คลิกดูคำอธิบายรายวิชา 65SCS312"><code>65SCS312</code></a></td><td>การพัฒนาโปรแกรมประยุกต์ขั้นสูง</td><td class="course-en">Advanced Software Programming Dev</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS313" title="คลิกดูคำอธิบายรายวิชา 65SCS313"><code>65SCS313</code></a></td><td>คอมพิวเตอร์กราฟิกส์และการประมวลผลภาพ</td><td class="course-en">Computer Graphics & Image Processing</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS314" title="คลิกดูคำอธิบายรายวิชา 65SCS314"><code>65SCS314</code></a></td><td>ระบบสารสนเทศภูมิศาสตร์ (GIS)</td><td class="course-en">Geographic Information System</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS315" title="คลิกดูคำอธิบายรายวิชา 65SCS315"><code>65SCS315</code></a></td><td>การเรียนรู้เชิงลึก (Deep Learning)</td><td class="course-en">Deep Learning</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS316" title="คลิกดูคำอธิบายรายวิชา 65SCS316"><code>65SCS316</code></a></td><td>ปัญญาประดิษฐ์เชิงสร้างสรรค์ (Generative AI) สำหรับการพัฒนาซอฟต์แวร์</td><td class="course-en">Generative AI Dev for Organizations</td><td class="text-center">3(2-2-5)</td></tr>
                                            <tr><td><a href="course-descriptions.php#65SCS317" title="คลิกดูคำอธิบายรายวิชา 65SCS317"><code>65SCS317</code></a></td><td>วิศวกรรมการทดสอบซอฟต์แวร์ (Software Testing & QA)</td><td class="course-en">Software Testing Engineering</td><td class="text-center">3(2-2-5)</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- 2.3 ฝึกประสบการณ์ & สหกิจ -->
                            <div>
                                <h3 class="h6 font-weight-bold text-dark border-bottom pb-2 mb-3">
                                    <i class="fa fa-briefcase text-dark mr-1"></i> 2.3 กลุ่มวิชาปฏิบัติการและฝึกประสบการณ์วิชาชีพ (เลือกแผนใดแผนหนึ่ง 7 หน่วยกิต)
                                </h3>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="p-3 border rounded bg-light h-100" style="border-color: #ced4da !important;">
                                            <div class="font-weight-bold text-dark mb-2">ทางเลือกที่ 1: แผนสหกิจศึกษา (Co-op Education)</div>
                                            <ul class="list-unstyled small mb-0 text-dark-gray">
                                                <li class="mb-1">• <code>65SCS401</code> การเตรียมสหกิจศึกษาด้านวิทยาการคอมพิวเตอร์ : 1(45)</li>
                                                <li>• <code>65SCS402</code> สหกิจศึกษาด้านวิทยาการคอมพิวเตอร์ : 6(640) <span class="badge badge-primary">ปฏิบัติงานเต็มเวลา 16 สัปดาห์</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="p-3 border rounded bg-light h-100" style="border-color: #ced4da !important;">
                                            <div class="font-weight-bold text-dark mb-2">ทางเลือกที่ 2: แผนฝึกประสบการณ์วิชาชีพ (Internship)</div>
                                            <ul class="list-unstyled small mb-0 text-dark-gray">
                                                <li class="mb-1">• <code>65SCS403</code> การเตรียมฝึกประสบการณ์วิชาชีพวิทยาการคอมพิวเตอร์ : 2(90)</li>
                                                <li>• <code>65SCS404</code> การฝึกประสบการณ์วิชาชีพวิทยาการคอมพิวเตอร์ : 5(450) <span class="badge badge-success">ฝึกงานไม่น้อยกว่า 450 ชม.</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- TAB 3: แผนการศึกษา 4 ปี -->
                        <div class="tab-pane fade" id="studyplan" role="tabpanel" aria-labelledby="studyplan-tab">
                            <div class="mb-3">
                                <h2 class="h5 font-weight-bold text-dark mb-1">
                                    <i class="fa fa-calendar-check-o text-primary mr-1"></i> แผนการศึกษาตลอดหลักสูตร 4 ปี (8 ภาคการศึกษา)
                                </h2>
                                <p class="text-dark-gray small">เส้นทางการเรียนรู้ทีละขั้นตอนตั้งแต่พื้นฐานโค้ดดิ้ง สู่การสร้างนวัตกรรม และฝึกปฏิบัติงานในสถานประกอบการจริง</p>
                            </div>

                            <!-- Year 1 -->
                            <div class="card mb-3 border" style="border-color: #ced4da !important;">
                                <div class="card-header bg-light font-weight-bold text-dark">
                                    <i class="fa fa-circle text-primary mr-1"></i> ชั้นปีที่ 1: ปูพื้นฐานการเขียนโปรแกรม คณิตศาสตร์ และการพัฒนาเว็บ (36 หน่วยกิต)
                                </div>
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-md-6 mb-3 mb-md-0">
                                            <div class="font-weight-bold text-dark mb-2 pb-1 border-bottom">ภาคการศึกษาที่ 1 (18 หน่วยกิต)</div>
                                            <ul class="list-unstyled small mb-0 text-dark-gray">
                                                <li>• <code>65VGE101</code> อัตลักษณ์บัณฑิตวไลยอลงกรณ์ 3(2-2-5)</li>
                                                <li>• <code>65VGE102</code> ภาษาไทยเพื่อการสื่อสารอย่างสร้างสรรค์ 3(2-2-5)</li>
                                                <li>• <code>65SCS101</code> ตัวแบบเชิงคณิตศาสตร์สำหรับ CS 3(2-2-5)</li>
                                                <li>• <code>65SCS105</code> การโปรแกรมคอมพิวเตอร์เบื้องต้น 3(2-2-5)</li>
                                                <li>• <code>65SCS107</code> สถาปัตยกรรมและระบบปฏิบัติการคอมพิวเตอร์ 3(2-2-5)</li>
                                                <li>• <code>65SCS201</code> การออกแบบและพัฒนาเว็บแบบเรสพอนซีฟ 3(2-2-5)</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="font-weight-bold text-dark mb-2 pb-1 border-bottom">ภาคการศึกษาที่ 2 (18 หน่วยกิต)</div>
                                            <ul class="list-unstyled small mb-0 text-dark-gray">
                                                <li>• <code>65VGE103</code> ภาษาอังกฤษ: ประตูสู่สากล 3(2-2-5)</li>
                                                <li>• <code>65VGE104</code> การออกแบบชีวิตและสังคมแห่งความสุข 3(2-2-5)</li>
                                                <li>• <code>65SCS102</code> คณิตศาสตร์ดิสครีตสำหรับ CS 3(2-2-5)</li>
                                                <li>• <code>65SCS106</code> ขั้นตอนวิธีและโครงสร้างข้อมูล 3(2-2-5)</li>
                                                <li>• <code>65SCS202</code> ระบบฐานข้อมูล 3(2-2-5)</li>
                                                <li>• <code>65SCS203</code> การวิเคราะห์และออกแบบระบบสารสนเทศ 3(2-2-5)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Year 2 -->
                            <div class="card mb-3 border" style="border-color: #ced4da !important;">
                                <div class="card-header bg-light font-weight-bold text-dark">
                                    <i class="fa fa-circle text-success mr-1"></i> ชั้นปีที่ 2: ระบบเครือข่าย ซอฟต์แวร์องค์กร ความปลอดภัย และ OOP (36 หน่วยกิต)
                                </div>
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-md-6 mb-3 mb-md-0">
                                            <div class="font-weight-bold text-dark mb-2 pb-1 border-bottom">ภาคการศึกษาที่ 1 (18 หน่วยกิต)</div>
                                            <ul class="list-unstyled small mb-0 text-dark-gray">
                                                <li>• <code>65VGE105</code> คนรุ่นใหม่หัวใจดิจิทัล 3(2-2-5)</li>
                                                <li>• <code>65VGE106</code> การคิดเชิงออกแบบ 3(2-2-5)</li>
                                                <li>• <code>65SCS103</code> ความน่าจะเป็นและสถิติเบื้องต้น 3(2-2-5)</li>
                                                <li>• <code>65SCS204</code> การพัฒนาผลิตภัณฑ์ซอฟต์แวร์และธุรกิจดิจิทัล 3(2-2-5)</li>
                                                <li>• <code>65SCS207</code> ระบบการสื่อสารข้อมูลและเครือข่าย 3(2-2-5)</li>
                                                <li>• <code>65SCS212</code> การเขียนโปรแกรมเชิงวัตถุ (OOP) 3(2-2-5)</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="font-weight-bold text-dark mb-2 pb-1 border-bottom">ภาคการศึกษาที่ 2 (18 หน่วยกิต)</div>
                                            <ul class="list-unstyled small mb-0 text-dark-gray">
                                                <li>• <code>65VGE107</code> แบกเป้เที่ยว 3(2-2-5)</li>
                                                <li>• <code>65VGE108</code> การประกอบการทางสังคม 3(2-2-5)</li>
                                                <li>• <code>65SCS104</code> สถิติเพื่อการวิจัยสำหรับนัก CS 3(2-2-5)</li>
                                                <li>• <code>65SCS205</code> UX/UI ประสบการณ์ผู้ใช้ 3(2-2-5)</li>
                                                <li>• <code>65SCS206</code> การพัฒนาเว็บแอปพลิเคชันสำหรับองค์กร 3(2-2-5)</li>
                                                <li>• <code>65SCS209</code> ความมั่นคงปลอดภัยไซเบอร์ 3(2-2-5)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Year 3 -->
                            <div class="card mb-3 border" style="border-color: #ced4da !important;">
                                <div class="card-header bg-light font-weight-bold text-dark">
                                    <i class="fa fa-circle text-info mr-1"></i> ชั้นปีที่ 3: ปัญญาประดิษฐ์ (AI), IoT, Data Visualization และโครงงาน 1 (33 หน่วยกิต)
                                </div>
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-md-6 mb-3 mb-md-0">
                                            <div class="font-weight-bold text-dark mb-2 pb-1 border-bottom">ภาคการศึกษาที่ 1 (18 หน่วยกิต)</div>
                                            <ul class="list-unstyled small mb-0 text-dark-gray">
                                                <li>• <code>65SCS208</code> อินเทอร์เน็ตในทุกสิ่ง (IoT) 3(2-2-5)</li>
                                                <li>• <code>65SCS210</code> ปัญญาประดิษฐ์และการเรียนรู้ของเครื่องจักร (AI/ML) 3(2-2-5)</li>
                                                <li>• <code>65SCS213</code> ทักษะการสื่อสารสำหรับนัก CS 3(2-2-5)</li>
                                                <li>• <code>65SCS214</code> ระเบียบวิธีวิจัยด้านวิทยาการคอมพิวเตอร์ 3(2-2-5)</li>
                                                <li>• <code>65SCS215</code> การศึกษาเรียนรู้ชุมชนและบริการวิชาการ 3(2-2-5)</li>
                                                <li>• <code>65SCS3xx</code> วิชาเฉพาะด้านเลือก 1 3(2-2-5)</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="font-weight-bold text-dark mb-2 pb-1 border-bottom">ภาคการศึกษาที่ 2 (15 หน่วยกิต)</div>
                                            <ul class="list-unstyled small mb-0 text-dark-gray">
                                                <li>• <code>65SCS211</code> การรวบรวมข้อมูลและการนำเสนอ (Data Visualization) 3(2-2-5)</li>
                                                <li>• <code>65SCS216</code> การวิเคราะห์ปัญหาและออกแบบโครงงาน (Project 1) 3(2-2-5)</li>
                                                <li>• <code>65SCS3xx</code> วิชาเฉพาะด้านเลือก 2 3(2-2-5)</li>
                                                <li>• <code>65SCS3xx</code> วิชาเฉพาะด้านเลือก 3 3(2-2-5)</li>
                                                <li>• <code>xxxxxx</code> วิชาเลือกเสรี 1 3(x-x-x)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Year 4 -->
                            <div class="card border" style="border-color: #ced4da !important;">
                                <div class="card-header bg-light font-weight-bold text-dark">
                                    <i class="fa fa-circle text-dark mr-1"></i> ชั้นปีที่ 4: พัฒนาระบบโครงงานสมบูรณ์ (Project 2) และสหกิจศึกษา / ฝึกงาน (19 หน่วยกิต)
                                </div>
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-md-6 mb-3 mb-md-0">
                                            <div class="font-weight-bold text-dark mb-2 pb-1 border-bottom">ภาคการศึกษาที่ 1 (13–14 หน่วยกิต)</div>
                                            <ul class="list-unstyled small mb-0 text-dark-gray">
                                                <li>• <code>65SCS217</code> การพัฒนาระบบและนวัตกรรม (Project 2) 3(2-2-5)</li>
                                                <li>• <code>65SCS3xx</code> วิชาเฉพาะด้านเลือก 4 3(2-2-5)</li>
                                                <li>• <code>65SCS3xx</code> วิชาเฉพาะด้านเลือก 5 3(2-2-5)</li>
                                                <li>• <code>xxxxxx</code> วิชาเลือกเสรี 2 3(x-x-x)</li>
                                                <li>• <code>65SCS401</code> เตรียมสหกิจศึกษา 1(45) <em>หรือ</em> <code>65SCS403</code> เตรียมฝึกงาน 2(90)</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="font-weight-bold text-dark mb-2 pb-1 border-bottom">ภาคการศึกษาที่ 2 (5–6 หน่วยกิต)</div>
                                            <ul class="list-unstyled small mb-0 text-dark-gray">
                                                <li>• <code>65SCS402</code> สหกิจศึกษาด้าน CS 6(640) <em>(ปฏิบัติงานจริงเต็มเวลา 16 สัปดาห์)</em></li>
                                                <li><em>หรือ</em> <code>65SCS404</code> การฝึกประสบการณ์วิชาชีพด้าน CS 5(450)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- TAB 4: เทียบโอน ปวส. -->
                        <div class="tab-pane fade" id="transfer" role="tabpanel" aria-labelledby="transfer-tab">
                            <div class="row align-items-center mb-4">
                                <div class="col-lg-8">
                                    <h2 class="h5 font-weight-bold text-dark mb-2">
                                        <i class="fa fa-graduation-cap text-primary mr-1"></i> การเทียบโอนหน่วยกิตสำหรับผู้จบ ปวส. (Diploma Credit Transfer)
                                    </h2>
                                    <p class="text-dark-gray small mb-3">
                                        ผู้สำเร็จการศึกษาระดับประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.) หรือเทียบเท่า ทุกสาขาวิชาชีพ สามารถสมัครเข้าศึกษาและขอเทียบโอนผลการเรียน เพื่อลดระยะเวลาการศึกษาลงเหลือเพียง <strong>2 – 2.5 ปี</strong>
                                    </p>
                                </div>
                                <div class="col-lg-4 text-lg-right">
                                    <a href="tcas.php" class="btn btn-primary btn-sm">
                                        <i class="fa fa-user-plus mr-1"></i> สมัครเรียนรอบเทียบโอน
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="p-3 border rounded bg-light h-100" style="border-color: #ced4da !important;">
                                        <h3 class="h6 font-weight-bold text-dark mb-2">
                                            <i class="fa fa-check-square-o text-primary mr-1"></i> รายวิชาที่สามารถเทียบโอนได้
                                        </h3>
                                        <ul class="small text-dark-gray pl-3 mb-0" style="line-height: 1.7;">
                                            <li>หมวดวิชาศึกษาทั่วไป (ตามเกณฑ์ของมหาวิทยาลัย)</li>
                                            <li>หมวดวิชาเฉพาะด้านคอมพิวเตอร์และเทคโนโลยีสารสนเทศ ที่มีเนื้อหาครอบคลุมไม่น้อยกว่า 3 ใน 4</li>
                                            <li>หมวดวิชาเลือกเสรี (เทียบโอนได้ครบ 6 หน่วยกิต)</li>
                                            <li>รายวิชาที่ขอเทียบโอนต้องได้ผลการเรียนระดับ C (2.00) ขึ้นไป</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="p-3 border rounded bg-light h-100" style="border-color: #ced4da !important;">
                                        <h3 class="h6 font-weight-bold text-dark mb-2">
                                            <i class="fa fa-clock-o text-success mr-1"></i> รูปแบบเวลาเรียนที่เปิดสอน
                                        </h3>
                                        <ul class="small text-dark-gray pl-3 mb-0" style="line-height: 1.7;">
                                            <li><strong>ภาคปกติ (จันทร์ – ศุกร์):</strong> เหมาะสำหรับผู้ที่จบ ปวส. ใหม่และต้องการศึกษาเต็มเวลา</li>
                                            <li><strong>ภาคพิเศษ / สมทบ (เสาร์ – อาทิตย์):</strong> เหมาะสำหรับผู้ที่ทำงานประจำในสถานประกอบการ หรือโรงงานในเขตปทุมธานีและนิคมฯ ใกล้เคียง</li>
                                            <li>มีระบบอาจารย์ที่ปรึกษาคอยดูแลแผนการเรียนเทียบโอนอย่างใกล้ชิด</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- CTA Admissions Banner -->
            <div class="cta-banner-admission shadow-sm mb-4">
                <div class="row align-items-center">
                    <div class="col-lg-8 mb-3 mb-lg-0">
                        <h2 class="h4 font-weight-bold mb-2">พร้อมก้าวสู่อนาคตสายเทคโนโลยีไปกับเรา?</h2>
                        <p class="mb-0 text-white-50" style="font-size: 0.95rem;">
                            เปิดรับสมัครทั้งรอบ Portfolio, โควตา, และรับตรงตลอดทั้งปี รับทั้ง ม.6, ปวช. และ ปวส. เรียนได้ทั้งภาคปกติและภาคเสาร์-อาทิตย์
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a href="tcas.php" class="btn btn-light btn-lg font-weight-bold text-primary shadow-sm mr-2 mb-2">
                            <i class="fa fa-user-plus mr-1"></i> สมัครเรียน / TCAS
                        </a>
                        <a href="Description.php" class="btn btn-outline-light btn-lg font-weight-bold shadow-sm mb-2">
                            <i class="fa fa-briefcase mr-1"></i> ดูสายอาชีพเป้าหมาย
                        </a>
                    </div>
                </div>
            </div>

            <!-- Fast-jump navigation footer -->
            <div class="d-flex justify-content-between align-items-center flex-wrap pt-2 border-top">
                <div class="text-dark-gray small my-1">
                    <i class="fa fa-file-text-o mr-1"></i> สภาวิชาการมหาวิทยาลัยฯ ให้ความเห็นชอบหลักสูตร พ.ศ. 2570 เมื่อวันที่ 13 สิงหาคม 2569
                </div>
                <div class="my-1">
                    <a href="structure-65.php" class="btn btn-sm btn-outline-secondary mr-2">
                        <i class="fa fa-history mr-1"></i> ดูโครงสร้างหลักสูตร 2565
                    </a>
                    <a href="structure-60.php" class="btn btn-sm btn-outline-secondary">
                        <i class="fa fa-archive mr-1"></i> ดูโครงสร้างหลักสูตร 2560
                    </a>
                </div>
            </div>

        </div>

        <!-- Schema.org Structured Data -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Course",
            "name": "หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์ (หลักสูตรปรับปรุง พ.ศ. 2570)",
            "alternateName": "Bachelor of Science Program in Computer Science (Curriculum 2027)",
            "courseCode": "25471531100273",
            "description": "โครงสร้างหลักสูตร 124 หน่วยกิต มุ่งเน้น AI, Machine Learning, Full-Stack Development, Cloud Computing และ Cybersecurity สำหรับผู้เข้าศึกษาใหม่",
            "numberOfCredits": 124,
            "provider": {
                "@type": "CollegeOrUniversity",
                "name": "มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์",
                "url": "https://cs.vru.ac.th"
            }
        }
        </script>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>
</body>

</html>
