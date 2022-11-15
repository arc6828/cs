<?php 
$og_url = "http://cs.vru.ac.th/publication.php";
$og_type = "article";
$og_title = "CS Publication ผลงานตีพิมพ์หลักสูตรวิทยาการคอมพิวเตอร์";
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


<!-- Modal Create -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createModalLabel">สร้าง</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('/') }}/publication" method="POST" id="form_create" onsubmit="return submitCreate()">
          
          <?php include('publication-form.php'); ?>
          <div class="form-group row">
            <div class="col-sm-12 text-center">
              <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
              <button class="btn btn-primary" type="submit">Save</button>
            </div>
          </div>
        </form>
        <script>
          function submitCreate(){
            console.log("CLICK");
            let inputs = document.forms["form_create"].querySelectorAll("#form_create input, #form_create select");
            console.log(inputs);
            let obj = {};
            for(let item of inputs){
              let key = item.getAttribute("name");
              obj[key] = item.value;
            }
            console.log("CLICK",obj);
            fetch('https://www.ckartisan.com/api/publication', {
              method: 'POST', // *GET, POST, PUT, DELETE, etc.
              //mode: 'cors', // no-cors, *cors, same-origin
              // cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
              // credentials: 'same-origin', // include, *same-origin, omit
              headers: {
                'Content-Type': 'application/json',  // 'Content-Type': 'application/x-www-form-urlencoded',
              },
              // redirect: 'follow', // manual, *follow, error
              //referrerPolicy: 'origin-when-cross-origin', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
              body: JSON.stringify(obj) // body data type must match "Content-Type" header
            })
              .then(response => response.json())
              .then(data => {
                console.log(data)
                if(data){
                  location.reload(true);
                }
              });
              
            return false;
          }
        </script>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>


<!-- Modal Edit -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">แก้ไข</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('/') }}/publication" method="POST" id="form_edit" onsubmit="return submitEdit()">
          <input type="hidden" name="id" id="id" value="">
          <?php include('publication-form.php'); ?>
          <div class="form-group row">
            <div class="col-sm-12 text-center">
              <button type="button" class="btn btn-outline-danger float-left" onclick="delete2()" title="ลบ item นี้"><i class="fa fa-trash"></i></button>
              <button type="button" class="btn btn-outline-primary" data-dismiss="modal" >Close</button>
              <button class="btn btn-primary" type="submit">Save</button>
            </div>
          </div>
        </form>
        <script>
          function submitEdit(){
            console.log("CLICK");
            let inputs = document.forms["form_edit"].querySelectorAll("#form_edit input, #form_edit select");
            let chosen = document.querySelector("#id");
            console.log(inputs);
            let obj = {};
            for(let item of inputs){
              let key = item.getAttribute("name");
              obj[key] = item.value;
            }
            console.log("CLICK",obj);
            fetch('https://www.ckartisan.com/api/publication/'+chosen.value, {
              method: 'PUT', // *GET, POST, PUT, DELETE, etc.
              //mode: 'cors', // no-cors, *cors, same-origin
              // cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
              // credentials: 'same-origin', // include, *same-origin, omit
              headers: {
                'Content-Type': 'application/json',  // 'Content-Type': 'application/x-www-form-urlencoded',
              },
              // redirect: 'follow', // manual, *follow, error
              //referrerPolicy: 'origin-when-cross-origin', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
              body: JSON.stringify(obj) // body data type must match "Content-Type" header
            })
              .then(response => response.json())
              .then(data => {
                console.log(data)
                if(data){
                  location.reload(true);
                }
              });
              
            return false;
          }
          function delete2(){
            let confirmed = confirm('Do you really want to delete this item?');
            if(confirmed){
              let chosen = document.querySelector("#id");
              fetch('https://www.ckartisan.com/api/publication/'+chosen.value, {
                method: 'DELETE', // *GET, POST, PUT, DELETE, etc.
                // mode: 'cors', // no-cors, *cors, same-origin
                // cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
                // credentials: 'same-origin', // include, *same-origin, omit
                headers: {
                  'Content-Type': 'application/json',  // 'Content-Type': 'application/x-www-form-urlencoded',
                },
                // redirect: 'follow', // manual, *follow, error
                // referrerPolicy: 'origin-when-cross-origin', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
                //body: JSON.stringify(obj) // body data type must match "Content-Type" header
              })
                .then(response => response.json())
                .then(data => {
                  console.log(data)
                  if(data){
                    location.reload(true);
                  }
                });

            }
            

          }
        </script>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>



<!-- end content --> 
<?php include("layouts/footer.php") ?>  