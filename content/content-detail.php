<?php include("../layouts/header2.php"); ?>

<?php
$url = "https://ckartisan.com/api/article/{$value}";
$article_set = json_decode(file_get_contents($url));
// $people = $people_obj["people"];
$article = $article_set->article;
$latest = $article_set->latest;
$tagged = $article_set->tagged;
$teacher = $article_set->teacher;
?>


<style>
    .main img {
        width: 100%;
    }
</style>
<section>
    <div class="bg-dark text-white py-4">
        <div class="container ">
            <div class="row">
                <div class="col-md-8">
                    <h1><?= $article->title ?></h1>
                    <label class="h4"><?= $article->creator ?></label>
                </div>
                <div class="col-md-4">
                    <div class="p-4">
                        <label class="h3">บทความ</label>
                        <label class="h5">หลักสูตรวิทยาการคอมพิวเตอร์</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main">
    <div class="container">
        <br />
        <div class="row my-4">
            <div class="col-md-12">
                <label class="h6">วันที่โพสต์ <?= $article->pubDate ?></label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="mb-4">
                    <?php foreach (json_decode($article->category) as $item) {  ?>
                        <span class="badge badge-pill badge-primary"><?= $item ?></span>
                    <?php }    ?>
                </div>
                <div>
                    <?= html_entity_decode($article->contentEncoded) ?>
                </div>


            </div>
            <div class="col-md-4">
                <div class="px-4 border-start">
                    <h2 class="h4">บทความล่าสุด</h2>


                    <div class="row g-4">
                        <?php foreach ($latest as $item) { ?>
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <img src="<?= $item->image_url ?>" class="card-img-top" alt="<?= $item->title ?>">
                                    <div class="card-body">

                                        <p class="card-text"><?= $item->pubDate ?></p>
                                        <h5 class="card-title"><?= $item->title ?></h5>
                                        <p class="card-text"><?= $item->creator ?></p>
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
<br />
<section>
    <div class="container">
        <h2 class="h4">อาจารย์ผู้เขียนบทความ</h2>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-xl-1 gutter-2">

            <div class="col p-1 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100">
                    <div class="row no-gutters">
                        <div class="col-xl-2 col-lg-2 col-md-3">
                            <img src="<?= $teacher->image ?>" class="img-fluid" alt="<?= $teacher->name ?>">
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-9">
                            <div class="card-body">
                                <h5 style="font-size: 1.2rem;"><?= $teacher->name ?></h5>
                                <div class="text-black-50 prompt"><?= $teacher->role ?></div>
                                <?php
                                $educations = explode(" | ", $teacher->education);
                                ?>
                                <div>
                                    <?php foreach ($educations as $key => $item) {  ?>
                                        <div>
                                            <sup><?= $key + 1 ?></sup>
                                            <?= $item ?>
                                        </div>
                                    <?php }    ?>
                                </div>
                                <!-- <div>  </div> -->
                                <div class="text-black-50"><i class="fa fa-map-marker"></i><?= $teacher->office ?></div>
                                <div class="text-black-50"> <label><?= $teacher->email ?></label></div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <!-- End Team Member-->


        </div>
    </div>
</section>
<br />
<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <h2 class="h4">บทความอื่นๆ</h2>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3  row-cols-xl-4 g-4">

                    <?php foreach ($tagged as $item) { ?>
                        <div class="col">
                            <div class="card h-100">
                                <img src="<?= $item->image_url ?>" class="card-img-top" alt="<?= $item->title ?>">
                                <div class="card-body">
                                    <p class="card-text"><?= $item->pubDate ?></p>
                                    <h6 class="card-title"><?= mb_substr($item->title, 0, 50) ?></h6>
                                    <p class="card-text"><?= $item->creator ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include("../layouts/footer2.php"); ?>