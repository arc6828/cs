<?php
$og_title = "นโยบายด้านคุณภาพ | หลักสูตรวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ (VRU)";
$og_description = "นโยบายการประกันคุณภาพการศึกษา การบริหารและพัฒนาหลักสูตรตามเกณฑ์ สป.อว. และ AUN-QA ทรัพยากรห้องปฏิบัติการ การสนับสนุนนักศึกษา และการผลิตบัณฑิตตอบสนองตลาดแรงงานดิจิทัล";
$og_url = "https://cs.vru.ac.th/policy.php";
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

        .policy-intro-card {
            background: linear-gradient(135deg, #ffffff 0%, #f4f8fd 100%);
            border: 1px solid #d8e5f5;
            border-left: 4px solid #007bff;
            border-radius: 12px;
            padding: 1.5rem;
        }

        .qa-badge {
            display: inline-flex;
            align-items: center;
            font-size: 0.85rem;
            font-weight: 600;
            padding: 0.4rem 0.85rem;
            border-radius: 50rem;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .qa-card {
            background: #ffffff;
            border: 1px solid #e3e8ee;
            border-radius: 12px;
            padding: 1.5rem;
            height: 100%;
            transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
        }

        .qa-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(0, 123, 255, 0.08);
            border-color: #b8daff;
        }

        .qa-card-header {
            display: flex;
            align-items: center;
            margin-bottom: 1.25rem;
            padding-bottom: 0.75rem;
            border-bottom: 2px solid #f1f3f5;
        }

        .qa-icon-wrap {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-right: 1rem;
            flex-shrink: 0;
        }

        .qa-item {
            position: relative;
            padding-left: 2rem;
            margin-bottom: 0.9rem;
            font-size: 0.95rem;
            line-height: 1.6;
            color: #333333;
        }

        .qa-item-num {
            position: absolute;
            left: 0;
            top: 0.15rem;
            width: 1.45rem;
            height: 1.45rem;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            font-weight: 700;
        }

        .pdca-card {
            background: #ffffff;
            border: 1px solid #e9ecef;
            border-radius: 10px;
            padding: 1.25rem 1rem;
            text-align: center;
            height: 100%;
            transition: all 0.2s ease;
        }

        .pdca-card:hover {
            background-color: #f8fbff;
            border-color: #007bff;
        }

        .pdca-circle {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.35rem;
            font-weight: 800;
            margin-bottom: 0.75rem;
        }

        .quick-nav-card {
            border-radius: 12px;
            border: 1px dashed #b8daff;
            background: #f8fbff;
            padding: 1.25rem;
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
                    <li class="breadcrumb-item active" aria-current="page">เกี่ยวกับหลักสูตร</li>
                    <li class="breadcrumb-item active" aria-current="page">นโยบายด้านคุณภาพ</li>
                </ol>
            </nav>

            <!-- Page Header -->
            <div class="page-header-modern mb-4">
                <h1 class="h2 font-weight-bold text-dark mb-1">
                    <i class="fa fa-shield text-primary mr-2"></i>นโยบายด้านคุณภาพ (Quality Policy)
                </h1>
                <p class="text-muted mb-2">
                    กรอบนโยบายการประกันคุณภาพการศึกษา การบริหารจัดการหลักสูตร และการพัฒนาบัณฑิตตามเกณฑ์มาตรฐาน สป.อว. และเกณฑ์สากล AUN-QA
                </p>
                <div class="d-flex flex-wrap pt-1">
                    <span class="qa-badge bg-primary text-white">
                        <i class="fa fa-check-circle mr-1"></i> เกณฑ์มาตรฐานหลักสูตร สป.อว.
                    </span>
                    <span class="qa-badge bg-success text-white">
                        <i class="fa fa-certificate mr-1"></i> AUN-QA Quality Framework
                    </span>
                    <span class="qa-badge bg-info text-white">
                        <i class="fa fa-bullseye mr-1"></i> Outcome-Based Education (OBE)
                    </span>
                    <span class="qa-badge bg-warning text-dark">
                        <i class="fa fa-refresh mr-1"></i> วงจรพัฒนาคุณภาพ PDCA
                    </span>
                </div>
            </div>

            <!-- Introductory Callout Card -->
            <div class="policy-intro-card mb-4">
                <h2 class="h5 font-weight-bold text-primary mb-2">
                    <i class="fa fa-university mr-2"></i>การประกันคุณภาพการศึกษา สาขาวิชาวิทยาการคอมพิวเตอร์
                </h2>
                <p class="text-secondary mb-0" style="line-height: 1.7;">
                    สาขาวิชาวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์ ดำเนินการประกันคุณภาพการศึกษาตามกรอบที่กำหนดโดยมหาวิทยาลัย และสอดคล้องตามเกณฑ์มาตรฐานหลักสูตรระดับอุดมศึกษาของ <strong>สำนักงานปลัดกระทรวงการอุดมศึกษา วิทยาศาสตร์ วิจัยและนวัตกรรม (สป.อว.)</strong> ควบคู่กับเกณฑ์คุณภาพการศึกษาเพื่อการดำเนินการที่เป็นเลิศ มุ่งเน้นการจัดการศึกษาเชิงผลลัพธ์การเรียนรู้ (Outcome-Based Education: OBE) เพื่อผลิตบัณฑิตนักปฏิบัติที่มีสมรรถนะสูง ทันต่อการเปลี่ยนแปลงทางเทคโนโลยี และตอบสนองความต้องการของสังคมและภาคอุตสาหกรรมดิจิทัล โดยครอบคลุม 4 นโยบายหลัก ดังต่อไปนี้
                </p>
            </div>

            <!-- 4 Core Pillars Grid -->
            <div class="row">

                <!-- 1. การบริหารหลักสูตร -->
                <div class="col-lg-6 mb-4">
                    <div class="qa-card shadow-sm">
                        <div class="qa-card-header">
                            <div class="qa-icon-wrap bg-primary text-white">
                                <i class="fa fa-sitemap"></i>
                            </div>
                            <div>
                                <h2 class="h5 font-weight-bold mb-0 text-dark">1. การบริหารและพัฒนาหลักสูตร</h2>
                                <small class="text-muted">Curriculum Governance & Development</small>
                            </div>
                        </div>
                        <div class="qa-items-container">
                            <div class="qa-item">
                                <span class="qa-item-num bg-primary text-white">1</span>
                                <strong>คณะกรรมการบริหารหลักสูตร:</strong> จัดตั้งคณะกรรมการบริหารหลักสูตรทำหน้าที่กำกับ ควบคุมดูแลการจัดการศึกษา การพัฒนา และปรับปรุงหลักสูตรอย่างต่อเนื่อง เพื่อให้ได้มาตรฐานตาม <em>เกณฑ์มาตรฐานหลักสูตรระดับอุดมศึกษา พ.ศ. 2558 และ พ.ศ. 2565</em> ของกระทรวง อว. และกรอบมาตรฐานคุณวุฒิระดับอุดมศึกษา
                            </div>
                            <div class="qa-item">
                                <span class="qa-item-num bg-primary text-white">2</span>
                                <strong>ความสอดคล้องตามเกณฑ์ สป.อว.:</strong> จัดโครงสร้างหลักสูตร แผนการศึกษา และเกณฑ์การสำเร็จการศึกษาให้สอดคล้องตามประกาศของ <em>สำนักงานปลัดกระทรวงการอุดมศึกษา วิทยาศาสตร์ วิจัยและนวัตกรรม (สป.อว.)</em> และข้อบังคับของมหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์
                            </div>
                            <div class="qa-item">
                                <span class="qa-item-num bg-primary text-white">3</span>
                                <strong>คุณวุฒิและสมรรถนะคณาจารย์:</strong> จัดคณาจารย์ผู้สอนที่มีคุณวุฒิตรงและสัมพันธ์กับสาขาวิชา มีผลงานทางวิชาการและงานวิจัยอย่างต่อเนื่อง พร้อมส่งเสริมให้อาจารย์ได้รับการอบรมและเพิ่มพูนทักษะเทคโนโลยีสมัยใหม่
                            </div>
                            <div class="qa-item">
                                <span class="qa-item-num bg-primary text-white">4</span>
                                <strong>การกำกับดูแลเชิงระบบ:</strong> คณะกรรมการบริหารคณะและคณะกรรมการประจำคณะวิทยาศาสตร์และเทคโนโลยี ทำหน้าที่กำกับดูแลและติดตามการดำเนินงานของหลักสูตรอย่างเป็นรูปธรรม
                            </div>
                            <div class="qa-item">
                                <span class="qa-item-num bg-primary text-white">5</span>
                                <strong>การประเมินการจัดการเรียนการสอน:</strong> จัดให้มีระบบการประเมินการเรียนของนักศึกษาและประเมินผลการสอนของอาจารย์ผู้สอนโดยนักศึกษาในทุกรายวิชาของทุกภาคการศึกษา เพื่อนำผลสะท้อนกลับมาพัฒนาการสอน
                            </div>
                            <div class="qa-item">
                                <span class="qa-item-num bg-primary text-white">6</span>
                                <strong>ระบบการคัดเลือกนักศึกษา:</strong> ดำเนินการคัดเลือกนักศึกษาตามเกณฑ์และมาตรฐานของมหาวิทยาลัย ผ่านระบบ TCAS, รอบโควตา, และรอบรับตรงอย่างโปร่งใส เป็นธรรม และตรวจสอบได้
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. ทรัพยากรประกอบการเรียน -->
                <div class="col-lg-6 mb-4">
                    <div class="qa-card shadow-sm">
                        <div class="qa-card-header">
                            <div class="qa-icon-wrap bg-success text-white">
                                <i class="fa fa-desktop"></i>
                            </div>
                            <div>
                                <h2 class="h5 font-weight-bold mb-0 text-dark">2. ทรัพยากรประกอบการเรียนและการเรียนรู้</h2>
                                <small class="text-muted">Learning Resources & State-of-the-art Facilities</small>
                            </div>
                        </div>
                        <div class="qa-items-container">
                            <div class="qa-item">
                                <span class="qa-item-num bg-success text-white">1</span>
                                <strong>ห้องปฏิบัติการเฉพาะทางทันสมัย:</strong> จัดให้มีห้องปฏิบัติการคอมพิวเตอร์เฉพาะทางรวมกว่า 10 ห้องปฏิบัติการ ณ อาคาร 75 ปี วไลยอลงกรณ์ เพื่อรองรับวิชาปฏิบัติการแบบ 1 คน ต่อ 1 เครื่อง พร้อมอุปกรณ์โปรเจกเตอร์และเครื่องปรับอากาศ
                            </div>
                            <div class="qa-item">
                                <span class="qa-item-num bg-success text-white">2</span>
                                <strong>โครงสร้างพื้นฐานดิจิทัล:</strong> จัดระบบเครือข่ายอินเทอร์เน็ตและ Wi-Fi ความเร็วสูงทั่วบริเวณอาคารเรียน ระบบบริการเครื่องแม่ข่าย (Server) และแพลตฟอร์มคลาวด์สำหรับฝึกปฏิบัติการ
                            </div>
                            <div class="qa-item">
                                <span class="qa-item-num bg-success text-white">3</span>
                                <strong>ซอฟต์แวร์และเครื่องมือมาตรฐานสากล:</strong> สนับสนุนซอฟต์แวร์ลิขสิทธิ์ถูกต้อง เครื่องมือสำหรับการพัฒนาซอฟต์แวร์ (Dev Tools), ฐานข้อมูล, การประมวลผลข้อมูล (Data Science & AI) และการออกแบบ UX/UI
                            </div>
                            <div class="qa-item">
                                <span class="qa-item-num bg-success text-white">4</span>
                                <strong>แหล่งสืบค้นและบริการวิชาการ:</strong> ให้บริการห้องสมุดกลางและฐานข้อมูลงานวิจัยระดับชาติ/นานาชาติ (e-Journals, e-Books) เพื่อสนับสนุนการศึกษาค้นคว้าอิสระและการทำโครงงาน
                            </div>
                            <div class="qa-item">
                                <span class="qa-item-num bg-success text-white">5</span>
                                <strong>ความร่วมมือกับเครือข่ายภายนอก:</strong> สร้างความร่วมมือทางวิชาการ (MOU) กับหน่วยงานภาครัฐและภาคเอกชน เช่น สมาคมโปรแกรมเมอร์ไทย, สสวท., และสถาบันเทคโนโลยีกุ้ยโจว เพื่อสนับสนุนอุปกรณ์ วิทยากร และแหล่งฝึกงานจริง
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. การสนับสนุนและการให้คำแนะนำนักศึกษา -->
                <div class="col-lg-6 mb-4">
                    <div class="qa-card shadow-sm">
                        <div class="qa-card-header">
                            <div class="qa-icon-wrap bg-info text-white">
                                <i class="fa fa-users"></i>
                            </div>
                            <div>
                                <h2 class="h5 font-weight-bold mb-0 text-dark">3. การสนับสนุนและการให้คำแนะนำนักศึกษา</h2>
                                <small class="text-muted">Student Guidance, Mentoring & Support</small>
                            </div>
                        </div>
                        <div class="qa-items-container">
                            <div class="qa-item">
                                <span class="qa-item-num bg-info text-white">1</span>
                                <strong>ระบบอาจารย์ที่ปรึกษาใกล้ชิด:</strong> แต่งตั้งอาจารย์ที่ปรึกษาประจำกลุ่มเพื่อดูแล ให้คำแนะนำทั้งด้านวิชาการ การวางแผนการเรียน การใช้ชีวิตในมหาวิทยาลัย และการเตรียมความพร้อมสู่อาชีพ
                            </div>
                            <div class="qa-item">
                                <span class="qa-item-num bg-info text-white">2</span>
                                <strong>ค่ายปรับพื้นฐานวิชาการ (Pre-College Camp):</strong> จัดกิจกรรมอบรมปรับพื้นฐานด้านคณิตศาสตร์ ตรรกศาสตร์ และการเขียนโปรแกรมเริ่มต้น เพื่อลดช่องว่างความรู้แก่ผู้เรียนใหม่จากทุกแผนการเรียน
                            </div>
                            <div class="qa-item">
                                <span class="qa-item-num bg-info text-white">3</span>
                                <strong>ระบบพี่ติวน้องและชุมชนนักพัฒนา:</strong> ส่งเสริมการรวมกลุ่มผ่านชมรมและเครือข่ายรุ่นพี่รุ่นน้องเพื่อแลกเปลี่ยนทักษะและแบ่งปันเทคนิคการทำโครงงาน (Coding Community)
                            </div>
                            <div class="qa-item">
                                <span class="qa-item-num bg-info text-white">4</span>
                                <strong>บริการทุนการศึกษาและสวัสดิการ:</strong> ประสานงานกองทุนเงินให้กู้ยืมเพื่อการศึกษา (กยศ./กรอ.) และจัดสรรทุนการศึกษาจากคณะ/มหาวิทยาลัยแก่นักศึกษาที่ขาดแคลนทุนทรัพย์
                            </div>
                            <div class="qa-item">
                                <span class="qa-item-num bg-info text-white">5</span>
                                <strong>จริยธรรมและความเป็นนักวิทยาศาสตร์:</strong> ส่งเสริมคุณธรรม จริยธรรม จรรยาบรรณวิชาชีพคอมพิวเตอร์ วินัยทางวิชาการ และจิตสำนึกสาธารณะผ่านกิจกรรมเสริมหลักสูตร
                            </div>
                            <div class="qa-item">
                                <span class="qa-item-num bg-info text-white">6</span>
                                <strong>ระบบรับฟังข้อร้องเรียนที่โปร่งใส:</strong> จัดช่องทางรับฟังความคิดเห็นและข้อร้องเรียนของนักศึกษาทั้งออนไลน์และกล่องรับข้อเสนอแนะ พร้อมกระบวนการคุ้มครองและแก้ไขปัญหาที่เป็นธรรม
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. ความต้องการตลาดแรงงานและการประกันคุณภาพบัณฑิต -->
                <div class="col-lg-6 mb-4">
                    <div class="qa-card shadow-sm">
                        <div class="qa-card-header">
                            <div class="qa-icon-wrap bg-warning text-dark">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <div>
                                <h2 class="h5 font-weight-bold mb-0 text-dark">4. การตอบสนองผู้มีส่วนได้เสียและตลาดแรงงาน</h2>
                                <small class="text-muted">Stakeholder Needs & Graduate Employability</small>
                            </div>
                        </div>
                        <div class="qa-items-container">
                            <div class="qa-item">
                                <span class="qa-item-num bg-warning text-dark">1</span>
                                <strong>กำหนดผลลัพธ์การเรียนรู้ (PLOs):</strong> วิเคราะห์ความต้องการของผู้มีส่วนได้เสีย ทั้งผู้ใช้บัณฑิต ศิษย์เก่า และแนวโน้มเทคโนโลยี เพื่อกำหนดคุณลักษณะบัณฑิตและผลลัพธ์การเรียนรู้ที่ตอบโจทย์ภาคอุตสาหกรรมดิจิทัล
                            </div>
                            <div class="qa-item">
                                <span class="qa-item-num bg-warning text-dark">2</span>
                                <strong>การวัดผลสัมฤทธิ์ตามสภาพจริง:</strong> จัดระบบตรวจสอบ การวัด และประเมินผลการผลิตบัณฑิตตามแนวทาง Outcome-Based Education (OBE) ทั้งทักษะเชิงเทคนิค (Hard Skills) และทักษะมนุษย์ (Soft Skills)
                            </div>
                            <div class="qa-item">
                                <span class="qa-item-num bg-warning text-dark">3</span>
                                <strong>การพัฒนาหลักสูตรอย่างต่อเนื่อง:</strong> ติดตามประเมินคุณภาพของนักศึกษาและบัณฑิต พร้อมสำรวจความพึงพอใจของผู้ใช้บัณฑิตเป็นประจำทุกปี เพื่อนำข้อมูลมาปรับปรุงหลักสูตรทุกรอบ 5 ปี
                            </div>
                            <div class="qa-item">
                                <span class="qa-item-num bg-warning text-dark">4</span>
                                <strong>สหกิจศึกษาและการมีงานทำ:</strong> สำรวจภาวะการมีงานทำและอัตราค่าตอบแทนของบัณฑิต พร้อมบูรณาการการเรียนรู้ร่วมกับการทำงานจริง (CWIE) ผ่านรายวิชาสหกิจศึกษาและการฝึกงานในสถานประกอบการชั้นนำ
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Quality Assurance Cycle (PDCA) Section -->
            <div class="card border-0 shadow-sm mb-4" style="background: linear-gradient(180deg, #fbfcfe 0%, #ffffff 100%); border-radius: 12px;">
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <h2 class="h5 font-weight-bold text-dark mb-1">
                            <i class="fa fa-refresh text-primary mr-2"></i>วงจรการพัฒนาคุณภาพอย่างต่อเนื่อง (PDCA Quality Cycle)
                        </h2>
                        <p class="text-muted small mb-0">กระบวนการบริหารจัดการและยกระดับคุณภาพการศึกษาของหลักสูตรวิทยาการคอมพิวเตอร์</p>
                    </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="pdca-card shadow-sm">
                                <div class="pdca-circle bg-primary text-white">P</div>
                                <h3 class="h6 font-weight-bold text-dark mb-1">Plan (วางแผน)</h3>
                                <p class="text-muted small mb-0">กำหนดเป้าหมาย ผลลัพธ์การเรียนรู้ (PLOs) และออกแบบหลักสูตรตามความต้องการของตลาดแรงงาน</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="pdca-card shadow-sm">
                                <div class="pdca-circle bg-success text-white">D</div>
                                <h3 class="h6 font-weight-bold text-dark mb-1">Do (ปฏิบัติการ)</h3>
                                <p class="text-muted small mb-0">จัดการเรียนการสอนแบบ Active Learning การฝึกแล็บจริง และการทำโครงงานนวัตกรรมร่วมกับสถานประกอบการ</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="pdca-card shadow-sm">
                                <div class="pdca-circle bg-info text-white">C</div>
                                <h3 class="h6 font-weight-bold text-dark mb-1">Check (ตรวจสอบ)</h3>
                                <p class="text-muted small mb-0">ประเมินผลการเรียนรู้ตามสภาพจริง การประเมินการสอน และการสำรวจความพึงพอใจของผู้ใช้บัณฑิต</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-3">
                            <div class="pdca-card shadow-sm">
                                <div class="pdca-circle bg-warning text-dark">A</div>
                                <h3 class="h6 font-weight-bold text-dark mb-1">Act (ปรับปรุง)</h3>
                                <p class="text-muted small mb-0">นำผลสะท้อนกลับมาพัฒนาหลักสูตร อัปเกรดเครื่องมือ และพัฒนาสมรรถนะคณาจารย์อย่างต่อเนื่อง</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Navigation & Related Links Card -->
            <div class="quick-nav-card shadow-sm">
                <div class="row align-items-center">
                    <div class="col-lg-8 mb-3 mb-lg-0">
                        <h2 class="h6 font-weight-bold text-dark mb-1">
                            <i class="fa fa-info-circle text-primary mr-2"></i>ข้อมูลที่เกี่ยวข้องกับหลักสูตรและบริการนักศึกษา
                        </h2>
                        <p class="text-muted small mb-0">
                            สำรวจโครงสร้างการบริหารหลักสูตร ห้องปฏิบัติการ ผลลัพธ์การเรียนรู้ หรือส่งข้อเสนอแนะเพื่อการพัฒนา
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <div class="btn-group flex-wrap" role="group">
                            <a href="Management.php" class="btn btn-sm btn-outline-primary mb-1">
                                <i class="fa fa-sitemap mr-1"></i> โครงสร้างบริหาร
                            </a>
                            <a href="LAB.php" class="btn btn-sm btn-outline-success mb-1">
                                <i class="fa fa-desktop mr-1"></i> ห้องปฏิบัติการ
                            </a>
                            <a href="philosophy.php" class="btn btn-sm btn-outline-info mb-1">
                                <i class="fa fa-bullseye mr-1"></i> ผลลัพธ์ PLOs
                            </a>
                            <a href="recommended.php" class="btn btn-sm btn-outline-secondary mb-1">
                                <i class="fa fa-comment-o mr-1"></i> ข้อเสนอแนะ
                            </a>
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