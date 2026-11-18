<?php
$og_title = "ตราสัญลักษณ์และอัตลักษณ์ประจำหลักสูตร (Brand Identity) | วิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ (VRU)";
$og_description = "เรื่องราว ความหมาย และคู่มืออัตลักษณ์ตราสัญลักษณ์สาขาวิชาวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ ทั้งตราสัญลักษณ์ประจำสาขา และตราฉลองครบรอบ 40 ปี พร้อมโค้ดสีทางการ และศูนย์ดาวน์โหลดไฟล์ความละเอียดสูง";
$og_url = "https://cs.vru.ac.th/identity.php";
$og_image = "https://cs.vru.ac.th/images/logo/logo-anniversary-full.png";
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <?php include("layouts/meta.php"); ?>
    <style>
        /* High contrast typography & Dark Gray styling */
        body, .content {
            color: #212529 !important;
        }

        .identity-hero {
            background: linear-gradient(135deg, #3b0764 0%, #581845 50%, #701a75 100%);
            color: #ffffff;
            border-radius: 16px;
            padding: 2.5rem 2rem;
            margin-bottom: 2.5rem;
            box-shadow: 0 4px 20px rgba(88, 24, 69, 0.2);
        }

        .identity-hero h1 {
            color: #ffffff;
            font-weight: 800;
        }

        .identity-hero p {
            color: #f5d0fe;
            font-size: 1.05rem;
            line-height: 1.6;
            margin-bottom: 0;
        }

        .brand-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 2rem 1.75rem;
            height: 100%;
            transition: all 0.25s ease-in-out;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
        }

        .brand-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.1);
            border-color: #0284c7;
        }

        .logo-preview-box {
            background: #f8fafc;
            border: 1px dashed #cbd5e1;
            border-radius: 12px;
            padding: 2rem 1.5rem;
            text-align: center;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 220px;
        }

        .palette-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
            height: 100%;
            transition: transform 0.2s ease;
        }

        .palette-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 18px rgba(0,0,0,0.08);
        }

        .palette-color {
            height: 110px;
            width: 100%;
            position: relative;
        }

        .guideline-box {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            padding: 1.5rem;
            height: 100%;
        }

        .do-header {
            color: #16a34a;
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 1rem;
        }

        .dont-header {
            color: #dc2626;
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 1rem;
        }

        .asset-row {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 1.25rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 1rem;
            transition: all 0.2s ease;
        }

        .asset-row:hover {
            border-color: #0284c7;
            background: #f8fafc;
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
                    <li class="breadcrumb-item"><a href="history.php" class="text-secondary">เกี่ยวกับหลักสูตร</a></li>
                    <li class="breadcrumb-item active text-dark font-weight-bold" aria-current="page">ตราสัญลักษณ์และอัตลักษณ์</li>
                </ol>
            </nav>

            <!-- Hero Banner -->
            <div class="identity-hero">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <span class="badge badge-warning text-dark font-weight-bold px-3 py-1 mb-2">
                            <i class="fa fa-id-badge mr-1"></i> CS-VRU Brand Identity & CI Guidelines
                        </span>
                        <h1 class="h2 mb-2">ตราสัญลักษณ์และอัตลักษณ์ประจำหลักสูตร</h1>
                        <p>
                            หลักสูตรวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์<br>
                            สัญลักษณ์แห่งปัญญา ความเป็นมืออาชีพด้านดิจิทัล และความภาคภูมิใจในก้าวย่างกว่า 4 ทศวรรษ (2528 – ปัจจุบัน)
                        </p>
                    </div>
                    <div class="col-lg-4 text-center d-none d-lg-block">
                        <img src="images/logo/logo-anniversary-full.png" alt="โลโก้ 40 ปี วิทยาการคอมพิวเตอร์" style="max-height: 140px; background: rgba(255,255,255,0.15); padding: 10px; border-radius: 16px;">
                    </div>
                </div>
            </div>

            <!-- บทนำและเรื่องราวอัตลักษณ์ (Story & Meaning) -->
            <div class="card border-0 shadow-sm mb-5" style="border-radius: 12px; background: #ffffff;">
                <div class="card-body p-4">
                    <h2 class="h4 font-weight-bold text-dark mb-3">
                        <i class="fa fa-quote-left text-primary mr-2"></i>เรื่องเล่าอัตลักษณ์และเจตนารมณ์แห่งการออกแบบ
                    </h2>
                    <p class="text-secondary" style="line-height: 1.8;">
                        นับตั้งแต่การก่อตั้งภาควิชาคอมพิวเตอร์ในปี พ.ศ. 2528 สู่การเป็นหลักสูตรวิทยาการคอมพิวเตอร์ในปัจจุบัน ตราสัญลักษณ์และอัตลักษณ์ของสาขาวิชาทำหน้าที่เป็นภาพสะท้อนจิตวิญญาณแห่งการแสวงหาความรู้ทางวิทยาการคอมพิวเตอร์ การฝึกฝนทักษะการแก้ปัญหาด้วยตรรกะ และการสร้างสรรค์นวัตกรรมซอฟต์แวร์เพื่อขับเคลื่อนสังคม ตราสัญลักษณ์ของหลักสูตรจึงถูกออกแบบอย่างพิถีพิถันเพื่อสื่อสารความเป็นเลิศทางวิชาการและรากเหง้าอันทรงเกียรติของมหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์
                    </p>
                </div>
            </div>

            <!-- 2 ตราสัญลักษณ์หลัก: โลโก้ปกติ vs โลโก้ฉลอง 40 ปี -->
            <div class="mb-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="h4 font-weight-bold mb-0">
                        <i class="fa fa-cubes text-primary mr-2"></i>ตราสัญลักษณ์หลักสูตรทั้ง 2 รูปแบบ
                    </h2>
                    <span class="badge badge-light border text-muted">2 รูปแบบทางการ</span>
                </div>

                <div class="row">
                    <!-- ตราสัญลักษณ์ปกติ: Hexagon Official Emblem -->
                    <div class="col-lg-6 mb-4">
                        <div class="brand-card" style="border-top: 5px solid #581845;">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge badge-secondary px-3 py-1 font-weight-bold">ตราสัญลักษณ์ทางการ (Official Emblem)</span>
                                <small class="text-muted"><i class="fa fa-cube mr-1"></i> โครงสร้างหลักสูตร</small>
                            </div>

                            <div class="logo-preview-box">
                                <img src="images/logo/logo-normal.png" alt="ตราสัญลักษณ์ประจำสาขาวิชาวิทยาการคอมพิวเตอร์ VRU" style="max-height: 170px; max-width: 100%; object-fit: contain;">
                            </div>

                            <h3 class="h5 font-weight-bold text-dark mb-2">ตราสัญลักษณ์ประจำสาขาวิชา (Hexagon Emblem)</h3>
                            <p class="text-secondary small mb-3 flex-grow-1" style="line-height: 1.7;">
                                • <strong>รูปทรงหกเหลี่ยม (Hexagon):</strong> รูปทรงเรขาคณิตที่สมบูรณ์แบบ สื่อถึงโครงสร้างทางวิทยาการคอมพิวเตอร์ โครงสร้างข้อมูล และสถาปัตยกรรมระบบเครือข่ายที่มีความแม่นยำ เป็นระเบียบ และเชื่อมโยงกันอย่างมั่นคง<br>
                                • <strong>อักษรย่อ "CS":</strong> ย่อมาจาก Computer Science จัดวางอย่างมีมิติ สื่อถึงศาสตร์แห่งการเขียนโปรแกรมและการแก้ปัญหาเชิงคำนวณ<br>
                                • <strong>สีม่วงเข้ม (Royal Purple):</strong> สีประจำคณะวิทยาศาสตร์และเทคโนโลยี และมหาวิทยาลัย สื่อถึงปัญญา ความคิดสร้างสรรค์ และเกียรติยศทางวิชาการ
                            </p>

                            <div class="p-3 bg-light rounded mb-3 small">
                                <strong class="text-dark"><i class="fa fa-check-circle text-success mr-1"></i> การนำไปใช้งาน:</strong> 
                                ใช้ในเอกสารทางการ, เล่มหลักสูตร มคอ., เว็บไซต์ทางการ, ใบรับรอง, และหัวจดหมายราชการ
                            </div>

                            <div>
                                <a href="images/logo/logo-normal.png" download="CS-VRU-Logo-Standard.png" class="btn btn-outline-dark btn-block font-weight-bold btn-sm py-2">
                                    <i class="fa fa-download mr-1"></i> ดาวน์โหลดไฟล์ PNG (ตราปกติ ความละเอียดสูง)
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- ตราสัญลักษณ์วาระ 40 ปี: 40th Anniversary Celebration -->
                    <div class="col-lg-6 mb-4">
                        <div class="brand-card" style="border-top: 5px solid #f59e0b; background: linear-gradient(180deg, #ffffff 0%, #fffdfa 100%);">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge badge-warning text-dark px-3 py-1 font-weight-bold">
                                    <i class="fa fa-star text-danger mr-1"></i> วาระเฉลิมฉลอง: 40 ปี (พ.ศ. 2528 – ปัจจุบัน)
                                </span>
                                <small class="text-warning font-weight-bold">40th Anniversary</small>
                            </div>

                            <div class="logo-preview-box" style="background: #fffbf5;">
                                <img src="images/logo/logo-anniversary-full.png" alt="โลโก้ฉลอง 40 ปี วิทยาการคอมพิวเตอร์ VRU" style="max-height: 170px; max-width: 100%; object-fit: contain;">
                            </div>

                            <h3 class="h5 font-weight-bold text-dark mb-2">ตราสัญลักษณ์ฉลองครบรอบ 40 ปี (40th Anniversary)</h3>
                            <p class="text-secondary small mb-3 flex-grow-1" style="line-height: 1.7;">
                                • <strong>ตัวเลข "40":</strong> ขนาดใหญ่ มั่นคง เฉลิมฉลองประวัติศาสตร์การจัดการเรียนการสอนอันยาวนานกว่า 4 ทศวรรษ นับตั้งแต่ปี พ.ศ. 2528<br>
                                • <strong>ตรา CS สีทองและสีม่วง (Gold & Purple):</strong> การผสานสีทองแห่งความสำเร็จ คุณค่า และความเป็นเลิศทางวิชาการ เข้ากับสีม่วงอันเป็นอัตลักษณ์ของสถาบัน<br>
                                • <strong>ริบบิ้น "VRU CS Anniversary":</strong> ร้อยเรียงความภาคภูมิใจ ความผูกพันของคณาจารย์ ศิษย์เก่า และนักศึกษาทุกรุ่น ที่ร่วมกันสร้างสรรค์บัณฑิตคุณภาพ
                            </p>

                            <div class="p-3 bg-light rounded mb-3 small">
                                <strong class="text-dark"><i class="fa fa-check-circle text-warning mr-1"></i> การนำไปใช้งาน:</strong> 
                                ใช้ในสื่อประชาสัมพันธ์, โซเชียลมีเดีย, ป้ายกิจกรรม, เสื้อรุ่น/เสื้อกิจกรรม 40 ปี, ของที่ระลึก และสไลด์นำเสนอ
                            </div>

                            <div class="d-flex flex-wrap gap-2">
                                <a href="images/logo/logo-anniversary-full.png" download="CS-VRU-Logo-40th-Full.png" class="btn btn-warning font-weight-bold btn-sm py-2 text-dark mr-2 mb-2 flex-grow-1 shadow-xs">
                                    <i class="fa fa-download mr-1"></i> ดาวน์โหลดแบบ Full (พร้อมข้อความ)
                                </a>
                                <a href="images/logo/logo-anniversary.png" download="CS-VRU-Logo-40th-Emblem.png" class="btn btn-outline-dark font-weight-bold btn-sm py-2 mb-2 flex-grow-1">
                                    <i class="fa fa-download mr-1"></i> ดาวน์โหลดแบบ Emblem (เฉพาะตรา)
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- คู่มือชุดสีทางการ (Brand Color Palette) -->
            <div class="mb-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="h4 font-weight-bold mb-0">
                        <i class="fa fa-paint-brush text-primary mr-2"></i>คู่มือชุดสีทางการ (Official Color Palette)
                    </h2>
                    <span class="badge badge-light border text-muted">CI Colors</span>
                </div>

                <div class="row">
                    <!-- สีที่ 1: Royal Purple (ม่วงสถาบัน) -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="palette-card">
                            <div class="palette-color" style="background-color: #581845;"></div>
                            <div class="p-3">
                                <h3 class="h6 font-weight-bold text-dark mb-1">Royal / Heritage Purple</h3>
                                <div class="text-muted small mb-2">สีม่วงประจำสถาบัน</div>
                                <div class="small bg-light p-2 rounded">
                                    <div><strong>HEX:</strong> <code>#581845</code></div>
                                    <div><strong>RGB:</strong> 88, 24, 69</div>
                                    <div><strong>CMYK:</strong> 45, 95, 45, 55</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- สีที่ 2: Golden Excellence (ทองเฉลิมฉลอง) -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="palette-card">
                            <div class="palette-color" style="background-color: #f59e0b;"></div>
                            <div class="p-3">
                                <h3 class="h6 font-weight-bold text-dark mb-1">Golden Excellence</h3>
                                <div class="text-muted small mb-2">สีทองแห่งความสำเร็จ (40 ปี)</div>
                                <div class="small bg-light p-2 rounded">
                                    <div><strong>HEX:</strong> <code>#F59E0B</code></div>
                                    <div><strong>RGB:</strong> 245, 158, 11</div>
                                    <div><strong>CMYK:</strong> 2, 40, 100, 0</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- สีที่ 3: Deep Charcoal (เทาเข้มคอนทราสต์) -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="palette-card">
                            <div class="palette-color" style="background-color: #212529;"></div>
                            <div class="p-3">
                                <h3 class="h6 font-weight-bold text-dark mb-1">Deep Charcoal</h3>
                                <div class="text-muted small mb-2">สีเทาเข้มเนื้อหาและข้อความ</div>
                                <div class="small bg-light p-2 rounded">
                                    <div><strong>HEX:</strong> <code>#212529</code></div>
                                    <div><strong>RGB:</strong> 33, 37, 41</div>
                                    <div><strong>CMYK:</strong> 0, 0, 0, 90</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- สีที่ 4: Pure White (ขาวพื้นหลัง) -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="palette-card">
                            <div class="palette-color" style="background-color: #ffffff; border-bottom: 1px solid #e2e8f0;"></div>
                            <div class="p-3">
                                <h3 class="h6 font-weight-bold text-dark mb-1">Pure White</h3>
                                <div class="text-muted small mb-2">สีขาวพื้นหลังโปร่งใส</div>
                                <div class="small bg-light p-2 rounded">
                                    <div><strong>HEX:</strong> <code>#FFFFFF</code></div>
                                    <div><strong>RGB:</strong> 255, 255, 255</div>
                                    <div><strong>CMYK:</strong> 0, 0, 0, 0</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ข้อกำหนดการนำไปใช้งาน (Brand Guidelines / Do's & Don'ts) -->
            <div class="mb-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="h4 font-weight-bold mb-0">
                        <i class="fa fa-check-square-o text-primary mr-2"></i>ข้อกำหนดและแนวทางการนำไปใช้งาน (Do's & Don'ts)
                    </h2>
                </div>

                <div class="row">
                    <!-- Do's -->
                    <div class="col-md-6 mb-4">
                        <div class="guideline-box" style="border-top: 4px solid #16a34a;">
                            <div class="do-header">
                                <i class="fa fa-check-circle mr-1"></i> สิ่งที่ควรปฏิบัติ (Do's)
                            </div>
                            <ul class="text-secondary small mb-0 pl-3" style="line-height: 1.8;">
                                <li><strong>รักษาสัดส่วนภาพเสมอ:</strong> กด Shift ค้างไว้ขณะปรับขนาดในโปรแกรมกราฟิก หรือกำหนด <code>height: auto</code> เพื่อรักษาสัดส่วนเดิม</li>
                                <li><strong>วางบนพื้นหลังที่คอนทราสต์ชัดเจน:</strong> ควรวางตราสัญลักษณ์บนพื้นหลังสีขาว สีครีม หรือสีอ่อนเพื่อให้มองเห็นองค์ประกอบครบถ้วน</li>
                                <li><strong>เว้นระยะขอบปลอดภัย (Clear Space):</strong> ควรเว้นพื้นที่ว่างรอบตัวโลโก้อย่างน้อยเท่ากับความสูงของตัวอักษร CS เพื่อไม่ให้องค์ประกอบอื่นเบียดบัง</li>
                                <li><strong>ใช้ไฟล์ต้นฉบับความละเอียดสูง:</strong> ดาวน์โหลดไฟล์ PNG แท้จากหน้านี้เพื่อป้องกันภาพแตกเบลอเมื่อพิมพ์ลงป้ายหรือเอกสาร</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Don'ts -->
                    <div class="col-md-6 mb-4">
                        <div class="guideline-box" style="border-top: 4px solid #dc2626;">
                            <div class="dont-header">
                                <i class="fa fa-times-circle mr-1"></i> ข้อห้ามปฏิบัติ (Don'ts)
                            </div>
                            <ul class="text-secondary small mb-0 pl-3" style="line-height: 1.8;">
                                <li><strong>ห้ามบิด ยืด หรือบีบสัดส่วน:</strong> การดึงภาพให้แคบลงหรือกว้างขึ้นทำให้ตราสัญลักษณ์เสียรูปลักษณ์มาตรฐาน</li>
                                <li><strong>ห้ามปรับเปลี่ยนชุดสี:</strong> ห้ามเปลี่ยนสีตัวอักษรหรือริบบิ้นเป็นสีอื่นที่ไม่อยู่ในคู่มือ CI</li>
                                <li><strong>ห้ามใส่เอฟเฟกต์เงาหนาเกินไป:</strong> หลีกเลี่ยง Drop Shadow สีดำหนา หรือเอฟเฟกต์ 3D Glow ที่บดบังรายละเอียด</li>
                                <li><strong>ห้ามตัดทอนองค์ประกอบสำคัญ:</strong> ห้ามลบข้อความ 40th Anniversary หรือลบอักษร VRU ออกจากตราสัญลักษณ์</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ศูนย์รวมดาวน์โหลดไฟล์สื่อ (Download Asset Center) -->
            <div class="mb-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="h4 font-weight-bold mb-0">
                        <i class="fa fa-download text-primary mr-2"></i>ศูนย์ดาวน์โหลดไฟล์ตราสัญลักษณ์ (Asset Download Center)
                    </h2>
                    <span class="badge badge-light border text-muted">High-Resolution Files</span>
                </div>

                <div class="asset-row">
                    <div class="d-flex align-items-center">
                        <img src="images/logo/logo-normal.png" alt="โลโก้ปกติ" style="width: 48px; height: 48px; object-fit: contain;" class="mr-3 p-1 bg-light rounded">
                        <div>
                            <strong class="text-dark">ตราสัญลักษณ์ประจำสาขาวิชา (Logo Standard)</strong>
                            <div class="text-muted small">ไฟล์ PNG พื้นหลังโปร่งใส (Transparent) • สำหรับเอกสารราชการและงานนำเสนอทั่วไป</div>
                        </div>
                    </div>
                    <div>
                        <a href="images/logo/logo-normal.png" download="CS-VRU-Logo-Standard.png" class="btn btn-outline-primary btn-sm font-weight-bold px-3">
                            <i class="fa fa-download mr-1"></i> ดาวน์โหลด PNG
                        </a>
                    </div>
                </div>

                <div class="asset-row">
                    <div class="d-flex align-items-center">
                        <img src="images/logo/logo-anniversary-full.png" alt="โลโก้ 40 ปี Full" style="width: 48px; height: 48px; object-fit: contain;" class="mr-3 p-1 bg-light rounded">
                        <div>
                            <strong class="text-dark">ตราสัญลักษณ์ฉลองครบรอบ 40 ปี — แบบเต็ม (40th Anniversary Full)</strong>
                            <div class="text-muted small">ไฟล์ PNG พื้นหลังโปร่งใสพร้อมข้อความ 40th Anniversary Computer Science • เหมาะกับป้ายนิทรรศการและเสื้อกิจกรรม</div>
                        </div>
                    </div>
                    <div>
                        <a href="images/logo/logo-anniversary-full.png" download="CS-VRU-Logo-40th-Full.png" class="btn btn-warning btn-sm font-weight-bold px-3 text-dark shadow-xs">
                            <i class="fa fa-download mr-1"></i> ดาวน์โหลด Full PNG
                        </a>
                    </div>
                </div>

                <div class="asset-row">
                    <div class="d-flex align-items-center">
                        <img src="images/logo/logo-anniversary.png" alt="โลโก้ 40 ปี Emblem" style="width: 48px; height: 48px; object-fit: contain;" class="mr-3 p-1 bg-light rounded">
                        <div>
                            <strong class="text-dark">ตราสัญลักษณ์ฉลองครบรอบ 40 ปี — เฉพาะตรา (40th Anniversary Emblem)</strong>
                            <div class="text-muted small">ไฟล์ PNG ตัดขอบกระชับเฉพาะตัวเลข 40 และริบบิ้น • เหมาะสำหรับวางบนแถบ Navbar, สไลด์มุมจอ หรือหัวกระดาษ</div>
                        </div>
                    </div>
                    <div>
                        <a href="images/logo/logo-anniversary.png" download="CS-VRU-Logo-40th-Emblem.png" class="btn btn-outline-dark btn-sm font-weight-bold px-3">
                            <i class="fa fa-download mr-1"></i> ดาวน์โหลด Emblem PNG
                        </a>
                    </div>
                </div>
            </div>

            <!-- กล่องเชื่อมโยง: ย้อนกลับไปดูประวัติหลักสูตร -->
            <div class="p-4 rounded border bg-light text-center">
                <h3 class="h5 font-weight-bold text-dark mb-2">สนใจศึกษาประวัติความเป็นมาและพัฒนาการ 4 ทศวรรษของหลักสูตร?</h3>
                <p class="text-secondary small mb-3">ย้อนรอยเหตุการณ์สำคัญตั้งแต่การก่อตั้งภาควิชาคอมพิวเตอร์ พ.ศ. 2528 สู่หลักสูตรปัจจุบัน</p>
                <a href="history.php" class="btn btn-primary font-weight-bold btn-sm px-4 py-2 shadow-xs">
                    <i class="fa fa-history mr-1"></i> อ่านประวัติความเป็นมาของหลักสูตร (History Timeline)
                </a>
            </div>

        </div>
    </div>

    <!-- Structured Data (Schema.org WebPage) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "ตราสัญลักษณ์และอัตลักษณ์ประจำหลักสูตร วิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์",
        "url": "https://cs.vru.ac.th/identity.php",
        "description": "เรื่องราว ความหมาย และคู่มืออัตลักษณ์ตราสัญลักษณ์สาขาวิชาวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ ทั้งตราสัญลักษณ์ประจำสาขา และตราฉลองครบรอบ 40 ปี",
        "breadcrumb": {
            "@type": "BreadcrumbList",
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "หน้าหลัก",
                    "item": "https://cs.vru.ac.th/"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "เกี่ยวกับหลักสูตร",
                    "item": "https://cs.vru.ac.th/history.php"
                },
                {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "ตราสัญลักษณ์และอัตลักษณ์",
                    "item": "https://cs.vru.ac.th/identity.php"
                }
            ]
        }
    }
    </script>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>
</body>

</html>
