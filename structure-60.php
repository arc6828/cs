<?php
$og_title = "โครงสร้างหลักสูตรวิทยาการคอมพิวเตอร์ (พ.ศ. 2560) | มรภ.วไลยอลงกรณ์ (VRU)";
$og_description = "โครงสร้างหลักสูตรและรายวิชา หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์ (หลักสูตรปรับปรุง พ.ศ. 2560) มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์";
$og_url = "https://cs.vru.ac.th/structure-60.php";
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
            <h1 class="h2">&starf;&nbsp;โครงสร้างหลักสูตร (พ.ศ. 2560)</h1>
            <hr>
            <style>
                table p {
                    margin-bottom: 0;
                }
            </style>
            <h2 class="text-center h4 mt-4 py-4">
                หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิทยาการคอมพิวเตอร์ หลักสูตรปรับปรุง พ.ศ. 2560
            </h2>
            <div>
                <?php include("layouts/cs-course60.php"); ?>
            </div>
            <div class="text-center">
                <a class="btn btn-primary mb-4" href="http://acad.vru.ac.th/about_acad/A/205.docx" target="_blank" rel="noopener">
                    ดาวน์โหลดรายละเอียดหลักสูตรได้ที่นี่
                </a>
            </div>
        </div>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>
</body>

</html>
