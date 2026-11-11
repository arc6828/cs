<?php
$og_title = "โครงสร้างหลักสูตรวิทยาการคอมพิวเตอร์ (พ.ศ. 2560) | มรภ.วไลยอลงกรณ์ (VRU)";
$og_description = "โครงสร้างหลักสูตรและรายวิชา หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์ (หลักสูตรปรับปรุง พ.ศ. 2560) มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์";
$og_url = "https://cs.vru.ac.th/structure-60.php";
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <?php include("layouts/meta.php"); ?>
    <style>
        .page-header-modern {
            border-left: 5px solid #007bff;
            padding-left: 1.25rem;
        }

        /* High contrast typography & Dark Gray styling */
        body, .content {
            color: #212529 !important;
        }

        .text-dark-gray {
            color: #343a40 !important;
        }

        .text-muted, .text-secondary {
            color: #495057 !important;
        }

        .version-switcher-bar {
            background: #ffffff;
            border: 1px solid #ced4da;
            border-radius: 12px;
            padding: 0.85rem 1rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
            margin-bottom: 1.5rem;
        }

        .version-pill {
            display: inline-flex;
            align-items: center;
            padding: 0.55rem 1.15rem;
            border-radius: 50rem;
            font-size: 0.95rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s ease;
            margin-right: 0.5rem;
            margin-bottom: 0.4rem;
        }

        .version-pill.active {
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            color: #ffffff !important;
            box-shadow: 0 4px 10px rgba(0, 123, 255, 0.3);
        }

        .version-pill.inactive {
            background-color: #f1f3f5;
            color: #343a40;
            border: 1px solid #dee2e6;
        }

        .version-pill.inactive:hover {
            background-color: #e2e6ea;
            color: #007bff;
            text-decoration: none;
        }

        table p {
            margin-bottom: 0;
            color: #212529;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php include("layouts/navbar.php"); ?>

    <div class="content">
        <div class="container py-4">

            <!-- Breadcrumb Navigation -->
            <nav aria-label="breadcrumb" class="mb-3">
                <ol class="breadcrumb bg-light py-2 px-3 rounded">
                    <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i> หน้าแรก</a></li>
                    <li class="breadcrumb-item"><a href="structure.php">โครงสร้างหลักสูตร</a></li>
                    <li class="breadcrumb-item active" aria-current="page">หลักสูตร พ.ศ. 2560</li>
                </ol>
            </nav>

            <!-- Page Header -->
            <div class="page-header-modern mb-3">
                <h1 class="h2 font-weight-bold text-dark mb-1">
                    <i class="fa fa-archive text-secondary mr-2"></i>โครงสร้างหลักสูตร พ.ศ. 2560 (ฉบับเดิม)
                </h1>
                <p class="text-dark-gray mb-0">
                    หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์ (หลักสูตรปรับปรุง พ.ศ. 2560) สำหรับศิษย์เก่าและใช้ในการอ้างอิงประวัติหลักสูตร
                </p>
            </div>

            <!-- Version Switcher Bar -->
            <div class="version-switcher-bar d-flex flex-wrap align-items-center justify-content-between mb-4">
                <div class="d-flex flex-wrap align-items-center">
                    <span class="text-dark-gray small font-weight-bold mr-3 my-1">
                        <i class="fa fa-history mr-1"></i> เลือกรุ่นหลักสูตร:
                    </span>
                    <a href="structure.php" class="version-pill inactive" title="หลักสูตรใหม่ล่าสุด พ.ศ. 2570 สำหรับผู้สนใจเข้าศึกษาใหม่">
                        <i class="fa fa-star text-warning mr-2"></i> หลักสูตรใหม่ พ.ศ. 2570 <span class="badge badge-success ml-2">124 นก. (ใหม่ล่าสุด)</span>
                    </a>
                    <a href="structure-65.php" class="version-pill inactive" title="สำหรับนักศึกษารหัส 65-69 ที่กำลังศึกษา">
                        <i class="fa fa-book mr-1"></i> หลักสูตร พ.ศ. 2565 <span class="badge badge-secondary ml-1">127 นก. (รหัส 65-69)</span>
                    </a>
                    <a href="structure-60.php" class="version-pill active" title="หลักสูตรเดิมสำหรับอ้างอิง">
                        <i class="fa fa-archive mr-1"></i> หลักสูตร พ.ศ. 2560 <span class="badge badge-light text-secondary ml-1">อ้างอิงประวัติ</span>
                    </a>
                </div>
                <div class="my-1">
                    <span class="badge badge-secondary px-3 py-2 font-weight-bold">
                        <i class="fa fa-folder-open mr-1"></i> เอกสารอ้างอิงประวัติศาสตร์
                    </span>
                </div>
            </div>

            <!-- Notice Callout -->
            <div class="alert alert-secondary border-0 shadow-sm rounded-lg d-flex align-items-center justify-content-between flex-wrap mb-4" role="alert">
                <div class="d-flex align-items-center mb-2 mb-md-0">
                    <i class="fa fa-info-circle mr-3" style="font-size: 1.5rem;"></i>
                    <div>
                        <strong class="text-dark">หลักสูตรนี้สิ้นสุดแผนการศึกษาแล้ว</strong>
                        <div class="small text-dark-gray">จัดแสดงไว้เพื่อการตรวจสอบคุณวุฒิ การเทียบโอน หรือการศึกษาค้นคว้าประวัติหลักสูตร</div>
                    </div>
                </div>
                <div>
                    <a href="structure.php" class="btn btn-sm btn-primary font-weight-bold shadow-sm mr-1">
                        <i class="fa fa-star mr-1"></i> ดูหลักสูตรใหม่ พ.ศ. 2570
                    </a>
                    <a href="structure-65.php" class="btn btn-sm btn-outline-dark font-weight-bold shadow-sm">
                        <i class="fa fa-book mr-1"></i> ดูหลักสูตร พ.ศ. 2565
                    </a>
                </div>
            </div>

            <!-- Original 2560 Table Content -->
            <div class="card border shadow-sm mb-4" style="border-radius: 12px; overflow: hidden; border-color: #ced4da !important;">
                <div class="card-body p-4">
                    <div class="table-responsive">
                        <?php include("layouts/cs-course60.php"); ?>
                    </div>
                </div>
            </div>

            <div class="text-center my-4">
                <a class="btn btn-outline-primary font-weight-bold" href="http://acad.vru.ac.th/about_acad/A/205.docx" target="_blank" rel="noopener">
                    <i class="fa fa-download mr-1"></i> ดาวน์โหลดรายละเอียดหลักสูตร พ.ศ. 2560 (DOCX)
                </a>
            </div>

        </div>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>
</body>

</html>
