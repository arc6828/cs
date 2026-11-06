<?php
$og_title = "บทความวิชาการและข่าวสาร | หลักสูตรวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ (VRU)";
$og_description = "บทความวิชาการ ความรู้ด้านเทคโนโลยีสารสนเทศ การเขียนโปรแกรม และข่าวสารจากคณาจารย์หลักสูตรวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์";
$og_url = "https://cs.vru.ac.th/content";

$articles = json_decode(file_get_contents("https://ckartisan.com/api/article/tagged/computer-science"));
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <?php include("../layouts/meta.php"); ?>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php include("../layouts/navbar.php"); ?>

    <div class="content">
        <section class="py-4">
            <div class="container">
                <div class="section-header text-center mb-4">
                    <h1 class="h2">บทความ</h1>
                </div>

                <!-- T2 -->
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gutter-2">
                    <?php foreach ($articles as $row) { ?>
                        <div class="col p-1">
                            <div class="card h-100">
                                <a href="<?= $root_path ?>content/<?= htmlspecialchars($row->id) ?>">
                                    <img src="<?= htmlspecialchars($row->image_url) ?>" class="img-fluid" alt="<?= htmlspecialchars($row->title) ?>" loading="lazy">
                                </a>
                                <div class="card-body">
                                    <a href="<?= $root_path ?>content/<?= htmlspecialchars($row->id) ?>">
                                        <h2 class="h5" style="font-size: 1.2rem;"><?= htmlspecialchars($row->title) ?></h2>
                                    </a>

                                    <div class="text-black-50 date"><?= htmlspecialchars($row->pubDate) ?></div>
                                    <div class="my-1">
                                        <?php foreach (json_decode($row->category) as $item) { ?>
                                            <span class="badge badge-pill badge-primary"><?= htmlspecialchars($item) ?></span>
                                        <?php } ?>
                                    </div>
                                    <div>
                                        <?= htmlspecialchars(mb_substr($row->first_paragraph, 0, 250)) ?> ... -
                                        <span class="text-black-50">อ่านต่อ</span>
                                    </div>
                                    <div class="text-black-50 mt-2"><?= htmlspecialchars($row->creator) ?></div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/dayjs@1/dayjs.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/dayjs@1/locale/th.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/dayjs@1/plugin/relativeTime.js"></script>
        <script>
            dayjs.locale('th');
            let ds = document.querySelectorAll(".date");
            ds.forEach(function(node) {
                let value = node.innerHTML;
                node.innerHTML = dayjs(new Date(value)).format('ddd D MMM YYYY');
            });
        </script>
    </div>

    <?php include("../layouts/footer-content.php"); ?>
    <?php include("../layouts/scripts.php"); ?>
</body>

</html>
