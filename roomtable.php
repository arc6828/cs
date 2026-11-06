<?php
$og_title = "ตารางการใช้ห้องปฏิบัติการคอมพิวเตอร์ | วิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ (VRU)";
$og_description = "ตารางการใช้ห้องปฏิบัติการคอมพิวเตอร์ ภาคปกติและภาคพิเศษ สาขาวิชาวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์";
$og_url = "https://cs.vru.ac.th/roomtable.php";
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
            <h1 class="h2">&starf;&nbsp;ตารางการใช้ห้องปฏิบัติการคอมพิวเตอร์</h1>
            <hr>
            <h2 class="h4 ml-4 mb-3"><a href="schedule/Normal2-2563.PDF">&starf;&nbsp;ตารางการใช้ห้องปฏิบัติการคอมพิวเตอร์ภาคปกติ</a></h2>
            <h2 class="h4 ml-4 mb-3"><a href="schedule/Special2-2563.PDF">&starf;&nbsp;ตารางการใช้ห้องปฏิบัติการคอมพิวเตอร์ภาคพิเศษ</a></h2>
        </div>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>
</body>

</html>
