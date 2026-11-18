<?php
/**
 * Internship & Cooperative Education Directory (ทำเนียบสถานที่ฝึกงานและสหกิจศึกษา)
 * หลักสูตรวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์
 * ข้อมูลดึงจากฐานข้อมูล: json/internship-places.json
 */
$og_title = "ทำเนียบสถานที่ฝึกงานและสหกิจศึกษา | วิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์";
$og_description = "รวบรวมรายชื่อหน่วยงาน องค์กรวิจัย บริษัทเทคโนโลยี และสถานประกอบการชั้นนำที่นักศึกษาวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ ไปฝึกประสบการณ์วิชาชีพและสหกิจศึกษา";
$og_url = "https://cs.vru.ac.th/internship-locations.php";
$og_image = "https://cs.vru.ac.th/images/banner_computer_science.png";

// Load partner places from JSON
$jsonPath = __DIR__ . '/json/internship-places.json';
$places = [];
if (file_exists($jsonPath)) {
    $raw = file_get_contents($jsonPath);
    $raw = preg_replace('/^\xEF\xBB\xBF/', '', $raw);
    $places = json_decode($raw, true) ?: [];
}

// Compute statistics
$totalPlaces = count($places);
$statResearch = count(array_filter($places, function($p) { return $p['category'] === 'research_gov'; }));
$statTech = count(array_filter($places, function($p) { return $p['category'] === 'tech_software'; }));
$statIndustry = count(array_filter($places, function($p) { return $p['category'] === 'industry_corp'; }));
$statHospital = count(array_filter($places, function($p) { return $p['category'] === 'hospital_health'; }));
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <?php include("layouts/meta.php"); ?>
    <style>
        body, .content {
            color: #212529 !important;
        }

        .intern-hero {
            background: linear-gradient(135deg, #0f172a 0%, #0369a1 100%);
            color: #ffffff;
            border-radius: 16px;
            padding: 2.75rem 2rem;
            margin-bottom: 2rem;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.15);
        }

        .intern-hero h1 {
            color: #ffffff !important;
            font-weight: 800;
            letter-spacing: -0.5px;
        }

        .intern-hero p {
            color: #e0f2fe !important;
            font-size: 1.05rem;
            max-width: 850px;
        }

        .section-header {
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 0.65rem;
            margin-bottom: 1.25rem;
        }

        .section-header h2 {
            font-weight: 700;
            color: #1e293b;
            font-size: 1.3rem;
        }

        /* Stat Counter Card */
        .stat-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 1.15rem 1rem;
            text-align: center;
            box-shadow: 0 2px 6px rgba(0,0,0,0.03);
            transition: all 0.2s ease;
            height: 100%;
        }

        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.06);
            border-color: #cbd5e1;
        }

        .stat-val {
            font-size: 1.75rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 0.25rem;
        }

        .stat-lbl {
            font-size: 0.85rem;
            color: #475569;
            font-weight: 600;
        }

        /* Featured NECTEC Banner */
        .featured-card {
            background: #ffffff;
            border: 1px solid #bae6fd;
            border-left: 5px solid #0284c7;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 4px 12px rgba(2, 132, 199, 0.08);
            margin-bottom: 2rem;
        }

        /* Search & Filter Toolbar */
        .search-bar-wrap {
            background: #ffffff;
            border: 1px solid #ced4da;
            border-radius: 10px;
            padding: 0.75rem 1rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 6px rgba(0,0,0,0.02);
        }

        .search-input-wrap {
            position: relative;
        }

        .search-input-wrap i {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
        }

        .search-input-wrap input {
            padding-left: 2.5rem;
            border-radius: 50rem;
            border: 1px solid #ced4da;
            height: 38px;
            font-size: 0.9rem;
        }

        .search-input-wrap input:focus {
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.15);
        }

        .filter-btn-pill {
            border-radius: 50rem;
            font-size: 0.82rem;
            font-weight: 600;
            padding: 0.35rem 0.85rem;
            margin-right: 0.35rem;
            margin-bottom: 0.35rem;
            border: 1px solid #dee2e6;
            background: #ffffff;
            color: #495057;
            cursor: pointer;
            transition: all 0.15s ease;
        }

        .filter-btn-pill:hover,
        .filter-btn-pill.active {
            background-color: #0284c7;
            color: #ffffff;
            border-color: #0284c7;
        }

        /* Place Card Item */
        .place-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 1.25rem;
            margin-bottom: 1.25rem;
            box-shadow: 0 2px 6px rgba(0,0,0,0.02);
            transition: all 0.2s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .place-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 18px rgba(0,0,0,0.06);
            border-color: #94a3b8;
        }

        .place-title {
            font-size: 1.05rem;
            font-weight: 700;
            color: #0f172a;
            line-height: 1.4;
            margin-bottom: 0.25rem;
        }

        .place-title-en {
            font-size: 0.82rem;
            color: #64748b;
            margin-bottom: 0.65rem;
        }

        .role-tag {
            font-size: 0.75rem;
            font-weight: 600;
            background: #f1f5f9;
            color: #334155;
            padding: 0.15rem 0.45rem;
            border-radius: 4px;
            display: inline-block;
            margin-right: 0.3rem;
            margin-bottom: 0.3rem;
        }

        .badge-cat {
            font-size: 0.72rem;
            font-weight: 700;
            padding: 0.2rem 0.55rem;
            border-radius: 4px;
        }

        .cat-research { background: #e0f2fe; color: #0369a1; }
        .cat-tech { background: #dcfce7; color: #15803d; }
        .cat-industry { background: #fef3c7; color: #b45309; }
        .cat-hospital { background: #fce7f3; color: #be185d; }

        .program-badge {
            font-size: 0.72rem;
            font-weight: 700;
            padding: 0.15rem 0.45rem;
            border-radius: 4px;
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            color: #334155;
            margin-right: 0.25rem;
        }

        .step-num {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: #0284c7;
            color: #ffffff;
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.95rem;
            margin-right: 0.85rem;
            flex-shrink: 0;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php include("layouts/navbar.php"); ?>

    <div class="content">
        <div class="container py-4">

            <!-- Breadcrumb Navigation -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent p-0 mb-3" style="font-size: 0.9rem;">
                    <li class="breadcrumb-item"><a href="index.php" class="text-primary">หน้าหลัก</a></li>
                    <li class="breadcrumb-item"><a href="student-guide.php" class="text-secondary">นักศึกษา</a></li>
                    <li class="breadcrumb-item active text-dark font-weight-bold" aria-current="page">แหล่งฝึกงานและสหกิจศึกษา (Internship Directory)</li>
                </ol>
            </nav>

            <!-- Hero Section -->
            <div class="intern-hero">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <span class="badge badge-warning text-dark font-weight-bold px-3 py-1 mb-2">Work-Integrated Learning (WiL)</span>
                        <h1 class="h2 mb-2">ทำเนียบสถานที่ฝึกงานและสหกิจศึกษา</h1>
                        <p class="mb-0">
                            รวบรวมรายชื่อหน่วยงานวิจัยภาครัฐ บริษัทซอฟต์แวร์ชั้นนำ องค์กรธุรกิจในนิคมอุตสาหกรรม (นวนคร-อยุธยา) 
                            และโรงพยาบาล ที่นักศึกษาวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ ในพระบรมราชูปถัมภ์ 
                            ไปปฏิบัติงานสหกิจศึกษา (16 สัปดาห์) และฝึกประสบการณ์วิชาชีพ (&ge; 450 ชั่วโมง)
                        </p>
                    </div>
                    <div class="col-lg-4 text-center d-none d-lg-block">
                        <i class="fa fa-building-o" style="font-size: 6.5rem; opacity: 0.2; color: #ffffff;"></i>
                    </div>
                </div>
            </div>

            <!-- Stats Overview Row -->
            <div class="row mb-4">
                <div class="col-6 col-md-3 mb-3 mb-md-0">
                    <div class="stat-card">
                        <div class="stat-val text-primary"><?php echo $totalPlaces; ?></div>
                        <div class="stat-lbl">สถานประกอบการทั้งหมด</div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-md-0">
                    <div class="stat-card">
                        <div class="stat-val" style="color: #0369a1;"><?php echo $statResearch; ?></div>
                        <div class="stat-lbl">หน่วยงานวิจัยและรัฐ</div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-md-0">
                    <div class="stat-card">
                        <div class="stat-val text-success"><?php echo $statTech; ?></div>
                        <div class="stat-lbl">บริษัทซอฟต์แวร์และไอที</div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-md-0">
                    <div class="stat-card">
                        <div class="stat-val" style="color: #b45309;"><?php echo $statIndustry + $statHospital; ?></div>
                        <div class="stat-lbl">อุตสาหกรรมและโรงพยาบาล</div>
                    </div>
                </div>
            </div>

            <!-- Featured Partner: ROHM Integrated Systems (พันธมิตรหลักในพื้นที่นวนครที่รับนักศึกษาต่อเนื่องมากที่สุด) -->
            <div class="featured-card" style="border-left-color: #0284c7; background: #f8fafc; border: 1px solid #cbd5e1; border-left: 5px solid #0284c7;">
                <div class="row align-items-center">
                    <div class="col-lg-8 mb-3 mb-lg-0">
                        <div class="d-flex align-items-center mb-2">
                            <span class="badge badge-warning text-dark font-weight-bold mr-2"><i class="fa fa-star"></i> พันธมิตรอันดับ 1 ในพื้นที่นวนคร</span>
                            <span class="badge badge-cat cat-industry">นิคมอุตสาหกรรมนวนคร (ห่างจากมหาวิทยาลัยเพียง 3 กม.)</span>
                        </div>
                        <h2 class="h5 font-weight-bold text-dark mb-1">
                            บริษัท โรม อินทิเกรเต็ด ซิสเต็มส์ (ประเทศไทย) จำกัด (ROHM)
                        </h2>
                        <p class="text-secondary small mb-2">
                            โรงงานผลิตแผงวงจรรวม (IC) และอุปกรณ์กึ่งตัวนำชั้นนำระดับโลกของเครือ ROHM Group ญี่ปุ่น 
                            เป็นสถานประกอบการที่รับนักศึกษาสหกิจศึกษาวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ฯ เข้าปฏิบัติงานต่อเนื่องเป็นประจำทุกปี (พ.ศ. 2567, พ.ศ. 2568, พ.ศ. 2569)
                        </p>
                        <div class="d-flex flex-wrap">
                            <span class="role-tag">Smart Factory & MES</span>
                            <span class="role-tag">Computer Vision ตรวจสอบชิ้นงาน</span>
                            <span class="role-tag">Industrial IoT & PLC Interface</span>
                            <span class="role-tag">Database & Factory Automation</span>
                        </div>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <div class="p-3 bg-white rounded border text-left text-lg-right shadow-sm">
                            <div class="small font-weight-bold text-success mb-1"><i class="fa fa-check-circle mr-1"></i> มีเบี้ยเลี้ยงและสวัสดิการโรงงาน</div>
                            <div class="small font-weight-bold text-dark"><i class="fa fa-phone mr-1"></i> 0-2529-0777</div>
                            <div class="small text-muted"><i class="fa fa-envelope-o mr-1"></i> rist_hr@rohm.com</div>
                            <a href="https://www.rohm.com/thai" target="_blank" rel="noopener" class="btn btn-primary btn-sm mt-2 font-weight-bold px-3">
                                เว็บไซต์ทางการ ROHM <i class="fa fa-external-link ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Search & Filter Toolbar -->
            <div class="search-bar-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6 mb-2 mb-lg-0">
                        <div class="search-input-wrap">
                            <i class="fa fa-search"></i>
                            <input type="text" id="placeSearchInput" class="form-control" placeholder="พิมพ์ค้นหา เช่น ROHM, นวนคร, iApp, สหกิจ, 2569, 2568, AI, Web..." autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 text-md-right">
                        <div class="d-flex flex-wrap justify-content-md-end align-items-center">
                            <button type="button" class="filter-btn-pill active" data-cat="all">ทั้งหมด (<?php echo $totalPlaces; ?>)</button>
                            <button type="button" class="filter-btn-pill" data-cat="research_gov">สถาบันวิจัย/รัฐ (<?php echo $statResearch; ?>)</button>
                            <button type="button" class="filter-btn-pill" data-cat="tech_software">ซอฟต์แวร์/ไอที (<?php echo $statTech; ?>)</button>
                            <button type="button" class="filter-btn-pill" data-cat="industry_corp">นิคมอุตสาหกรรม (<?php echo $statIndustry; ?>)</button>
                            <button type="button" class="filter-btn-pill" data-cat="hospital_health">โรงพยาบาล (<?php echo $statHospital; ?>)</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Directory Cards Grid -->
            <div class="row" id="placesGrid">
                <?php foreach ($places as $p): ?>
                    <?php
                    $catClass = 'cat-research';
                    if ($p['category'] === 'tech_software') $catClass = 'cat-tech';
                    elseif ($p['category'] === 'industry_corp') $catClass = 'cat-industry';
                    elseif ($p['category'] === 'hospital_health') $catClass = 'cat-hospital';
                    ?>
                    <div class="col-lg-6 col-12 mb-4 place-card-col" 
                         data-cat="<?php echo $p['category']; ?>"
                         data-name-th="<?php echo strtolower($p['name_th']); ?>"
                         data-name-en="<?php echo strtolower($p['name_en']); ?>"
                         data-province="<?php echo strtolower($p['province']); ?>"
                         data-cohorts="<?php echo strtolower(implode(' ', $p['cohorts'] ?? [])); ?>"
                         data-roles="<?php echo strtolower(implode(' ', $p['roles'])); ?>">
                        
                        <div class="place-card">
                            <div>
                                <!-- Card Header Badges -->
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <span class="badge badge-cat <?php echo $catClass; ?>">
                                        <?php echo $p['category_label']; ?>
                                    </span>
                                    <span class="small font-weight-bold text-secondary">
                                        <i class="fa fa-map-marker text-danger mr-1"></i><?php echo $p['province']; ?>
                                    </span>
                                </div>

                                <!-- Title -->
                                <h3 class="place-title"><?php echo $p['name_th']; ?></h3>
                                <div class="place-title-en"><?php echo $p['name_en']; ?></div>

                                <?php if (!empty($p['cohorts'])): ?>
                                    <div class="mb-2">
                                        <span class="badge badge-light border text-primary font-weight-bold" style="font-size: 0.72rem; background: #f0fdf4; border-color: #bbf7d0 !important; color: #166534 !important;">
                                            <i class="fa fa-check-circle text-success mr-1"></i>ประวัติรับ นศ.: <?php echo implode(', ', $p['cohorts']); ?>
                                        </span>
                                    </div>
                                <?php endif; ?>

                                <!-- Description -->
                                <p class="text-secondary small mb-3" style="line-height: 1.6;">
                                    <?php echo $p['description']; ?>
                                </p>

                                <!-- Roles / Skills -->
                                <div class="mb-3">
                                    <div class="small text-muted font-weight-bold mb-1">ลักษณะงาน / ทักษะที่เกี่ยวข้อง:</div>
                                    <div class="d-flex flex-wrap">
                                        <?php foreach ($p['roles'] as $r): ?>
                                            <span class="role-tag"><?php echo $r; ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Footer -->
                            <div class="pt-2 border-top mt-2">
                                <div class="d-flex flex-wrap justify-content-between align-items-center mb-2">
                                    <div>
                                        <?php foreach ($p['programs'] as $prog): ?>
                                            <span class="program-badge"><?php echo $prog; ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                    <?php if (!empty($p['compensation'])): ?>
                                        <small class="text-success font-weight-bold">
                                            <i class="fa fa-money mr-1"></i><?php echo $p['compensation']; ?>
                                        </small>
                                    <?php endif; ?>
                                </div>
                                <div class="d-flex justify-content-between align-items-center" style="font-size: 0.82rem;">
                                    <div class="text-muted">
                                        <i class="fa fa-phone mr-1"></i><?php echo $p['phone']; ?>
                                    </div>
                                    <?php if (!empty($p['website'])): ?>
                                        <a href="<?php echo htmlspecialchars($p['website']); ?>" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm py-0 px-2 font-weight-bold">
                                            เว็บไซต์ <i class="fa fa-external-link"></i>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Empty Search Alert -->
            <div id="noPlaceAlert" class="alert alert-light border text-center py-4 my-4" style="display: none;">
                <i class="fa fa-search-minus fa-2x text-muted mb-2"></i>
                <p class="mb-0 text-secondary">ไม่พบสถานประกอบการที่ตรงกับคำค้นหา กรุณาลองค้นหาด้วยคำอื่น</p>
            </div>

            <!-- 4 Steps to Apply for Students -->
            <div class="card p-4 shadow-sm border mb-4 mt-2">
                <div class="section-header d-flex justify-content-between align-items-center mb-3">
                    <h2 class="h6 font-weight-bold mb-0">
                        <i class="fa fa-list-ol text-primary mr-2"></i>ขั้นตอนการเตรียมตัวสมัครฝึกงานและสหกิจศึกษา (Application Steps)
                    </h2>
                    <span class="badge badge-light border">คำแนะนำสำหรับนักศึกษา</span>
                </div>

                <div class="row">
                    <div class="col-md-3 mb-3 mb-md-0">
                        <div class="d-flex align-items-start">
                            <div class="step-num">1</div>
                            <div>
                                <div class="font-weight-bold text-dark mb-1">เตรียมเรซูเม่และพอร์ตโฟลิโอ</div>
                                <small class="text-secondary">จัดทำ Resume, ผลการเรียน (Transcript) และ Portfolio รวบรวมโปรเจกต์ที่เคยทำในรายวิชา</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <div class="d-flex align-items-start">
                            <div class="step-num">2</div>
                            <div>
                                <div class="font-weight-bold text-dark mb-1">เลือกหน่วยงานและตำแหน่ง</div>
                                <small class="text-secondary">เลือกสถานที่ฝึกงานที่ตรงกับความสนใจ (Web, AI, Cloud, Network, MIS) และตรวจระยะเวลาเปิดรับ</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0">
                        <div class="d-flex align-items-start">
                            <div class="step-num">3</div>
                            <div>
                                <div class="font-weight-bold text-dark mb-1">ยื่นขอหนังสือขอความอนุเคราะห์</div>
                                <small class="text-secondary">ดาวน์โหลดแบบฟอร์มคำร้องจากสาขาวิชา เพื่อออกหนังสือขอความอนุเคราะห์จากคณะฯ อย่างเป็นทางการ</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex align-items-start">
                            <div class="step-num">4</div>
                            <div>
                                <div class="font-weight-bold text-dark mb-1">ส่งแบบตอบรับและเริ่มฝึกงาน</div>
                                <small class="text-secondary">เมื่อสถานประกอบการตอบรับ ให้นำหนังสือตอบรับส่งอาจารย์ผู้ประสานงานรายวิชาเพื่อเตรียมตัวออกฝึก</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 pt-3 border-top text-center">
                    <a href="internship-documents.php" class="btn btn-outline-primary btn-sm font-weight-bold mr-2">
                        <i class="fa fa-file-text-o mr-1"></i> ดาวน์โหลดแบบฟอร์มเอกสารฝึกงานและสหกิจศึกษา
                    </a>
                    <a href="student-guide.php" class="btn btn-light btn-sm border font-weight-bold">
                        <i class="fa fa-graduation-cap mr-1"></i> ดูแผนการศึกษา 4 ปี (65SCS402 & 65SCS404)
                    </a>
                </div>
            </div>

        </div>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>

    <!-- Client-side Instant Filter & Search Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const searchInput = document.getElementById("placeSearchInput");
            const filterBtns = document.querySelectorAll(".filter-btn-pill");
            const cards = document.querySelectorAll(".place-card-col");
            const noAlert = document.getElementById("noPlaceAlert");

            let activeCategory = "all";
            let searchTerm = "";

            function filterDirectory() {
                let visibleCount = 0;

                cards.forEach(function(col) {
                    const cat = col.getAttribute("data-cat");
                    const nameTh = col.getAttribute("data-name-th") || "";
                    const nameEn = col.getAttribute("data-name-en") || "";
                    const province = col.getAttribute("data-province") || "";
                    const cohorts = col.getAttribute("data-cohorts") || "";
                    const roles = col.getAttribute("data-roles") || "";

                    const matchCat = (activeCategory === "all" || cat === activeCategory);
                    const matchText = (searchTerm === "" || 
                                       nameTh.includes(searchTerm) || 
                                       nameEn.includes(searchTerm) || 
                                       province.includes(searchTerm) || 
                                       cohorts.includes(searchTerm) ||
                                       roles.includes(searchTerm));

                    if (matchCat && matchText) {
                        col.style.display = "block";
                        visibleCount++;
                    } else {
                        col.style.display = "none";
                    }
                });

                if (noAlert) {
                    noAlert.style.display = (visibleCount === 0) ? "block" : "none";
                }
            }

            // Realtime Search
            if (searchInput) {
                searchInput.addEventListener("input", function(e) {
                    searchTerm = e.target.value.trim().toLowerCase();
                    filterDirectory();
                });
            }

            // Filter Pills
            filterBtns.forEach(function(btn) {
                btn.addEventListener("click", function() {
                    filterBtns.forEach(b => b.classList.remove("active"));
                    this.classList.add("active");
                    activeCategory = this.getAttribute("data-cat");
                    filterDirectory();
                });
            });
        });
    </script>
</body>

</html>
