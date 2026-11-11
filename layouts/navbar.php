    <?php
    if (!isset($root_path)) {
        $req_path = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
        $root_path = (strpos($req_path, '/content/') !== false) ? '../' : '';
    }
    ?>
    <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
                <img class="m-4" src="<?php echo $root_path; ?>images/css.png" height="70" alt="โลโก้หลักสูตรวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์">
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
    </div>
    <header class="site-navbar js-sticky-header site-navbar-target justify-content-center" role="banner">
        <div class="container ">
            <div class="row">
                <div class="col-10 col-md-10 col-lg-10 col-xl-4">
                    <div class="site-logo">
                        <a href="<?php echo $root_path; ?>index.php" class="text-left">
                            <div class="" style="display: flex; flex-direction:row;">
                                <img class="d-lg-block d-md-none d-sm-none d-none my-1" src="<?php echo $root_path; ?>images/css.png" height="70" alt="โลโก้หลักสูตรวิทยาการคอมพิวเตอร์ VRU">
                                <div class="d-lg-block" style="line-height: 0.3; padding-top: 18px; padding-left: 10px;">
                                    <div style="margin-bottom:0px; font-size: 0.8em; font-weight: 500;" class="text-dark prompt">วิทยาการคอมพิวเตอร์</div>
                                    <small class="" style="font-size: 0.35em; color:#777;">มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="d-none d-md-none col-lg-8 d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li class="nav-link">
                                <a class="nav-link" href="<?php echo $root_path; ?>index.php">หน้าหลัก</a>
                            </li>
                            <li class="nav-link dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    เกี่ยวกับหลักสูตร
                                </a>
                                <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                                    <a class="dropdown-item" href="<?php echo $root_path; ?>history.php">ประวัติหลักสูตร</a>
                                    <a class="dropdown-item" href="<?php echo $root_path; ?>structure.php">โครงสร้างหลักสูตร</a>
                                    <a class="dropdown-item" href="<?php echo $root_path; ?>course-descriptions.php">คำอธิบายรายวิชา</a>
                                    <a class="dropdown-item" href="<?php echo $root_path; ?>Description.php">รายละเอียดหลักสูตร</a>
                                    <a class="dropdown-item" href="<?php echo $root_path; ?>Management.php">โครงสร้างบริหารหลักสูตร</a>
                                    <a class="dropdown-item" href="<?php echo $root_path; ?>policy.php">นโยบายด้านคุณภาพ</a>
                                    <a class="dropdown-item" href="<?php echo $root_path; ?>philosophy.php">ปรัชญา วิสัยทัศน์ พันธกิจ</a>
                                    <a class="dropdown-item" href="<?php echo $root_path; ?>LAB.php">ห้องปฏิบัติการคอมพิวเตอร์</a>
                                </div>
                            </li>
                            <li class="nav-link dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="teamDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    อาจารย์และบุคลากร
                                </a>
                                <div class="dropdown-menu dropright" aria-labelledby="teamDropdown">
                                    <a class="dropdown-item" href="<?php echo $root_path; ?>teacher.php">อาจารย์ประจำหลักสูตร</a>
                                    <a class="dropdown-item" href="<?php echo $root_path; ?>support.php">บุคลากรประจำหลักสูตร</a>
                                    <a class="dropdown-item" href="<?php echo $root_path; ?>publication.php">ผลงานตีพิมพ์ของหลักสูตร</a>
                                    <a class="dropdown-item" href="<?php echo $root_path; ?>Training.php">แจ้งการอบรมพัฒนาความรู้</a>
                                    <a class="dropdown-item" href="<?php echo $root_path; ?>staff.php">ระเบียบแบบฟอร์มสำหรับอาจารย์และเจ้าหน้าที่</a>
                                    <a class="dropdown-item dropdown-toggle" href="#" id="qaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ประกันคุณภาพหลักสูตร</a>
                                    <ul class="dropdown-menu dropdown" aria-labelledby="qaDropdown">
                                        <li><a class="dropdown-item" href="http://www.cheqa.mua.go.th/">CHE QA 3D ONLINE SYSTEM</a></li>
                                        <li><a class="dropdown-item" href="<?php echo $root_path; ?>report.php">รายงานการประกันคุณภาพการศึกษา</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-link dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="studentDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    นักศึกษา
                                </a>
                                <div class="dropdown-menu" aria-labelledby="studentDropdown">
                                    <a class="dropdown-item" href="<?php echo $root_path; ?>tcas.php">รับสมัครนักศึกษาใหม่</a>
                                    <a class="dropdown-item" href="<?php echo $root_path; ?>Student Guide.php">คู่มือนักศึกษา</a>
                                    <a class="dropdown-item" href="<?php echo $root_path; ?>Project Guide.php">คู่มือโครงงานนักศึกษา</a>
                                    <a class="dropdown-item" href="<?php echo $root_path; ?>Internship location.php">สถานที่ฝึกสหกิจ</a>
                                    <a class="dropdown-item" href="<?php echo $root_path; ?>Internship documents.php">เอกสารฝึกงาน</a>
                                    <a class="dropdown-item" href="<?php echo $root_path; ?>recommended.php">แจ้งข้อเสนอแนะ/ร้องเรียน</a>
                                </div>
                            </li>
                            <li class="nav-link">
                                <a class="nav-link" href="<?php echo $root_path; ?>content">บทความ</a>
                            </li>
                            <li class="nav-link ">
                                <a class="nav-link" href="<?php echo $root_path; ?>contact.php">ติดต่อเรา</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-2 col-md-2 d-l-block d-inline-block d-xl-none ml-md-0 py-3">
                    <a href="#" class="site-menu-toggle js-menu-toggle text-dark float-right"><span class="icon-menu h3"></span></a>
                </div>
            </div>
        </div>
    </header>

