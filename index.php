<?php
$yearNow = (int) date('Y');
$monthNow = (int) date('n');
$academicYear = ($monthNow >= 7) ? $yearNow + 1 + 543 : $yearNow + 543;

$og_title = "หลักสูตรวิทยาการคอมพิวเตอร์ | มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์ (VRU)";
$og_description = "เว็บไซต์อย่างเป็นทางการ หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี มรภ.วไลยอลงกรณ์ (VRU) เปิดรับสมัครนักศึกษาใหม่ ปีการศึกษา {$academicYear} ทั้งภาคปกติและเสาร์-อาทิตย์";
$og_url = "https://cs.vru.ac.th/";
$og_image = "https://cs.vru.ac.th/images/tcas/pr-2026-09-19.jpg";
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <?php include("layouts/meta.php"); ?>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php include("layouts/navbar.php"); ?>

    <div class="content">
        <?php include("layouts/slider.php"); ?>
        <style>
            .carousel {
                position: relative;
                width: 1500px;
                height: 300px;
                left: 50px;
                top: 20px;
                text-align: center;
            }

            .carousel-control-next {
                top: 20px;
                left: 600px;
            }

            .carousel-control-prev {
                top: 20px;
                left: -60px;
            }

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
                    height: calc(80vh);
                }
            }

            .img {
                width: 180px;
                height: 500px;
                border-style: solid !important;
            }

            .text-center {
                text-align: center !important;
            }

            img {
                vertical-align: middle;
                border-style: none;
            }

            .with-dots .owl-dots {
                margin-top: 0px;
                margin-bottom: 0px;
                bottom: 40px;
            }

            .site-blocks-cover.overlay:before {
                background: rgba(0, 0, 0, 0) !important;
            }

            .site-blocks-cover.overlay-2:after {
                background: rgba(0, 0, 0, 0) !important;
            }
        </style>

        <!-- Highlight Admission Section -->
        <div class="container-fluid py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-8">
                                <img class="img-thumbnail" src="images/tcas/pr-2026-09-19.jpg" style="width:100%;" alt="รับสมัครนักศึกษาใหม่ หลักสูตรวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ ปีการศึกษา <?= $academicYear ?>">
                            </div>
                            <div class="col-lg-4 py-4">
                                <h1 class="h5 mt-0 mb-2">หลักสูตรวิทยาการคอมพิวเตอร์ เปิดรับสมัครนักศึกษา (ปริญญาตรีภาคจันทร์-ศุกร์ และภาคเสาร์-อาทิตย์)</h1>
                                <p class="py-2">
                                    หลักสูตรวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์
                                    รับสมัครนักศึกษา ปีการศึกษา <?= $academicYear ?> (ปริญญาตรี จันทร์-ศุกร์ และภาคเสาร์-อาทิตย์) ตั้งแต่วันนี้เป็นต้นไป
                                    ดูรายละเอียดและกรอกใบสมัครได้ที่นี่
                                </p>
                                <div class="text-center">
                                    <a class="btn btn-primary" href="tcas.php">สมัครเรียน</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content & Sidebar -->
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-9">
                    <div class="mt-4" style="padding-top: 20px;">
                        <h2 class="h4">Quick Links</h2>
                        <div class="text-center">
                            <a href="http://cms.vru.ac.th/login.aspx" target="_blank" rel="noopener">
                                <img src="images/CMS.jpg" width="250" height="70" style="margin-top:3px;" alt="ระบบจัดการเรียนการสอนออนไลน์ CMS VRU" loading="lazy">
                            </a>
                            <a href="http://reg1.vru.ac.th/" target="_blank" rel="noopener">
                                <img src="images/Grade.jpg" width="250" height="70" style="margin-top:20px;" alt="ระบบบริการการศึกษาและตรวจสอบผลการเรียน VRU" loading="lazy">
                            </a>
                            <a href="http://reg3.vru.ac.th/acad_mka/" target="_blank" rel="noopener">
                                <img src="images/TQF.jpg" width="250" height="70" style="margin-top:3px;" alt="ระบบสารสนเทศกรอบมาตรฐานคุณวุฒิระดับอุดมศึกษา (มคอ.)" loading="lazy">
                            </a>
                            <a href="https://goo.gl/forms/59Nz2gnBpnc9QSEX2" target="_blank" rel="noopener">
                                <img src="images/fromfix.jpg" width="250" height="70" style="margin-top:3px;" alt="แบบฟอร์มแจ้งซ่อมอุปกรณ์ห้องปฏิบัติการคอมพิวเตอร์" loading="lazy">
                            </a>
                            <a href="https://forms.gle/5tiPTzzFoivjKCNV6" target="_blank" rel="noopener">
                                <img src="images/123.jpg" style="margin-top:3px;" alt="แบบสำรวจข้อมูลศิษย์เก่าวิทยาการคอมพิวเตอร์" loading="lazy">
                            </a>
                            <a href="https://forms.gle/7StYDzL6H2esgBi1A" target="_blank" rel="noopener">
                                <img src="images/Network.jpg" style="margin-top:3px;" alt="เครือข่ายศิษย์เก่าวิทยาการคอมพิวเตอร์ VRU" loading="lazy">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h2 class="card-title h5 mb-0">ชื่อปริญญา</h2>
                        </div>
                        <div class="card-body prompt">
                            <p class="card-text">
                                วิทยาศาสตรบัณฑิต (วท.บ.)<br>(วิทยาการคอมพิวเตอร์)
                            </p>
                            <p class="card-text">
                                Bachelor of Science (B.Sc.)<br>(Computer Science)
                            </p>
                            <p class="card-text">
                                <a href="structure.php" class="btn btn-primary">รายละเอียดหลักสูตร</a>
                            </p>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="card-title h5">ค่าเทอม</h2>
                            <div class="card-text prompt h3">12,000 บาท</div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <img class="card-img-top" src="images/Teacher/Nattira.jpg" alt="ผศ.ณัฏฐิรา ศุขไพบูลย์ ประธานหลักสูตรวิทยาการคอมพิวเตอร์" loading="lazy">
                        <div class="card-body">
                            <div class="prompt">ผศ.ณัฏฐิรา ศุขไพบูลย์</div>
                            <div class="text-muted">ประธานหลักสูตร</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Technology Stack -->
        <?php include("layouts/technology-stack.php"); ?>

        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "EducationalOrganization",
            "name": "สาขาวิชาวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์",
            "url": "https://cs.vru.ac.th/",
            "logo": "https://cs.vru.ac.th/images/css.png",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "เลขที่ 1 หมู่ 20 ต.คลองหนึ่ง อ.คลองหลวง",
                "addressLocality": "ปทุมธานี",
                "postalCode": "13180",
                "addressCountry": "TH"
            },
            "telephone": "0-2529-0674-7 ต่อ 365",
            "sameAs": [
                "https://www.facebook.com/cs.vru.ac.th"
            ]
        }
        </script>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>
</body>

</html>
