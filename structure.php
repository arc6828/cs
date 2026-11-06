<?php
$og_title = "โครงสร้างหลักสูตรวิทยาการคอมพิวเตอร์ | มรภ.วไลยอลงกรณ์ (VRU)";
$og_description = "โครงสร้างหลักสูตรและแผนการศึกษา หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์ (หลักสูตรปรับปรุง พ.ศ. 2565) มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์";
$og_url = "https://cs.vru.ac.th/structure.php";
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <?php include("layouts/meta.php"); ?>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php include("layouts/navbar.php"); ?>

    <div class="content">
        <div class="container py-4">
            <h1 class="h2">&starf;&nbsp;โครงสร้างหลักสูตรปัจจุบัน</h1>
            <hr>
            <style>
                table p {
                    margin-bottom: 0;
                }
            </style>
            <h2 class="text-center h4 mt-4 py-4">
                หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิทยาการคอมพิวเตอร์ หลักสูตรปรับปรุง พ.ศ. 2565
            </h2>
            <div>
                <?php include("layouts/cs-course65.php"); ?>
            </div>
            <div class="text-center">
                <a class="btn btn-primary mb-4" href="http://acad.vru.ac.th/about_acad/A/299.pdf" target="_blank" rel="noopener">
                    ดาวน์โหลดรายละเอียดหลักสูตรได้ที่นี่
                </a>
                <a class="btn btn-light mb-4" href="structure-60.php">
                    ดูหลักสูตรเก่า 2560
                </a>
            </div>
        </div>

        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Course",
            "name": "หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์ (หลักสูตรปรับปรุง พ.ศ. 2565)",
            "description": "โครงสร้างหลักสูตรและรายวิชา สาขาวิชาวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์",
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
