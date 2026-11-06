    <?php
    if (!isset($root_path)) {
        $req_path = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
        $root_path = (strpos($req_path, '/content/') !== false) ? '../' : '';
    }
    $current_path = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
    $default_url = "https://cs.vru.ac.th" . ($current_path && $current_path !== '/index.php' ? $current_path : '/');

    $og_title = isset($og_title) ? $og_title : "หลักสูตรวิทยาการคอมพิวเตอร์ | มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์";
    $og_author = isset($og_author) ? $og_author : 'หลักสูตรวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์';
    $og_url = isset($og_url) ? $og_url : $default_url;
    $og_type = isset($og_type) ? $og_type : "website";
    $og_description = isset($og_description) ? $og_description : "หลักสูตรวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ (VRU) ผลิตบัณฑิตจิตอาสา งานวิจัยสร้างสรรค์ และบริการชุมชนด้วยความรู้และนวัตกรรม ทั้งภาคปกติและเสาร์-อาทิตย์";
    $og_image = isset($og_image) ? $og_image : "https://cs.vru.ac.th/images/logo5.png";
    $og_keywords = isset($og_keywords) ? $og_keywords : 'เรียนวิทยาการคอมพิวเตอร์, วิทยาการคอมพิวเตอร์, วิทยาการคอมพิวเตอร์ราชภัฏวไลยอลงกรณ์, เรียนคอมพิวเตอร์, ปริญญาตรีวิทยาการคอมพิวเตอร์, เรียนเสาร์อาทิตย์, เรียนจันทร์ศุกร์, สาขาวิทยาการคอมพิวเตอร์, วิทยาการคอมพิวเตอร์ ปทุมธานี, วิทยาการคอมพิวเตอร์ TCAS';
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
    <link rel="stylesheet" href="<?php echo $root_path; ?>fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?php echo $root_path; ?>fonts/icomoon/style.css">
    <!--link rel="stylesheet" href="css/aos.css"-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/brands.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="<?php echo $root_path; ?>css/style.css">
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
    <link rel="icon" href="<?php echo $root_path; ?>images/css.png">

