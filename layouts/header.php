<!DOCTYPE html>
<html lang="en">
<head>
    <title>หลักสูตรวิทยาการคอมพิวเตอร์</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900|Oswald:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        h1, h2, h3, h4, h5, h6, nav, .nav, .menu, button, .button, .btn, .price, ._heading, .wp-block-pullquote blockquote, blockquote, label, legend, a, .card-header, th ,p{
            font-family: "Prompt", "Open Sans script=all rev=1" !important;
            font-weight: 500 !important;
            
        }
        .site-footer {
            padding: 4em !important;
            background: #333333 !important;
            /*height:300px !important;*/
        }
        .site-navbar{
            margin-bottom: 0px;
            z-index: 1999;
            position: absolute;
            width: 100%;
            padding:4px !important;
            text-align: center !important;
        }
        .d-block {
            display: block!important;
            width: 50% !important;
        }
        .site-navbar .site-navigation .site-menu > li > a {
            padding: 0 !important;
            /*color: rgba(255, 255, 255, 0.5);*/
            display: inline-block;
            text-decoration: none !important;
        }
        
        .site-menu > .nav-link {
            padding: 1.5rem 0.5rem;
        }
        
        .sticky-wrapper .site-navbar {
            background: #fff;
            border-bottom: 1px solid transparent;
            -webkit-box-shadow: 4px 0 20px -5px rgba(0, 0, 0, 0.2);
            box-shadow: 4px 0 20px -5px rgba(0, 0, 0, 0.2);
        }
        .site-navbar .site-navigation .site-menu > li > a {
            color: black;

        }
        .site-navbar .site-navigation .site-menu > li > a:hover{
            color: purple;
        }
        .sticky-wrapper .site-navbar ul li a {
            color: black;
        }
        .sticky-wrapper .site-navbar ul li a:hover {
            color: purple;
        }
        .content{
            padding-top : 90px;
            padding-bottom : 90px;
        }
    </style>
    <link rel="icon" href="images/css.png" >
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
                <img class="m-4" src="images/css.png" height="70">  
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
    </div>
    <header class="site-navbar js-sticky-header site-navbar-target justify-content-center" role="banner">
        <div class="container ">
            <div class="row">    
            <div class="col-8 col-md-8 col-lg-4">
                <div class="site-logo">
                    <a href="index.php" class="text-left"> 
                        <div class="" style="display: flex; flex-direction:row;" >
                            <img class="d-lg-block d-md-none d-sm-none d-none my-1" src="images/css.png" height="70">  
                            <div class="d-lg-block" style="line-height: 0.3;   padding-top: 18px;     padding-left: 10px;">                        
                                <h1 style="margin-bottom:0px; font-size: 0.7em;" class="text-dark" >วิทยาการคอมพิวเตอร์</h1>
                                <small class="" style="font-size: 0.5em; color:#777;">มหาวิทยาลัยราชภัฏวไลยอลงกรณ์</small>
                            </div>                          
                        </div>
                    </a>
                </div>
            </div>
            <div class="d-none d-md-none col-lg-8 d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                    <li class="nav-link">
                        <a class="nav-link" href="index.php">หน้าหลัก</a>
                    </li>
                    <li class="nav-link dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        เกี่ยวกับหลักสูตร
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="history.php">ประวัติหลักสูตร</a>
                            <a class="dropdown-item" href="structure.php">โครงสร้างหลักสูตร</a>
                            <a class="dropdown-item" href="Description.php">รายละเอียดหลักสูตร</a>
                            <a class="dropdown-item" href="Management.php">โครงสร้างบริหารหลักสูตร</a>
                            <a class="dropdown-item" href="policy.php">นโยบายด้านคุณภาพ</a>
                            <a class="dropdown-item" href="philosophy.php">ปรัชญา วิสัยทัศน์ พันธกิจ</a>
                        </div>
                    </li>       
                    <li class="nav-link dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        อาจารย์และบุคลากร
                        </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="teacher.php">อาจารย์ประจำหลักสูตร</a>
                                <a class="dropdown-item" href="support.php">บุคลากรประจำหลักสูตร</a>
                                <a class="dropdown-item" href="Training.php">แจ้งการอบรมพัฒนาความรู้</a>
                                <a class="dropdown-item" href="staff.php">ระเบียบแบบฟอร์มสำหรับอาจารย์และเจ้าหน้าที่</a>
                            </div>
                    </li>
                    <li class="nav-link dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        นักศึกษา
                        </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="Student Guide.php">คู่มือนักศึกษา</a>
                                <a class="dropdown-item" href="Project Guide.php">คู่มือโครงงานนักศึกษา</a>
                                <a class="dropdown-item" href="Internship location.php">สถานที่ฝึกสหกิจ</a>
                                <a class="dropdown-item" href="Internship documents.php">เอกสารฝึกงาน</a>
                                <a class="dropdown-item" href="recommended.php">แจ้งข้อเสนอแนะ/ร้องเรียน</a>
                            </div>
                    </li>     
                    <li class="nav-link dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            อื่นๆ
                        </a>
                        <div class="dropdown-menu dropright" aria-labelledby="navbarDropdown">
                            <a class="nav-link" href="activities.php">กิจกรรมหลักสูตร</a>
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">สิ่งสนับสนุนการเรียนรู้</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="LAB.php">ห้องปฏิบัติการคอมพิวเตอร์</a>
                                    <a class="dropdown-item" href="roomtable.php">ตารางการใช้ห้องปฏิบัติการคอมพิวเตอร์</a>
                                    <a class="dropdown-item" href="equipment.php">อุปกรณ์</a>
                            </div>
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ประกันคุณภาพหลักสูตร</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="http://www.cheqa.mua.go.th/">CHE QA 3D ONLINE SYSTEM</a>
                                <a class="dropdown-item" href="report.php">รายงานการประกันคุณภาพการศึกษา</a>
                            </div>
                        </div>
                </li> 
                    <li class="nav-link dropdown">
                        <a class="nav-link" href="contact.php">ติดต่อเรา</a>
                    </li>
                    </ul>
                </nav>
            </div>
            <div class="col-4 col-md-4 d-inline-block d-xl-none ml-md-0 py-3">
                <a href="#" class="site-menu-toggle js-menu-toggle text-dark float-right"><span class="icon-menu h3"></span></a></div>
            </div>        
        </div>
    </header>
  