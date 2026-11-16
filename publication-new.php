<?php
/**
 * CS Publications Page
 * Academic Publications & Research - Computer Science, VRU
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
$og_url = "https://cs.vru.ac.th/publication-new.php";
$og_type = "article";
$og_title = "CS Publications ผลงานตีพิมพ์และงานวิจัย | วิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์";
$og_description = "รวบรวมผลงานวิจัยและบทความวิชาการที่ได้รับการตีพิมพ์เผยแพร่ระดับชาติและนานาชาติของคณาจารย์และนักศึกษา หลักสูตรวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์";
$og_image = "https://cs.vru.ac.th/images/banner_computer_science.png";

$totalPubs = count($publications);
$statTotal = $totalPubs;
$years = [];
$statJournal = 0;
$statConf = 0;
$statScopus = 0;
$statInter = 0;
$statTci1 = 0;
$statTci2 = 0;
$facultySet = [];

$teachersMap = [
    'nattira'    => 'ผศ.ณัฏฐิรา ศุขไพบูลย์',
    'pranomkorn' => 'อาจารย์ ดร.ประณมกร อัมพรพรรดิ์',
    'daoratha'   => 'อาจารย์ ดร.ดาวรถา วีระพันธ์',
    'witsarut'   => 'ผศ.ดร.วิศรุต ขวัญคุ้ม',
    'natradee'   => 'อาจารย์ณัฐรดี อนุพงค์',
    'chawalit'   => 'อาจารย์ชวลิต โควีระวงศ์',
];

foreach ($publications as $p) {
    if (!empty($p['year_th'])) {
        $years[$p['year_th']] = true;
    }

    // Publication type (Journal vs Conference)
    if (($p['type'] ?? '') === 'journal') {
        $statJournal++;
    } else {
        $statConf++;
    }
    
    $tier = $p['tier'] ?? '';
    $lang = $p['language'] ?? 'th';
    $cat = $p['category'] ?? '';

    // Scopus vs International (separated)
    if (stripos($tier, 'Scopus') !== false || stripos($cat, 'Scopus') !== false) {
        $statScopus++;
    } elseif ($lang === 'en' || stripos($cat, 'นานาชาติ') !== false) {
        $statInter++;
    }

    // TCI 1 vs TCI 2 (separated)
    if (stripos($tier, 'TCI 1') !== false || stripos($tier, 'TCI1') !== false) {
        $statTci1++;
    }
    if (stripos($tier, 'TCI 2') !== false || stripos($tier, 'TCI2') !== false) {
        $statTci2++;
    }

    if (!empty($p['teacher_ids'])) {
        foreach ($p['teacher_ids'] as $tid) {
            $facultySet[$tid] = true;
        }
    }
}
$statFaculty = count($facultySet);
krsort($years);
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <?php include("layouts/meta.php"); ?>
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
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
        /* Research Impact Metric Cards */
        .pub-metric-card {
            background: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 0.85rem 0.75rem;
            transition: all 0.2s ease-in-out;
            cursor: pointer;
            height: 100%;
        }
        .pub-metric-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.08);
            border-color: #adb5bd;
        }
        .pub-metric-icon {
            font-size: 1.15rem;
        }
        .pub-metric-val {
            font-size: 1.6rem;
            font-weight: 800;
            line-height: 1.1;
            margin: 0.25rem 0 0.15rem;
        }
        .pub-metric-lbl {
            font-size: 0.75rem;
            color: #6c757d;
            font-weight: 600;
            margin-bottom: 0;
            white-space: nowrap;
        }

        /* Filter Bar */
        .pub-filter-bar {
            background: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 1rem 1.25rem;
            margin-bottom: 1.25rem;
        }
        /* Nav Tabs */
        .pub-tabs .nav-link {
            font-size: 0.95rem;
            font-weight: 700;
            color: #495057;
            border-radius: 6px;
            padding: 0.65rem 1.25rem;
            border: 1px solid transparent;
        }
        .pub-tabs .nav-link.active {
            background-color: #007bff;
            color: #ffffff !important;
        }
        /* Academic Continuous Bibliography List */
        .pub-biblio-card {
            background: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 1.5rem 1.75rem 1.5rem 2.25rem;
        }
        .pub-biblio-list {
            padding-left: 1.25rem;
            margin-bottom: 0;
        }
        .pub-biblio-item {
            font-size: 1rem;
            line-height: 1.8;
            color: #212529;
            padding: 0.55rem 0.25rem;
            border-bottom: 1px dashed #e9ecef;
            word-break: break-word;
        }
        .pub-biblio-item:last-child {
            border-bottom: none;
        }
        .pub-biblio-item i, .pub-biblio-item em {
            font-style: italic;
        }
        .pub-doc-link {
            font-size: 0.85rem;
            margin-left: 6px;
            color: #007bff;
            text-decoration: none;
            white-space: nowrap;
        }
        .pub-doc-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php include("layouts/navbar.php"); ?>

    <div class="content">
        <div class="container py-4">
            
            <!-- Breadcrumb Navigation (Standard Site Style) -->
            <nav aria-label="breadcrumb" class="mb-3">
                <ol class="breadcrumb bg-light py-2 px-3 rounded">
                    <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i> หน้าแรก</a></li>
                    <li class="breadcrumb-item"><a href="teacher.php">อาจารย์และบุคลากร</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ผลงานตีพิมพ์และงานวิจัย</li>
                </ol>
            </nav>

            <!-- Page Header (Unified Style matching teacher.php & support.php) -->
            <div class="page-header-modern mb-4">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div>
                        <h1 class="h2 font-weight-bold text-dark mb-1">
                            <i class="fa fa-book text-primary mr-2"></i>ผลงานตีพิมพ์และงานวิจัย (Publications & Research)
                        </h1>
                        <p class="text-dark-gray mb-0">
                            รวมผลงานวิจัย บทความวิชาการระดับชาติและนานาชาติของคณาจารย์และนักศึกษา หลักสูตรวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ (ทั้งหมด <?php echo $totalPubs; ?> เรื่อง)
                        </p>
                    </div>
                    <div class="mt-3 mt-lg-0">
                        <a href="publication-dashboard.php" class="btn btn-outline-info btn-sm font-weight-bold mr-1">
                            <i class="fa fa-dashboard mr-1"></i> แดชบอร์ดสถิติวิจัย
                        </a>
                        <a href="teacher.php" class="btn btn-outline-primary btn-sm font-weight-bold mr-1">
                            <i class="fa fa-users mr-1"></i> ทำเนียบคณาจารย์
                        </a>
                        <a href="support.php" class="btn btn-outline-secondary btn-sm font-weight-bold">
                            <i class="fa fa-user-circle mr-1"></i> บุคลากรประจำหลักสูตร
                        </a>
                    </div>
                </div>
            </div>

            <!-- Filter & Search Toolbar (Clean, Compact) -->
            <div class="pub-filter-bar shadow-sm">
                <div class="row align-items-center">
                    
                    <!-- Search Input -->
                    <div class="col-lg-4 col-md-6 mb-2 mb-lg-0">
                        <label for="pubSearch" class="small font-weight-bold text-muted mb-1">ค้นหาผลงาน:</label>
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white"><i class="fa fa-search text-muted"></i></span>
                            </div>
                            <input type="text" id="pubSearch" class="form-control" placeholder="พิมพ์ชื่องานวิจัย, ชื่ออาจารย์, วารสาร..." autocomplete="off">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="btnClearSearch" title="ล้างคำค้นหา">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Filter by Faculty Member -->
                    <div class="col-lg-3 col-md-6 mb-2 mb-lg-0">
                        <label for="filterAuthor" class="small font-weight-bold text-muted mb-1">คณาจารย์:</label>
                        <select id="filterAuthor" class="form-control form-control-sm">
                            <option value="">-- คณาจารย์ทั้งหมด --</option>
                            <?php foreach ($teachersMap as $tid => $tname): ?>
                                <option value="<?php echo htmlspecialchars($tname); ?>"><?php echo htmlspecialchars($tname); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Filter by Year -->
                    <div class="col-lg-2 col-sm-6 mb-2 mb-lg-0">
                        <label for="filterYear" class="small font-weight-bold text-muted mb-1">ปีที่ตีพิมพ์:</label>
                        <select id="filterYear" class="form-control form-control-sm">
                            <option value="">-- ทุกปี --</option>
                            <?php foreach (array_keys($years) as $y): ?>
                                <option value="<?php echo $y; ?>">พ.ศ. <?php echo $y; ?> (<?php echo $y - 543; ?>)</option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Filter by Category/Tier/Type -->
                    <div class="col-lg-2 col-sm-6 mb-2 mb-lg-0">
                        <label for="filterTier" class="small font-weight-bold text-muted mb-1">ระดับ / ประเภท:</label>
                        <select id="filterTier" class="form-control form-control-sm">
                            <option value="">-- ทุกระดับ / ประเภท --</option>
                            <optgroup label="ระดับคุณภาพ (Tier / มคอ.2)">
                                <option value="scopus">Scopus</option>
                                <option value="tci 1">TCI กลุ่ม 1</option>
                                <option value="tci 2">TCI กลุ่ม 2</option>
                                <option value="กพอ">เกณฑ์ กพอ.</option>
                            </optgroup>
                            <optgroup label="ประเภทการเผยแพร่">
                                <option value="journal">วารสาร (Journal)</option>
                                <option value="conference">ประชุมวิชาการ (Conference)</option>
                                <option value="international">นานาชาติ (International)</option>
                                <option value="national">ระดับชาติ (National)</option>
                            </optgroup>
                        </select>
                    </div>

                    <!-- Reset Button -->
                    <div class="col-lg-1 col-12 text-lg-right mt-2 mt-lg-0">
                        <label class="d-none d-lg-block small text-transparent mb-1">&nbsp;</label>
                        <button type="button" class="btn btn-outline-danger btn-sm btn-block" id="btnResetFilters" title="ล้างตัวกรองทั้งหมด">
                            <i class="fa fa-refresh"></i>
                        </button>
                    </div>
                </div>

                <!-- Secondary Row: Citation Style Selection -->
                <div class="d-flex flex-wrap align-items-center justify-content-between pt-2 mt-2 border-top">
                    <div class="d-flex flex-wrap align-items-center">
                        <span class="small font-weight-bold text-muted mr-2">รูปแบบการอ้างอิง:</span>
                        <div class="btn-group btn-group-sm style-btn-group" role="group">
                            <button type="button" class="btn btn-primary active" data-style="mko2" title="รูปแบบเอกสารหลักสูตร มคอ.2 พร้อมระบุ Tier และช่วงเดือน">
                                <i class="fa fa-graduation-cap mr-1"></i> มคอ.2 (TQF)
                            </button>
                            <button type="button" class="btn btn-outline-primary" data-style="apa6" title="รูปแบบ APA 6th ภาษาไทย มาตรฐานวิทยานิพนธ์/รายงาน">
                                APA 6th (Thai)
                            </button>
                            <button type="button" class="btn btn-outline-primary" data-style="apa7" title="รูปแบบ APA 7th Edition มาตรฐานสากล">
                                APA 7th
                            </button>
                            <button type="button" class="btn btn-outline-primary" data-style="ieee" title="รูปแบบสถาบันวิศวกรรมไฟฟ้าและอิเล็กทรอนิกส์">
                                IEEE
                            </button>
                            <button type="button" class="btn btn-outline-primary" data-style="vancouver" title="รูปแบบชีวเวชศาสตร์และวิทยาศาสตร์สุขภาพ">
                                Vancouver
                            </button>
                        </div>
                    </div>
                    <div class="small text-muted font-weight-bold mt-2 mt-md-0" id="resultCountLabel">
                        แสดง <span class="text-primary font-weight-bold" id="visibleCount">0</span> จาก <?php echo $totalPubs; ?> เรื่อง (เรียงจากปีล่าสุด)
                    </div>
                </div>
            </div>

            <!-- Main Content Card with Standard Bootstrap Nav Tabs -->
            <div class="card mb-4 shadow-sm border">
                <div class="card-header bg-white py-2 border-bottom">
                    <ul class="nav nav-pills pub-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="list-tab" data-toggle="tab" href="#tab-list" role="tab" aria-controls="tab-list" aria-selected="true">
                                <i class="fa fa-list-ol mr-1"></i> รายการบรรณานุกรม (List)
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="table-tab" data-toggle="tab" href="#tab-table" role="tab" aria-controls="tab-table" aria-selected="false">
                                <i class="fa fa-table mr-1"></i> ตารางข้อมูล (Table)
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="card-body p-3">
                    <div class="tab-content" id="myTabContent">
                        
                        <!-- Tab 1: Continuous Academic Bibliography List -->
                        <div class="tab-pane fade show active" id="tab-list" role="tabpanel" aria-labelledby="list-tab">
                            <div class="pub-biblio-card">
                                <div id="publicationsContainer">
                                    <!-- Populated by JavaScript -->
                                </div>
                            </div>
                        </div>

                        <!-- Tab 2: DataTables Table -->
                        <div class="tab-pane fade" id="tab-table" role="tabpanel" aria-labelledby="table-tab">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped table-bordered mb-0" id="table-publications-dt" style="width: 100%;">
                                    <thead class="thead-light">
                                        <tr>
                                            <th style="width: 85px; text-align: center;">ปี พ.ศ.</th>
                                            <th>รายการผลงานวิจัยและการอ้างอิงวิชาการ</th>
                                            <th style="width: 110px; text-align: center;">ระดับ (Tier)</th>
                                            <th style="width: 180px;">ผู้ประพันธ์</th>
                                            <th style="width: 120px; text-align: center;">ประเภท</th>
                                            <th style="width: 70px; text-align: center;">เอกสาร</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Populated by JavaScript -->
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                    <!-- No Results Alert -->
                    <div id="noResultsAlert" class="alert alert-warning text-center py-4 my-3" style="display: none;">
                        <i class="fa fa-exclamation-circle fa-2x text-warning mb-2 d-block"></i>
                        <h3 class="h6 font-weight-bold mb-1">ไม่พบผลงานวิจัยตามเงื่อนไขที่กำหนด</h3>
                        <p class="mb-2 text-muted small">กรุณาลองปรับคำค้นหา หรือกดปุ่มล้างตัวกรอง</p>
                        <button type="button" class="btn btn-outline-primary btn-sm" onclick="resetAllFilters()">
                            <i class="fa fa-refresh mr-1"></i> ล้างตัวกรองทั้งหมด
                        </button>
                    </div>
                </div>
            </div>

            <!-- Suggestion / Contact Box -->
            <div class="card border-0 shadow-sm" style="background: #f8f9fa; border-radius: 8px;">
                <div class="card-body py-3 px-4">
                    <div class="row align-items-center">
                        <div class="col-md-9">
                            <h2 class="h6 font-weight-bold text-dark mb-1">
                                <i class="fa fa-info-circle text-primary mr-1"></i> ข้อมูลผลงานทางวิชาการและงานวิจัย
                            </h2>
                            <p class="small text-muted mb-0">
                                รวบรวมข้อมูลผลงานวิชาการของคณาจารย์และนักศึกษา หลักสูตรวิทยาการคอมพิวเตอร์ หากต้องการปรับปรุงข้อมูลผลงานใหม่ สามารถติดต่อสำนักงานหลักสูตรได้โดยตรง
                            </p>
                        </div>
                        <div class="col-md-3 text-md-right mt-2 mt-md-0">
                            <a class="btn btn-outline-success btn-sm font-weight-bold" href="https://goo.gl/forms/IFFEmw0jO1UMMP602" target="_blank" rel="noopener">
                                <i class="fa fa-commenting-o mr-1"></i> ส่งข้อเสนอแนะ
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script>
        // Master Publications Data from PHP / Flat-file JSON
        const publicationsData = <?php echo json_encode($publications, JSON_UNESCAPED_UNICODE); ?>;
        
        let currentStyle = 'mko2';
        let filteredData = [...publicationsData];
        let dataTableInstance = null;

        document.addEventListener("DOMContentLoaded", function() {
            // Check URL parameters (e.g. ?author=... or ?year=...)
            const urlParams = new URLSearchParams(window.location.search);
            const authorParam = urlParams.get('author');
            const yearParam = urlParams.get('year');
            const tierParam = urlParams.get('tier');
            const searchParam = urlParams.get('search');

            if (authorParam) {
                const authorSelect = document.getElementById('filterAuthor');
                for (let i = 0; i < authorSelect.options.length; i++) {
                    if (authorSelect.options[i].value.includes(authorParam) || authorParam.includes(authorSelect.options[i].value)) {
                        authorSelect.selectedIndex = i;
                        break;
                    }
                }
            }
            if (yearParam) {
                document.getElementById('filterYear').value = yearParam;
            }
            if (tierParam) {
                document.getElementById('filterTier').value = tierParam;
            }
            if (searchParam) {
                document.getElementById('pubSearch').value = searchParam;
            }

            // Setup Event Listeners
            document.getElementById('pubSearch').addEventListener('input', applyFilters);
            document.getElementById('btnClearSearch').addEventListener('click', function() {
                document.getElementById('pubSearch').value = '';
                applyFilters();
            });
            document.getElementById('filterAuthor').addEventListener('change', applyFilters);
            document.getElementById('filterYear').addEventListener('change', applyFilters);
            document.getElementById('filterTier').addEventListener('change', applyFilters);
            document.getElementById('btnResetFilters').addEventListener('click', resetAllFilters);

            // Citation Style Switcher
            document.querySelectorAll('.style-btn-group .btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    document.querySelectorAll('.style-btn-group .btn').forEach(b => {
                        b.classList.remove('active', 'btn-primary');
                        b.classList.add('btn-outline-primary');
                    });
                    this.classList.add('active', 'btn-primary');
                    this.classList.remove('btn-outline-primary');

                    currentStyle = this.getAttribute('data-style');
                    renderCurrentView();
                });
            });

            // Re-draw DataTable on tab switch
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                if (e.target.id === 'table-tab') {
                    if (dataTableInstance) {
                        dataTableInstance.columns.adjust().draw();
                    }
                }
            });

            // Initial Filter & Render
            applyFilters();
        });

        function applyFilters() {
            const query = (document.getElementById('pubSearch').value || '').trim().toLowerCase();
            const authorFilter = (document.getElementById('filterAuthor').value || '').trim();
            const yearFilter = (document.getElementById('filterYear').value || '').trim();
            const tierFilter = (document.getElementById('filterTier').value || '').trim();

            filteredData = publicationsData.filter(item => {
                // Search query match
                if (query) {
                    const matchTitle = (item.title || '').toLowerCase().includes(query);
                    const matchAuthors = (item.authors || []).join(' ').toLowerCase().includes(query);
                    const matchJournal = (item.journal_name || '').toLowerCase().includes(query);
                    const matchConf = (item.conference_name || '').toLowerCase().includes(query);
                    const matchYear = String(item.year_th || '').includes(query) || String(item.year_en || '').includes(query);

                    if (!matchTitle && !matchAuthors && !matchJournal && !matchConf && !matchYear) {
                        return false;
                    }
                }

                // Author filter
                if (authorFilter) {
                    const authorsStr = (item.authors || []).join(' ');
                    const cleanAuthor = authorFilter.replace(/ผศ\.ดร\.|อาจารย์ ดร\.|ผศ\.|อาจารย์|ดร\./g, '').trim();
                    if (!authorsStr.includes(cleanAuthor)) {
                        return false;
                    }
                }

                // Year filter
                if (yearFilter && String(item.year_th) !== yearFilter) {
                    return false;
                }

                // Category / Type / Tier filter
                if (tierFilter) {
                    if (tierFilter === 'journal' && item.type !== 'journal') return false;
                    if (tierFilter === 'conference' && item.type !== 'conference') return false;
                    if (tierFilter === 'international' && item.language !== 'en') return false;
                    if (tierFilter === 'national' && item.language !== 'th') return false;
                    if (['scopus', 'tci 1', 'tci 2', 'กพอ'].includes(tierFilter)) {
                        const itemTier = (item.tier || '').toLowerCase();
                        if (!itemTier.includes(tierFilter)) return false;
                    }
                }

                return true;
            });

            // Sort strictly by newest year descending (latest first)
            filteredData.sort((a, b) => {
                const yA = parseInt(a.year_th || 0);
                const yB = parseInt(b.year_th || 0);
                if (yB !== yA) return yB - yA;
                return String(a.title || '').localeCompare(String(b.title || ''), 'th');
            });

            // Update visible counter
            document.getElementById('visibleCount').textContent = filteredData.length;
            document.getElementById('noResultsAlert').style.display = (filteredData.length === 0) ? 'block' : 'none';

            renderCurrentView();
        }

        function filterByMetric(type) {
            const tierSelect = document.getElementById('filterTier');
            const authorSelect = document.getElementById('filterAuthor');
            const searchInput = document.getElementById('pubSearch');
            const yearSelect = document.getElementById('filterYear');
            
            // Clear keyword and year for focused metric view
            searchInput.value = '';
            yearSelect.value = '';
            authorSelect.value = '';
            
            if (type === 'all') {
                tierSelect.value = '';
            } else if (type === 'journal') {
                tierSelect.value = 'journal';
            } else if (type === 'conference') {
                tierSelect.value = 'conference';
            } else if (type === 'scopus') {
                tierSelect.value = 'scopus';
            } else if (type === 'international') {
                tierSelect.value = 'international';
            } else if (type === 'tci 1') {
                tierSelect.value = 'tci 1';
            } else if (type === 'tci 2') {
                tierSelect.value = 'tci 2';
            } else if (type === 'faculty') {
                tierSelect.value = '';
                authorSelect.focus();
            }
            applyFilters();
        }

        function resetAllFilters() {
            document.getElementById('pubSearch').value = '';
            document.getElementById('filterAuthor').value = '';
            document.getElementById('filterYear').value = '';
            document.getElementById('filterTier').value = '';
            applyFilters();
        }

        function renderCurrentView() {
            renderListView();
            renderTableView();
        }

        // ==========================================
        // CITATION FORMATTING ENGINES (HTML)
        // ==========================================
        function formatAuthorsByStyle(authors, isThai, style) {
            if (!authors || !authors.length) return '';
            if (style === 'vancouver') {
                const limit = 6;
                let v = authors.slice(0, limit).join(', ');
                if (authors.length > limit) v += ', et al';
                return v;
            }
            if (authors.length === 1) return authors[0];
            if (authors.length === 2) {
                return isThai ? `${authors[0]} และ${authors[1]}` : `${authors[0]} and ${authors[1]}`;
            }
            const last = authors[authors.length - 1];
            const rest = authors.slice(0, -1).join(', ');
            return isThai ? `${rest} และ${last}` : `${rest}, and ${last}`;
        }

        function generateCitationHTML(pub, style) {
            const isThai = (pub.language === 'th');
            const year = isThai ? pub.year_th : pub.year_en;
            const authorsJoined = formatAuthorsByStyle(pub.authors, isThai, style);

            // 1. แบบ มคอ.2 (TQF 2) - รูปแบบเอกสารหลักสูตร พร้อมระบุช่วงเดือนและระดับ Tier
            if (style === 'mko2') {
                const tierSuffix = pub.tier ? ` ${pub.tier}.` : '';
                if (pub.type === 'journal') {
                    let cite = `${authorsJoined}. (${year}). ${pub.title}. <i>${pub.journal_name || 'วารสารวิชาการ'}</i>`;
                    if (pub.volume) {
                        cite += `, <i>${pub.volume}</i>`;
                        if (pub.issue) cite += `(${pub.issue})`;
                    }
                    if (pub.month_range) {
                        cite += `, ${pub.month_range}:`;
                        if (pub.pages) cite += ` ${pub.pages}.`;
                        else cite += `.`;
                    } else if (pub.pages) {
                        cite += `, ${pub.pages}.`;
                    } else {
                        cite += `.`;
                    }
                    cite += tierSuffix;
                    return cite;
                } else {
                    let confPlace = pub.publisher ? `${pub.city ? pub.city + ': ' : ''}${pub.publisher}.` : (pub.city ? `${pub.city}.` : '');
                    let pageStr = pub.pages ? ` (หน้า ${pub.pages}).` : '.';
                    if (isThai) {
                        return `${authorsJoined}. (${year}). ${pub.title}. ใน <i>${pub.conference_name || 'เอกสารสืบเนื่องการประชุมวิชาการ'}</i>${pageStr} ${confPlace}${tierSuffix}`.trim();
                    } else {
                        return `${authorsJoined}. (${year}). ${pub.title}. In <i>${pub.conference_name || 'Proceedings'}</i>${pageStr} ${confPlace}${tierSuffix}`.trim();
                    }
                }
            }

            // 2. แบบ APA 6th (Thai) มาตรฐาน - บรรณานุกรมวิชาการแท้ (ไม่มี Tier, ไม่มีช่วงเดือน)
            if (style === 'apa6') {
                if (pub.type === 'journal') {
                    let cite = `${authorsJoined}. (${year}). ${pub.title}. <i>${pub.journal_name || 'วารสารวิชาการ'}</i>`;
                    if (pub.volume) {
                        cite += `, <i>${pub.volume}</i>`;
                        if (pub.issue) cite += `(${pub.issue})`;
                    }
                    if (pub.pages) cite += `, ${pub.pages}.`;
                    else cite += `.`;
                    return cite;
                } else {
                    let confPlace = pub.publisher ? `${pub.city ? pub.city + ': ' : ''}${pub.publisher}.` : (pub.city ? `${pub.city}.` : '');
                    let pageStr = pub.pages ? ` (หน้า ${pub.pages}).` : '.';
                    if (isThai) {
                        return `${authorsJoined}. (${year}). ${pub.title}. ใน <i>${pub.conference_name || 'เอกสารสืบเนื่องการประชุมวิชาการ'}</i>${pageStr} ${confPlace}`.trim();
                    } else {
                        return `${authorsJoined}. (${year}). ${pub.title}. In <i>${pub.conference_name || 'Proceedings'}</i>${pageStr} ${confPlace}`.trim();
                    }
                }
            }

            // 2. APA 7th Edition
            if (style === 'apa7') {
                const doiLink = pub.doi ? ` https://doi.org/${pub.doi}` : (pub.url ? ` ${pub.url}` : '');
                if (pub.type === 'journal') {
                    let cite = `${authorsJoined}. (${pub.year_en}). ${pub.title}. <i>${pub.journal_name || ''}</i>`;
                    if (pub.volume) {
                        cite += `, <i>${pub.volume}</i>`;
                        if (pub.issue) cite += `(${pub.issue})`;
                    }
                    if (pub.pages) cite += `, ${pub.pages}.`;
                    else cite += `.`;
                    cite += doiLink;
                    return cite;
                } else {
                    let pagePart = pub.pages ? ` (pp. ${pub.pages}).` : '.';
                    return `${authorsJoined}. (${pub.year_en}). ${pub.title}. In <i>${pub.conference_name || 'Proceedings'}</i>${pagePart} ${pub.publisher || ''}.${doiLink}`.trim();
                }
            }

            // 3. IEEE Style
            if (style === 'ieee') {
                const jName = pub.journal_abbr || pub.journal_name || 'Journal';
                const doiStr = pub.doi ? `, doi: ${pub.doi}` : '';
                if (pub.type === 'journal') {
                    let cite = `${authorsJoined}, "${pub.title}," <i>${jName}</i>`;
                    if (pub.volume) cite += `, vol. ${pub.volume}`;
                    if (pub.issue) cite += `, no. ${pub.issue}`;
                    if (pub.pages) cite += `, pp. ${pub.pages}`;
                    cite += `, ${pub.year_en}${doiStr}.`;
                    return cite;
                } else {
                    let pagePart = pub.pages ? `, pp. ${pub.pages}` : '';
                    return `${authorsJoined}, "${pub.title}," in <i>${pub.conference_name || 'Conf. Proc.'}</i>, ${pub.city || ''}, ${pub.year_en}${pagePart}${doiStr}.`;
                }
            }

            // 4. Vancouver Style
            if (style === 'vancouver') {
                const jName = (pub.journal_abbr || pub.journal_name || 'Journal').replace(/\./g, '');
                const doiStr = pub.doi ? ` doi: ${pub.doi}.` : '';
                if (pub.type === 'journal') {
                    let cite = `${authorsJoined}. ${pub.title}. ${jName}. ${pub.year_en}`;
                    if (pub.volume) {
                        cite += `;${pub.volume}`;
                        if (pub.issue) cite += `(${pub.issue})`;
                    }
                    if (pub.pages) cite += `:${pub.pages}.`;
                    else cite += `.`;
                    cite += doiStr;
                    return cite;
                } else {
                    let pagePart = pub.pages ? ` p. ${pub.pages}.` : '.';
                    return `${authorsJoined}. ${pub.title}. In: ${pub.conference_name || 'Proceedings'}; ${pub.city || 'Bangkok'}: ${pub.publisher || ''}; ${pub.year_en}.${pagePart}${doiStr}`.trim();
                }
            }

            return pub.title;
        }

        // ==========================================
        // RENDER: ACADEMIC BIBLIOGRAPHY LIST VIEW
        // ==========================================
        function renderListView() {
            const container = document.getElementById('publicationsContainer');
            container.innerHTML = '';

            if (filteredData.length === 0) return;

            const ol = document.createElement('ol');
            ol.className = 'pub-biblio-list';

            filteredData.forEach(pub => {
                const li = document.createElement('li');
                li.className = 'pub-biblio-item';
                li.id = `item-${pub.id}`;

                const citationContent = generateCitationHTML(pub, currentStyle);

                let linkHTML = '';
                if (pub.doi) {
                    linkHTML = ` <a href="https://doi.org/${pub.doi}" target="_blank" rel="noopener" class="pub-doc-link" title="เปิดเอกสารผ่าน DOI">[DOI: ${pub.doi}]</a>`;
                } else if (pub.url) {
                    linkHTML = ` <a href="${pub.url}" target="_blank" rel="noopener" class="pub-doc-link" title="เปิดอ่านบทความ">[เอกสารฉบับเต็ม]</a>`;
                }

                li.innerHTML = `${citationContent}${linkHTML}`;
                ol.appendChild(li);
            });

            container.appendChild(ol);
        }

        // ==========================================
        // RENDER: DATA TABLE VIEW
        // ==========================================
        function renderTableView() {
            const tableBody = document.querySelector('#table-publications-dt tbody');
            tableBody.innerHTML = '';

            if ($.fn.DataTable.isDataTable('#table-publications-dt')) {
                $('#table-publications-dt').DataTable().destroy();
            }

            filteredData.forEach(pub => {
                const tr = document.createElement('tr');
                const citationContent = generateCitationHTML(pub, currentStyle);
                const authorsStr = (pub.authors || []).join(', ');

                let tierBadge = '<span class="text-muted small">-</span>';
                if (pub.tier) {
                    let badgeClass = 'badge-secondary';
                    if (pub.tier.includes('Scopus')) badgeClass = 'badge-primary';
                    else if (pub.tier.includes('TCI 1') || pub.tier.includes('TCI1')) badgeClass = 'badge-success';
                    else if (pub.tier.includes('TCI 2') || pub.tier.includes('TCI2')) badgeClass = 'badge-info';
                    tierBadge = `<span class="badge ${badgeClass} font-weight-bold">${pub.tier}</span>`;
                }

                let linkBtn = '-';
                if (pub.doi) {
                    linkBtn = `<a href="https://doi.org/${pub.doi}" target="_blank" rel="noopener" class="btn btn-sm btn-outline-primary py-0 px-2" title="DOI">DOI</a>`;
                } else if (pub.url) {
                    linkBtn = `<a href="${pub.url}" target="_blank" rel="noopener" class="btn btn-sm btn-outline-primary py-0 px-2" title="Link">ลิงก์</a>`;
                }

                tr.innerHTML = `
                    <td class="font-weight-bold text-center text-dark" title="วันที่เผยแพร่: ${pub.published_date_th || pub.published_date}">${pub.year_th}<br><small class="text-muted">${pub.year_en}</small></td>
                    <td>${citationContent}</td>
                    <td class="text-center">${tierBadge}</td>
                    <td class="small">${authorsStr}</td>
                    <td class="text-center"><span class="badge badge-light border">${pub.category}</span></td>
                    <td class="text-center">${linkBtn}</td>
                `;

                tableBody.appendChild(tr);
            });

            dataTableInstance = $('#table-publications-dt').DataTable({
                pageLength: 20,
                language: {
                    search: "ค้นหาในตาราง:",
                    lengthMenu: "แสดง _MENU_ แถวต่อหน้า",
                    info: "แสดง _START_ ถึง _END_ จากทั้งหมด _TOTAL_ รายการ",
                    paginate: {
                        first: "แรกสุด",
                        last: "ท้ายสุด",
                        next: "ถัดไป",
                        previous: "ก่อนหน้า"
                    }
                },
                order: [[0, 'desc']]
            });
        }
    </script>
</body>

</html>
