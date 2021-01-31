<div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label text-center">authors <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input class="form-control" name="authors" id="authors" placeholder="ชื่อผู้เขียน" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label text-center">title<span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input class="form-control" name="title" id="title" placeholder="ชื่อเรื่อง" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label text-center">publisher<span class="text-danger">*</span></label>
    <div class="col-sm-6">
      <input class="form-control" name="publisher" id="publisher" placeholder="สถานที่ตีพิมพ์" required>
    </div>
    
    <label for="inputPassword" class="col-sm-2 col-form-label text-center">pages<span class="text-danger">*</span></label>
    <div class="col-sm-2">
      <input class="form-control" name="pages" id="pages" placeholder="หน้า" required>
    </div>
    
    <div class="offset-sm-2 col-sm-10 text-primary">
      ยกตัวอย่าง เช่น
      <ul>
        <li>conference  เช่น การประชุมวิชาการระดับชาติ วิทยาศาสตร์และเทคโนโลยีระหว่างสถาบัน  (ASTC2018). ครั้งที่ 6</li>
        <li>journal  เช่น วารสารวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยมหาสารคาม. ปีที่ 37 ฉบับที่ 4. กรกฎาคม - สิงหาคม 2561</li>
      </ul>      
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label text-center">Date<span class="text-danger">*</span></label>
    <div class="col-sm-2">
      <input type="number" class="form-control" name="date" id="date" value="<?=date('j')?>"  required>
    </div>
    <div class="col-sm-5">
      <select name="month" id="month" class="form-control" required>
        <?php
          $list_m = ["มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม"];
          $i = 1;
        ?>
        <?php foreach($list_m as $m) { ?>
        <option value="<?=$i++?>" <?php if($i==date('n')){echo " selected";} ?>><?=$m?></option>
        <?php } ?>
      </select>

    </div>
    <div class="col-sm-3">
      <input type="number" class="form-control" name="year" id="year" value="<?=date('Y')+543?>"  required>
    </div>
    <div class="offset-sm-2 col-sm-10 text-primary">
      ยกตัวอย่าง เช่น กรอกเป็น 2019 หรือ 2562 ก็ได้
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label text-center">Region <span class="text-danger">*</span></label>
    <div class="col-sm-4">
      <select name="language" id="language"  class="form-control">
        <option value="National">National</option>
        <option value="International">International</option>
      </select>
    </div>
  
    <label for="inputPassword" class="col-sm-2 col-form-label text-center">Type<span class="text-danger">*</span></label>
    <div class="col-sm-4">
      <select name="type" id="type" class="form-control" onchange="onChangeType();">
        <option value="Conference">Conference</option>
        <option value="Journal">Journal</option>
      </select>
    </div>
  </div>
  <div class="conference-only">
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label text-center">City (ถ้ามี)</label>
      <div class="col-sm-4">
        <input class="form-control" name="city" id="city" placeholder="จังหวัด...">
      </div>
    
      <label for="inputPassword" class="col-sm-2 col-form-label text-center">Place (ถ้ามี)</label>
      <div class="col-sm-4">
        <input class="form-control" name="place" id="place" placeholder="สถานที่...">
      </div>
    </div>
  </div>  
</div>
<script>
  function hideConferenceOnly(){
    $(".conference-only").addClass("d-none");
  }
  function showConferenceOnly(){
    $(".conference-only").removeClass("d-none");
  }
  function onChangeType(){
    if($("#type").val() === "Conference"){
      showConferenceOnly();
    }else if($("#type").val() === "Journal"){
      hideConferenceOnly();
    }
  }
</script>