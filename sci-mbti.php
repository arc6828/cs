<?php
$og_title = "แบบทดสอบค้นหาหลักสูตรที่เหมาะกับคุณ (Sci-MBTI) | คณะวิทยาศาสตร์ฯ VRU";
$og_description = "ทำแบบสำรวจค้นหาความถนัดว่าคุณเหมาะที่จะเรียนต่อหลักสูตรไหนในคณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์";
$og_url = "https://cs.vru.ac.th/sci-mbti.php";

$questions = json_decode(file_get_contents("json/sci-mbti.json"));
shuffle($questions);
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <?php include("layouts/meta.php"); ?>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php include("layouts/navbar.php"); ?>

    <div class="content">
        <section class="py-4">
            <div class="container">
                <div class="section-header text-center mb-4">
                    <h1 class="h2">เรียนหลักสูตรไหนในคณะวิทยาศาสตร์ที่เหมาะกับคุณ</h1>
                </div>

                <script>
                    function randomAnswers() {
                        let size = <?= count($questions) ?>;
                        for (let i = 0; i < size; i++) {
                            let choose = ["yes", "no"][Math.round(Math.random())];
                            document.querySelector("#flexRadioDefault" + (i + 1) + choose).checked = true;
                        }
                    }
                </script>
                <div class="text-center mb-4">
                    <button class="btn btn-primary" type="button" onclick="randomAnswers()">Random Toggle All</button>
                </div>

                <!-- form -->
                <form method="post" action="sci-mbti-result.php">
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-xl-1 gutter-2">
                        <?php foreach ($questions as $key => $row) { ?>
                            <div class="col p-1">
                                <div class="card">
                                    <div class="card-body">
                                        <h2 class="card-title h5"><?= $key + 1 ?>. <?= htmlspecialchars($row->code) ?> | <?= htmlspecialchars($row->question) ?></h2>
                                        <div class="card-text" style="font-size:18px;">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault<?= $key + 1 ?>" id="flexRadioDefault<?= $key + 1 ?>yes" value="<?= htmlspecialchars($row->code) ?>-yes">
                                                <label class="form-check-label" for="flexRadioDefault<?= $key + 1 ?>yes"> ใช่ </label>
                                            </div>
                                            <div class="form-check form-check-inline mx-5">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault<?= $key + 1 ?>" id="flexRadioDefault<?= $key + 1 ?>no" value="<?= htmlspecialchars($row->code) ?>-no">
                                                <label class="form-check-label" for="flexRadioDefault<?= $key + 1 ?>no"> ไม่ใช่ </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="text-center mt-4">
                        <button class="btn btn-primary" type="submit">ส่งแบบสำรวจ</button>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>
</body>

</html>
