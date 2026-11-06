<?php
$yearNow = (int) date('Y');   // ปี ค.ศ. เช่น 2026
$monthNow = (int) date('n');  // เดือน 1-12

$academicYear = ($monthNow >= 7)
    ? $yearNow + 1 + 543   // กรกฎาคม-ธันวาคม = ใช้ปีปัจจุบัน + 543 + 1
    : $yearNow + 0 + 543;  // มกราคม-มิถุนายน = ใช้ปีปัจจุบัน + 0 + 543

$og_url = "https://cs.vru.ac.th/tcas.php";
$og_type = "article";
$og_title = "รับสมัครนักศึกษาใหม่ ปริญญาตรี ปีการศึกษา {$academicYear} | วิทยาการคอมพิวเตอร์ VRU";
$og_description = "หลักสูตรวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์ รับสมัครนักศึกษาปริญญาตรี ปีการศึกษา {$academicYear} สำหรับเรียนจันทร์-ศุกร์ และเรียนเสาร์-อาทิตย์ ตั้งแต่วันนี้เป็นต้นไป โทร. 02-909-1432 ต่อ 14";
$og_image = "https://cs.vru.ac.th/images/tcas/pr-2020-05-14.jpg";
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <?php include("layouts/meta.php"); ?>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php include("layouts/navbar.php"); ?>

    <div class="content">
        <!-- Introduction -->
        <div class="container-fluid">
            <div class="container mt-4">
                <h1 class="h2"><i class="fa fa-star"></i> รับสมัครนักศึกษาปริญญาตรี (จันทร์-ศุกร์ และ เสาร์-อาทิตย์)</h1>
                <hr>

                <img class="img-thumbnail" src="images/tcas/pr-2020-05-14.jpg" width="100%" alt="รับสมัครนักศึกษาปริญญาตรี หลักสูตรวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ ปีการศึกษา <?= $academicYear ?>">
                <p class="mt-4" style="font-size: 1.3rem;">
                    หลักสูตรวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์ รับสมัคร <strong>นักศึกษาปริญญาตรีปีการศึกษา <?= $academicYear ?> สำหรับเรียนจันทร์-ศุกร์ และเรียนเสาร์-อาทิตย์</strong> ตั้งแต่วันนี้เป็นต้นไป สนใจดูรายละเอียดและกรอกใบสมัครได้ที่นี่ สอบถามข้อมูลการรับสมัครเพิ่มเติม โทรด่วน. 02-909-1432 ต่อ 14
                </p>
            </div>
        </div>

        <!-- ช่องทางการสมัคร -->
        <div class="container-fluid py-5 bg-light">
            <div class="container text-center">
                <h2 class="h3 mt-4">ช่องทางการสมัคร และระยะเวลาการสมัคร</h2>
                <p style="font-size: 1.2rem;">ผ่านเว็บไซต์กลางของมหาวิทยาลัย : <a href="http://ent.vru.ac.th/" target="_blank" rel="noopener">http://ent.vru.ac.th/</a></p>
                <ul class="list-unstyled">
                    <li>ปริญญาตรีเรียนจันทร์ - ศุกร์ สมัครเรียนได้ตั้งแต่ <strong>วันนี้ - มิถุนายน <?= $academicYear ?></strong></li>
                    <li>ปริญญาตรีเรียนเสาร์ - อาทิตย์ สมัครเรียนได้ตั้งแต่ <strong>วันนี้ - มิถุนายน <?= $academicYear ?></strong></li>
                    <li>หลักสูตรสัมฤทธิบัตร สมัครเรียนได้ตลอดทั้งปี <a href="https://medium.com/cs-vru/%E0%B9%82%E0%B8%84%E0%B8%A3%E0%B8%87%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%AA%E0%B8%B1%E0%B8%A1%E0%B8%A4%E0%B8%97%E0%B8%98%E0%B8%B4%E0%B8%9A%E0%B8%B1%E0%B8%95%E0%B8%A3%E0%B8%9B%E0%B8%A3%E0%B8%B4%E0%B8%8D%E0%B8%8D%E0%B8%B2%E0%B8%95%E0%B8%A3%E0%B8%B5-%E0%B8%AB%E0%B8%A5%E0%B8%B1%E0%B8%81%E0%B8%AA%E0%B8%B9%E0%B8%95%E0%B8%A3%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%84%E0%B8%AD%E0%B8%A1%E0%B8%9E%E0%B8%B4%E0%B8%A7%E0%B9%80%E0%B8%95%E0%B8%AD%E0%B8%A3%E0%B9%8C-2caf93254c5d" target="_blank" rel="noopener">อ่านรายละเอียด</a></li>
                    <li><span class="text-success">(เปิดเทอม มิถุนายน <?= $academicYear ?>)</span></li>
                </ul>
                <div class="text-center">
                    <div class="py-2">
                        <a class="btn btn-primary mb-4" href="http://ent.vru.ac.th" target="_blank" rel="noopener">
                            สมัครเรียน
                        </a>
                    </div>
                </div>
                <div class="text-center">
                    หลังจากนักศึกษามีชื่ออยู่ในระบบลงทะเบียนของมหาวิทยาลัยแล้ว นักศึกษาสามารถเข้าไปพิมพ์ใบชำระเงินได้ที่ <a href="http://ent.vru.ac.th/" target="_blank" rel="noopener">http://ent.vru.ac.th/</a>
                    โดยเลือกเข้าสู่ระบบก่อน ด้วยรหัสบัตรประจำตัวประชาชน 13 หลัก ให้กรอกในช่อง Username และ Password ทั้งคู่ จากนั้นกดปุ่มพิมพ์ใบชำระเงิน
                    <div class="text-danger">ชำระเงินค่าสมัครได้ที่เคาน์เตอร์เซอร์วิส 7-11 ทุกสาขาใกล้บ้าน</div>
                </div>
            </div>
        </div>

        <!-- ขั้นตอนการสมัคร และคุณสมบัติ -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="h3 container anchor" id="structure">
                            <i class="fa fa-user"></i> โครงสร้างหลักสูตรวิทยาการคอมพิวเตอร์ <a href="#structure">#</a>
                        </h2>

                        <div class="py-4">
                            <p>จำนวนหน่วยกิต รวมตลอดหลักสูตร <strong>ไม่น้อยกว่า 127 หน่วยกิต</strong> ประกอบด้วย</p>
                            <ul>
                                <li>
                                    <strong>หมวดวิชาศึกษาทั่วไป</strong> จำนวน <strong>ไม่น้อยกว่า 30 หน่วยกิต</strong>
                                    <ul>
                                        <li>เป็นวิชาของหมวดศึกษาทั่วไป <strong>10 วิชา</strong> ที่ทุกคณะต้องเรียนเหมือนกัน</li>
                                        <li>ผู้สำเร็จวุฒิ <strong>ปวส.</strong> มาแล้ว <strong>เรียนเพิ่มเติม 5 วิชา</strong> เทียบโอนได้ 5 วิชา</li>
                                        <li>ผู้สำเร็จวุฒิ <strong>ปริญญาตรี</strong> มาแล้ว <strong>เรียนเพิ่มเติม 1 วิชา</strong> เทียบโอนได้ 9 วิชา</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>หมวดวิชาเฉพาะ</strong> บังคับเรียนจำนวน <strong>ไม่น้อยกว่า 91 หน่วยกิต</strong> (วิชาแกน / วิชาเฉพาะด้าน / วิชาเลือก)
                                    <ul>
                                        <li><strong>วิชาแกน</strong> เป็นกลุ่มวิชาคณิตศาสตร์ <strong>12 หน่วยกิต</strong> หรือ 4 วิชา</li>
                                        <li><strong>วิชาเฉพาะด้าน</strong> เป็นกลุ่มวิชาของหลักสูตรที่เป็นพื้นฐานและบังคับเรียน <strong>51 หน่วยกิต</strong> หรือ 17 วิชา</li>
                                        <li><strong>วิชาเลือก</strong> เป็นกลุ่มวิชาของหลักสูตรที่เปิดโอกาสให้นักศึกษาเลือกเรียนวิชาใดก็ได้ <strong>21 หน่วยกิต</strong> หรือ 7 วิชา</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>หมวดวิชาเลือกเสรี</strong> จำนวน <strong>ไม่น้อยกว่า 6 หน่วยกิต</strong>
                                    <ul>
                                        <li>เป็นวิชาใดๆ ที่เปิดการสอนในมหาวิทยาลัยในแต่ละภาคการศึกษา ซึ่งนักศึกษาสามารถลงเรียนวิชาของหลักสูตรอื่นๆ ได้ 6 หน่วยกิต หรือประมาณ 2 วิชา</li>
                                    </ul>
                                </li>
                            </ul>

                            <a href="structure.php">อ่านรายละเอียดโครงสร้างหลักสูตร</a>
                        </div>
                    </div>

                    <div class="col-lg-12 pt-5">
                        <h2 class="h3 container" id="student" style="padding-top: 100px; margin-top: -100px;">
                            <i class="fa fa-user"></i> คุณสมบัติผู้สมัคร <a href="#student">#</a>
                        </h2>

                        <div class="py-4">
                            <ul>
                                <li><strong>ใช้วุฒิ ม.6 หรือ ปวช. หรือ เทียบเท่า</strong></li>
                                <li>หรือ <strong>ใช้วุฒิ ปวส.</strong> จะสามารถเทียบโอนได้ทันที 15 หน่วยกิตจากวิชาศึกษาทั่วไป (VGE) และสามารถเทียบโอนเพิ่มเติมได้อีกจากวิชาอื่นๆ ที่สอดคล้องจากใบผลการศึกษาจากสถานศึกษาเดิม ทำให้วิธีนี้จะเหลือวิชาที่ต้องเก็บเพิ่มอีกไม่เกิน 112 หน่วยกิต คิดเป็นระยะเวลาคร่าวๆ 3 ปีครึ่ง ซึ่งหากเทียบโอนวิชาอื่นๆ ที่สอดคล้องได้มากเวลาก็จะลดลง</li>
                                <li>หรือ <strong>ใช้วุฒิปริญญาตรี</strong> (จากมหาวิทยาลัยก่อนหน้า) เนื่องจากการศึกษาสมัยใหม่นั้นเริ่มมีผู้สนใจเรียนปริญญาตรีใบที่ 2 ขึ้นไป หากใช้วุฒิ ป.ตรี จากสถานศึกษาเก่าจะสามารถเทียบโอนได้ทันที 30 หน่วยกิตจากวิชาศึกษาทั่วไป (VGE) และสามารถเทียบโอนเพิ่มเติมได้อีกจากวิชาอื่นๆ ที่สอดคล้องจากใบผลการศึกษาจากสถานศึกษาเดิม ทำให้วิธีนี้จะเหลือวิชาที่ต้องเก็บเพิ่มอีกไม่เกิน 97 หน่วยกิต คิดเป็นระยะเวลาคร่าวๆ 3 ปี ซึ่งหากเทียบโอนวิชาอื่นๆ ที่สอดคล้องได้มากเวลาก็จะลดลง</li>
                                <li>หรือ <strong>เทียบโอนมาจากมหาวิทยาลัยก่อนหน้า แต่ยังไม่จบปริญญาตรี</strong> จะสามารถเทียบโอนได้จากวิชาอื่นๆ ที่สอดคล้องในใบผลการศึกษาจากสถานศึกษาเดิม</li>
                            </ul>
                            <a href="https://medium.com/cs-vru/%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B9%80%E0%B8%97%E0%B8%B5%E0%B8%A2%E0%B8%9A%E0%B9%82%E0%B8%AD%E0%B8%99%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B8%A7%E0%B8%B4%E0%B8%8A%E0%B8%B2%E0%B8%99%E0%B8%B1%E0%B8%81%E0%B8%A8%E0%B8%B6%E0%B8%81%E0%B8%A9%E0%B8%B2%E0%B9%83%E0%B8%AB%E0%B8%A1%E0%B9%88-a21ecff2edb3" target="_blank" rel="noopener">
                                อ่านรายละเอียดการเทียบโอนนักศึกษาใหม่
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-12 pt-5">
                        <h2 class="h3 container" id="process" style="padding-top: 100px; margin-top: -100px;">
                            <i class="fa fa-arrow-down"></i> ขั้นตอนการสมัคร <a href="#process">#</a>
                        </h2>

                        <div class="py-3">
                            <ol>
                                <li>กรอกฟอร์มสมัคร ผ่านเว็บไซต์กลางของมหาวิทยาลัย <a href="http://ent.vru.ac.th/" target="_blank" rel="noopener">http://ent.vru.ac.th/</a></li>
                                <li>ชำระค่าสมัคร (เฉพาะนักศึกษาเสาร์ - อาทิตย์) (เคาน์เตอร์เซอร์วิส/โอน/มหาวิทยาลัย)</li>
                                <li>สัมภาษณ์ (เฉพาะนักศึกษาจันทร์ - ศุกร์)</li>
                                <li>ประกาศรายชื่อผู้ผ่านสัมภาษณ์ (เฉพาะนักศึกษาจันทร์ - ศุกร์)</li>
                                <li>สแกน QR code เข้ากลุ่มไลน์เพื่อรับทราบข่าวประชาสัมพันธ์ <a href="#qr-code">ดู QR Code ด้านล่าง</a></li>
                                <li>ประกาศรายชื่อผู้มีสิทธิ์เข้าศึกษา</li>
                                <li>ชำระค่าธรรมเนียมแรกเข้า (เคาน์เตอร์เซอร์วิส/โอน/มหาวิทยาลัย)</li>
                                <li>ชำระค่าลงทะเบียน (เคาน์เตอร์เซอร์วิส/โอน/มหาวิทยาลัย)</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- กำหนดการ -->
        <div class="container-fluid py-5 bg-light">
            <div class="container">
                <!-- START NORMAL -->
                <div>
                    <h2 class="h3"><i class="fa fa-calendar"></i> ตารางการรับสมัครนักศึกษา ปีการศึกษา <?= $academicYear ?> (ปริญญาตรี จันทร์-ศุกร์)</h2>
                    <ul>
                        <li><strong>เปิดรับสมัครออนไลน์ แนบวุฒิการศึกษา และฟรีค่าสมัครตั้งแต่วันนี้ ถึง พฤษภาคม <?= $academicYear ?></strong></li>
                        <li><a href="http://ent.vru.ac.th/Webregister/pages/index_insert_nm.php?fct_id=1" target="_blank" rel="noopener">รับสมัครออนไลน์ ตั้งแต่วันที่ 1 – 20 ของทุกเดือน</a></li>
                        <li>ตรวจสอบรายชื่อผู้มีสิทธิ์สอบสัมภาษณ์ ได้ในระบบรับสมัครนักศึกษา (ดูวันและเวลาสอบสัมภาษณ์) วันที่ 22 ของทุกเดือน</li>
                        <li>สอบสัมภาษณ์ วันที่ 26 ของทุกเดือน</li>
                        <li>ประกาศรายชื่อผู้มีสิทธิ์เข้าศึกษา วันที่ 30 ของทุกเดือน</li>
                        <li>ชำระเงินค่าธรรมเนียมแรกเข้า / ค่าลงทะเบียน ผ่านเคาน์เตอร์ 7-11 / งานการเงินและการบัญชีของมหาวิทยาลัย หรือ โอนเข้าบัญชีมหาวิทยาลัย (แนบสลิปการโอนเงินในเว็บไซต์รับสมัคร) วันที่ 1 – 10 ของทุกเดือน (หากไม่ชำระเงินตามกำหนดจะต้องสมัครใหม่ในรอบถัดไป)</li>
                        <li>ปฐมนิเทศภายในมิถุนายน <?= $academicYear ?></li>
                        <li>เปิดภาคการศึกษาที่ 1/<?= $academicYear ?> ในวันที่ 17 มิถุนายน <?= $academicYear ?></li>
                        <li>**ฟรีค่าสมัครทุกรอบการรับสมัคร**</li>
                    </ul>
                    <p>หมายเหตุ : หลักสูตรวิทยาการคอมพิวเตอร์ไม่เข้าระบบ TCAS ผู้ที่สนใจสมัครเรียนสามารถสมัครได้ทุกเวลา จนกว่าจะถึงเดือนพฤษภาคม <?= $academicYear ?></p>

                    <div class="text-center mt-4">
                        <a class="btn btn-primary" href="http://ent.vru.ac.th/Webregister/PDFfile/new_sci.pdf" target="_blank" rel="noopener">ดูกำหนดการรับสมัครจันทร์ - ศุกร์</a>
                    </div>
                </div>
                <!-- END NORMAL -->

                <!-- START SPECIAL -->
                <div class="mt-4">
                    <h2 class="h3"><i class="fa fa-calendar"></i> ตารางการรับสมัครนักศึกษาปริญญาตรี เสาร์-อาทิตย์ ปีการศึกษา <?= $academicYear ?></h2>
                    <ul>
                        <li><strong>เปิดรับสมัครออนไลน์ แนบวุฒิการศึกษา และชำระเงินค่าสมัครตั้งแต่วันนี้ ถึง พฤษภาคม <?= $academicYear ?></strong></li>
                        <li>ประกาศรายชื่อผู้มีสิทธิ์เข้าศึกษาและสาขาวิชาที่เปิดเรียนได้ พฤษภาคม <?= $academicYear ?></li>
                        <li>ผู้สมัครเลือกสาขาวิชาใหม่ในสาขาวิชาที่ไม่สามารถเปิดเรียนได้ ในระบบรับสมัคร พฤษภาคม <?= $academicYear ?></li>
                        <li>ประกาศรายชื่อผู้มีสิทธิ์เข้าศึกษา (เพิ่มเติม) พฤษภาคม <?= $academicYear ?></li>
                        <li>ชำระเงินลงทะเบียนที่เคาน์เตอร์เซอร์วิส 7-11 / มหาวิทยาลัย วันที่ 1 - 15 มิถุนายน <?= $academicYear ?></li>
                        <li>ปฐมนิเทศภายในมิถุนายน <?= $academicYear ?></li>
                        <li>เปิดภาคการศึกษาที่ 1/<?= $academicYear ?> ในเดือนมิถุนายน <?= $academicYear ?></li>
                    </ul>
                </div>
                <!-- END SPECIAL -->
            </div>
        </div>

        <!-- อัตราค่าธรรมเนียมการศึกษาวิทยาการคอมพิวเตอร์ -->
        <div class="container-fluid py-5">
            <div class="container">
                <h2 class="h3 container anchor" id="fee">
                    <i class="fa fa-percent"></i> อัตราค่าธรรมเนียมการศึกษาวิทยาการคอมพิวเตอร์ <a href="#fee">#</a>
                </h2>
                <div class="text-center">
                    <div class="py-2">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ภาคการเรียน</th>
                                        <th>ช่วงเวลา</th>
                                        <th>จันทร์ - ศุกร์</th>
                                        <th>เสาร์ - อาทิตย์</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ภาค 1</td>
                                        <td>มิถุนายน - ตุลาคม</td>
                                        <td>12,000 บาท</td>
                                        <td>12,000 บาท</td>
                                    </tr>
                                    <tr>
                                        <td>ภาค 2</td>
                                        <td>พฤศจิกายน - มีนาคม</td>
                                        <td>12,000 บาท</td>
                                        <td>12,000 บาท</td>
                                    </tr>
                                    <tr>
                                        <td>ภาคฤดูร้อน</td>
                                        <td>เมษายน - พฤษภาคม</td>
                                        <td>-</td>
                                        <td>6,000 บาท</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="text-secondary">
                                        <th>รวม</th>
                                        <th>ตลอดปี</th>
                                        <th>24,000 บาท</th>
                                        <th>30,000 บาท</th>
                                    </tr>
                                    <tr class="text-primary">
                                        <th>รวม</th>
                                        <th>ตลอดหลักสูตร 4 ปี</th>
                                        <th>96,000 บาท</th>
                                        <th>120,000 บาท</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="text-left">
                            <h3 class="h6"><strong>อัตราค่าธรรมเนียมอื่นๆ 1</strong> (ที่อยู่นอกเหนือจากในตารางข้างต้น)</h3>
                            <ul>
                                <li><strong>อัตราค่าธรรมเนียมการสมัคร</strong> อ้างอิงตามประกาศในแต่ละปีหรือประเภทนักศึกษา <strong>0 - 300 บาท</strong></li>
                                <li><strong>อัตราค่าธรรมเนียมแรกเข้า</strong> สำหรับนักศึกษาใหม่ <strong>1,500 บาท</strong></li>
                                <li><strong>อัตราค่าธรรมเนียมบัตรนักศึกษา</strong> ออกให้โดยธนาคารกรุงไทย (บัตรเดบิต) ใช้งานได้ 4 ปี <strong>500 บาท</strong></li>
                            </ul>
                            <h3 class="h6"><strong>อัตราค่าธรรมเนียมอื่นๆ 2</strong> (สำหรับบางคน)</h3>
                            <ul>
                                <li><strong>อัตราค่าธรรมเนียมการเทียบโอนหน่วยกิต</strong> สำหรับผู้ต้องการเทียบโอน หน่วยกิตละ <strong>100 บาท</strong></li>
                                <li><strong>อัตราค่าธรรมเนียมรักษาสถานภาพนักศึกษา</strong> สำหรับผู้ต้องการพักการเรียน ภาคการศึกษาละ <strong>1,500 บาท</strong></li>
                                <li><strong>อัตราค่าธรรมเนียมชำระค่าเล่าเรียนล่าช้าหรือผ่อนชำระ</strong> อัตราล่าช้าวันละ 20 บาท หรือสูงสุดต่อภาคการศึกษา <strong>ไม่เกิน 1,500 บาท</strong></li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="py-2">
                            <a class="btn btn-primary mb-4" href="http://ent.vru.ac.th" target="_blank" rel="noopener">
                                สมัครเรียน
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Technology Stack -->
        <?php include("layouts/technology-stack.php"); ?>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>
</body>

</html>
