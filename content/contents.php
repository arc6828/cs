<?php include("../layouts/header2.php"); ?>

<?php
$articles = json_decode(file_get_contents("https://ckartisan.com/api/article/tagged/computer-science"));
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

                            <label class="text-black-50 date"><?= $row->pubDate ?></label>
                            <div>
                                <?php foreach (json_decode($row->category) as $item) {  ?>
                                    <span class="badge badge-pill badge-primary"><?= $item ?></span>
                                <?php }    ?>
                            </div>
                            <!-- <div> <?= $row->title ?> </div> -->
                            <div>
                                <?= mb_substr($row->first_paragraph, 0, 250)  ?> ... -
                                <label class="text-black-50">อ่านต่อ</label>
                            </div>
                            <label class="text-black-50"><?= $row->creator ?></label>
                        </div>
                    </div>
                </div>
                <!-- End Team Member-->

            <?php } ?>
        </div>


    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/dayjs@1/dayjs.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/dayjs@1/locale/th.js"></script>
<script src="https://cdn.jsdelivr.net/npm/dayjs@1/plugin/relativeTime.js"></script>
<script>
    dayjs.locale('th'); // use loaded locale globally : Thailand
    // dayjs.extend(window.dayjs_plugin_relativeTime);
</script>
<script>
    let ds = document.querySelectorAll(".date");
    // console.log(ds);
    // console.log(dayjs.locale());
    // console.log(dayjs().to(dayjs('1990-01-01')));
    ds.forEach(function(node) {
        let value = node.innerHTML;
        // console.log(dayjs(new Date()).locale('th').format('llll'));
        // node.innerHTML = dayjs(new Date(value)).fromNow();
        node.innerHTML = dayjs(new Date(value)).format('ddd D  MMM YYYY');
        // node.innerHTML =dayjs(new Date()).locale('th').toString();
    })
</script>

<?php include("../layouts/footer2.php"); ?>