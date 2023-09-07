<?php include("layouts/header.php"); ?>

<?php
$people_obj = json_decode(file_get_contents("http://cs.vru.ac.th/json/support.json"), true);
$people = $people_obj["people"];
?>

<section>
   <div class="container  text-center">
      <br>
      <br>
      <div class="section-header">
         <h1 class="h2">บุคลากรประจำหลักสูตร</h1>
      </div>
      <br>
      <!-- T1 -->
      <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-xl-2 gutter-2">
         <?php foreach ($people as $row) { ?>
            
            <div class="col p-1" data-aos="fade-up" data-aos-delay="100">
               <div class="card h-100">
                  <div class="row no-gutters">
                     <div class="col-xl-5 col-lg-2 col-md-3">
                        <img src="<?= $row["image"] ?>" class="img-fluid" alt="">
                     </div>
                     <div class="col-xl-7 col-lg-10 col-md-9">
                        <div class="card-body">                           
                           <h5 style="font-size: 1.2rem;"><?= $row["name"] ?></h5>
                           <label class="text-black-50"><?= $row["role"] ?></label>
                           <?php
                           $educations = explode(" | ", $row["education"]);
                           ?>
                           <div>
                              <?php foreach ($educations as $key => $item) {  ?>
                                 <div>
                                    <sup><?= $key+1 ?></sup> 
                                    <?= $item ?>
                                 </div>
                              <?php }    ?>
                           </div>
                           <!-- <div> <?= $row["phone"] ?> </div> -->
                           <div class="text-black-50"><i class="fa fa-map-marker"></i> <?= $row["office"] ?></div>                           
                           <div class="text-black-50"> <label><?= $row["email"] ?> </label></div>
                        </div>
                     </div>
                  </div>



               </div>
            </div>
            <!-- End Team Member-->

         <?php } ?>
      </div>
      
      
   </div>
</section>

<?php include("layouts/footer.php"); ?>