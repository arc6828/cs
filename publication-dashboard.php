<?php
/**
 * CS Research & Publications Impact Dashboard
 * Academic Research Analytics - Computer Science, VRU
 * Powered by Local Flat-file Database (databases/publications.json)
 */

// Auto-restore database if missing from latest backup
$dbPath = __DIR__ . '/databases/publications.json';
if (!file_exists($dbPath)) {
    $backups = glob(__DIR__ . '/databases/publications-backup-*.json');
    if (!empty($backups)) {
        rsort($backups);
        copy($backups[0], $dbPath);
    }
}

$publications = [];
if (file_exists($dbPath)) {
    $raw = file_get_contents($dbPath);
    $raw = preg_replace('/^\xEF\xBB\xBF/', '', $raw);
    $publications = json_decode($raw, true) ?: [];
}

// Meta & OpenGraph
$og_url = "https://cs.vru.ac.th/publication-dashboard.php";
$og_type = "website";
$og_title = "Research Impact Dashboard แดชบอร์ดสถิติผลงานวิจัย | วิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์";
$og_description = "แดชบอร์ดสรุปสถิติผลงานวิจัยและบทความวิชาการของคณาจารย์และนักศึกษา หลักสูตรวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์";
$og_image = "https://cs.vru.ac.th/images/banner_computer_science.png";

$totalPubs = count($publications);
$statTotal = $totalPubs;
$statJournal = 0;
$statConf = 0;

// Dimension 2: Journals only
$statJournalScopus = 0;
$statJournalInter = 0;
$statJournalTci1 = 0;
$statJournalTci2 = 0;
$statJournalKapor = 0;
$statJournalNational = 0;

// Dimension 3: Conferences only
$statConfTotal = 0;
$statConfNational = 0;
$statConfInter = 0;

$facultyNames = [
    'natradee'   => 'อ.ณัฐรดี อนุพงค์',
    'daoratha'   => 'ดร.ดาวรถา วีระพันธ์',
    'witsarut'   => 'ผศ.ดร.วิศรุต ขวัญคุ้ม',
    'chawalit'   => 'อ.ชวลิต โควีระวงศ์',
    'nattira'    => 'ผศ.ณัฏฐิรา ศุขไพบูลย์',
    'pranomkorn' => 'ดร.ประณมกร อัมพรพรรดิ์',
];

$facultyStats = [
    'natradee'   => 0,
    'daoratha'   => 0,
    'witsarut'   => 0,
    'chawalit'   => 0,
    'nattira'    => 0,
    'pranomkorn' => 0,
];

$yearlyStats = [];

foreach ($publications as $p) {
    $y = intval($p['year_th'] ?? 2561);
    $type = $p['type'] ?? 'conference';
    $tier = $p['tier'] ?? '';
    $lang = $p['language'] ?? 'th';
    $cat = $p['category'] ?? '';

    // Initialize yearly slot
    if (!isset($yearlyStats[$y])) {
        $yearlyStats[$y] = ['journal' => 0, 'conference' => 0, 'total' => 0];
    }
    $yearlyStats[$y]['total']++;

    // Type calculation
    if ($type === 'journal') {
        $statJournal++;
        $yearlyStats[$y]['journal']++;

        // Journal quality & criteria (Dimension 2)
        if (stripos($tier, 'Scopus') !== false || stripos($cat, 'Scopus') !== false) {
            $statJournalScopus++;
        }
        if ($lang === 'en' || stripos($cat, 'นานาชาติ') !== false) {
            $statJournalInter++;
        } else {
            $statJournalNational++;
        }
        if (stripos($tier, 'TCI 1') !== false || stripos($tier, 'TCI1') !== false) {
            $statJournalTci1++;
        }
        if (stripos($tier, 'TCI 2') !== false || stripos($tier, 'TCI2') !== false) {
            $statJournalTci2++;
        }
        if (stripos($tier, 'กพอ') !== false) {
            $statJournalKapor++;
        }
    } else {
        $statConf++;
        $statConfTotal++;
        $yearlyStats[$y]['conference']++;

        // Conference classification (Dimension 3)
        if ($lang === 'en' || stripos($cat, 'นานาชาติ') !== false) {
            $statConfInter++;
        } else {
            $statConfNational++;
        }
    }

    // Faculty participation
    if (!empty($p['teacher_ids']) && is_array($p['teacher_ids'])) {
        foreach ($p['teacher_ids'] as $tid) {
            if (isset($facultyStats[$tid])) {
                $facultyStats[$tid]++;
            }
        }
    }
}

