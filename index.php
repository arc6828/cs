<?php include("layouts/header.php") ?>

<?php include("layouts/slider.php") ?>
<style>
    .carousel {
        position: relative;
        width: 1500px;
        height: 300px;
        left: 50px;
        top: 20px;
        text-align: center;
    }

    .carousel-control-next {
        top: 20px;
        left: 600px;
    }

    .carousel-control-prev {
        top: 20px;
        left: -60px;
    }

    /* .col-lg-3,
    li {
        text-align: center;
    } */

    /*
    //Extra small devices (portrait phones, less than 576px)
    // No media query for `xs` since this is the default in Bootstrap
    */
    .site-blocks-cover,
    .site-block-wrap {
        min-height: 0px;
        height: calc(23vh);
    }

    /*
    // Small devices (landscape phones, 576px and up)
    */
    @media (min-width: 576px) {

        .site-blocks-cover,
        .site-block-wrap {
            min-height: 0px;
            height: calc(26vh);
        }
    }

    /*
    // Medium devices (tablets, 768px and up)
    */
    @media (min-width: 768px) {

        .site-blocks-cover,
        .site-block-wrap {
            min-height: 0px;
            height: calc(30vh);
        }
    }

    /*
    // Large devices (desktops, 992px and up)
    */
    @media (min-width: 992px) {

        .site-blocks-cover,
        .site-block-wrap {
            min-height: 0px;
            height: calc(60vh);
        }
    }

    /*
    // Extra large devices (large desktops, 1200px and up)
    */
    @media (min-width: 1200px) {

        .site-blocks-cover,
        .site-block-wrap {
            min-height: 0px;
            height: calc(80vh);
        }

    }

    /* iframe[Attributes Style] {
        width: 200px;
        height: 500px;
        border-top-width: 0px;
        border-right-width: 0px;
        border-bottom-width: 0px;
        border-left-width: 0px;
    } */
    .img {
        width: 180px;
        height: 500px;
        border-style: solid !important;
    }

    .text-center {
        text-align: center !important;

    }

    img {
        vertical-align: middle;
        border-style: none;
    }

    /*
    .row2 {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right:0;
        margin-left:0;      

    }
    
    */
    .with-dots .owl-dots {
        margin-top: 0px;
        margin-bottom: 0px;
        /*text-align: center;
        position: absolute;*/
        bottom: 40px;
        /*width: 100%;*/
    }

    .site-blocks-cover.overlay:before {
        background: rgba(0, 0, 0, 0) !important;
    }

    .site-blocks-cover.overlay-2:after {
        background: rgba(0, 0, 0, 0) !important;
    }
</style>
<!-- start slide -->
<div class="container-fluid py-5 bg-light">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-8">
                        <img class="img-thumbnail" src="images/tcas/pr-2020-05-14.jpg" style="width:100%;">
                    </div>
                    <div class="col-lg-4 py-4">
                        <h5 class="mt-0 mb-2">รับสมัครนักศึกษา (ปริญญาตรีภาคจันทร์-ศุกร์ และภาคเสาร์-อาทิตย์)</h5>
                        <p class="py-2">
                            หลักสูตรวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์
                            รับสมัครนักศึกษา TCAS 68 (ปริญญาตรี จันทร์-ศุกร์ และภาคเสาร์-อาทิตย์) ตั้งแต่วันนี้เป็นต้นไป
                            ดูรายละเอียดและกรอกใบสมัครได้ที่นี่
                        </p>
                        <div class="text-center">
                            <a class="btn btn-primary" href="tcas.php">สมัครเรียน</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-9">
            

            <div class="mt-4" style="padding-top: 20px;">
                <h4>Quick Links</h4>
                <div class="text-center">
                    <a href="http://cms.vru.ac.th/login.aspx">
                        <img src="images/CMS.jpg" width="250" height="70" style="margin-top:3px;">
                    </a>
                    <a href="http://reg1.vru.ac.th/">
                        <img src="images/Grade.jpg" width="250" height="70" style="margin-top:20px;">
                    </a>
                    <a href="http://reg3.vru.ac.th/acad_mka/">
                        <img src="images/TQF.jpg" width="250" height="70" style="margin-top:3px;">
                    </a>
                    <a href="https://goo.gl/forms/59Nz2gnBpnc9QSEX2">
                        <img src="images/fromfix.jpg" width="250" height="70" style="margin-top:3px;">
                    </a>
                    <a href="https://forms.gle/5tiPTzzFoivjKCNV6">
                        <img src="images/123.jpg" style="margin-top:3px;">
                    </a>
                    <a href="https://forms.gle/7StYDzL6H2esgBi1A">
                        <img src="images/Network.jpg" style="margin-top:3px;">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 text-center">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title">ชื่อปริญญา</h5>
                </div>
                <div class="card-body prompt">
                    <p class="card-text">
                        วิทยาศาสตรบัณฑิต (วท.บ.) <br />(วิทยาการคอมพิวเตอร์)
                    </p>
                    <p class="card-text">
                        Bachelor of Science (B.Sc.) <br />(Computer Science)
                    </p>
                    <p class="card-text">
                        <a href="structure.php" class="btn btn-primary">รายละเอียดหลักสูตร</a>
                    </p>
                </div>
            </div>
            <div class="card mb-4">
                <!-- <div class="card-header">
                    <h5 class="card-title">ค่าเทอม</h5>
                </div> -->
                <div class="card-body">
                <h5 class="card-title">ค่าเทอม</h5>
                    <p class="card-text prompt">
                    <h3 class="fs-1">12,000 บาท</h3>
                    </p>
                </div>
            </div>
            <div class="card mb-4">
                <!-- <div class="card-header">
                    <h5 class="card-title">ประธานหลักสูตร</h5>
                </div> -->
                <img class="card-img-top" src="images/Teacher/Nattira.jpg"/>
                <div class="card-body">                    
                    <div><label>ผศ.ณัฏฐิรา ศุขไพบูลย์</label></div>
                    <div><label>ประธานหลักสูตร</label></div>

                </div>
            </div>
        </div>
    </div>

    <br />
    <br />



</div>
<!-- Technology Stack -->
<?php include("layouts/technology-stack.php") ?>

<!-- ติดตามข่าวสารได้ที่นี่ -->
<?php include("layouts/group-line-qr.php") ?>

<!-- end content -->

<?php include("layouts/footer.php") ?>