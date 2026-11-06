<?php
$og_title = "แจ้งการอบรมพัฒนาความรู้ | วิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ (VRU)";
$og_description = "ระบบแจ้งการเข้าอบรมพัฒนาความรู้และดูบันทึกการอบรมของคณาจารย์และบุคลากร หลักสูตรวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์";
$og_url = "https://cs.vru.ac.th/Training.php";
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
            <h1 class="h2">&starf;&nbsp;แจ้งการอบรมพัฒนาความรู้</h1>
            <hr>
            <div class="mb-3">
                <img src="images/summer-study.jpg" class="img-fluid" alt="แจ้งการอบรมพัฒนาความรู้ หลักสูตรวิทยาการคอมพิวเตอร์ VRU" loading="lazy">
            </div>
            <div class="row">
                <div class="col-auto mb-2">
                    <a class="btn btn-primary" href="https://goo.gl/forms/uiOxMTY0ewKxUxyd2" target="_blank" rel="noopener">แจ้งการเข้าอบรม</a>
                </div>
                <div class="col-auto mb-2">
                    <a class="btn btn-success" href="https://docs.google.com/spreadsheets/d/1GsktllPd9cAGhCBVhvk6eBymJ8tij-46-NlsWFQnDwk/edit?usp=sharing" target="_blank" rel="noopener">ดูบันทึกการอบรม</a>
                </div>
            </div>
        </div>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>
</body>

</html>
