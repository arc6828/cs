<?php include("layouts/header.php"); ?>

<?php
$people_obj = json_decode(file_get_contents("http://cs.vru.ac.th/json/teacher.json"), true);
$people = $people_obj["people"];
?>

<section>
   <div class="container  text-center">
      <br>
      <br>
      <div class="section-header">
         <h1 class="h2">อาจารย์ประจำหลักสูตร</h1>
      </div>
      <br>      
      
      <!-- T2 -->

      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gutter-2">
         <?php foreach ($people as $row) { ?>
            
            <div class="col p-1" data-aos="fade-up" data-aos-delay="100">
               <div class="card h-100">
                  <img src="<?= $row["image"] ?>" class="img-fluid" alt="">
                  <div class="card-body">
                     <?php
                     $educations = explode(" | ", $row["education"]);
                     ?>
                     <h5 style="font-size: 1.2rem;"><?= $row["name"] ?></h5>
                     <label class="text-black-50"><?= $row["role"] ?></label>
                     <div>
                        <?php foreach ($educations as $item) {  ?>
                           <?php
                           $e = explode(" - ", $item);
                           if (count($e) < 2) continue;
                           ?>
                           <div><?= $e[0] ?></div>
                           <div><?= $e[1] ?></div>
                        <?php }    ?>
                     </div>
                     <!-- <div> <?= $row["phone"] ?> </div> -->
                     <div> <?= $row["email"] ?> </div>
                  </div>
               </div>
            </div>
            <!-- End Team Member-->

         <?php } ?>
      </div>
   </div>
</section>

<?php include("layouts/footer.php"); ?>