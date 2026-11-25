<?php
/**
 * CS Publications Entry & Edit Form
 * Computer Science, Valaya Alongkorn Rajabhat University (VRU)
 * Flat-file CRUD Form with Auto-fill, Live Preview, and Honeypot Security
 */

$dbPath = __DIR__ . '/databases/publications.json';
$journalsPath = __DIR__ . '/databases/journals.json';
$teachersPath = __DIR__ . '/json/teacher.json';

// 1. Load Publications to compute Next Auto-ID or fetch existing record for Edit mode
$publications = [];
if (file_exists($dbPath)) {
    $raw = file_get_contents($dbPath);
    $raw = preg_replace('/^\xEF\xBB\xBF/', '', $raw);
    $publications = json_decode($raw, true) ?: [];
}

// 2. Load Journals
$journals = [];
if (file_exists($journalsPath)) {
    $rawJ = file_get_contents($journalsPath);
    $rawJ = preg_replace('/^\xEF\xBB\xBF/', '', $rawJ);
    $journals = json_decode($rawJ, true) ?: [];
}

// 3. Load Teachers
$teachers = [];
if (file_exists($teachersPath)) {
    $rawT = file_get_contents($teachersPath);
    $rawT = preg_replace('/^\xEF\xBB\xBF/', '', $rawT);
    $teacherData = json_decode($rawT, true) ?: [];
    $teachers = $teacherData['people'] ?? [];
}

// Teacher ID Slug Map
$teacherSlugMap = [
    'ณัฏฐิรา ศุขไพบูลย์' => 'nattira',
    'ประณมกร อัมพรพรรดิ์' => 'pranomkorn',
    'ดาวรถา วีระพันธ์' => 'daoratha',
    'วิศรุต กลิ่นหอม' => 'witsarut',
    'ณัฐรดี อนุพงค์' => 'natradee',
    'ชวลิต โควีระวงศ์' => 'chawalit'
];

// 4. Check Edit Mode vs Create Mode
$editId = trim($_GET['id'] ?? '');
$isEdit = false;
$item = [];

if (!empty($editId)) {
    foreach ($publications as $pub) {
        if (strtoupper($pub['id']) === strtoupper($editId)) {
            $isEdit = true;
            $item = $pub;
            break;
        }
    }
}

// Compute Auto-ID if not edit mode
if (!$isEdit) {
    $maxNum = 0;
    foreach ($publications as $pub) {
        if (preg_match('/^PUB-(\d+)$/i', $pub['id'] ?? '', $matches)) {
            $num = intval($matches[1]);
            if ($num > $maxNum) {
                $maxNum = $num;
            }
        }
    }
    $nextId = sprintf('PUB-%03d', $maxNum + 1);
    
    // Default values for new form
    $item = [
        'id' => $nextId,
        'type' => 'journal',
        'language' => 'th',
        'tier' => 'TCI 2',
        'category' => 'วารสารระดับชาติ',
        'title' => '',
        'authors' => [],
        'teacher_ids' => [],
        'year_th' => intval(date('Y')) + 543,
        'year_en' => intval(date('Y')),
        'month' => intval(date('n')),
        'date' => intval(date('j')),
        'journal_name' => '',
        'journal_abbr' => '',
        'volume' => '',
        'issue' => '',
        'month_range' => '',
        'pages' => '',
        'conference_name' => '',
        'city' => '',
        'country' => 'ไทย',
        'publisher' => '',
        'doi' => '',
        'url' => '',
        'journal_id' => '',
        'status' => 'pending_review'
    ];
}

