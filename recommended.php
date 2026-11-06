<?php
$og_title = "แจ้งข้อเสนอแนะและร้องเรียน | วิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ (VRU)";
$og_description = "ช่องทางรับฟังความคิดเห็น แจ้งข้อเสนอแนะ และเรื่องร้องเรียน เพื่อการพัฒนาหลักสูตรวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์";
$og_url = "https://cs.vru.ac.th/recommended.php";
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
            <h1 class="h2">&starf;&nbsp;แจ้งข้อเสนอแนะ / ร้องเรียน</h1>
            <hr>
            <p class="text-center">
                <img src="images/feedback.jpg" alt="แจ้งข้อเสนอแนะและร้องเรียน หลักสูตรวิทยาการคอมพิวเตอร์ VRU" width="738" height="416" class="img-fluid" loading="lazy">
            </p>
            <p class="text-center">
                <a href="https://goo.gl/forms/H4b39IgWfm2kJMUv1" class="btn btn-lg btn-danger" target="_blank" rel="noopener">แจ้งข้อเสนอแนะ / ร้องเรียน</a>
            </p>
        </div>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>
</body>

</html>
