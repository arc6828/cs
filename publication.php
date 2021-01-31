<?php 
$og_url = "http://cs.vru.ac.th/publication.php";
$og_type = "article";
$og_title = "Publication หลักสูตรวิทยาการคอมพิวเตอร์รับสมัครนักศึกษาปริญญาตรี";
$og_description = "รวมผลงานที่ได้รับการตีพิมพ์เผยแพร่ต่อสาธารณะของหลักสูตรวิทยาการคอมพิวเตอร์
มหาวิทยาลัมหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์";
$og_image = "http://cs.vru.ac.th/images/online-exmaination-system.png";
?>

<?php include("layouts/header.php") ?>
<!-- start content -->

<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" defer=""></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" defer=""></script>
<script src="https://momentjs.com/downloads/moment-with-locales.min.js" defer=""></script>


<div class="container">
  <div class="row mb-4">
    <div class="offset-lg-3 col-lg-6 offset-md-2 col-md-8 col-sm-12">
      <img src="images/online-exmaination-system.png" width="100%" >
    </div>
  </div>  
  <h1 class="text-center" id="title">CS Publications</h1>
  <h5  class="mb-4 text-center" >
    รวมผลงานที่ได้รับการตีพิมพ์เผยแพร่ต่อสาธารณะของหลักสูตรวิทยาการคอมพิวเตอร์ <br/>มหาวิทยาลัมหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์
    <!-- Button trigger modal -->
    
  </h5>
  <div class="text-center py-4">
    <button type="button" class="btn btn-primary btn btn-primary-sm" data-toggle="modal" data-target="#createModal">
      สร้าง Publication ใหม่
    </button>
  </div>
  <div class="card" style="margin-bottom:20px;">
      <div class="card-header d-none">
        <div class="row ">
          <div class="col-6">
            
            <!-- <a href="https://www.ckartisan.com/publication/create" class="btn btn-success">New Publication</a> -->
          </div>
          <div class="col-6">
            <form class="text-right" action="{{ url('/') }}/publication#title">
              <input name="authors" id="authors" placeholder="ค้นหาด้วยชื่อ" >
              <select name="year" id="year" placeholder="ปีที่ตีพิมพ์" style="height:30px;" onchange="document.querySelector('#form-submit').click(); ">
                <option value="">ทุกปี</option>
                <?php foreach([2021,2020,2019,2018,2017,2016,2015] as $y) { ?>
                <option value="<?=$y?>"><?=$y?></option>
                <?php } ?>
              </select>

              <button class="btn btn-success btn-sm" type="submit" id="form-submit">Search</button>
            </form>
          </div>
        </div>
      </div>

      <div class="card-body">
        <ul class="nav nav-tabs nav-pills nav-justified" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#table" role="tab" aria-controls="home" aria-selected="true">Table</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#bullet" role="tab" aria-controls="profile" aria-selected="false">Bullet</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="table" role="tabpanel" aria-labelledby="home-tab" >

            <div class="table-responsive" style="margin-top:20px;">
              <table id="table-publication" class="table table-striped table-bordered table-sm"></table>
            </div>
          </div>
          <div class="tab-pane fade" id="bullet" role="tabpanel" aria-labelledby="profile-tab">
            <?php
              $list_m = array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
              $list_mL = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
              $list_mS = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec');
            ?>

            <ul style="margin-top:20px;" id="list">
              

        
            </ul>
          </div>
        </div>
      </div>
  </div>
  <div class="card">
      <div class="card-header">
        ข้อเสนอแนะ
      </div>

      <div class="card-body text-center">
        <p>ทุกคำแนะนำของท่านเราจะนำพัฒนาบริการของเราให้ดีขึ้น ขอขอบคุณสำหรับทุกคำแนะนำ</p>
        <a class="btn btn-success" href="https://goo.gl/forms/IFFEmw0jO1UMMP602">กรอกข้อเสนอแนะ</a>
      </div>
    </div>
</div>

<!-- end content --> 
<?php include("layouts/footer.php") ?>  