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
              $list_m = ["มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม"];
              $list_mL = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
              $list_mS = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];

            ?>

            <ul style="margin-top:20px;" id="list">
              

              <script>
              //•   ฐาปกรณ์ ต้นสมบูรณ์ และ วิศรุต ขวัญคุ้ม. “ระบบจอง-ยืมรูปเล่มโปรเจคสาขาวิทยาการคอมพิวเตอร”.
                //การประชุมวิชาการระดับชาติด้านวิทยาศาสตร์และเทคโนโลยี ครั้งที่ 2 (NCOST2), 2561, หน้า 54-61.
              //•   วิศรุต ขวัญคุ้ม, จิรารัตน์ เอี่ยมสอาด และธนภัทร เอี่ยมตาล. “การประยุกต์ใช้ขั้นตอนวิธีหิ่งห้อยสำหรับค้นหาแผนการทดลองแบบลาตินไฮเปอร์คิวในการจำลองการทดลองด้วยคอมพิวเตอร์”. การประชุมวิชาการระดับชาติและนานาชาติ ครั้งที่ 2 (NIRC2018), 2561, หน้า 265-274.
              //•   ธนัชพร หันทะยุง และ วิศรุต ขวัญคุ้ม. “การพัฒนาแอพพลิเคชั่นสำหรับการจัดการร้านไก่ย่างห้าดาวบนระบบปฏิบัติการแอนดรอยด์ กรณีศึกษา ร้านไก่ย่างห้าดาว สาขาเคหะออเงิน”. การประชุมวิชาการระดับชาติ วิทยาศาสตร์และเทคโนโลยีระหว่างสถาบัน ครั้งที่ 6 (ASTC2018), 2561, หน้า IT270-IT276.
              //•   วิศรุต ขวัญคุ้ม, จิรารัตน์ เอี่ยมสอาด, ธนภัทร เอี่ยมตาล. “การประยุกต์ใช้วิธีสับค่าและวิธีปรับแก้ในขั้นตอนวิธีสืบค้นสำหรับการจำลองการทดลองด้วยคอมพิวเตอร์”. วารสารวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยมหาสารคาม ปีที่ 37ฉบับที่ 4 (กรกฎาคม - สิงหาคม 2561).
              //•   จิรารัตน์ เอี่ยมสอาด, ธนภัทร เอี่ยมตาล และวิศรุต ขวัญคุ้ม. “อัลกอริทึมตรวจจับโพรงของพื้นกระเบื้องโดยใช้สัญญาณเสียง”. การประชุมวิชาการระดับชาติ ครั้งที่ 3 มหาวิทยาลัยราชภัฏกาญจนบุรี, 2561, หน้า 134-139.

              </script>
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
<script type="text/javascript">
  //555
  //{{ $authors }}
  //{{ $year }}
  document.addEventListener("DOMContentLoaded", function(event) {
    console.log("DOM fully loaded and parsed");
    // document.querySelector("#authors").value = "{{ $authors }}" ;
    // document.querySelector("#year").value = "{{ $year }}" ;
    //console.log("Hello",document.querySelector("#year").value);
    // fetch('publication-api.php')
    fetch('https://www.ckartisan.com/api/publication')
      .then(response => response.json())
      .then(jsonData => {
        console.log(jsonData);

        renderTable(jsonData);
      
        renderList(jsonData);
      });

    $('#editModal').on('shown.bs.modal', function (e) {
      // do something...
      let chosen = document.querySelector("#id");
      console.log("Edit : ", chosen.value );

      fetch('https://www.ckartisan.com/api/publication/'+chosen.value)
        .then(response => response.json())
        .then(jsonData => {
          console.log(jsonData);
          let inputs = document.forms["form_edit"].querySelectorAll("#form_edit input, #form_edit select");
          console.log(inputs);
          //let obj = {};
          for(let item of inputs){
            let key = item.getAttribute("name");
            //obj[key] = item.value;
            item.value = jsonData[key];
          }
          
        });
    })

    

  });

  function renderTable(jsonData){
    //DATA table
    // var jsonData = JSON.parse('@json($publications)');
    var dataSet = [];
    jsonData.forEach(function(element,index){
      var d = new Date(element.year, element.month-1, element.date);
      moment.locale('th');
      d = moment(d).format('YYYY/MM/DD');
      var a = [
        d,
        element.authors,
        "<a href='javascript:void(0)' onclick='show("+element.id+")'>"+element.title+"</a>",
        element.publisher + " หน้าที่ " + element.pages + " ["+ element.language + " " + element.type +"]",
        element.place?element.place:"" + " " + element.city?element.city:"",
        // element.language + " " + element.type,
        // "<a href='#' onclick='onDelete("+element.id+")' class='text-danger'><i class='fa fa-trash-alt'></i></a>"
      ];
      dataSet.push(a);
    });

    $('#table-publication').DataTable( {
        data: dataSet,
        paging : false,
        columns: [
            { title: "date" },
            { title: "authors" },
            { title: "title" },
            { title: "publisher" },
            // { title: "city" },
            { title: "place" },
            // { title: "pages" },
            // { title: "type" },
            // { title: "action" },
        ]
    } ).order( [ 0, 'desc' ] ).draw();
  }

  function renderList(jsonData){
    jsonData = jsonData.sort((a, b) => new Date(b.year, b.month-1, b.date) - new Date(a.year, a.month-1, a.date) )

    let list_m = ["มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม"];
    let list_mL = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    let list_mS = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
    let ul = document.querySelector("#list");
    jsonData.forEach(function(row,index){
      let text = "";
      if( row.type == "Conference" )  {
        text += row.authors + ". " 
        text += "(" + (row.language == "National" ? (row.year + 543 ) : row.year) + "). "
        text += row.title + ". " 
        text += (row.language === "National") ? "ในเอกสารสืบเนื่อง" : " In Proceedings of "        
        text += row.publisher + ". " 
        text += row.date + " "
        text += (row.language === "National") ? list_m[row.month-1] : list_mL[row.month-1] 
        text += (row.language === "National") ? (row.year + 543 ) : row.year
        text += " (" + row.pages + "). " 
        text += row.city + " : " + row.place
      }else if( row.type == "Journal" ) {
        text += row.authors+". "  
        text += "(" + (row.language == "National" ? (row.year + 543 ) : row.year) + "). "
        text += row.title + ". " 
        text += row.publisher + " : " 
        text += "(" + row.pages + "). " 
      }
      
      let li = document.createElement("li");
      li.innerHTML = text;
      ul.appendChild(li);
    });
    
  }

  // function onDelete(id)
  // {
  //   //GET FORM BY ID
  //   var form = document.querySelector("#form_delete");
  //   //SUBMIT
  //   var want_to_delete = confirm('Are you sure to delete this item?');
  //   if(want_to_delete)
  //   {
  //     //CHANGE ACTION TO SPECIFY ID
  //     form.action = "{{ url('/') }}/publication/"+id;
  //     form.submit();
  //   }
  // }
  
  function show(id){
    console.log("show : ", id);
    document.querySelector("#id").value = id;
    $('#editModal').modal('show')
  }

</script>

<!-- end content --> 
<?php include("layouts/footer.php") ?>  