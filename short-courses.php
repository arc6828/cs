<?php
$og_title = "คอร์สอบรมระยะสั้น (Short Courses) | วิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์";
$og_description = "คอร์สอบรมระยะสั้นพัฒนาทักษะด้านการเขียนโปรแกรมและแอปพลิเคชันมือถือ โดยหลักสูตรวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์";
$og_url = "https://cs.vru.ac.th/short-courses.php";
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
            <h1 class="h2">คอร์สอบรมเรียน</h1>
            <hr>
            <div class="row">
                <div class="col-sm-6 mb-3">
                    <div class="card" style="width: 18rem;">
                        <a href="tcas.php">
                            <img src="images/Mobile app.png" class="card-img-top" alt="คอร์สอบรมเรียน Mobile Application" loading="lazy">
                            <div class="container py-2">
                                <img class="course_icon" src="images/Mobile app.png" width="30" height="30" alt="ไอคอนคอร์ส Mobile Application">
                                <h2 class="h6 mt-2"><strong class="course_name">คอร์สอบรมเรียน Mobile Application</strong></h2>
                            </div>
                            <small class="d-block text-right px-3 pb-2">การดู 100 ครั้ง</small>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 mb-3">
                    <div class="card" style="width: 18rem;">
                        <a href="tcas.php">
                            <img src="images/Mobile app.png" class="card-img-top" alt="คอร์สอบรมเรียน Mobile Application" loading="lazy">
                            <div class="container py-2">
                                <img class="course_icon" src="images/Mobile app.png" width="30" height="30" alt="ไอคอนคอร์ส Mobile Application">
                                <h2 class="h6 mt-2"><strong class="course_name">คอร์สอบรมเรียน Mobile Application</strong></h2>
                            </div>
                            <small class="d-block text-right px-3 pb-2">การดู 100 ครั้ง</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>
</body>

</html>