ksort($yearlyStats);
$totalFacultyWithPubs = count(array_filter($facultyStats, function($c) { return $c > 0; }));

// Chart Data JSON
$chartYears = array_keys($yearlyStats);
$chartJournalByYear = array_map(function($y) use ($yearlyStats) { return $yearlyStats[$y]['journal']; }, $chartYears);
$chartConfByYear = array_map(function($y) use ($yearlyStats) { return $yearlyStats[$y]['conference']; }, $chartYears);

$facultyLabels = array_values($facultyNames);
$facultyData = [];
foreach (array_keys($facultyNames) as $fid) {
    $facultyData[] = $facultyStats[$fid];
}
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <?php include("layouts/meta.php"); ?>
    <style>
        body, .content {
            color: #212529 !important;
        }
        .page-header-modern {
            border-left: 5px solid #007bff;
            padding-left: 1.25rem;
        }
        .text-dark-gray {
            color: #343a40 !important;
        }
        /* Metric Cards */
        .dashboard-metric-card {
            background: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 1rem 0.85rem;
            transition: all 0.2s ease-in-out;
            cursor: pointer;
            text-decoration: none !important;
            display: block;
            height: 100%;
        }
        .dashboard-metric-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 18px rgba(0,0,0,0.08);
            border-color: #adb5bd;
        }
        .dashboard-metric-icon {
            font-size: 1.35rem;
        }
        .dashboard-metric-val {
            font-size: 1.85rem;
            font-weight: 800;
            line-height: 1.1;
            margin: 0.35rem 0 0.2rem;
        }
        .dashboard-metric-lbl {
            font-size: 0.78rem;
            color: #6c757d;
            font-weight: 600;
            margin-bottom: 0;
            white-space: nowrap;
        }
        .chart-card {
            background: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 1.25rem 1.25rem;
            height: 100%;
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
                    <li class="breadcrumb-item"><a href="teacher.php">อาจารย์และบุคลากร</a></li>
                    <li class="breadcrumb-item"><a href="publication-new.php">ผลงานตีพิมพ์และงานวิจัย</a></li>
                    <li class="breadcrumb-item active" aria-current="page">แดชบอร์ดสถิติวิจัย</li>
                </ol>
            </nav>

            <!-- Page Header -->
            <div class="page-header-modern mb-4">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div>
                        <h1 class="h2 font-weight-bold text-dark mb-1">
                            <i class="fa fa-dashboard text-primary mr-2"></i>แดชบอร์ดสถิติผลงานวิจัย (Research Impact Dashboard)
                        </h1>
                        <p class="text-dark-gray mb-0">
                            ภาพรวมข้อมูลสถิติ ดัชนีคุณภาพทางวิชาการ และแนวโน้มผลงานตีพิมพ์ของหลักสูตรวิทยาการคอมพิวเตอร์ (ทั้งหมด <?php echo $totalPubs; ?> เรื่อง)
                        </p>
                    </div>
                    <div class="mt-3 mt-lg-0">
                        <a href="publication-new.php" class="btn btn-primary btn-sm font-weight-bold mr-1">
                            <i class="fa fa-list-ol mr-1"></i> รายการผลงานวิจัย (<?php echo $totalPubs; ?> เรื่อง)
                        </a>
                        <a href="teacher.php" class="btn btn-outline-primary btn-sm font-weight-bold">
                            <i class="fa fa-users mr-1"></i> ทำเนียบคณาจารย์
                        </a>
                    </div>
                </div>
            </div>

            <!-- มิติที่ 1: สรุปผลงานตามประเภท (By Publication Type) -->
            <div class="mb-4 p-3 bg-white rounded border shadow-sm">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h2 class="h6 font-weight-bold text-dark mb-0">
                        <i class="fa fa-pie-chart text-primary mr-2"></i>มิติที่ 1: สรุปผลงานตามประเภท (By Publication Type)
                    </h2>
                    <span class="small text-muted font-weight-bold">คลิกการ์ดเพื่อดูรายการจริง</span>
                </div>
                <div class="row">
                    <!-- Total -->
                    <div class="col-lg-4 col-md-4 col-12 mb-2 mb-md-0">
                        <a href="publication-new.php" class="dashboard-metric-card text-center" title="คลิกเพื่อดูผลงานทั้งหมด">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span class="dashboard-metric-lbl text-primary font-weight-bold">ผลงานทั้งหมด</span>
                                <i class="fa fa-book text-primary dashboard-metric-icon"></i>
                            </div>
                            <div class="dashboard-metric-val text-dark"><?php echo $statTotal; ?></div>
                            <div class="dashboard-metric-lbl">ผลงานวิจัยทั้งหมด (100%)</div>
                        </a>
                    </div>
                    <!-- Journal -->
                    <div class="col-lg-4 col-md-4 col-12 mb-2 mb-md-0">
                        <a href="publication-new.php?tier=journal" class="dashboard-metric-card text-center" title="คลิกเพื่อกรองเฉพาะบทความวารสาร">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span class="dashboard-metric-lbl text-info font-weight-bold">บทความวารสาร</span>
                                <i class="fa fa-newspaper-o text-info dashboard-metric-icon"></i>
                            </div>
                            <div class="dashboard-metric-val text-info"><?php echo $statJournal; ?></div>
                            <div class="dashboard-metric-lbl">บทความวารสารวิชาการ (<?php echo round(($statJournal / $statTotal) * 100, 1); ?>%)</div>
                        </a>
                    </div>
                    <!-- Conference -->
                    <div class="col-lg-4 col-md-4 col-12 mb-2 mb-md-0">
                        <a href="publication-new.php?tier=conference" class="dashboard-metric-card text-center" title="คลิกเพื่อกรองเฉพาะการประชุมวิชาการ">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span class="dashboard-metric-lbl text-warning font-weight-bold">การประชุมวิชาการ</span>
                                <i class="fa fa-microphone text-warning dashboard-metric-icon"></i>
                            </div>
                            <div class="dashboard-metric-val text-warning"><?php echo $statConf; ?></div>
                            <div class="dashboard-metric-lbl">รายงานสืบเนื่องการประชุม (<?php echo round(($statConf / $statTotal) * 100, 1); ?>%)</div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- มิติที่ 2: จำแนกเฉพาะบทความวารสารวิชาการ (Journal Quality & Criteria) -->
            <div class="mb-4 p-3 bg-white rounded border shadow-sm">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h2 class="h6 font-weight-bold text-dark mb-0">
                        <i class="fa fa-newspaper-o text-info mr-2"></i>มิติที่ 2: จำแนกเฉพาะบทความวารสารวิชาการ (Journal Quality & Criteria - รวม <?php echo $statJournal; ?> เรื่อง)
                    </h2>
                    <span class="small text-muted font-weight-bold">คลิกการ์ดเพื่อดูรายการจริง</span>
                </div>
                <div class="row">
                    <!-- Scopus -->
                    <div class="col-lg col-md-4 col-6 mb-2 mb-lg-0">
                        <a href="publication-new.php?tier=scopus" class="dashboard-metric-card text-center" title="คลิกเพื่อดูวารสารฐานข้อมูล Scopus">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span class="dashboard-metric-lbl font-weight-bold" style="color: #6f42c1;">Scopus</span>
                                <i class="fa fa-database dashboard-metric-icon" style="color: #6f42c1;"></i>
                            </div>
                            <div class="dashboard-metric-val" style="color: #6f42c1;"><?php echo $statJournalScopus; ?></div>
                            <div class="dashboard-metric-lbl">ฐานข้อมูล Scopus (Q4)</div>
                        </a>
                    </div>
                    <!-- International Journal -->
                    <div class="col-lg col-md-4 col-6 mb-2 mb-lg-0">
                        <a href="publication-new.php?tier=journal&search=วารสารนานาชาติ" class="dashboard-metric-card text-center" title="คลิกเพื่อดูวารสารระดับนานาชาติ">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span class="dashboard-metric-lbl text-primary font-weight-bold">วารสารนานาชาติ</span>
                                <i class="fa fa-globe text-primary dashboard-metric-icon"></i>
                            </div>
                            <div class="dashboard-metric-val text-primary"><?php echo $statJournalInter; ?></div>
                            <div class="dashboard-metric-lbl">วารสารระดับนานาชาติ</div>
                        </a>
                    </div>
                    <!-- TCI 1 -->
                    <div class="col-lg col-md-4 col-6 mb-2 mb-lg-0">
                        <a href="publication-new.php?tier=tci+1" class="dashboard-metric-card text-center" title="คลิกเพื่อดูวารสาร TCI 1">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span class="dashboard-metric-lbl text-success font-weight-bold">TCI 1</span>
                                <i class="fa fa-trophy text-success dashboard-metric-icon"></i>
                            </div>
                            <div class="dashboard-metric-val text-success"><?php echo $statJournalTci1; ?></div>
                            <div class="dashboard-metric-lbl">วารสาร TCI กลุ่ม 1</div>
                        </a>
                    </div>
                    <!-- TCI 2 -->
                    <div class="col-lg col-md-4 col-6 mb-2 mb-lg-0">
                        <a href="publication-new.php?tier=tci+2" class="dashboard-metric-card text-center" title="คลิกเพื่อดูวารสาร TCI 2">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span class="dashboard-metric-lbl font-weight-bold" style="color: #20c997;">TCI 2</span>
                                <i class="fa fa-certificate dashboard-metric-icon" style="color: #20c997;"></i>
                            </div>
                            <div class="dashboard-metric-val" style="color: #20c997;"><?php echo $statJournalTci2; ?></div>
                            <div class="dashboard-metric-lbl">วารสาร TCI กลุ่ม 2</div>
                        </a>
                    </div>
                    <!-- เกณฑ์ ก.พ.อ. -->
                    <div class="col-lg col-md-4 col-6 mb-2 mb-lg-0">
                        <a href="publication-new.php?tier=กพอ" class="dashboard-metric-card text-center" title="คลิกเพื่อดูวารสารตามเกณฑ์ ก.พ.อ.">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span class="dashboard-metric-lbl font-weight-bold" style="color: #fd7e14;">เกณฑ์ ก.พ.อ.</span>
                                <i class="fa fa-check-circle-o dashboard-metric-icon" style="color: #fd7e14;"></i>
                            </div>
                            <div class="dashboard-metric-val" style="color: #fd7e14;"><?php echo $statJournalKapor; ?></div>
                            <div class="dashboard-metric-lbl">ตามเกณฑ์ ก.พ.อ.</div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- มิติที่ 3: จำแนกเฉพาะผลงานการประชุมวิชาการ (Conference Proceedings) -->
            <div class="mb-4 p-3 bg-white rounded border shadow-sm">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h2 class="h6 font-weight-bold text-dark mb-0">
                        <i class="fa fa-microphone text-warning mr-2"></i>มิติที่ 3: จำแนกเฉพาะผลงานการประชุมวิชาการ (Conference Proceedings - รวม <?php echo $statConf; ?> เรื่อง)
                    </h2>
                    <span class="small text-muted font-weight-bold">คลิกการ์ดเพื่อดูรายการจริง</span>
                </div>
                <div class="row">
                    <!-- Conf Total -->
                    <div class="col-lg-4 col-md-4 col-12 mb-2 mb-md-0">
                        <a href="publication-new.php?tier=conference" class="dashboard-metric-card text-center" title="คลิกเพื่อดูการประชุมวิชาการทั้งหมด">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span class="dashboard-metric-lbl text-warning font-weight-bold">การประชุมวิชาการทั้งหมด</span>
                                <i class="fa fa-microphone text-warning dashboard-metric-icon"></i>
                            </div>
                            <div class="dashboard-metric-val text-dark"><?php echo $statConfTotal; ?></div>
                            <div class="dashboard-metric-lbl">ฉบับเต็มในรายงานสืบเนื่อง (100%)</div>
                        </a>
                    </div>
                    <!-- Conf National -->
                    <div class="col-lg-4 col-md-4 col-12 mb-2 mb-md-0">
                        <a href="publication-new.php?tier=conference&search=ระดับชาติ" class="dashboard-metric-card text-center" title="คลิกเพื่อดูการประชุมวิชาการระดับชาติ">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span class="dashboard-metric-lbl font-weight-bold" style="color: #17a2b8;">ระดับชาติ</span>
                                <i class="fa fa-flag dashboard-metric-icon" style="color: #17a2b8;"></i>
                            </div>
                            <div class="dashboard-metric-val" style="color: #17a2b8;"><?php echo $statConfNational; ?></div>
                            <div class="dashboard-metric-lbl">การประชุมวิชาการระดับชาติ (<?php echo round(($statConfNational / $statConfTotal) * 100, 1); ?>%)</div>
                        </a>
                    </div>
                    <!-- Conf International -->
                    <div class="col-lg-4 col-md-4 col-12 mb-2 mb-md-0">
                        <a href="publication-new.php?tier=conference&search=ระดับนานาชาติ" class="dashboard-metric-card text-center" title="คลิกเพื่อดูการประชุมวิชาการระดับนานาชาติ">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span class="dashboard-metric-lbl font-weight-bold" style="color: #6f42c1;">ระดับนานาชาติ</span>
                                <i class="fa fa-globe dashboard-metric-icon" style="color: #6f42c1;"></i>
                            </div>
                            <div class="dashboard-metric-val" style="color: #6f42c1;"><?php echo $statConfInter; ?></div>
                            <div class="dashboard-metric-lbl">การประชุมวิชาการระดับนานาชาติ (<?php echo round(($statConfInter / $statConfTotal) * 100, 1); ?>%)</div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Interactive Visualizations Row 1 -->
            <div class="row mb-4">
                
                <!-- Chart 1: Yearly Publication Trends (Stacked Bar) -->
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="chart-card shadow-sm">
                        <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                            <h2 class="h6 font-weight-bold text-dark mb-0">
                                <i class="fa fa-line-chart text-primary mr-2"></i>แนวโน้มผลงานตีพิมพ์จำแนกรายปี (พ.ศ. 2559 - 2569)
                            </h2>
                            <span class="badge badge-light border">Stacked Bar Chart</span>
                        </div>
                        <div style="position: relative; height: 320px;">
                            <canvas id="yearlyTrendChart"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Chart 2: Publication Types Distribution (Doughnut) -->
                <div class="col-lg-4">
                    <div class="chart-card shadow-sm">
                        <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                            <h2 class="h6 font-weight-bold text-dark mb-0">
                                <i class="fa fa-pie-chart text-info mr-2"></i>สัดส่วนประเภทผลงาน
                            </h2>
                            <span class="badge badge-light border">Doughnut Chart</span>
                        </div>
                        <div style="position: relative; height: 320px;">
                            <canvas id="typeDoughnutChart"></canvas>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Interactive Visualizations Row 2 -->
            <div class="row mb-4">
                
                <!-- Chart 3: Faculty Participation (Horizontal Bar) -->
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="chart-card shadow-sm">
                        <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                            <h2 class="h6 font-weight-bold text-dark mb-0">
                                <i class="fa fa-users text-warning mr-2"></i>จำนวนผลงานตีพิมพ์จำแนกตามคณาจารย์
                            </h2>
                            <span class="badge badge-light border">Faculty Output</span>
                        </div>
                        <div style="position: relative; height: 300px;">
                            <canvas id="facultyChart"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Chart 4: Quality & Tiers Breakdown (Polar / Pie) -->
                <div class="col-lg-5">
                    <div class="chart-card shadow-sm">
                        <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                            <h2 class="h6 font-weight-bold text-dark mb-0">
                                <i class="fa fa-shield text-success mr-2"></i>การกระจายตัวตามระดับคุณภาพ
                            </h2>
                            <span class="badge badge-light border">Tiers</span>
                        </div>
                        <div style="position: relative; height: 300px;">
                            <canvas id="tierPieChart"></canvas>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Annual Breakdown Summary Table -->
            <div class="card shadow-sm border mb-4">
                <div class="card-header bg-white py-3 border-bottom">
                    <h2 class="h6 font-weight-bold text-dark mb-0">
                        <i class="fa fa-table text-primary mr-2"></i>ตารางสรุปแจกแจงผลงานตีพิมพ์รายปี (Annual Publication Summary)
                    </h2>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped mb-0 text-center">
                            <thead class="thead-light">
                                <tr>
                                    <th style="width: 140px;">ปี พ.ศ. (ค.ศ.)</th>
                                    <th>วารสารวิชาการ (Journal)</th>
                                    <th>การประชุมวิชาการ (Conference)</th>
                                    <th>รวมทั้งหมด (Total)</th>
                                    <th>สัดส่วนวารสาร</th>
                                    <th style="width: 120px;">ดูรายการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                krsort($yearlyStats);
                                foreach ($yearlyStats as $y => $d): 
                                    $pct = ($d['total'] > 0) ? round(($d['journal'] / $d['total']) * 100, 1) : 0;
                                ?>
                                    <tr>
                                        <td class="font-weight-bold text-dark">
                                            พ.ศ. <?php echo $y; ?> <small class="text-muted">(<?php echo $y - 543; ?>)</small>
                                        </td>
                                        <td>
                                            <span class="badge badge-info px-2 py-1"><?php echo $d['journal']; ?> เรื่อง</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-warning px-2 py-1"><?php echo $d['conference']; ?> เรื่อง</span>
                                        </td>
                                        <td class="font-weight-bold text-primary">
                                            <?php echo $d['total']; ?> เรื่อง
                                        </td>
                                        <td>
                                            <div class="progress" style="height: 14px;">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $pct; ?>%;" aria-valuenow="<?php echo $pct; ?>" aria-valuemin="0" aria-valuemax="100">
                                                    <?php echo $pct; ?>%
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="publication-new.php?year=<?php echo $y; ?>" class="btn btn-outline-primary btn-sm py-0 px-2 font-weight-bold">
                                                เปิดดู <i class="fa fa-angle-right"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot class="bg-light font-weight-bold">
                                <tr>
                                    <td>รวมทั้งหมด</td>
                                    <td><?php echo $statJournal; ?> เรื่อง</td>
                                    <td><?php echo $statConf; ?> เรื่อง</td>
                                    <td class="text-primary"><?php echo $totalPubs; ?> เรื่อง</td>
                                    <td><?php echo round(($statJournal / $totalPubs) * 100, 1); ?>%</td>
                                    <td>
                                        <a href="publication-new.php" class="btn btn-primary btn-sm py-0 px-2 font-weight-bold">
                                            ดูทั้งหมด
                                        </a>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            
            // 1. Yearly Stacked Bar Chart
            const ctxYear = document.getElementById('yearlyTrendChart').getContext('2d');
            new Chart(ctxYear, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode(array_map(function($y){ return 'พ.ศ. ' . $y; }, $chartYears), JSON_UNESCAPED_UNICODE); ?>,
                    datasets: [
                        {
                            label: 'วารสาร (Journal)',
                            data: <?php echo json_encode($chartJournalByYear); ?>,
                            backgroundColor: '#17a2b8',
                            borderRadius: 4
                        },
                        {
                            label: 'ประชุมวิชาการ (Conference)',
                            data: <?php echo json_encode($chartConfByYear); ?>,
                            backgroundColor: '#ffc107',
                            borderRadius: 4
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: { stacked: true, grid: { display: false } },
                        y: { stacked: true, beginAtZero: true, ticks: { precision: 0 } }
                    },
                    plugins: {
                        legend: { position: 'top' }
                    }
                }
            });

            // 2. Type Doughnut Chart
            const ctxType = document.getElementById('typeDoughnutChart').getContext('2d');
            new Chart(ctxType, {
                type: 'doughnut',
                data: {
                    labels: ['วารสาร (Journal)', 'ประชุมวิชาการ (Conference)'],
                    datasets: [{
                        data: [<?php echo $statJournal; ?>, <?php echo $statConf; ?>],
                        backgroundColor: ['#17a2b8', '#ffc107'],
                        borderWidth: 2,
                        borderColor: '#ffffff'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { position: 'bottom' }
                    }
                }
            });

            // 3. Faculty Horizontal Bar Chart
            const ctxFaculty = document.getElementById('facultyChart').getContext('2d');
            new Chart(ctxFaculty, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($facultyLabels, JSON_UNESCAPED_UNICODE); ?>,
                    datasets: [{
                        label: 'จำนวนผลงานตีพิมพ์',
                        data: <?php echo json_encode($facultyData); ?>,
                        backgroundColor: '#fd7e14',
                        borderRadius: 4
                    }]
                },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: { beginAtZero: true, ticks: { precision: 0 } },
                        y: { grid: { display: false } }
                    },
                    plugins: {
                        legend: { display: false }
                    }
                }
            });

            // 4. Quality & Tiers Polar / Doughnut
            const ctxTier = document.getElementById('tierPieChart').getContext('2d');
            new Chart(ctxTier, {
                type: 'pie',
                data: {
                    labels: [
                        'วารสาร Scopus (Q4)',
                        'วารสารนานาชาติ',
                        'วารสาร TCI 1',
                        'วารสาร TCI 2',
                        'วารสารตามเกณฑ์ กพอ.',
                        'ประชุมวิชาการระดับชาติ',
                        'ประชุมวิชาการนานาชาติ'
                    ],
                    datasets: [{
                        data: [
                            <?php echo $statJournalScopus; ?>,
                            <?php echo $statJournalInter; ?>,
                            <?php echo $statJournalTci1; ?>,
                            <?php echo $statJournalTci2; ?>,
                            <?php echo $statJournalKapor; ?>,
                            <?php echo $statConfNational; ?>,
                            <?php echo $statConfInter; ?>
                        ],
                        backgroundColor: ['#6f42c1', '#007bff', '#28a745', '#20c997', '#fd7e14', '#ffc107', '#17a2b8'],
                        borderWidth: 2,
                        borderColor: '#ffffff'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { position: 'bottom', labels: { boxWidth: 12 } }
                    }
                }
            });

        });
    </script>
</body>

</html>
