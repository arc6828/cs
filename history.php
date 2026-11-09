<?php
$og_title = "ประวัติหลักสูตรวิทยาการคอมพิวเตอร์ | มรภ.วไลยอลงกรณ์ (VRU)";
$og_description = "ประวัติความเป็นมาของสาขาวิชาวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์ ตั้งแต่ปี พ.ศ. 2528 จนถึงปัจจุบัน";
$og_url = "https://cs.vru.ac.th/history.php";
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

        .stat-card {
            background: linear-gradient(135deg, #ffffff 0%, #f8fbff 100%);
            border: 1px solid #e3eefc;
            border-radius: 12px;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(0, 123, 255, 0.12);
        }

        .stat-number {
            font-size: 1.85rem;
            font-weight: 700;
            color: #0056b3;
            line-height: 1.2;
        }

        .info-card {
            border: 1px solid #eaeaea;
            border-radius: 12px;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .info-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08) !important;
        }

        .info-icon-box {
            width: 52px;
            height: 52px;
            border-radius: 12px;
            background-color: #e7f1ff;
            color: #007bff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            flex-shrink: 0;
        }

        .cs-timeline {
            position: relative;
            padding-left: 2.25rem;
            margin-left: 0.75rem;
            border-left: 3px solid #cfe2ff;
        }

        .cs-timeline-item {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .cs-timeline-item:last-child {
            margin-bottom: 0;
        }

        .cs-timeline-marker {
            position: absolute;
            left: -2.9rem;
            top: 1.25rem;
            width: 1.2rem;
            height: 1.2rem;
            border-radius: 50%;
            background-color: #007bff;
            border: 3px solid #fff;
            box-shadow: 0 0 0 3px #cfe2ff;
            transition: transform 0.2s ease;
        }

        .cs-timeline-card {
            background: #ffffff;
            border: 1px solid #e9ecef;
            border-radius: 12px;
            padding: 1.25rem 1.5rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
            transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
        }

        .cs-timeline-item:hover .cs-timeline-card {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            border-color: #b8daff;
        }

        .cs-timeline-item:hover .cs-timeline-marker {
            transform: scale(1.15);
        }

        .cs-timeline-item.current .cs-timeline-marker {
            background-color: #28a745;
            box-shadow: 0 0 0 3px #c3e6cb;
        }

        .cs-timeline-item.current .cs-timeline-card {
            border-left: 4px solid #28a745;
            background: linear-gradient(to right, #f8fff9, #ffffff);
        }

        .cs-timeline-item.future .cs-timeline-marker {
            background-color: #17a2b8;
            box-shadow: 0 0 0 3px #bee5eb;
        }

        .cs-timeline-item.future .cs-timeline-card {
            border-left: 4px solid #17a2b8;
            background: linear-gradient(to right, #f4fcfe, #ffffff);
        }

        .cs-timeline-year {
            display: inline-block;
            font-weight: 600;
            color: #0056b3;
            background-color: #e7f1ff;
            padding: 0.2rem 0.75rem;
            border-radius: 2rem;
            font-size: 0.95rem;
        }

        .cs-timeline-item.current .cs-timeline-year {
            color: #155724;
            background-color: #d4edda;
        }

        .cs-timeline-item.future .cs-timeline-year {
            color: #0c5460;
            background-color: #d1ecf1;
        }

        .era-badge {
            font-size: 0.8rem;
            font-weight: 500;
            padding: 0.2rem 0.65rem;
            border-radius: 2rem;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php include("layouts/navbar.php"); ?>

    <div class="content">
        <div class="container py-5">

            <!-- Page Header -->
            <div class="page-header-modern mb-4" data-aos="fade-up">
                <h1 class="h2 font-weight-bold text-dark mb-1">ประวัติหลักสูตรวิทยาการคอมพิวเตอร์</h1>
                <p class="text-muted mb-0">กว่า 4 ทศวรรษแห่งการพัฒนาบุคลากรด้านวิทยาการคอมพิวเตอร์และเทคโนโลยีดิจิทัล มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์</p>
            </div>

            <!-- Highlight Stats -->
            <div class="row mb-4" data-aos="fade-up" data-aos-delay="50">
                <div class="col-6 col-md-3 mb-3">
                    <div class="stat-card p-3 text-center h-100">
                        <div class="stat-number">พ.ศ. 2528</div>
                        <div class="small text-muted mt-1">เริ่มก่อตั้งภาควิชาคอมพิวเตอร์</div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <div class="stat-card p-3 text-center h-100">
                        <div class="stat-number">40+ ปี</div>
                        <div class="small text-muted mt-1">ประสบการณ์จัดการเรียนการสอน</div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <div class="stat-card p-3 text-center h-100">
                        <div class="stat-number">พ.ศ. 2539</div>
                        <div class="small text-muted mt-1">เปิดปริญญาตรี วท.บ. รุ่นที่ 1</div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <div class="stat-card p-3 text-center h-100">
                        <div class="stat-number">6 ยุคสมัย</div>
                        <div class="small text-muted mt-1">การพัฒนาหลักสูตรอย่างต่อเนื่อง</div>
                    </div>
                </div>
            </div>

            <!-- Info Cards: ชื่อหน่วยงาน & ที่ตั้ง -->
            <div class="row mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="col-md-6 mb-3 mb-md-0">
                    <div class="card info-card shadow-sm h-100">
                        <div class="card-body d-flex align-items-start">
                            <div class="info-icon-box mr-3">
                                <i class="fa fa-university" aria-hidden="true"></i>
                            </div>
                            <div>
                                <h2 class="h5 font-weight-bold text-dark mb-2">ชื่อหน่วยงาน</h2>
                                <p class="text-secondary mb-0">
                                    สาขาวิชาวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี<br>
                                    มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card info-card shadow-sm h-100">
                        <div class="card-body d-flex align-items-start">
                            <div class="info-icon-box mr-3">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div>
                                <h2 class="h5 font-weight-bold text-dark mb-2">ที่ตั้ง</h2>
                                <p class="text-secondary mb-2">
                                    อาคาร 75 ปี วไลยอลงกรณ์ คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์ เลขที่ 1 หมู่ที่ 20 ตำบลคลองหนึ่ง อำเภอคลองหลวง จังหวัดปทุมธานี 13180
                                </p>
                                <a href="contact.php" class="small font-weight-bold text-primary">
                                    <i class="fa fa-location-arrow mr-1"></i> ดูแผนที่และข้อมูลติดต่อ
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ประวัติความเป็นมาของหลักสูตร (ข้อความบรรยายแบบเต็ม) -->
            <div class="mb-5" data-aos="fade-up">
                <h2 class="h4 font-weight-bold text-dark mb-3">
                    <i class="fa fa-book text-primary mr-2"></i>ประวัติความเป็นมาของหลักสูตร
                </h2>
                <p class="ml-4">การบริหารและการจัดการการศึกษาสาขาวิทยาการคอมพิวเตอร์ ดำเนินการมาตั้งแต่ปี พ.ศ. 2528 ในขณะนั้นบริหารและจัดการในรูปแบบของภาควิชาคอมพิวเตอร์ ภายใต้การดูแลของอาจารย์อำนาจ มั่นทน หัวหน้าโปรแกรมวิชา และผู้ช่วยศาสตราจารย์มนูญ แก้วราตรี รองหัวหน้าโปรแกรมวิชา มีการเปิดรับนักศึกษาครั้งแรกในปี พ.ศ. 2529 โดยเปิดสอนในระดับอนุปริญญาคอมพิวเตอร์ ในปี พ.ศ. 2536 เปิดสอนนักศึกษาทั้งภาคปกติและภาคการศึกษาเพื่อบุคลากรประจำการ (กศ.บป.) ในระดับอนุปริญญาคอมพิวเตอร์ ในปี พ.ศ. 2539 เปิดสอนในระดับปริญญาตรี หลักสูตรสาขาวิทยาศาสตร์ เอกวิทยาการคอมพิวเตอร์ รุ่นที่ 1 โดยเปิดสอนนักศึกษาทั้งในภาคปกติ และภาค กศ.ปช. ในปี พ.ศ. 2540 เพื่อให้การจัดการศึกษาและการดูแลเอาใจใส่นักศึกษามีความใกล้ชิดมากขึ้น และช่วยให้การใช้ทรัพยากรทางการศึกษาคุ้มค่าและเกิดประโยชน์สูงสุด จึงมีการเปลี่ยนรูปแบบการบริหารและการจัดการจากภาควิชาคอมพิวเตอร์เป็น โปรแกรมวิชาวิทยาการคอมพิวเตอร์</p>
                <p class="ml-4">ในปี พ.ศ. 2548 ทางมหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์ ได้เปลี่ยนรูปแบบการบริหารและจัดการโปรแกรมวิชาเป็นสาขาวิชาและหลักสูตร พร้อมกับกำหนดให้มีกรรมการบริหารหลักสูตรอย่างน้อย 5 คน เพื่อทำหน้าที่ประสานงานกับคณะ อาจารย์ และนักศึกษาในทุกๆ เรื่องที่เกี่ยวข้อง</p>
                <p class="ml-4">ในปี พ.ศ. 2549 หลักสูตรวิทยาการคอมพิวเตอร์ ได้ปรับปรุงหลักสูตรเดิมให้สอดคล้องกับความเปลี่ยนแปลงและความต้องการของสังคม และเปิดใช้หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิทยาการคอมพิวเตอร์ (ปรับปรุง) ตั้งแต่ภาคเรียนที่ 1 ปีการศึกษา 2550 จนถึงภาคเรียนที่ 2 ปีการศึกษา 2554</p>
                <p class="ml-4">ในปี พ.ศ. 2554 หลักสูตรวิทยาการคอมพิวเตอร์ ได้พัฒนาหลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์ หลักสูตรปรับปรุง พ.ศ. 2555 ตามประกาศกระทรวงศึกษาธิการ เรื่อง กรอบมาตรฐานคุณวุฒิ ระดับอุดมศึกษาแห่งชาติ พ.ศ. 2552 และเริ่มเปิดใช้ตั้งแต่ภาคเรียนที่ 1 ปีการศึกษา 2555</p>
                <p class="ml-4">ในปี พ.ศ. 2559 หลักสูตรวิทยาการคอมพิวเตอร์ ได้พัฒนาหลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์ หลักสูตรปรับปรุง พ.ศ. 2560 ตามประกาศกระทรวงศึกษาธิการ เรื่อง กรอบมาตรฐานคุณวุฒิ ระดับอุดมศึกษาแห่งชาติ พ.ศ. 2558 และเริ่มเปิดใช้ตั้งแต่ภาคเรียนที่ 1 ปีการศึกษา 2560</p>
                <p class="ml-4">ในปี พ.ศ. 2564 หลักสูตรวิทยาการคอมพิวเตอร์ ได้พัฒนาหลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์ หลักสูตรปรับปรุง พ.ศ. 2565 ตามประกาศกระทรวงศึกษาธิการ เรื่อง เกณฑ์มาตรฐานหลักสูตรระดับอุดมศึกษา พ.ศ. 2558 และเริ่มเปิดใช้ตั้งแต่ภาคเรียนที่ 1 ปีการศึกษา 2565</p>
                <p class="ml-4">ในปี พ.ศ. 2569 หลักสูตรวิทยาการคอมพิวเตอร์ ได้พัฒนาหลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์ หลักสูตรปรับปรุง พ.ศ. 2570 ตามประกาศคณะกรรมการมาตรฐานการอุดมศึกษา เรื่อง เกณฑ์มาตรฐานหลักสูตรระดับอุดมศึกษา พ.ศ. 2565 และเริ่มเปิดใช้ตั้งแต่ภาคเรียนที่ 1 ปีการศึกษา 2570 เป็นต้นไป</p>
            </div>

            <hr class="my-5">

            <!-- Timeline ลำดับเหตุการณ์สำคัญ -->
            <div data-aos="fade-up">
                <h2 class="h4 font-weight-bold text-dark mb-4">
                    <i class="fa fa-history text-primary mr-2"></i>ลำดับเหตุการณ์สำคัญ (Timeline พัฒนาการหลักสูตร)
                </h2>

                <div class="cs-timeline">
                    <div class="cs-timeline-item" data-aos="fade-up">
                        <div class="cs-timeline-marker"></div>
                        <div class="cs-timeline-card">
                            <div class="d-flex flex-wrap align-items-center justify-content-between mb-2">
                                <span class="cs-timeline-year">พ.ศ. 2528</span>
                                <span class="badge badge-light border text-secondary era-badge">ยุคบุกเบิก</span>
                            </div>
                            <div class="text-dark">เริ่มดำเนินการบริหารและจัดการเรียนการสอนในรูปแบบ <strong>"ภาควิชาคอมพิวเตอร์"</strong> ภายใต้การดูแลของอาจารย์อำนาจ มั่นทน (หัวหน้าโปรแกรมวิชา) และ ผศ.มนูญ แก้วราตรี (รองหัวหน้าโปรแกรมวิชา)</div>
                        </div>
                    </div>

                    <div class="cs-timeline-item" data-aos="fade-up">
                        <div class="cs-timeline-marker"></div>
                        <div class="cs-timeline-card">
                            <div class="d-flex flex-wrap align-items-center justify-content-between mb-2">
                                <span class="cs-timeline-year">พ.ศ. 2529</span>
                                <span class="badge badge-light border text-secondary era-badge">ยุคอนุปริญญา</span>
                            </div>
                            <div class="text-dark">เปิดรับนักศึกษาครั้งแรกในระดับ <strong>อนุปริญญาคอมพิวเตอร์</strong></div>
                        </div>
                    </div>

                    <div class="cs-timeline-item" data-aos="fade-up">
                        <div class="cs-timeline-marker"></div>
                        <div class="cs-timeline-card">
                            <div class="d-flex flex-wrap align-items-center justify-content-between mb-2">
                                <span class="cs-timeline-year">พ.ศ. 2536</span>
                                <span class="badge badge-light border text-secondary era-badge">ขยายโอกาสทางการศึกษา</span>
                            </div>
                            <div class="text-dark">เปิดสอนนักศึกษาทั้ง <strong>ภาคปกติ</strong> และ <strong>ภาคการศึกษาเพื่อบุคลากรประจำการ (กศ.บป.)</strong> ในระดับอนุปริญญาคอมพิวเตอร์</div>
                        </div>
                    </div>

                    <div class="cs-timeline-item" data-aos="fade-up">
                        <div class="cs-timeline-marker"></div>
                        <div class="cs-timeline-card">
                            <div class="d-flex flex-wrap align-items-center justify-content-between mb-2">
                                <span class="cs-timeline-year">พ.ศ. 2539 – 2540</span>
                                <span class="badge badge-primary era-badge">ยุคปริญญาตรีรุ่นที่ 1</span>
                            </div>
                            <div class="text-dark">เปิดสอนระดับ <strong>ปริญญาตรี หลักสูตรสาขาวิทยาศาสตร์ เอกวิทยาการคอมพิวเตอร์ รุ่นที่ 1</strong> (ทั้งภาคปกติและ กศ.ปช.) และในปี พ.ศ. 2540 ได้เปลี่ยนรูปแบบการบริหารจากภาควิชาคอมพิวเตอร์เป็น <strong>"โปรแกรมวิชาวิทยาการคอมพิวเตอร์"</strong></div>
                        </div>
                    </div>

                    <div class="cs-timeline-item" data-aos="fade-up">
                        <div class="cs-timeline-marker"></div>
                        <div class="cs-timeline-card">
                            <div class="d-flex flex-wrap align-items-center justify-content-between mb-2">
                                <span class="cs-timeline-year">พ.ศ. 2548</span>
                                <span class="badge badge-light border text-secondary era-badge">ปรับโครงสร้างสาขาวิชา</span>
                            </div>
                            <div class="text-dark">มหาวิทยาลัยเปลี่ยนรูปแบบการบริหารจากโปรแกรมวิชาเป็น <strong>"สาขาวิชาและหลักสูตร"</strong> พร้อมกำหนดให้มีคณะกรรมการบริหารหลักสูตรอย่างน้อย 5 คน</div>
                        </div>
                    </div>

                    <div class="cs-timeline-item" data-aos="fade-up">
                        <div class="cs-timeline-marker"></div>
                        <div class="cs-timeline-card">
                            <div class="d-flex flex-wrap align-items-center justify-content-between mb-2">
                                <span class="cs-timeline-year">พ.ศ. 2549 – 2550</span>
                                <span class="badge badge-light border text-secondary era-badge">หลักสูตรปรับปรุง 2550</span>
                            </div>
                            <div class="text-dark">ปรับปรุงหลักสูตรเดิมให้สอดคล้องกับความต้องการของสังคม และเปิดใช้ <strong>หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิทยาการคอมพิวเตอร์ (ปรับปรุง)</strong> ตั้งแต่ภาคเรียนที่ 1/2550 ถึง 2/2554</div>
                        </div>
                    </div>

                    <div class="cs-timeline-item" data-aos="fade-up">
                        <div class="cs-timeline-marker"></div>
                        <div class="cs-timeline-card">
                            <div class="d-flex flex-wrap align-items-center justify-content-between mb-2">
                                <span class="cs-timeline-year">พ.ศ. 2554 – 2555</span>
                                <span class="badge badge-light border text-secondary era-badge">หลักสูตรปรับปรุง 2555</span>
                            </div>
                            <div class="text-dark">พัฒนาและเปิดใช้ <strong>หลักสูตรปรับปรุง พ.ศ. 2555</strong> ตามกรอบมาตรฐานคุณวุฒิระดับอุดมศึกษาแห่งชาติ (TQF) พ.ศ. 2552 เริ่มใช้ตั้งแต่ภาคเรียนที่ 1/2555</div>
                        </div>
                    </div>

                    <div class="cs-timeline-item" data-aos="fade-up">
                        <div class="cs-timeline-marker"></div>
                        <div class="cs-timeline-card">
                            <div class="d-flex flex-wrap align-items-center justify-content-between mb-2">
                                <span class="cs-timeline-year">พ.ศ. 2559 – 2560</span>
                                <span class="badge badge-light border text-secondary era-badge">หลักสูตรปรับปรุง 2560</span>
                            </div>
                            <div class="text-dark">พัฒนาและเปิดใช้ <strong>หลักสูตรปรับปรุง พ.ศ. 2560</strong> ตามกรอบมาตรฐานคุณวุฒิระดับอุดมศึกษาแห่งชาติ พ.ศ. 2558 เริ่มใช้ตั้งแต่ภาคเรียนที่ 1/2560</div>
                        </div>
                    </div>

                    <div class="cs-timeline-item current" data-aos="fade-up">
                        <div class="cs-timeline-marker"></div>
                        <div class="cs-timeline-card">
                            <div class="d-flex flex-wrap align-items-center justify-content-between mb-2">
                                <span class="cs-timeline-year">พ.ศ. 2564 – 2565</span>
                                <span class="badge badge-success era-badge">หลักสูตรปัจจุบัน (พ.ศ. 2565)</span>
                            </div>
                            <div class="text-dark">พัฒนาและเปิดใช้ <strong>หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์ (หลักสูตรปรับปรุง พ.ศ. 2565)</strong> ตามเกณฑ์มาตรฐานหลักสูตรระดับอุดมศึกษา พ.ศ. 2558 เริ่มใช้ตั้งแต่ภาคเรียนที่ 1/2565</div>
                        </div>
                    </div>

                    <div class="cs-timeline-item future" data-aos="fade-up">
                        <div class="cs-timeline-marker"></div>
                        <div class="cs-timeline-card">
                            <div class="d-flex flex-wrap align-items-center justify-content-between mb-2">
                                <span class="cs-timeline-year">พ.ศ. 2569 – 2570</span>
                                <span class="badge badge-info era-badge">หลักสูตรใหม่ OBE (พ.ศ. 2570)</span>
                            </div>
                            <div class="text-dark">พัฒนา <strong>หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์ (หลักสูตรปรับปรุง พ.ศ. 2570)</strong> ตามประกาศคณะกรรมการมาตรฐานการอุดมศึกษา เรื่อง เกณฑ์มาตรฐานหลักสูตรระดับอุดมศึกษา พ.ศ. 2565 และเริ่มเปิดใช้ตั้งแต่ภาคเรียนที่ 1/2570 เป็นต้นไป</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>
</body>

</html>
