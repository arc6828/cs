<?php
$og_title = "ระเบียบและแบบฟอร์มสำหรับอาจารย์และเจ้าหน้าที่ | วิทยาการคอมพิวเตอร์ VRU";
$og_description = "ดาวน์โหลดระเบียบและแบบฟอร์มราชการสำหรับอาจารย์และเจ้าหน้าที่ หลักสูตรวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์";
$og_url = "https://cs.vru.ac.th/staff-forms.php";

// รายการแบบฟอร์มทั้ง 24 รายการ เรียงตามรหัส Form-01 ถึง Form-24
$forms = [
    [
        "id" => "Form-01",
        "name" => "แบบฟอร์มบันทึกข้อความ",
        "file" => "uploads/dl-staff/Form-01.doc",
        "ext" => "DOC",
        "size" => "36 KB"
    ],
    [
        "id" => "Form-02",
        "name" => "แบบฟอร์มขอใช้ครุภัณฑ์เครื่องคอมพิวเตอร์ (Notebook)",
        "file" => "uploads/dl-staff/Form-02.PDF",
        "ext" => "PDF",
        "size" => "140 KB"
    ],
    [
        "id" => "Form-03",
        "name" => "แบบฟอร์มขอใช้ครุภัณฑ์เครื่องฉาย (Projector)",
        "file" => "uploads/dl-staff/Form-03.PDF",
        "ext" => "PDF",
        "size" => "127 KB"
    ],
    [
        "id" => "Form-04",
        "name" => "แบบฟอร์มขอใช้ครุภัณฑ์ (Visualizer)",
        "file" => "uploads/dl-staff/Form-04.PDF",
        "ext" => "PDF",
        "size" => "133 KB"
    ],
    [
        "id" => "Form-05",
        "name" => "แบบฟอร์มขออนุญาตไปนิเทศ",
        "file" => "uploads/dl-staff/Form-05.PDF",
        "ext" => "PDF",
        "size" => "105 KB"
    ],
    [
        "id" => "Form-06",
        "name" => "แบบฟอร์มขอสอนชดเชย",
        "file" => "uploads/dl-staff/Form-06.PDF",
        "ext" => "PDF",
        "size" => "134 KB"
    ],
    [
        "id" => "Form-07",
        "name" => "แบบฟอร์มขออนุมัติเชิญวิทยากร",
        "file" => "uploads/dl-staff/Form-07.PDF",
        "ext" => "PDF",
        "size" => "168 KB"
    ],
    [
        "id" => "Form-08",
        "name" => "แบบฟอร์มขออนุญาตใช้ห้องประชุมและสถานที่",
        "file" => "uploads/dl-staff/Form-08.PDF",
        "ext" => "PDF",
        "size" => "151 KB"
    ],
    [
        "id" => "Form-09",
        "name" => "แบบฟอร์มขออนุญาตไปราชการโดยไม่เบิกค่าใช้จ่าย",
        "file" => "uploads/dl-staff/Form-09.PDF",
        "ext" => "PDF",
        "size" => "104 KB"
    ],
    [
        "id" => "Form-10",
        "name" => "แบบฟอร์มขออนุญาตไปต่างประเทศ",
        "file" => "uploads/dl-staff/Form-10.PDF",
        "ext" => "PDF",
        "size" => "104 KB"
    ],
    [
        "id" => "Form-11",
        "name" => "แบบฟอร์มใบลาออก",
        "file" => "uploads/dl-staff/Form-11.PDF",
        "ext" => "PDF",
        "size" => "335 KB"
    ],
    [
        "id" => "Form-12",
        "name" => "แบบฟอร์มขออนุญาตพานักศึกษาไปนอกสถานที่",
        "file" => "uploads/dl-staff/Form-12.PDF",
        "ext" => "PDF",
        "size" => "314 KB"
    ],
    [
        "id" => "Form-13",
        "name" => "แบบฟอร์มขออนุมัติใช้งบประมาณกองทุนพัฒนาบุคลากร",
        "file" => "uploads/dl-staff/Form-13.PDF",
        "ext" => "PDF",
        "size" => "276 KB"
    ],
    [
        "id" => "Form-14",
        "name" => "แบบฟอร์มคำร้องขอหนังสือรับรองการทำงาน",
        "file" => "uploads/dl-staff/Form-14.PDF",
        "ext" => "PDF",
        "size" => "62 KB"
    ],
    [
        "id" => "Form-15",
        "name" => "แบบฟอร์มคำร้องขอหนังสือรับรองรายได้",
        "file" => "uploads/dl-staff/Form-15.PDF",
        "ext" => "PDF",
        "size" => "70 KB"
    ],
    [
        "id" => "Form-16",
        "name" => "แบบฟอร์มลงเวลาการปฏิบัติงานอาจารย์ที่ปรึกษา กศ.ปช.",
        "file" => "uploads/dl-staff/Form-16.PDF",
        "ext" => "PDF",
        "size" => "132 KB"
    ],
    [
        "id" => "Form-17",
        "name" => "แบบฟอร์มใบเบิกค่าใช้จ่ายเดินทางไปราชการ",
        "file" => "uploads/dl-staff/Form-17.PDF",
        "ext" => "PDF",
        "size" => "628 KB"
    ],
    [
        "id" => "Form-18",
        "name" => "แบบฟอร์มใบเบิกค่าสอน",
        "file" => "uploads/dl-staff/Form-18.PDF",
        "ext" => "PDF",
        "size" => "192 KB"
    ],
    [
        "id" => "Form-19",
        "name" => "แบบฟอร์มใบปะหน้ากระดาษคำตอบ",
        "file" => "uploads/dl-staff/Form-19.PDF",
        "ext" => "PDF",
        "size" => "160 KB"
    ],
    [
        "id" => "Form-20",
        "name" => "แบบฟอร์มใบยกเลิกวันลา",
        "file" => "uploads/dl-staff/Form-20.PDF",
        "ext" => "PDF",
        "size" => "92 KB"
    ],
    [
        "id" => "Form-21",
        "name" => "แบบฟอร์มใบลาป่วย ลาคลอดบุตร ลากิจส่วนตัว",
        "file" => "uploads/dl-staff/Form-21.PDF",
        "ext" => "PDF",
        "size" => "143 KB"
    ],
    [
        "id" => "Form-22",
        "name" => "แบบฟอร์มใบลาพักผ่อน",
        "file" => "uploads/dl-staff/Form-22.PDF",
        "ext" => "PDF",
        "size" => "118 KB"
    ],
    [
        "id" => "Form-23",
        "name" => "แบบฟอร์มสัญญายืมเงิน",
        "file" => "uploads/dl-staff/Form-23.PDF",
        "ext" => "PDF",
        "size" => "453 KB"
    ],
    [
        "id" => "Form-24",
        "name" => "แบบฟอร์มหนังสือมอบอำนาจ",
        "file" => "uploads/dl-staff/Form-24.PDF",
        "ext" => "PDF",
        "size" => "103 KB"
    ]
];

