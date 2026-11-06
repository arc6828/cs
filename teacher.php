<?php
$og_title = "อาจารย์ประจำหลักสูตร | วิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ (VRU)";
$og_description = "ทำเนียบคณาจารย์ประจำหลักสูตรวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์ พร้อมวุฒิการศึกษาและช่องทางติดต่อ";
$og_url = "https://cs.vru.ac.th/teacher.php";

$people_obj = json_decode(file_get_contents("json/teacher.json"), true);
$people = $people_obj["people"];
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
            <div class="container text-center">
                <div class="section-header mb-4">
                    <h1 class="h2">อาจารย์ประจำหลักสูตร</h1>
                </div>

                <!-- T1 -->
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-xl-2 gutter-2">
                    <?php foreach ($people as $row) { ?>
                        <div class="col p-1" data-aos="fade-up" data-aos-delay="100">
                            <div class="card h-100">
                                <div class="row no-gutters">
                                    <div class="col-xl-5 col-lg-2 col-md-4">
                                        <img src="<?= htmlspecialchars($row["image"]) ?>" class="img-fluid" alt="<?= htmlspecialchars($row["role"] . ' ' . $row["name"]) ?> อาจารย์ประจำหลักสูตรวิทยาการคอมพิวเตอร์ VRU" loading="lazy">
                                    </div>
                                    <div class="col-xl-7 col-lg-10 col-md-8">
                                        <div class="card-body">
                                            <h2 class="h5" style="font-size: 1.2rem;"><?= htmlspecialchars($row["name"]) ?></h2>
                                            <div class="text-black-50 prompt"><?= htmlspecialchars($row["role"]) ?></div>
                                            <?php
                                            $educations = explode(" | ", $row["education"]);
                                            ?>
                                            <div>
                                                <?php foreach ($educations as $key => $item) { ?>
                                                    <div>
                                                        <sup><?= $key + 1 ?></sup>
                                                        <?= htmlspecialchars($item) ?>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <div class="text-black-50"><i class="fa fa-map-marker"></i> <?= htmlspecialchars($row["office"]) ?></div>
                                            <div class="text-black-50">
                                                <a href="mailto:<?= htmlspecialchars($row["email"]) ?>" class="text-black-50"><?= htmlspecialchars($row["email"]) ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Team Member -->
                    <?php } ?>
                </div>
            </div>
        </section>

        <?php
        $item_list = [];
        foreach ($people as $index => $row) {
            $item_list[] = [
                "@type" => "ListItem",
                "position" => $index + 1,
                "item" => [
                    "@type" => "Person",
                    "name" => $row["name"],
                    "jobTitle" => $row["role"],
                    "email" => $row["email"],
                    "image" => $row["image"],
                    "worksFor" => [
                        "@type" => "CollegeOrUniversity",
                        "name" => "มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์"
                    ]
                ]
            ];
        }
        ?>
        <script type="application/ld+json">
        <?= json_encode([
            "@context" => "https://schema.org",
            "@type" => "ItemList",
            "name" => "อาจารย์ประจำหลักสูตรวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์",
            "itemListElement" => $item_list
        ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
        </script>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>
</body>

</html>