$pageTitle = $isEdit ? "แก้ไขผลงานตีพิมพ์ทางวิชาการ ({$item['id']})" : "บันทึกผลงานตีพิมพ์ทางวิชาการใหม่ ({$item['id']})";
$og_title = "{$pageTitle} | CS VRU";
$og_description = "ระบบบันทึกและจัดการผลงานวิจัย คณาจารย์หลักสูตรวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์";
$og_url = "https://cs.vru.ac.th/publication-form.php";
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <?php include("layouts/meta.php"); ?>
    <style>
        body, .content {
            color: #212529 !important;
            background-color: #f8fafc;
        }

        .form-hero {
            background: linear-gradient(135deg, #581845 0%, #2b0c22 100%);
            color: #ffffff;
            border-radius: 16px;
            padding: 2.25rem 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 10px 25px -5px rgba(88, 24, 69, 0.25);
            position: relative;
            overflow: hidden;
        }

        .form-hero::after {
            content: "";
            position: absolute;
            right: -40px;
            bottom: -40px;
            width: 180px;
            height: 180px;
            background: rgba(245, 158, 11, 0.15);
            border-radius: 50%;
            pointer-events: none;
        }

        .form-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            padding: 1.75rem;
            margin-bottom: 1.75rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
            transition: all 0.2s ease-in-out;
        }

        .form-card:hover {
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.06);
            border-color: #cbd5e1;
        }

        .section-header {
            display: flex;
            align-items: center;
            gap: 0.65rem;
            margin-bottom: 1.25rem;
            padding-bottom: 0.75rem;
            border-bottom: 2px solid #f1f5f9;
        }

        .section-header h2 {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1e293b;
            margin: 0;
        }

        .section-icon {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.15rem;
            background: #fdf2f8;
            color: #581845;
            border: 1px solid #fbcfe8;
        }

        .form-label {
            font-weight: 600;
            color: #334155;
            font-size: 0.95rem;
            margin-bottom: 0.35rem;
        }

        .required-star {
            color: #ef4444;
            font-weight: bold;
        }

        .form-control, .form-select {
            border-radius: 8px;
            border: 1px solid #cbd5e1;
            padding: 0.6rem 0.85rem;
            font-size: 0.95rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-control:focus, .form-select:focus {
            border-color: #581845;
            box-shadow: 0 0 0 0.2rem rgba(88, 24, 69, 0.15);
        }

        .teacher-badge-checkbox {
            cursor: pointer;
            user-select: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 0.5rem 0.75rem;
            transition: all 0.2s ease;
        }

        .teacher-badge-checkbox:hover {
            background: #f1f5f9;
            border-color: #94a3b8;
        }

        .teacher-badge-checkbox input:checked + span {
            font-weight: 700;
            color: #581845;
        }

        .preview-box {
            background: #fffbeb;
            border: 1px solid #fde68a;
            border-radius: 12px;
            padding: 1.25rem 1.5rem;
            margin-top: 1rem;
            position: relative;
        }

        .preview-header {
            font-size: 0.85rem;
            font-weight: 700;
            text-transform: uppercase;
            color: #b45309;
            letter-spacing: 0.05em;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .citation-live-text {
            color: #1e293b;
            font-size: 1rem;
            line-height: 1.65;
            font-family: inherit;
        }

        .type-toggle-btn {
            border: 2px solid #e2e8f0;
            background: #ffffff;
            color: #475569;
            border-radius: 10px;
            padding: 0.75rem 1.25rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            width: 100%;
        }

        .type-toggle-btn.active {
            border-color: #581845;
            background: #fdf2f8;
            color: #581845;
            box-shadow: 0 2px 8px rgba(88, 24, 69, 0.12);
        }

        .btn-submit {
            background: #581845;
            color: #ffffff;
            font-weight: 700;
            padding: 0.75rem 2rem;
            border-radius: 10px;
            border: none;
            transition: all 0.2s;
            box-shadow: 0 4px 12px rgba(88, 24, 69, 0.25);
        }

        .btn-submit:hover {
            background: #400f31;
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(88, 24, 69, 0.35);
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
                    <li class="breadcrumb-item"><a href="publication-new.php" class="text-primary">ผลงานตีพิมพ์วิชาการ</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $isEdit ? 'แก้ไขผลงาน' : 'บันทึกผลงานใหม่'; ?></li>
                </ol>
            </nav>

            <!-- Hero Banner -->
            <div class="form-hero">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div>
                        <span class="badge badge-warning text-dark px-3 py-1 font-weight-bold mb-2">
                            <?= $isEdit ? '🛠️ EDIT MODE (แก้ไขข้อมูล)' : '✨ CREATE MODE (เพิ่มข้อมูลใหม่)'; ?>
                        </span>
                        <h1 class="h3 font-weight-bold mb-2 text-white">
                            <?= $isEdit ? "แก้ไขผลงานตีพิมพ์วิชาการ: {$item['id']}" : 'แบบฟอร์มบันทึกผลงานตีพิมพ์ทางวิชาการ'; ?>
                        </h1>
                        <p class="mb-0 text-white-50" style="font-size: 0.95rem;">
                            ระบบจัดเก็บฐานข้อมูลงานวิจัย Flat-file JSON หลักสูตรวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์
                        </p>
                    </div>
                    <div class="mt-3 mt-md-0">
                        <a href="publication-new.php" class="btn btn-outline-light btn-sm px-3 py-2 font-weight-bold" style="border-radius: 8px;">
                            <i class="fa fa-arrow-left mr-1"></i> กลับหน้ารายการผลงาน
                        </a>
                    </div>
                </div>
            </div>

            <!-- Main Form Card -->
            <form id="publicationForm" method="POST" action="api/save-publication.php">
                
                <!-- Hidden Anti-Spam Honeypot Field -->
                <input type="text" name="hp_check" id="hp_check" style="position: absolute; left: -9999px; opacity: 0;" tabindex="-1" autocomplete="off">
                
                <!-- Hidden Form Fields -->
                <input type="hidden" name="id" id="pub_id" value="<?= htmlspecialchars($item['id']); ?>">
                <input type="hidden" name="type" id="pub_type" value="<?= htmlspecialchars($item['type']); ?>">

                <!-- SECTION 1: ประเภทและระดับผลงาน (Type & Category) -->
                <div class="form-card">
                    <div class="section-header">
                        <div class="section-icon">📌</div>
                        <h2>ส่วนที่ 1: รหัสและประเภทการเผยแพร่</h2>
                        <span class="ml-auto badge badge-light border text-secondary font-weight-bold p-2" style="font-size: 0.9rem;">
                            รหัสผลงาน: <strong class="text-primary"><?= htmlspecialchars($item['id']); ?></strong>
                        </span>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="form-label">ประเภทการเผยแพร่ <span class="required-star">*</span></label>
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="type-toggle-btn <?= ($item['type'] === 'journal') ? 'active' : ''; ?>" id="btnTypeJournal" onclick="switchType('journal')">
                                        <span>📖 วารสาร (Journal)</span>
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="type-toggle-btn <?= ($item['type'] === 'conference') ? 'active' : ''; ?>" id="btnTypeConference" onclick="switchType('conference')">
                                        <span>🎙️ ประชุมวิชาการ (Conf)</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-6 mb-3 mb-md-0">
                            <label class="form-label">ภาษาบทความ <span class="required-star">*</span></label>
                            <select name="language" id="pub_language" class="form-control" onchange="updateLiveCitation()">
                                <option value="th" <?= ($item['language'] === 'th') ? 'selected' : ''; ?>>ภาษาไทย (th)</option>
                                <option value="en" <?= ($item['language'] === 'en') ? 'selected' : ''; ?>>English (en)</option>
                            </select>
                        </div>

                        <div class="col-md-3 col-6 mb-3 mb-md-0">
                            <label class="form-label">ระดับคุณภาพ (Tier) <span class="required-star">*</span></label>
                            <select name="tier" id="pub_tier" class="form-control" onchange="updateLiveCitation()">
                                <option value="TCI 1" <?= ($item['tier'] === 'TCI 1') ? 'selected' : ''; ?>>TCI 1</option>
                                <option value="TCI 2" <?= ($item['tier'] === 'TCI 2') ? 'selected' : ''; ?>>TCI 2</option>
                                <option value="Scopus" <?= ($item['tier'] === 'Scopus') ? 'selected' : ''; ?>>Scopus</option>
                                <option value="Web of Science" <?= ($item['tier'] === 'Web of Science') ? 'selected' : ''; ?>>Web of Science</option>
                                <option value="เกณฑ์ กพอ." <?= ($item['tier'] === 'เกณฑ์ กพอ.') ? 'selected' : ''; ?>>เกณฑ์ กพอ.</option>
                                <option value="TCI" <?= ($item['tier'] === 'TCI') ? 'selected' : ''; ?>>TCI</option>
                                <option value="" <?= empty($item['tier']) ? 'selected' : ''; ?>>- ไม่ระบุ -</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="form-label">หมวดหมู่ระดับการเผยแพร่</label>
                            <select name="category" id="pub_category" class="form-control" onchange="updateLiveCitation()">
                                <option value="วารสารระดับชาติ" <?= ($item['category'] === 'วารสารระดับชาติ') ? 'selected' : ''; ?>>วารสารระดับชาติ</option>
                                <option value="วารสารนานาชาติ" <?= ($item['category'] === 'วารสารนานาชาติ') ? 'selected' : ''; ?>>วารสารนานาชาติ</option>
                                <option value="การประชุมวิชาการระดับชาติ" <?= ($item['category'] === 'การประชุมวิชาการระดับชาติ') ? 'selected' : ''; ?>>การประชุมวิชาการระดับชาติ</option>
                                <option value="การประชุมวิชาการนานาชาติ" <?= ($item['category'] === 'การประชุมวิชาการนานาชาติ') ? 'selected' : ''; ?>>การประชุมวิชาการนานาชาติ</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">สถานะการตรวจสอบ (Audit Status)</label>
                            <div class="pt-2">
                                <?php if (($item['status'] ?? 'pending_review') === 'verified'): ?>
                                    <span class="badge badge-success px-3 py-2 font-weight-normal" style="font-size: 0.95rem;">
                                        🟢 ตรวจสอบแล้ว (Verified)
                                    </span>
                                    <small class="text-muted ml-2">ตรวจสอบเมื่อ: <?= htmlspecialchars($item['verified_at'] ?? '-'); ?></small>
                                <?php else: ?>
                                    <span class="badge badge-warning text-dark px-3 py-2 font-weight-normal" style="font-size: 0.95rem;">
                                        🟡 รอตรวจทานประจำปี (Pending Review)
                                    </span>
                                    <small class="text-muted ml-2">จะได้รับการตรวจทานในรอบประเมิน SAR ประจำปี</small>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SECTION 2: ข้อมูลบทความและผู้ประพันธ์ (Article & Authors) -->
                <div class="form-card">
                    <div class="section-header">
                        <div class="section-icon">✍️</div>
                        <h2>ส่วนที่ 2: ข้อมูลบทความและอาจารย์ผู้ร่วมวิจัย</h2>
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label" for="pub_title">ชื่อบทความวิจัย / ผลงานตีพิมพ์ (Title) <span class="required-star">*</span></label>
                        <textarea class="form-control" name="title" id="pub_title" rows="2" placeholder="กรอกชื่อบทความวิจัยภาษาไทยหรือภาษาอังกฤษ..." required oninput="updateLiveCitation()"><?= htmlspecialchars($item['title']); ?></textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label mb-2">อาจารย์ในหลักสูตรที่มีส่วนร่วม (คลิกเพื่อเพิ่มชื่อในช่องผู้แต่งอัตโนมัติ):</label>
                        <div class="d-flex flex-wrap gap-2" style="gap: 0.5rem;">
                            <?php foreach ($teacherSlugMap as $tName => $slug): 
                                $isChecked = in_array($slug, $item['teacher_ids'] ?? []) || in_array($slug, ['wisrut', 'witsarut']) && (in_array('wisrut', $item['teacher_ids'] ?? []) || in_array('witsarut', $item['teacher_ids'] ?? []));
                            ?>
                                <label class="teacher-badge-checkbox">
                                    <input type="checkbox" name="teacher_ids[]" value="<?= $slug; ?>" data-name="<?= $tName; ?>" <?= $isChecked ? 'checked' : ''; ?> onchange="onTeacherCheckChange(this)">
                                    <span><?= $tName; ?></span>
                                </label>
                            <?php endforeach; ?>
                        </div>
                        <small class="text-muted d-block mt-1">
                            * ติ๊กถูกที่ชื่ออาจารย์ ระบบจะเพิ่มชื่อเข้าช่องผู้แต่ง (Authors) ด้านล่างโดยอัตโนมัติ
                        </small>
                    </div>

                    <div class="form-group mb-0">
                        <label class="form-label" for="pub_authors">รายชื่อผู้ประพันธ์ทั้งหมด (Authors) <span class="required-star">*</span></label>
                        <?php 
                            $authorsStr = is_array($item['authors']) ? implode(', ', $item['authors']) : $item['authors'];
                        ?>
                        <input type="text" class="form-control" name="authors" id="pub_authors" value="<?= htmlspecialchars($authorsStr); ?>" placeholder="เช่น ชวลิต โควีระวงศ์, ดาวรถา วีระพันธ์, สมศรี ใจดี" required oninput="updateLiveCitation()">
                        <small class="text-muted">คั่นรายชื่อผู้แต่งแต่ละคนด้วยเครื่องหมายจุลภาค (,)</small>
                    </div>
                </div>

                <!-- SECTION 3: ข้อมูลแหล่งตีพิมพ์ (Journal / Conference Source) -->
                <div class="form-card">
                    <div class="section-header">
                        <div class="section-icon">📚</div>
                        <h2 id="sourceHeaderTitle">ส่วนที่ 3: ข้อมูลวารสารวิชาการ (Journal Details)</h2>
                    </div>

                    <!-- Journal Fields -->
                    <div id="journalFields">
                        <div class="form-group mb-3">
                            <label class="form-label">เลือกวารสารจากฐานข้อมูล (Auto-fill ช่วยกรอกอัตโนมัติ):</label>
                            <select class="form-control" id="journalSelector" onchange="onSelectMasterJournal(this)">
                                <option value="">-- พิมพ์ค้นหาหรือเลือกวารสารเพื่อเติมข้อมูลอัตโนมัติ --</option>
                                <?php foreach ($journals as $j): 
                                    $isSelected = ($item['journal_id'] ?? '') === $j['id'];
                                ?>
                                    <option value="<?= htmlspecialchars($j['id']); ?>" 
                                            data-name-th="<?= htmlspecialchars($j['name_th'] ?? ''); ?>"
                                            data-name-en="<?= htmlspecialchars($j['name_en'] ?? ''); ?>"
                                            data-abbr="<?= htmlspecialchars($j['abbr'] ?? ''); ?>"
                                            data-tier="<?= htmlspecialchars($j['current_tier'] ?? $j['tier'] ?? ''); ?>"
                                            data-category="<?= htmlspecialchars($j['category'] ?? ''); ?>"
                                            data-publisher="<?= htmlspecialchars($j['publisher'] ?? ''); ?>"
                                            data-url="<?= htmlspecialchars($j['url'] ?? ''); ?>"
                                            <?= $isSelected ? 'selected' : ''; ?>>
                                        <?= htmlspecialchars($j['name_th']); ?> (<?= htmlspecialchars($j['current_tier'] ?? $j['tier']); ?>)
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <input type="hidden" name="journal_id" id="pub_journal_id" value="<?= htmlspecialchars($item['journal_id'] ?? ''); ?>">
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-8 mb-3 mb-md-0">
                                <label class="form-label" for="pub_journal_name">ชื่อวารสารวิชาการ (Journal Name) <span class="required-star">*</span></label>
                                <input type="text" class="form-control" name="journal_name" id="pub_journal_name" value="<?= htmlspecialchars($item['journal_name'] ?? ''); ?>" placeholder="ระบุชื่อวารสาร..." oninput="updateLiveCitation()">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="pub_journal_abbr">ชื่อย่อวารสาร (Abbreviation)</label>
                                <input type="text" class="form-control" name="journal_abbr" id="pub_journal_abbr" value="<?= htmlspecialchars($item['journal_abbr'] ?? ''); ?>" placeholder="เช่น JRIST, VRDJ-Sci" oninput="updateLiveCitation()">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3 col-6 mb-3 mb-md-0">
                                <label class="form-label" for="pub_volume">ปีที่ (Volume)</label>
                                <input type="text" class="form-control" name="volume" id="pub_volume" value="<?= htmlspecialchars($item['volume'] ?? ''); ?>" placeholder="เช่น 14" oninput="updateLiveCitation()">
                            </div>
                            <div class="col-md-3 col-6 mb-3 mb-md-0">
                                <label class="form-label" for="pub_issue">ฉบับที่ (Issue)</label>
                                <input type="text" class="form-control" name="issue" id="pub_issue" value="<?= htmlspecialchars($item['issue'] ?? ''); ?>" placeholder="เช่น 2" oninput="updateLiveCitation()">
                            </div>
                            <div class="col-md-3 col-6">
                                <label class="form-label" for="pub_month_range">ช่วงเดือน (Month Range)</label>
                                <input type="text" class="form-control" name="month_range" id="pub_month_range" value="<?= htmlspecialchars($item['month_range'] ?? ''); ?>" placeholder="เช่น พฤษภาคม - สิงหาคม" oninput="updateLiveCitation()">
                            </div>
                            <div class="col-md-3 col-6">
                                <label class="form-label" for="pub_pages">เลขหน้า (Pages)</label>
                                <input type="text" class="form-control" name="pages" id="pub_pages" value="<?= htmlspecialchars($item['pages'] ?? ''); ?>" placeholder="เช่น 53-72" oninput="updateLiveCitation()">
                            </div>
                        </div>
                    </div>

                    <!-- Conference Fields -->
                    <div id="conferenceFields" style="display: none;">
                        <div class="form-group mb-3">
                            <label class="form-label" for="pub_conference_name">ชื่อการประชุมวิชาการ (Conference Name) <span class="required-star">*</span></label>
                            <input type="text" class="form-control" name="conference_name" id="pub_conference_name" value="<?= htmlspecialchars($item['conference_name'] ?? ''); ?>" placeholder="เช่น การประชุมวิชาการระดับชาติ วิทยาศาสตร์และเทคโนโลยีระหว่างสถาบัน (ASTC 2026)" oninput="updateLiveCitation()">
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4 mb-3 mb-md-0">
                                <label class="form-label" for="pub_city">เมือง/จังหวัดที่จัด (City)</label>
                                <input type="text" class="form-control" name="city" id="pub_city" value="<?= htmlspecialchars($item['city'] ?? ''); ?>" placeholder="เช่น ปทุมธานี, กรุงเทพมหานคร" oninput="updateLiveCitation()">
                            </div>
                            <div class="col-md-4 mb-3 mb-md-0">
                                <label class="form-label" for="pub_country">ประเทศ (Country)</label>
                                <input type="text" class="form-control" name="country" id="pub_country" value="<?= htmlspecialchars($item['country'] ?? 'ไทย'); ?>" placeholder="เช่น ไทย, Japan" oninput="updateLiveCitation()">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="pub_conf_pages">เลขหน้าในรายงานสืบเนื่อง (Pages)</label>
                                <input type="text" class="form-control" id="pub_conf_pages" value="<?= htmlspecialchars($item['pages'] ?? ''); ?>" placeholder="เช่น 112-120" oninput="document.getElementById('pub_pages').value = this.value; updateLiveCitation();">
                            </div>
                        </div>
                    </div>

                    <!-- Common Publisher Field -->
                    <div class="form-group mb-0">
                        <label class="form-label" for="pub_publisher">สถานที่พิมพ์ / สำนักพิมพ์ (Publisher)</label>
                        <input type="text" class="form-control" name="publisher" id="pub_publisher" value="<?= htmlspecialchars($item['publisher'] ?? ''); ?>" placeholder="ระบบจะสร้างให้อัตโนมัติหากปล่อยว่าง" oninput="updateLiveCitation()">
                    </div>
                </div>

                <!-- SECTION 4: วันที่และการเข้าถึงเอกสาร (Dates & Links) -->
                <div class="form-card">
                    <div class="section-header">
                        <div class="section-icon">📅</div>
                        <h2>ส่วนที่ 4: วันที่เผยแพร่และลิงก์เอกสาร</h2>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3 col-4">
                            <label class="form-label" for="pub_date">วันที่</label>
                            <input type="number" class="form-control" name="date" id="pub_date" min="1" max="31" value="<?= htmlspecialchars($item['date']); ?>" oninput="updateLiveCitation()">
                        </div>
                        <div class="col-md-3 col-8">
                            <label class="form-label" for="pub_month">เดือน</label>
                            <select name="month" id="pub_month" class="form-control" onchange="updateLiveCitation()">
                                <?php 
                                $thai_months = ["", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];
                                for ($m = 1; $m <= 12; $m++): ?>
                                    <option value="<?= $m; ?>" <?= ($item['month'] == $m) ? 'selected' : ''; ?>>
                                        <?= $m; ?>. <?= $thai_months[$m]; ?>
                                    </option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <div class="col-md-3 col-6 mt-3 mt-md-0">
                            <label class="form-label" for="pub_year_th">ปี พ.ศ. (Thai Year)</label>
                            <input type="number" class="form-control" name="year_th" id="pub_year_th" value="<?= htmlspecialchars($item['year_th']); ?>" oninput="syncYears('th'); updateLiveCitation();">
                        </div>
                        <div class="col-md-3 col-6 mt-3 mt-md-0">
                            <label class="form-label" for="pub_year_en">ปี ค.ศ. (CE Year)</label>
                            <input type="number" class="form-control" name="year_en" id="pub_year_en" value="<?= htmlspecialchars($item['year_en']); ?>" oninput="syncYears('en'); updateLiveCitation();">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="form-label" for="pub_doi">DOI (ถ้ามี)</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-light" style="font-size: 0.85rem;">doi.org/</span>
                                </div>
                                <input type="text" class="form-control" name="doi" id="pub_doi" value="<?= htmlspecialchars($item['doi'] ?? ''); ?>" placeholder="เช่น 10.14456/vru.2026.12" oninput="updateLiveCitation()">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="pub_url">URL บทความ / ลิงก์ดาวน์โหลดฉบับเต็ม</label>
                            <input type="url" class="form-control" name="url" id="pub_url" value="<?= htmlspecialchars($item['url'] ?? ''); ?>" placeholder="https://..." oninput="updateLiveCitation()">
                        </div>
                    </div>
                </div>

                <!-- SECTION 5: กล่องแสดงตัวอย่างการอ้างอิงสด (Live Citation Preview) -->
                <div class="form-card" style="border-left: 4px solid #f59e0b;">
                    <div class="preview-header">
                        <span>👁️ ตัวอย่างการอ้างอิงสดตามมาตรฐาน (Live Citation Preview - มคอ.2 / APA 7th)</span>
                    </div>
                    <div class="preview-box">
                        <div class="citation-live-text" id="citationLiveBox">
                            กำลังโหลดตัวอย่างการอ้างอิง...
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="d-flex flex-wrap align-items-center justify-content-between mb-5 gap-3">
                    <a href="publication-new.php" class="btn btn-outline-secondary px-4 py-2" style="border-radius: 8px;">
                        <i class="fa fa-times mr-1"></i> ยกเลิก
                    </a>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-submit d-flex align-items-center gap-2" id="btnSubmit">
                            <i class="fa fa-save mr-1"></i>
                            <span id="btnSubmitText"><?= $isEdit ? 'บันทึกการแก้ไขผลงาน' : '💾 บันทึกผลงานใหม่'; ?></span>
                        </button>
                    </div>
                </div>

            </form>

        </div>
    </div>

    <!-- Alert / Success Modal -->
    <div class="modal fade" id="resultModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="border-radius: 14px; overflow: hidden; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
                <div class="modal-header bg-success text-white py-3">
                    <h5 class="modal-title font-weight-bold" id="modalTitle">🎉 บันทึกสำเร็จ</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-4 text-center">
                    <div class="display-4 text-success mb-3">✅</div>
                    <h4 class="font-weight-bold text-dark mb-2" id="modalPubId">PUB-XXX</h4>
                    <p class="text-secondary" id="modalMessage">บันทึกข้อมูลผลงานเรียบร้อยแล้ว</p>
                </div>
                <div class="modal-footer bg-light justify-content-center p-3">
                    <a href="publication-new.php" class="btn btn-primary px-4 py-2 font-weight-bold" style="border-radius: 8px;">
                        ไปยังหน้ารายการผลงาน
                    </a>
                    <button type="button" class="btn btn-outline-secondary px-4 py-2 font-weight-bold" data-dismiss="modal" style="border-radius: 8px;" onclick="window.location.href='publication-form.php'">
                        บันทึกรายการถัดไป
                    </button>
                </div>
            </div>
        </div>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>

    <script>
        // Switch between Journal and Conference
        function switchType(type) {
            document.getElementById('pub_type').value = type;
            const btnJ = document.getElementById('btnTypeJournal');
            const btnC = document.getElementById('btnTypeConference');
            const jFields = document.getElementById('journalFields');
            const cFields = document.getElementById('conferenceFields');
            const headerTitle = document.getElementById('sourceHeaderTitle');

            if (type === 'journal') {
                btnJ.classList.add('active');
                btnC.classList.remove('active');
                jFields.style.display = 'block';
                cFields.style.display = 'none';
                headerTitle.innerText = 'ส่วนที่ 3: ข้อมูลวารสารวิชาการ (Journal Details)';
            } else {
                btnC.classList.add('active');
                btnJ.classList.remove('active');
                jFields.style.display = 'none';
                cFields.style.display = 'block';
                headerTitle.innerText = 'ส่วนที่ 3: ข้อมูลการประชุมวิชาการ (Conference Details)';
            }
            updateLiveCitation();
        }

        // Synchronize Buddhist Year (พ.ศ.) and CE Year (ค.ศ.)
        function syncYears(source) {
            const yThInput = document.getElementById('pub_year_th');
            const yEnInput = document.getElementById('pub_year_en');
            if (source === 'th') {
                const val = parseInt(yThInput.value, 10);
                if (!isNaN(val) && val > 2400) {
                    yEnInput.value = val - 543;
                }
            } else {
                const val = parseInt(yEnInput.value, 10);
                if (!isNaN(val) && val > 1900) {
                    yThInput.value = val + 543;
                }
            }
        }

        // When a master journal is selected from dropdown
        function onSelectMasterJournal(selectElem) {
            const opt = selectElem.options[selectElem.selectedIndex];
            if (!opt || !opt.value) {
                document.getElementById('pub_journal_id').value = '';
                return;
            }

            document.getElementById('pub_journal_id').value = opt.value;
            const nameTh = opt.getAttribute('data-name-th') || '';
            const abbr = opt.getAttribute('data-abbr') || '';
            const tier = opt.getAttribute('data-tier') || '';
            const category = opt.getAttribute('data-category') || '';
            const publisher = opt.getAttribute('data-publisher') || '';
            const url = opt.getAttribute('data-url') || '';

            if (nameTh) document.getElementById('pub_journal_name').value = nameTh;
            if (abbr) document.getElementById('pub_journal_abbr').value = abbr;
            if (tier) document.getElementById('pub_tier').value = tier;
            if (category) document.getElementById('pub_category').value = category;
            if (publisher) document.getElementById('pub_publisher').value = publisher;
            if (url && !document.getElementById('pub_url').value) document.getElementById('pub_url').value = url;

            updateLiveCitation();
        }

        // When a teacher checkbox is toggled
        function onTeacherCheckChange(checkbox) {
            const tName = checkbox.getAttribute('data-name');
            const authorsInput = document.getElementById('pub_authors');
            let authors = authorsInput.value.split(',').map(s => s.trim()).filter(Boolean);

            if (checkbox.checked) {
                if (!authors.includes(tName)) {
                    authors.push(tName);
                }
            } else {
                authors = authors.filter(name => name !== tName);
            }

            authorsInput.value = authors.join(', ');
            updateLiveCitation();
        }

        // Live Citation Generator
        function updateLiveCitation() {
            const type = document.getElementById('pub_type').value;
            const lang = document.getElementById('pub_language').value;
            const isThai = (lang === 'th');
            const yTh = document.getElementById('pub_year_th').value;
            const yEn = document.getElementById('pub_year_en').value;
            const year = isThai ? (yTh || yEn) : (yEn || yTh);
            const title = document.getElementById('pub_title').value.trim() || '[ชื่อบทความวิจัย]';
            const tier = document.getElementById('pub_tier').value;
            const tierSuffix = tier ? ` <span class="badge badge-light border text-dark">${tier}</span>` : '';

            // Format authors
            const authorsRaw = document.getElementById('pub_authors').value;
            const authorsList = authorsRaw.split(',').map(s => s.trim()).filter(Boolean);
            let authorsFormatted = '[ชื่อผู้แต่ง]';
            if (authorsList.length === 1) {
                authorsFormatted = authorsList[0];
            } else if (authorsList.length === 2) {
                authorsFormatted = isThai ? `${authorsList[0]} และ${authorsList[1]}` : `${authorsList[0]} and ${authorsList[1]}`;
            } else if (authorsList.length > 2) {
                const last = authorsList[authorsList.length - 1];
                const rest = authorsList.slice(0, -1).join(', ');
                authorsFormatted = isThai ? `${rest} และ${last}` : `${rest}, and ${last}`;
            }

            let citation = '';
            if (type === 'journal') {
                const jName = document.getElementById('pub_journal_name').value.trim() || '[ชื่อวารสาร]';
                const vol = document.getElementById('pub_volume').value.trim();
                const issue = document.getElementById('pub_issue').value.trim();
                const mRange = document.getElementById('pub_month_range').value.trim();
                const pages = document.getElementById('pub_pages').value.trim();

                citation = `${authorsFormatted}. (${year}). ${title}. <i>${jName}</i>`;
                if (vol) {
                    citation += `, <i>${vol}</i>`;
                    if (issue) citation += `(${issue})`;
                }
                if (mRange) {
                    citation += `, ${mRange}:`;
                    if (pages) citation += ` ${pages}.`;
                    else citation += '.';
                } else if (pages) {
                    citation += `, ${pages}.`;
                } else {
                    citation += '.';
                }
                citation += tierSuffix;
            } else {
                const confName = document.getElementById('pub_conference_name').value.trim() || '[ชื่อการประชุมวิชาการ]';
                const city = document.getElementById('pub_city').value.trim();
                const country = document.getElementById('pub_country').value.trim();
                const pages = document.getElementById('pub_pages').value.trim() || document.getElementById('pub_conf_pages').value.trim();

                citation = `${authorsFormatted}. (${year}). ${title}. ใน <i>${confName}</i>`;
                if (pages) citation += ` (น. ${pages}).`;
                else citation += '.';

                const locationParts = [];
                if (city) locationParts.push(city);
                if (country && country !== 'ไทย') locationParts.push(country);
                if (locationParts.length > 0) {
                    citation += ` ${locationParts.join(', ')}:`;
                }
                citation += tierSuffix;
            }

            document.getElementById('citationLiveBox').innerHTML = citation;
        }

        // Initialize Form State
        document.addEventListener('DOMContentLoaded', function() {
            switchType('<?= htmlspecialchars($item['type']); ?>');
            updateLiveCitation();

            // Submit Handler via Fetch AJAX
            const form = document.getElementById('publicationForm');
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                const btn = document.getElementById('btnSubmit');
                const btnText = document.getElementById('btnSubmitText');
                btn.disabled = true;
                btnText.innerText = 'กำลังบันทึกข้อมูล...';

                const formData = new FormData(form);

                fetch('api/save-publication.php', {
                    method: 'POST',
                    body: formData
                })
                .then(res => res.json())
                .then(data => {
                    btn.disabled = false;
                    btnText.innerText = '<?= $isEdit ? "บันทึกการแก้ไขผลงาน" : "💾 บันทึกผลงานใหม่"; ?>';

                    if (data.success) {
                        document.getElementById('modalPubId').innerText = data.id;
                        document.getElementById('modalMessage').innerText = data.message;
                        $('#resultModal').modal('show');
                    } else {
                        alert('เกิดข้อผิดพลาด: ' + (data.error || 'ไม่สามารถบันทึกข้อมูลได้'));
                    }
                })
                .catch(err => {
                    btn.disabled = false;
                    btnText.innerText = '<?= $isEdit ? "บันทึกการแก้ไขผลงาน" : "💾 บันทึกผลงานใหม่"; ?>';
                    alert('เกิดข้อผิดพลาดในการเชื่อมต่อ: ' + err.message);
                });
            });
        });
    </script>
</body>

</html>
