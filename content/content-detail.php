<?php
$url = "https://ckartisan.com/api/article/{$value}";
$article_set = json_decode(file_get_contents($url));
$article = $article_set->article;
$related = $article_set->related;
$tagged = $article_set->tagged;
$writer = $article_set->writer;

$og_title = ($article->title ?? "บทความ") . " | วิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ (VRU)";
$og_description = mb_substr(strip_tags($article->first_paragraph ?? $article->title ?? ""), 0, 160);
$og_image = $article->image_url ?? "https://cs.vru.ac.th/images/logo5.png";
$og_url = "https://cs.vru.ac.th/content/" . urlencode($value);
$og_type = "article";
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <?php include("../layouts/meta.php"); ?>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php include("../layouts/navbar.php"); ?>

    <div class="content">
        <style>
            .main img {
                width: 100%;
            }
        </style>
        <section>
            <div class="bg-dark text-white py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <h1 class="h2"><?= htmlspecialchars($article->title) ?></h1>
                            <div class="h4"><?= htmlspecialchars($article->creator) ?></div>
                        </div>
                        <div class="col-lg-4">
                            <div class="p-4">
                                <div class="h3">บทความ</div>
                                <div class="h5">หลักสูตรวิทยาการคอมพิวเตอร์</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="main">
            <div class="container">
                <div class="row my-4 g-4">
                    <div class="col-md-12">
                        <div class="h6">วันที่โพสต์ <span class="date-long"><?= htmlspecialchars($article->pubDate) ?></span> น.</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 border-right">
                        <div class="mb-4">
                            <?php foreach (json_decode($article->category) as $item) { ?>
                                <span class="badge badge-pill badge-primary"><?= htmlspecialchars($item) ?></span>
                            <?php } ?>
                        </div>
                        <div>
                            <?= html_entity_decode($article->contentEncoded) ?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <h2 class="h4">บทความอื่นๆ</h2>
                            <div class="row g-4">
                                <?php foreach ($tagged as $item) { ?>
                                    <div class="col-md-12">
                                        <div class="card mb-4">
                                            <a href="<?= $root_path ?>content/<?= htmlspecialchars($item->id) ?>">
                                                <img src="<?= htmlspecialchars($item->image_url) ?>" class="card-img-top" alt="<?= htmlspecialchars($item->title) ?>" loading="lazy">
                                            </a>
                                            <div class="card-body">
                                                <p class="card-text"><span class="date"><?= htmlspecialchars($item->pubDate) ?></span></p>
                                                <h3 class="card-title h5">
                                                    <a href="<?= $root_path ?>content/<?= htmlspecialchars($item->id) ?>" class="text-dark"><?= htmlspecialchars($item->title) ?></a>
                                                </h3>
                                                <p class="card-text"><?= htmlspecialchars($item->creator) ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-4">
            <div class="container">
                <h2 class="h4">อาจารย์ผู้เขียนบทความ</h2>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-xl-1 gutter-2">
                    <div class="col p-1" data-aos="fade-up" data-aos-delay="100">
                        <div class="card h-100">
                            <div class="row no-gutters">
                                <div class="col-xl-2 col-lg-2 col-md-3">
                                    <img src="<?= htmlspecialchars($writer->image) ?>" class="img-fluid" alt="<?= htmlspecialchars($writer->name) ?>" loading="lazy">
                                </div>
                                <div class="col-xl-10 col-lg-10 col-md-9">
                                    <div class="card-body">
                                        <h3 class="h5" style="font-size: 1.2rem;"><?= htmlspecialchars($writer->name) ?></h3>
                                        <div class="text-black-50 prompt"><?= htmlspecialchars($writer->role) ?></div>
                                        <?php
                                        $educations = explode(" | ", $writer->education);
                                        ?>
                                        <div>
                                            <?php foreach ($educations as $key => $item) { ?>
                                                <div>
                                                    <sup><?= $key + 1 ?></sup>
                                                    <?= htmlspecialchars($item) ?>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <div class="text-black-50"><i class="fa fa-map-marker"></i> <?= htmlspecialchars($writer->office) ?></div>
                                        <div class="text-black-50">
                                            <a href="mailto:<?= htmlspecialchars($writer->email) ?>" class="text-black-50"><?= htmlspecialchars($writer->email) ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-4">
            <div class="container">
                <div class="row mt-4">
                    <div class="col-md-12">
                        <h2 class="h4">บทความที่เกี่ยวกับผู้เขียน</h2>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
                            <?php foreach ($related as $item) { ?>
                                <div class="col mb-3">
                                    <div class="card h-100">
                                        <a href="<?= $root_path ?>content/<?= htmlspecialchars($item->id) ?>">
                                            <img src="<?= htmlspecialchars($item->image_url) ?>" class="card-img-top" alt="<?= htmlspecialchars($item->title) ?>" loading="lazy">
                                        </a>
                                        <div class="card-body">
                                            <p class="card-text">
                                                <span class="date"><?= htmlspecialchars($item->pubDate) ?></span>
                                            </p>
                                            <h3 class="card-title h6">
                                                <a href="<?= $root_path ?>content/<?= htmlspecialchars($item->id) ?>" class="text-dark"><?= htmlspecialchars(mb_substr($item->title, 0, 50)) ?></a>
                                            </h3>
                                            <p class="card-text"><?= htmlspecialchars($item->creator) ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
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

            let dslong = document.querySelectorAll(".date-long");
            dslong.forEach(function(node) {
                let value = node.innerHTML;
                node.innerHTML = dayjs(new Date(value)).format('dddd D MMMM YYYY เวลา HH:mm');
            });
        </script>
    </div>

    <?php include("../layouts/footer-content.php"); ?>
    <?php include("../layouts/scripts.php"); ?>
</body>

</html>
