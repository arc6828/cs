<?php
$og_url = "https://cs.vru.ac.th/publication.php";
$og_type = "article";
$og_title = "CS Publications ผลงานตีพิมพ์และงานวิจัย | วิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์";
$og_description = "รวบรวมผลงานวิจัยและบทความวิชาการที่ได้รับการตีพิมพ์เผยแพร่ระดับชาติและนานาชาติของคณาจารย์และนักศึกษา หลักสูตรวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์";
$og_image = "https://cs.vru.ac.th/images/online-exmaination-system.png";
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <?php include("layouts/meta.php"); ?>
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" defer></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" defer></script>
    <script src="https://momentjs.com/downloads/moment-with-locales.min.js" defer></script>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php include("layouts/navbar.php"); ?>

    <div class="content">
        <div class="container py-4">
            <div class="row mb-4">
                <div class="offset-lg-3 col-lg-6 offset-md-2 col-md-8 col-sm-12">
                    <img src="images/online-exmaination-system.png" width="100%" alt="ผลงานตีพิมพ์และงานวิจัย หลักสูตรวิทยาการคอมพิวเตอร์ VRU">
                </div>
            </div>
            <h1 class="text-center" id="title">CS Publications</h1>
            <h2 class="h5 mb-4 text-center">
                รวมผลงานที่ได้รับการตีพิมพ์เผยแพร่ต่อสาธารณะของหลักสูตรวิทยาการคอมพิวเตอร์<br>
                มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์
            </h2>
            <div class="text-center py-4">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#createModal">
                    สร้าง Publication ใหม่
                </button>
            </div>

            <div class="card mb-4">
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
                        <div class="tab-pane fade show active" id="table" role="tabpanel" aria-labelledby="home-tab">
                            <div class="table-responsive mt-3">
                                <table id="table-publication" class="table table-striped table-bordered table-sm"></table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="bullet" role="tabpanel" aria-labelledby="profile-tab">
                            <ul class="mt-3" id="list"></ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h2 class="h6 mb-0">ข้อเสนอแนะ</h2>
                </div>
                <div class="card-body text-center">
                    <p>ทุกคำแนะนำของท่านเราจะนำพัฒนาบริการของเราให้ดีขึ้น ขอขอบคุณสำหรับทุกคำแนะนำ</p>
                    <a class="btn btn-success" href="https://goo.gl/forms/IFFEmw0jO1UMMP602" target="_blank" rel="noopener">กรอกข้อเสนอแนะ</a>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            document.addEventListener("DOMContentLoaded", function(event) {
                fetch('https://www.ckartisan.com/api/publication')
                    .then(response => response.json())
                    .then(jsonData => {
                        renderTable(jsonData);
                        renderList(jsonData);
                    });

                $('#editModal').on('shown.bs.modal', function(e) {
                    let chosen = document.querySelector("#id");
                    fetch('https://www.ckartisan.com/api/publication/' + chosen.value)
                        .then(response => response.json())
                        .then(jsonData => {
                            let inputs = document.forms["form_edit"].querySelectorAll("#form_edit input, #form_edit select");
                            for (let item of inputs) {
                                let key = item.getAttribute("name");
                                item.value = jsonData[key];
                            }
                        });
                });
            });

            function renderTable(jsonData) {
                var dataSet = [];
                jsonData.forEach(function(element, index) {
                    var d = new Date(element.year, element.month - 1, element.date);
                    moment.locale('th');
                    d = moment(d).format('YYYY/MM/DD');
                    var a = [
                        d,
                        element.authors,
                        "<a href='javascript:void(0)' onclick='show(" + element.id + ")'>" + element.title + "</a>",
                        element.publisher + " หน้าที่ " + element.pages + " [" + element.language + " " + element.type + "]",
                        element.place ? element.place : "" + " " + element.city ? element.city : "",
                    ];
                    dataSet.push(a);
                });

                $('#table-publication').DataTable({
                    data: dataSet,
                    paging: false,
                    columns: [
                        { title: "date" },
                        { title: "authors" },
                        { title: "title" },
                        { title: "publisher" },
                        { title: "place" },
                    ]
                }).order([0, 'desc']).draw();
            }

            function renderList(jsonData) {
                jsonData = jsonData.sort((a, b) => new Date(b.year, b.month - 1, b.date) - new Date(a.year, a.month - 1, a.date));

                let list_m = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];
                let list_mL = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                let ul = document.querySelector("#list");
                jsonData.forEach(function(row, index) {
                    let text = "";
                    if (row.type == "Conference") {
                        text += row.authors + ". ";
                        text += "(" + (row.language == "National" ? (row.year + 543) : row.year) + "). ";
                        text += row.title + ". ";
                        text += (row.language === "National") ? "ในเอกสารสืบเนื่อง" : " In Proceedings of ";
                        text += row.publisher + ". ";
                        text += row.date + " ";
                        text += (row.language === "National") ? list_m[row.month - 1] : list_mL[row.month - 1];
                        text += (row.language === "National") ? (row.year + 543) : row.year;
                        text += " (" + row.pages + "). ";
                        text += row.city + " : " + row.place;
                    } else if (row.type == "Journal") {
                        text += row.authors + ". ";
                        text += "(" + (row.language == "National" ? (row.year + 543) : row.year) + "). ";
                        text += row.title + ". ";
                        text += row.publisher + " : ";
                        text += "(" + row.pages + "). ";
                    }

                    let li = document.createElement("li");
                    li.innerHTML = text;
                    ul.appendChild(li);
                });
            }

            function show(id) {
                document.querySelector("#id").value = id;
                $('#editModal').modal('show');
            }
        </script>

        <!-- Modal Create -->
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title h5" id="createModalLabel">สร้าง</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/publication" method="POST" id="form_create" onsubmit="return submitCreate()">
                            <?php include('publication-form.php'); ?>
                            <div class="form-group row">
                                <div class="col-sm-12 text-center">
                                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                        <script>
                            function submitCreate() {
                                let inputs = document.forms["form_create"].querySelectorAll("#form_create input, #form_create select");
                                let obj = {};
                                for (let item of inputs) {
                                    let key = item.getAttribute("name");
                                    obj[key] = item.value;
                                }
                                fetch('https://www.ckartisan.com/api/publication', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                    },
                                    body: JSON.stringify(obj)
                                })
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data) {
                                            location.reload(true);
                                        }
                                    });

                                return false;
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Edit -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title h5" id="editModalLabel">แก้ไข</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/publication" method="POST" id="form_edit" onsubmit="return submitEdit()">
                            <input type="hidden" name="id" id="id" value="">
                            <?php include('publication-form.php'); ?>
                            <div class="form-group row">
                                <div class="col-sm-12 text-center">
                                    <button type="button" class="btn btn-outline-danger float-left" onclick="delete2()" title="ลบ item นี้"><i class="fa fa-trash"></i></button>
                                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                        <script>
                            function submitEdit() {
                                let inputs = document.forms["form_edit"].querySelectorAll("#form_edit input, #form_edit select");
                                let chosen = document.querySelector("#id");
                                let obj = {};
                                for (let item of inputs) {
                                    let key = item.getAttribute("name");
                                    obj[key] = item.value;
                                }
                                fetch('https://www.ckartisan.com/api/publication/' + chosen.value, {
                                    method: 'PUT',
                                    headers: {
                                        'Content-Type': 'application/json',
                                    },
                                    body: JSON.stringify(obj)
                                })
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data) {
                                            location.reload(true);
                                        }
                                    });

                                return false;
                            }

                            function delete2() {
                                let confirmed = confirm('Do you really want to delete this item?');
                                if (confirmed) {
                                    let chosen = document.querySelector("#id");
                                    fetch('https://www.ckartisan.com/api/publication/' + chosen.value, {
                                        method: 'DELETE',
                                        headers: {
                                            'Content-Type': 'application/json',
                                        },
                                    })
                                        .then(response => response.json())
                                        .then(data => {
                                            if (data) {
                                                location.reload(true);
                                            }
                                        });
                                }
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>
</body>

</html>
