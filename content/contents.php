<?php include("../layouts/header2.php"); ?>

<?php
$articles = json_decode(file_get_contents("https://ckartisan.com/api/article"));
// $people = $people_obj["people"];
?>

<section>
    <div class="container">
        <br>
        <br>
        <div class="section-header text-center">
            <h1 class="h2">บทความ</h1>
        </div>
        <br>
        <!-- T2 -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gutter-2">
            <?php foreach ($articles as $row) { ?>

                <div class="col p-1">
                    <div class="card h-100">
                        <a href="<?= $row->id ?>">
                            <img src="<?= $row->image_url ?>" class="img-fluid" alt="">
                        </a>
                        <div class="card-body">
                            <a href="<?= $row->id ?>">
                                <h5 style="font-size: 1.2rem;"><?= $row->title ?></h5>
                            </a>
                            <label class="text-black-50"><?= $row->pubDate ?></label>
                            
                            <div>
                                <?php foreach (json_decode($row->category) as $item) {  ?>
                                    <span class="badge badge-pill badge-primary"><?= $item ?></span>
                                <?php }    ?>
                            </div>
                            <!-- <div> <?= $row->title ?> </div> -->
                            <div> <?= $row->first_paragraph ?> </div>
                            <label class="text-black-50"><?= $row->creator ?></label>
                        </div>
                    </div>
                </div>
                <!-- End Team Member-->

            <?php } ?>
        </div>


    </div>
</section>

<?php include("../layouts/footer2.php"); ?>