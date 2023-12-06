<?php include("../layouts/header2.php"); ?>

<?php
$url = "https://ckartisan.com/api/article/{$value}";
$article_set = json_decode(file_get_contents($url));
// $people = $people_obj["people"];
$article = $article_set->article;
$latest = $article_set->latest;
$tagged = $article_set->tagged;
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
                <div>
                    <?php foreach (json_decode($article->category) as $c) { ?>
                        <span class="badge rounded-pill text-bg-light"><?= $c ?></span>
                    <?php } ?>
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
                            <div class="col-lg-12">
                                <div class="card">
                                    <img src="<?= $item->image_url ?>" class="card-img-top" alt="<?= $item->title ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $item->title ?></h5>
                                        <p class="card-text"><?= $item->creator ?></p>
                                        <p class="card-text"><?= $item->pubDate ?></p>
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
                            <img src="http://sci.vru.ac.th/assets/images/people/IMG_20230513_105114_edit.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-9">
                            <div class="card-body">
                                <h5 style="font-size: 1.2rem;">วิวัฒน์ ชินนาทศิริกุล</h5>
                                <div class="text-black-50 prompt">ผู้ช่วยศาสตราจารย์</div>
                                <div>
                                    <div>
                                        <sup>1</sup>
                                        พบ.ม. สถิติประยุกต์ (ระบบและการจัดการสารสนเทศ) - สถาบันบัณฑิตพัฒนบริหารศาสตร์ (NIDA)
                                    </div>
                                    <div>
                                        <sup>2</sup>
                                        กศ.บ. (คณิตศาสตร์) - มหาวิทยาลัยศรีนครินทรวิโรฒประสานมิตร
                                    </div>
                                </div>
                                <!-- <div>  </div> -->
                                <div class="text-black-50"><i class="fa fa-map-marker"></i> IT201 อาคาร 75 ปีฯ</div>
                                <div class="text-black-50"> <label>wiwat@vru.ac.th </label></div>
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
                                    <h6 class="card-title"><?= mb_substr($item->title, 0, 50) ?></h6>
                                    <p class="card-text"><?= $item->creator ?></p>
                                    <p class="card-text"><?= $item->pubDate ?></p>
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