<?php
$og_title = "โครงสร้างบริหารหลักสูตร | วิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ (VRU)";
$og_description = "แผนผังโครงสร้างการบริหารหลักสูตรและบทบาทหน้าที่ความรับผิดชอบ สาขาวิชาวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์";
$og_url = "https://cs.vru.ac.th/Management.php";
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

        /* Modern HTML/CSS Organization Chart */
        .org-chart-wrapper {
            background: linear-gradient(180deg, #f8fbff 0%, #ffffff 100%);
            border: 1px solid #e3eefc;
            border-radius: 16px;
            padding: 2.5rem 1.5rem;
        }

        .org-node {
            background: #ffffff;
            border: 2px solid #007bff;
            border-radius: 12px;
            padding: 1.15rem 1.5rem;
            text-align: center;
            box-shadow: 0 6px 16px rgba(0, 123, 255, 0.1);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
            max-width: 280px;
            margin: 0 auto;
            position: relative;
        }

        .org-node:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 24px rgba(0, 123, 255, 0.18);
        }

        .org-node.head-node {
            background: linear-gradient(135deg, #0062cc 0%, #007bff 100%);
            color: #ffffff;
            border: none;
        }

        .org-node-icon {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: rgba(0, 123, 255, 0.1);
            color: #007bff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }

        .org-node.head-node .org-node-icon {
            background: rgba(255, 255, 255, 0.2);
            color: #ffffff;
        }

        .org-connector-vertical {
            width: 3px;
            height: 36px;
            background-color: #9ec5fe;
            margin: 0 auto;
        }

        .org-connector-horizontal {
            height: 3px;
            background-color: #9ec5fe;
            width: 68%;
            margin: 0 auto;
        }

        .role-card {
            border: 1px solid #e9ecef;
            border-radius: 14px;
            transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
        }

        .role-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08) !important;
            border-color: #b8daff;
        }

        .role-icon-box {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            background-color: #e7f1ff;
            color: #007bff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            flex-shrink: 0;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php include("layouts/navbar.php"); ?>

    <div class="content">
        <div class="container py-5">

            <!-- Page Header -->
            <div class="page-header-modern mb-4" data-aos="fade-up">
                <h1 class="h2 font-weight-bold text-dark mb-1">โครงสร้างบริหารหลักสูตร</h1>
                <p class="text-muted mb-0">
                    โครงสร้างการบริหารจัดการและบทบาทหน้าที่ความรับผิดชอบ สาขาวิชาวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์
                </p>
            </div>

            <!-- Interactive HTML/CSS Organization Chart -->
            <div class="org-chart-wrapper shadow-sm mb-5" data-aos="fade-up" data-aos-delay="50">
                <h2 class="h5 font-weight-bold text-center text-dark mb-4">
                    แผนผังโครงสร้างการบริหารสาขาวิชาวิทยาการคอมพิวเตอร์
                </h2>

                <!-- Top Level: ประธานหลักสูตร -->
                <div class="org-node head-node">
                    <div class="org-node-icon">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    </div>
                    <h3 class="h5 font-weight-bold text-white mb-1">ประธานหลักสูตร</h3>
                    <div class="small" style="opacity: 0.9;">Program Chair</div>
                </div>

                <div class="org-connector-vertical"></div>
                <div class="org-connector-horizontal d-none d-md-block"></div>

                <!-- Second Level: 3 Branches -->
                <div class="row justify-content-center">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="org-connector-vertical d-none d-md-block"></div>
                        <div class="org-node h-100">
                            <div class="org-node-icon">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>
                            <h3 class="h6 font-weight-bold text-dark mb-1">คณะกรรมการบริหารหลักสูตร</h3>
                            <div class="small text-muted">Curriculum Committee</div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="org-connector-vertical d-none d-md-block"></div>
                        <div class="org-node h-100">
                            <div class="org-node-icon">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            </div>
                            <h3 class="h6 font-weight-bold text-dark mb-1">อาจารย์ประจำหลักสูตร</h3>
                            <div class="small text-muted">Program Faculty Members</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="org-connector-vertical d-none d-md-block"></div>
                        <div class="org-node h-100">
                            <div class="org-node-icon">
                                <i class="fa fa-desktop" aria-hidden="true"></i>
                            </div>
                            <h3 class="h6 font-weight-bold text-dark mb-1">นักวิชาการคอมพิวเตอร์</h3>
                            <div class="small text-muted">Computer Technical Officer</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Roles & Responsibilities Cards -->
            <div class="mb-5" data-aos="fade-up">
                <h2 class="h4 font-weight-bold text-dark mb-4">
                    <i class="fa fa-sitemap text-primary mr-2"></i>บทบาทและหน้าที่ความรับผิดชอบในโครงสร้างบริหารหลักสูตร
                </h2>

                <div class="row">
                    <!-- 1. ประธานหลักสูตร -->
                    <div class="col-md-6 mb-4">
                        <div class="card role-card shadow-sm h-100">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="role-icon-box mr-3">
                                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h3 class="h5 font-weight-bold text-dark mb-0">1. ประธานหลักสูตร</h3>
                                        <span class="small text-muted">Program Chair</span>
                                    </div>
                                </div>
                                <ul class="text-secondary pl-3 mb-0">
                                    <li class="mb-2">กำกับดูแลและบริหารจัดการการดำเนินงานของหลักสูตรให้เป็นไปตามเกณฑ์มาตรฐานหลักสูตรระดับอุดมศึกษา</li>
                                    <li class="mb-2">เป็นประธานในการประชุมคณะกรรมการบริหารหลักสูตรเพื่อวางแผนพัฒนาการเรียนการสอน</li>
                                    <li>ประสานงานร่วมกับคณะวิทยาศาสตร์และเทคโนโลยี และหน่วยงานภายนอก</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- 2. คณะกรรมการบริหารหลักสูตร -->
                    <div class="col-md-6 mb-4">
                        <div class="card role-card shadow-sm h-100">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="role-icon-box mr-3">
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                    </div>
                                    <div>
                                        <h3 class="h5 font-weight-bold text-dark mb-0">2. คณะกรรมการบริหารหลักสูตร</h3>
                                        <span class="small text-muted">Curriculum Administrative Committee</span>
                                    </div>
                                </div>
                                <ul class="text-secondary pl-3 mb-0">
                                    <li class="mb-2">วางแผน พัฒนา และปรับปรุงหลักสูตรให้ทันสมัยและสอดคล้องกับความต้องการของตลาดแรงงานและผู้มีส่วนได้เสีย</li>
                                    <li class="mb-2">จัดทำและทบทวนรายละเอียดของหลักสูตร (มคอ.2) รายวิชา (มคอ.3) และรายงานผลการดำเนินการของหลักสูตร (มคอ.7)</li>
                                    <li>กำกับดูแลระบบการประกันคุณภาพการศึกษาระดับหลักสูตร และการทวนสอบผลสัมฤทธิ์ทางการเรียน</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- 3. อาจารย์ประจำหลักสูตร -->
                    <div class="col-md-6 mb-4">
                        <div class="card role-card shadow-sm h-100">
                            <div class="card-body p-4 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="role-icon-box mr-3">
                                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                        </div>
                                        <div>
                                            <h3 class="h5 font-weight-bold text-dark mb-0">3. อาจารย์ประจำหลักสูตร</h3>
                                            <span class="small text-muted">Program Faculty Members</span>
                                        </div>
                                    </div>
                                    <ul class="text-secondary pl-3 mb-3">
                                        <li class="mb-2">จัดการเรียนการสอนทั้งภาคทฤษฎีและภาคปฏิบัติ ตลอดจนวัดและประเมินผลการเรียนรู้ของนักศึกษา</li>
                                        <li class="mb-2">ทำหน้าที่อาจารย์ที่ปรึกษาทางวิชาการ อาจารย์ที่ปรึกษาโครงงาน และอาจารย์นิเทศสหกิจศึกษา/ฝึกงาน</li>
                                        <li>สร้างสรรค์งานวิจัย นวัตกรรม บริการวิชาการแก่ชุมชน และทำนุบำรุงศิลปวัฒนธรรม</li>
                                    </ul>
                                </div>
                                <div>
                                    <a href="teacher.php" class="btn btn-outline-primary btn-sm">
                                        <i class="fa fa-address-book-o mr-1"></i> ดูรายชื่ออาจารย์ประจำหลักสูตร
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 4. นักวิชาการคอมพิวเตอร์ -->
                    <div class="col-md-6 mb-4">
                        <div class="card role-card shadow-sm h-100">
                            <div class="card-body p-4 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="role-icon-box mr-3">
                                            <i class="fa fa-desktop" aria-hidden="true"></i>
                                        </div>
                                        <div>
                                            <h3 class="h5 font-weight-bold text-dark mb-0">4. นักวิชาการคอมพิวเตอร์</h3>
                                            <span class="small text-muted">Computer Technical Officer & Support Staff</span>
                                        </div>
                                    </div>
                                    <ul class="text-secondary pl-3 mb-3">
                                        <li class="mb-2">ดูแล บำรุงรักษา และเตรียมความพร้อมของเครื่องคอมพิวเตอร์ ซอฟต์แวร์ และระบบเครือข่ายในห้องปฏิบัติการคอมพิวเตอร์</li>
                                        <li class="mb-2">สนับสนุนการจัดการเรียนการสอนภาคปฏิบัติ การจัดสอบปฏิบัติ และการอบรมบริการวิชาการของหลักสูตร</li>
                                        <li>บริหารจัดการครุภัณฑ์คอมพิวเตอร์และให้บริการด้านเทคนิคแก่อาจารย์และนักศึกษา</li>
                                    </ul>
                                </div>
                                <div>
                                    <a href="support.php" class="btn btn-outline-primary btn-sm">
                                        <i class="fa fa-wrench mr-1"></i> ดูรายชื่อบุคลากรสายสนับสนุน
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- แผนผังรูปภาพต้นฉบับ (อ้างอิงเอกสารหลักสูตร) -->
            <div class="card border-0 bg-light p-4 text-center" data-aos="fade-up">
                <h2 class="h6 font-weight-bold text-secondary mb-3">แผนผังโครงสร้างบริหารสาขาวิชาวิทยาการคอมพิวเตอร์ (ภาพประกอบจากเอกสารหลักสูตร)</h2>
                <div>
                    <img class="img-fluid rounded border bg-white p-2 shadow-sm" src="images/Structure-Course-CS.jpg" alt="แผนผังโครงสร้างบริหารหลักสูตรวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์" loading="lazy">
                </div>
            </div>

        </div>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>
</body>

</html>
