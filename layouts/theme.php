<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $og_title = isset($og_title) ? $og_title : "หลักสูตรวิทยาการคอมพิวเตอร์ | มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์ ";  
    $og_author = isset($og_author) ? $og_author : 'หลักสูตรวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์';
    $og_url = isset($og_url) ? $og_url : "http://cs.vru.ac.th";
    $og_type = isset($og_type) ? $og_type : "article";
    $og_description = isset($og_description) ? $og_description : "หลักสูตรวิทยาการคอมพิวเตอร์ ผลิตบัณฑิตจิตอาสา งานวิจัยสร้างสรรค์ และบริการชุมชนด้วยความรู้และนวัตกรรม";
    $og_image = isset($og_image) ? $og_image : "http://cs.vru.ac.th/images/logo5.png";
    $og_keywords = isset($og_keywords) ? $og_keywords : 'เรียนวิทยาการคอมพิวเตอร์, วิทยาการคอมพิวเตอร์, วิทยาการคอมพิวเตอร์ราชภัฏวไลยอลงกรณ์, เรียนตอมพิวเตอร์, ปริญญาตรีวิทยาการคอมพิวเตอร์, เรียนเสาร์อาทิตย์, เรียนจันทร์ศุกร์, สาขาวิทยาการคอมพิวเตอร์, วิทยาการคอมพิวเตอร์ ปทุมธานี, วิทยาการคอมพิวเตอร์ TCAS';
    
    ?>
    
    <title><?php echo $og_title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="<?php echo $og_title; ?>" />
    <meta name="author" content="<?php echo $og_author; ?>">    
    <meta name="description" content="<?php echo $og_description; ?>">
    <meta name="keywords" content="<?php echo $og_keywords; ?>">
    <link rel="canonical" href="<?php echo $og_url; ?>" />

    <!-- Open Graph / Facebook -->
    <meta property="og:url" content="<?php echo $og_url; ?>" />
    <meta property="og:type" content="<?php echo $og_type; ?>" />
    <meta property="og:title" content="<?php echo $og_title; ?>" />
    <meta property="og:description" content="<?php echo $og_description; ?>" />
    <meta property="og:image" content="<?php echo $og_image; ?>" />
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="<?php echo $og_url; ?>" />
    <meta property="twitter:title" content="<?php echo $og_title; ?>" />
    <meta property="twitter:description" content="<?php echo $og_description; ?>" />
    <meta property="twitter:image" content="<?php echo $og_image; ?>" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900|Oswald:300,400,700" rel="stylesheet">
    <!--link href="https://fonts.googleapis.com/css2?family=Kanit:ital@1&display=swap" rel="stylesheet"-->
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <!--link rel="stylesheet" href="css/bootstrap.min.css"-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--link rel="stylesheet" href="css/jquery-ui.css"-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <!--link rel="stylesheet" href="css/owl.carousel.min.css"-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!--link rel="stylesheet" href="css/owl.theme.default.min.css"-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!--link rel="stylesheet" href="css/jquery.fancybox.min.css"-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <!--link rel="stylesheet" href="css/bootstrap-datepicker.css"-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <!--link rel="stylesheet" href="css/aos.css"-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/brands.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="stylesheet" href="css/style.css">
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        nav,
        .nav,
        .menu,
        button,
        .button,
        .btn,
        .price,
        .prompt,
        ._heading,
        .wp-block-pullquote blockquote,
        blockquote,
        label,
        legend,
        a,
        .card-header,
        th,
        li {
            font-family: "Prompt", "Open Sans script=all rev=1" !important;
            font-weight: 500 !important;

        }

        .site-footer {
            padding: 4em !important;
            background: #333333 !important;
            /*height:300px !important;*/
        }

        .site-navbar {
            margin-bottom: 0px;
            z-index: 1999;
            position: absolute;
            width: 100%;
            padding: 4px !important;
            text-align: center !important;


        }

        .d-block {
            display: block !important;
            width: 50% !important;
        }

        .site-navbar .site-navigation .site-menu>li>a {
            padding: 0 !important;
            /*color: rgba(255, 255, 255, 0.5);*/
            display: inline-block;
            text-decoration: none !important;
        }

        .site-menu>.nav-link {
            padding: 1.5rem 0.5rem;
        }

        .sticky-wrapper .site-navbar {
            background: #fff;
            border-bottom: 1px solid transparent;
            -webkit-box-shadow: 4px 0 20px -5px rgba(0, 0, 0, 0.2);
            box-shadow: 4px 0 20px -5px rgba(0, 0, 0, 0.2);
        }

        .site-navbar .site-navigation .site-menu>li>a {
            color: black;

        }

        .site-navbar .site-navigation .site-menu>li>a:hover {
            color: purple;
        }

        .sticky-wrapper .site-navbar ul li a {
            color: black;
        }

        .sticky-wrapper .site-navbar ul li a:hover {
            color: purple;
        }

        .content {
            padding-top: 90px;
            padding-bottom: 90px;
        }

        body {
            line-height: 1.7;
            color: #333;
            font-weight: 400;
            font-size: 1rem;

        }

        .anchor {
            padding-top: 150px;
            margin-top: -150px;
        }
    </style>
    <link rel="icon" href="images/css.png">
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
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
                <div class="col-10 col-md-10 col-lg-10 col-xl-4">
                    <div class="site-logo">
                        <a href="index.php" class="text-left">
                            <div class="" style="display: flex; flex-direction:row;">
                                <img class="d-lg-block d-md-none d-sm-none d-none my-1" src="images/css.png" height="70">
                                <div class="d-lg-block" style="line-height: 0.3;   padding-top: 18px;     padding-left: 10px;">
                                    <h1 style="margin-bottom:0px; font-size: 0.8em;" class="text-dark">วิทยาการคอมพิวเตอร์</h1>
                                    <small class="" style="font-size: 0.35em; color:#777;">มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์</small>
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
                                <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    เกี่ยวกับหลักสูตร
                                </a>
                                <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                                    <a class="dropdown-item" href="history.php">ประวัติหลักสูตร</a>
                                    <a class="dropdown-item" href="structure.php">โครงสร้างหลักสูตร</a>
                                    <a class="dropdown-item" href="Description.php">รายละเอียดหลักสูตร</a>
                                    <a class="dropdown-item" href="Management.php">โครงสร้างบริหารหลักสูตร</a>
                                    <a class="dropdown-item" href="policy.php">นโยบายด้านคุณภาพ</a>
                                    <a class="dropdown-item" href="philosophy.php">ปรัชญา วิสัยทัศน์ พันธกิจ</a>                                    
                                    <a class="dropdown-item" href="LAB.php">ห้องปฏิบัติการคอมพิวเตอร์</a>
                                </div>
                            </li>
                            <li class="nav-link dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="teamDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    อาจารย์และบุคลากร
                                </a>
                                <div class="dropdown-menu dropright" aria-labelledby="teamDropdown">
                                    <a class="dropdown-item" href="teacher.php">อาจารย์ประจำหลักสูตร</a>
                                    <a class="dropdown-item" href="support.php">บุคลากรประจำหลักสูตร</a>
                                    <a class="dropdown-item" href="publication.php">ผลงานตีพิมพ์ของหลักสูตร</a>
                                    <a class="dropdown-item" href="Training.php">แจ้งการอบรมพัฒนาความรู้</a>
                                    <a class="dropdown-item" href="staff.php">ระเบียบแบบฟอร์มสำหรับอาจารย์และเจ้าหน้าที่</a>
                                    <a class="dropdown-item dropdown-toggle" href="#" id="qaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ประกันคุณภาพหลักสูตร</a>
                                    <ul class="dropdown-menu dropdown" aria-labelledby="qaDropdown">
                                        <li><a class="dropdown-item" href="http://www.cheqa.mua.go.th/">CHE QA 3D ONLINE SYSTEM</a></li>
                                        <li><a class="dropdown-item" href="report.php">รายงานการประกันคุณภาพการศึกษา</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-link dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="studentDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    นักศึกษา
                                </a>
                                <div class="dropdown-menu" aria-labelledby="studentDropdown">
                                    <a class="dropdown-item" href="tcas.php">รับสมัครนักศึกษาใหม่</a>
                                    <a class="dropdown-item" href="Student Guide.php">คู่มือนักศึกษา</a>
                                    <a class="dropdown-item" href="Project Guide.php">คู่มือโครงงานนักศึกษา</a>
                                    <a class="dropdown-item" href="Internship location.php">สถานที่ฝึกสหกิจ</a>
                                    <a class="dropdown-item" href="Internship documents.php">เอกสารฝึกงาน</a>
                                    <a class="dropdown-item" href="recommended.php">แจ้งข้อเสนอแนะ/ร้องเรียน</a>
                                </div>
                            </li>                            
                            <li class="nav-link">
                                <a class="nav-link" href="content">บทความ</a>
                            </li>
                            <!-- <li class="nav-link dropdown ">
                                <a class="nav-link dropdown-toggle" href="#" id="othersDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    อื่นๆ
                                </a>
                                <div class="dropdown-menu dropright" aria-labelledby="othersDropdown">
                                    <a class="dropdown-item " href="activities.php">กิจกรรมหลักสูตร</a>

                                    <a class="dropdown-item dropdown-toggle" href="#" id="supportDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">สิ่งสนับสนุนการเรียนรู้</a>
                                    <ul class="dropdown-menu dropdown" aria-labelledby="supportDropdown">
                                        <li><a class="dropdown-item" href="LAB.php">ห้องปฏิบัติการคอมพิวเตอร์</a></li>
                                        <li><a class="dropdown-item" href="roomtable.php">ตารางการใช้ห้องปฏิบัติการคอมพิวเตอร์</a></li>
                                        <li><a class="dropdown-item" href="equipment.php">อุปกรณ์</a></li>
                                    </ul>

                                </div>
                            </li> -->
                            <li class="nav-link ">
                                <a class="nav-link" href="contact.php">ติดต่อเรา</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-2 col-md-2 d-l-block d-inline-block d-xl-none ml-md-0 py-3">
                    <a href="#" class="site-menu-toggle js-menu-toggle text-dark float-right"><span class="icon-menu h3"></span></a>
                </div>
            </div>

        </div>
    </header>
    <!-- start of content , see end in footer -->
    <div class="content">
    </div>
    <!-- end of content, see start in header -->
    <style>
      .site-footer,
      .footer-heading,
      .site-footer .p {
        font-size: 16px;
        text-align: center !important;
        background: #8e24aa !important;
        /*color: #fff!important;*/
      }

      .site-footer p,
      .site-footer a {
        color: #bbb !important;
      }

      .site-footer .border-top {
        border-top: 1px solid #bbb !important;
      }

      .site-footer {
        padding: 0 !important;
        padding-top: 4em !important;
        padding-bottom: 4em !important;

      }
    </style>
    <div class="container-fluid bg-light  p-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 pl-4">
            <h3>สมัครเรียนกับเรา</h3>
            <h5 id="schedule">สอบถามข้อมูลการรับสมัครเพิ่มเติม</h5>
            <p>โทร. 02-909-1432 ต่อ 14</p>
          </div>
          <div class="col-md-6 text-right">
            <div class="py-4">
              <a class="btn btn-primary" href="tcas.php">รายะละเอียดสมัครเรียน</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="site-footer">
      <div class="container">

        <div class="row">
          <div class="col-md-4 mx-auto">
            <h2 class="footer-heading mb-4 d-none">ติดต่อเรา</h2>
            <img class="img-thumbnail rounded-circle mb-4" src="images/css.png" style="width:70px; height:70px;" />
            <p>
              หลักสูตรวิทยาการคอมพิวเตอร์ <br>
              คณะวิทยาศาสตร์และเทคโนโลยี <br>
              อาคาร 75 ปี วไลยอลงกรณ์ <br>
              โทรศัพท์ 0-2529-0674-7 ต่อ 365 <br>
              โทรสาร 02-909-3029
            </p>
          </div>

          <div class="col-md-4 mx-auto">
            <h2 class="footer-heading mb-4">Quick Links</h2>
            <ul class="list-unstyled">
              <li><a href="teacher.php">อาจารย์</a></li>
              <li><a href="support.php">บุคคลากร</a></li>
              <li><a href="#">งานวิจัยและพัฒนา</a></li>
              <li><a href="tcas.php">รับสมัครนักศึกษา</a></li>
              <li><a href="content">บทความ</a></li>
              <li><a href="contact.php">ติดต่อเรา</a></li>
            </ul>
          </div>

          <div class="col-md-4 mx-auto">
            <h2 class="footer-heading mb-4">Follow Us</h2>
            <a href="https://www.facebook.com/cs.vru.ac.th" target="_blank" style="background-color: #1E88E5; font-size:20px;" class="btn px-3 py-1 text-white" >
              <i class="bi bi-facebook text-white" ></i> <span class="text-white">ติดตามเรา</span>
            </a>
            <a href="#" class="pl-3 pr-3 d-none"><span class=" icon-line"></span></a>
            <a href="#" class="pl-3 pr-3 d-none"><span class="icon-instagram"></span></a>
            <a href="#" class="pl-3 pr-3 d-none"><span class="icon-linkedin"></span></a>

            <div class="fb-page" data-href="https://www.facebook.com/cs.vru.ac.th" data-width="290" data-hide-cover="false" data-show-facepile="false">
            </div>

            <div class="mt-4 d-none">
              <a class="mt-4" href="https://lin.ee/eYhAn4Y"><img src="https://scdn.line-apps.com/n/line_add_friends/btn/th.png" alt="เพิ่มเพื่อน" height="36" border="0"></a>
            </div>
          </div>


        </div>

        <div class="row pt-4 mt-4 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p class="copyright">
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script>
                หลักสูตรวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี <br>
                มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์ เลขที่ 1 หมู่ 20 ต.คลองหนึ่ง อ.คลองหลวง จ.ปทุมธานี 13180
              </p>
            </div>
          </div>
        </div>

      </div>
    </footer>
    <!-- Cookie Consent by https://www.cookiewow.com -->
    <!-- <script type="text/javascript" src="https://cookiecdn.com/cwc.js"></script>
    <script id="cookieWow" type="text/javascript" src="https://cookiecdn.com/configs/K3VSC9aVmgw2NmDbj3aosHyc" data-cwcid="K3VSC9aVmgw2NmDbj3aosHyc"></script> -->

    <!--script src="js/jquery-3.3.1.min.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--script src="js/jquery-ui.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!--script src="js/popper.min.js"></script-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!--script src="js/bootstrap.min.js"></script-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!--script src="js/owl.carousel.min.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!--script src="js/jquery.countdown.min.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
    <!--script src="js/bootstrap-datepicker.min.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <!--script src="js/jquery.easing.1.3.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!--script src="js/aos.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!--script src="js/jquery.fancybox.min.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <!--script src="js/jquery.sticky.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/brands.min.js"></script>

    <!--script src="https://kit.fontawesome.com/d59a8a2721.js"></script-->
    <!--script src="js/main.js"></script-->
    <?php include("layouts/main-js.php"); ?>

    <!-- Load Facebook SDK for JavaScript -->
    <?php if (true) { ?>
      <div style="position: fixed; bottom: 30px; right:30px; z-index: 1020; ">
        <a href="https://m.me/cs.vru.ac.th" target="_blank" title="Chat with us on Messenger" >
          <div style="border-radius: 50%; background-color: #1E88E5; width:70px; height:70px; display:flex; justify-content: center; align-items: center;">
            <i class="bi bi-messenger my-0 mx-0 text-white" style="font-size:35px; "></i>
          </div>
        </a>
      </div>
    <?php } ?>

    <script>
      $(document).ready(function() {
        //$('a.sub-menu').dropdown();
        /*
        $('a.sub-menu').on("click", function(e){
            
            //$(this).next('ul').toggle();
            //e.stopPropagation();
            //e.preventDefault();
            
        });*/
      });
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NXZ2L917CN"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'G-NXZ2L917CN');
    </script>

    </body>

    </html>