$total_forms = count($forms);
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

        body, .content {
            color: #212529 !important;
        }

        .text-dark-gray {
            color: #343a40 !important;
        }

        .text-muted, .text-secondary {
            color: #495057 !important;
        }

        /* Search Toolbar */
        .staff-search-bar {
            background: #ffffff;
            border: 1px solid #ced4da;
            border-radius: 10px;
            padding: 0.65rem 1rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.03);
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

        /* 1-Line List Group */
        .form-list-group {
            background: #ffffff;
            border: 1px solid #ced4da;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.02);
            margin-bottom: 1.5rem;
        }

        .form-row-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0.65rem 1.15rem;
            border-bottom: 1px solid #edf2f7;
            transition: background-color 0.15s ease;
            text-decoration: none !important;
        }

        .form-row-item:last-child {
            border-bottom: none;
        }

        .form-row-item:hover {
            background-color: #f8fbff;
        }

        .form-row-left {
            display: flex;
            align-items: center;
            flex-grow: 1;
            min-width: 0;
            padding-right: 1rem;
        }

        .form-row-code {
            font-size: 0.78rem;
            font-weight: 700;
            color: #495057;
            background: #eef2f7;
            border: 1px solid #dee2e6;
            padding: 0.15rem 0.55rem;
            border-radius: 4px;
            margin-right: 0.85rem;
            white-space: nowrap;
        }

        .form-row-name {
            font-size: 0.95rem;
            font-weight: 500;
            color: #212529;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .form-row-item:hover .form-row-name {
            color: #007bff;
        }

        .form-row-right {
            display: flex;
            align-items: center;
            white-space: nowrap;
        }

        .file-badge-pdf {
            background-color: #dc3545;
            color: #ffffff;
            font-size: 0.7rem;
            font-weight: 700;
            padding: 0.15rem 0.45rem;
            border-radius: 4px;
            margin-right: 0.6rem;
            letter-spacing: 0.5px;
        }

        .file-badge-doc {
            background-color: #007bff;
            color: #ffffff;
            font-size: 0.7rem;
            font-weight: 700;
            padding: 0.15rem 0.45rem;
            border-radius: 4px;
            margin-right: 0.6rem;
            letter-spacing: 0.5px;
        }

        .form-row-size {
            font-size: 0.78rem;
            color: #868e96;
            margin-right: 0.85rem;
            min-width: 55px;
            text-align: right;
        }

        .btn-row-dl {
            font-size: 0.8rem;
            font-weight: 600;
            padding: 0.25rem 0.65rem;
            border-radius: 6px;
            color: #007bff;
            border: 1px solid #b8daff;
            background: #f0f7ff;
            transition: all 0.2s ease;
        }

        .form-row-item:hover .btn-row-dl {
            background-color: #007bff;
            border-color: #007bff;
            color: #ffffff !important;
        }

        .no-result-box {
            display: none;
            text-align: center;
            padding: 2.5rem 1rem;
            background: #ffffff;
            border: 1px dashed #ced4da;
            border-radius: 10px;
            margin: 1.5rem 0;
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
                    <li class="breadcrumb-item active" aria-current="page">อาจารย์และบุคลากร</li>
                    <li class="breadcrumb-item active" aria-current="page">ระเบียบแบบฟอร์ม</li>
                </ol>
            </nav>

            <!-- Page Header -->
            <div class="page-header-modern mb-4">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div>
                        <h1 class="h2 font-weight-bold text-dark mb-1">
                            <i class="fa fa-file-text-o text-primary mr-2"></i>ระเบียบแบบฟอร์มสำหรับอาจารย์และเจ้าหน้าที่
                        </h1>
                        <p class="text-dark-gray mb-0">
                            ดาวน์โหลดระเบียบและแบบฟอร์มราชการ หลักสูตรวิทยาการคอมพิวเตอร์ (Form-01 ถึง Form-24 รวม <?php echo $total_forms; ?> รายการ)
                        </p>
                    </div>
                    <div class="mt-3 mt-lg-0">
                        <a href="teacher.php" class="btn btn-outline-primary btn-sm font-weight-bold mr-1">
                            <i class="fa fa-users mr-1"></i> ทำเนียบคณาจารย์
                        </a>
                        <a href="support.php" class="btn btn-outline-info btn-sm font-weight-bold">
                            <i class="fa fa-user-circle mr-1"></i> บุคลากรสายสนับสนุน
                        </a>
                    </div>
                </div>
            </div>

            <!-- Search Toolbar & Match Counter -->
            <div class="staff-search-bar">
                <div class="row align-items-center">
                    <div class="col-md-7 mb-2 mb-md-0">
                        <div class="search-input-wrap">
                            <i class="fa fa-search"></i>
                            <input type="text" id="formSearchInput" class="form-control" placeholder="พิมพ์ชื่อแบบฟอร์ม หรือรหัส เช่น สอนชดเชย, ใบลา, ยืมเงิน, 06..." autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-5 text-md-right small text-dark-gray font-weight-bold">
                        แสดงแบบฟอร์ม <span id="matchCount" class="text-primary"><?php echo $total_forms; ?></span> / <?php echo $total_forms; ?> รายการ
                    </div>
                </div>
            </div>

            <!-- 1-Line List Group (Sorted by Form-01 to Form-24) -->
            <div class="form-list-group" id="formListGroup">
                <?php foreach ($forms as $form): ?>
                    <a href="<?php echo htmlspecialchars($form["file"]); ?>" 
                       class="form-row-item" 
                       download 
                       target="_blank"
                       data-form-name="<?php echo htmlspecialchars(mb_strtolower($form["name"])); ?>"
                       data-form-id="<?php echo htmlspecialchars(mb_strtolower($form["id"])); ?>">
                        
                        <div class="form-row-left">
                            <span class="form-row-code"><?php echo $form["id"]; ?></span>
                            <span class="form-row-name">
                                &#187;&nbsp;<?php echo htmlspecialchars($form["name"]); ?>
                            </span>
                        </div>

                        <div class="form-row-right">
                            <?php if ($form["ext"] === "PDF"): ?>
                                <span class="file-badge-pdf">PDF</span>
                            <?php else: ?>
                                <span class="file-badge-doc">DOC</span>
                            <?php endif; ?>
                            <span class="form-row-size"><?php echo $form["size"]; ?></span>
                            <span class="btn-row-dl">
                                <i class="fa fa-download mr-1"></i>โหลด
                            </span>
                        </div>

                    </a>
                <?php endforeach; ?>
            </div>

            <!-- No Search Result State -->
            <div id="noResultBox" class="no-result-box">
                <i class="fa fa-search-minus text-muted" style="font-size: 2.5rem; margin-bottom: 0.75rem;"></i>
                <h3 class="h6 font-weight-bold text-dark mb-1">ไม่พบแบบฟอร์มที่ตรงกับคำค้นหา</h3>
                <p class="text-muted small mb-2">โปรดลองค้นหาด้วยคำอื่น หรือกดปุ่มรีเซ็ต</p>
                <button type="button" class="btn btn-outline-primary btn-sm font-weight-bold" id="btnResetSearch">
                    <i class="fa fa-refresh mr-1"></i> แสดงแบบฟอร์มทั้งหมด
                </button>
            </div>

            <!-- Notice Card -->
            <div class="card border shadow-sm my-3" style="border-radius: 10px; border-color: #ced4da !important; background: #fafbfc;">
                <div class="card-body p-3">
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <div class="small text-dark-gray my-1">
                            <i class="fa fa-info-circle text-primary mr-1"></i>
                            <strong>การยื่นเอกสาร:</strong> เมื่อกรอกแบบฟอร์มครบถ้วนแล้ว กรุณาลงลายมือชื่อและยื่นต่อเจ้าหน้าที่ประจำหลักสูตร ณ ห้อง IT201 อาคาร 75 ปี วไลยอลงกรณ์
                        </div>
                        <div class="my-1">
                            <a href="support.php" class="btn btn-outline-secondary btn-sm font-weight-bold">
                                <i class="fa fa-user-circle mr-1"></i> ติดต่อเจ้าหน้าที่
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>

    <!-- Instant Search Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var searchInput = document.getElementById('formSearchInput');
            var formItems = document.querySelectorAll('#formListGroup .form-row-item');
            var matchCount = document.getElementById('matchCount');
            var noResultBox = document.getElementById('noResultBox');
            var btnResetSearch = document.getElementById('btnResetSearch');

            function doSearch() {
                var query = searchInput ? searchInput.value.trim().toLowerCase() : '';
                var visibleCount = 0;

                formItems.forEach(function (item) {
                    var name = item.getAttribute('data-form-name') || '';
                    var id = item.getAttribute('data-form-id') || '';

                    if (query === '' || name.indexOf(query) !== -1 || id.indexOf(query) !== -1) {
                        item.style.display = 'flex';
                        visibleCount++;
                    } else {
                        item.style.display = 'none';
                    }
                });

                if (matchCount) {
                    matchCount.textContent = visibleCount;
                }

                if (noResultBox) {
                    noResultBox.style.display = (visibleCount === 0) ? 'block' : 'none';
                }
            }

            if (searchInput) {
                searchInput.addEventListener('input', doSearch);
            }

            if (btnResetSearch) {
                btnResetSearch.addEventListener('click', function () {
                    if (searchInput) searchInput.value = '';
                    doSearch();
                });
            }
        });
    </script>
</body>

</html>
