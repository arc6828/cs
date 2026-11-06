# สรุปรายการหน้าเว็บทั้งหมดในระบบ (Site Map & Page Inventory)

เอกสารนี้สรุปรายชื่อไฟล์หน้าเว็บทั้งหมดในโปรเจกต์เว็บไซต์หลักสูตรวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์ โดยแบ่งตามสถานะการใช้งานและหมวดหมู่เมนู

---

## 1. หน้าเว็บหลักที่แสดงในเมนูนำทาง (Active Main Navigation Pages)

หน้าเว็บกลุ่มนี้ถูกเชื่อมโยงอยู่ในแถบเมนูหลัก (`layouts/header.php` และ `layouts/footer.php`) และเปิดให้ผู้ใช้งานทั่วไปเข้าถึงได้ตามปกติ:

### หน้าหลัก & ติดต่อเรา
| ไฟล์ | ชื่อหน้า / รายละเอียด |
| :--- | :--- |
| [`index.php`](index.php) | หน้าแรกของเว็บไซต์ (แบนเนอร์, ข้อมูลภาพรวมหลักสูตร, ไฮไลต์กิจกรรมและสิ่งที่ได้เรียน) |
| [`contact.php`](contact.php) | ข้อมูลติดต่อหลักสูตร แผนที่ และช่องทางโซเชียลมีเดีย |

### หมวด: เกี่ยวกับหลักสูตร
| ไฟล์ | ชื่อหน้า / รายละเอียด |
| :--- | :--- |
| [`history.php`](history.php) | ประวัติความเป็นมาของหลักสูตรวิทยาการคอมพิวเตอร์ |
| [`structure.php`](structure.php) | โครงสร้างหลักสูตรปัจจุบัน (ดึงข้อมูลรายวิชาจาก `layouts/cs-course65.php`) |
| [`Description.php`](Description.php) | รายละเอียดหลักสูตร (ชื่อปริญญา, อาชีพที่ประกอบได้หลังสำเร็จการศึกษา) |
| [`Management.php`](Management.php) | โครงสร้างบริหารหลักสูตร |
| [`policy.php`](policy.php) | นโยบายด้านคุณภาพ |
| [`philosophy.php`](philosophy.php) | ปรัชญา วิสัยทัศน์ และพันธกิจของหลักสูตร |
| [`LAB.php`](LAB.php) | ข้อมูลและภาพบรรยากาศห้องปฏิบัติการคอมพิวเตอร์ |

### หมวด: อาจารย์และบุคลากร
| ไฟล์ | ชื่อหน้า / รายละเอียด |
| :--- | :--- |
| [`teacher.php`](teacher.php) | รายชื่อและประวัติอาจารย์ประจำหลักสูตร (ดึงข้อมูลจาก `json/teacher.json`) |
| [`support.php`](support.php) | รายชื่อบุคลากรสายสนับสนุนประจำหลักสูตร (ดึงข้อมูลจาก `json/support.json`) |
| [`publication.php`](publication.php) | ผลงานตีพิมพ์และงานวิจัยของคณาจารย์ในหลักสูตร (CS Publications) |
| [`Training.php`](Training.php) | ระบบแจ้งการอบรมพัฒนาความรู้ของอาจารย์และบุคลากร |
| [`staff.php`](staff.php) | ระเบียบและแบบฟอร์มดาวน์โหลดสำหรับอาจารย์และเจ้าหน้าที่ |
| [`report.php`](report.php) | รายงานการประกันคุณภาพการศึกษาประจำปี |

### หมวด: นักศึกษา
| ไฟล์ | ชื่อหน้า / รายละเอียด |
| :--- | :--- |
| [`tcas.php`](tcas.php) | ข้อมูลการรับสมัครนักศึกษาใหม่ ปริญญาตรี (ภาคจันทร์-ศุกร์ และเสาร์-อาทิตย์) |
| [`Student Guide.php`](Student%20Guide.php) | คู่มือนักศึกษา (ดาวน์โหลด PDF) |
| [`Project Guide.php`](Project%20Guide.php) | คู่มือและแบบฟอร์มโครงงานนักศึกษา (วิทยาการคอมพิวเตอร์ 1 และ 2) |
| [`Internship location.php`](Internship%20location.php) | รายชื่อและข้อมูลสถานที่ฝึกประสบการณ์วิชาชีพ / สหกิจศึกษา |
| [`Internship documents.php`](Internship%20documents.php) | เอกสารและแบบฟอร์มสำหรับนักศึกษาฝึกงาน |
| [`recommended.php`](recommended.php) | ช่องทางแจ้งข้อเสนอแนะและร้องเรียน |

### หมวด: บทความ (`content/`)
| ไฟล์ | ชื่อหน้า / รายละเอียด |
| :--- | :--- |
| [`content/index.php`](content/index.php) | ระบบ Front Controller / Router สำหรับจัดการ URL ของระบบบทความ |
| [`content/contents.php`](content/contents.php) | หน้ารวมรายการบทความวิชาการและข่าวสาร |
| [`content/content-detail.php`](content/content-detail.php) | หน้าแสดงรายละเอียดเนื้อหาบทความรายชิ้น |

---

## 2. หน้าเว็บย่อยและหน้าเฉพาะกิจที่ยังอยู่ในระบบ (Standalone / Secondary Active Pages)

หน้าเว็บกลุ่มนี้วางอยู่ที่โฟลเดอร์หลัก (Root) และยังสามารถเปิดผ่านลิงก์ย่อยหรือ URL ตรงได้ (ไม่ได้แสดงเป็นเมนูหลักบน Navbar):

### ระบบแบบทดสอบ & แบบสอบถามออนไลน์
| ไฟล์ | ชื่อหน้า / รายละเอียด |
| :--- | :--- |
| [`sci-mbti.php`](sci-mbti.php) | แบบทดสอบค้นหาหลักสูตรในคณะวิทยาศาสตร์ที่เหมาะกับผู้เรียน (ใช้ข้อมูลจาก `json/sci-mbti.json`) |
| [`sci-mbti-result.php`](sci-mbti-result.php) | หน้าแสดงผลลัพธ์แบบทดสอบ `sci-mbti` |
| [`stakeholder.php`](stakeholder.php) | หน้าแบบสอบถามความคิดเห็นสำหรับผู้มีส่วนได้เสีย (Stakeholders) |
| [`publication-form.php`](publication-form.php) | ฟอร์มกรอกข้อมูลผลงานตีพิมพ์วิจัย |
| [`cookies-policy.php`](cookies-policy.php) | นโยบายการใช้คุกกี้ (Cookies Policy) |

### หน้าข้อมูลหลักสูตรย้อนหลัง / คอร์สระยะสั้น / กิจกรรมเดิม
| ไฟล์ | ชื่อหน้า / รายละเอียด |
| :--- | :--- |
| [`structure-60.php`](structure-60.php) | โครงสร้างหลักสูตรฉบับปี พ.ศ. 2560 (ลิงก์มาจากหน้า `structure.php` และใช้ `layouts/cs-course60.php`) |
| [`short-courses.php`](short-courses.php) | หน้าคอร์สอบรมระยะสั้น (Short Courses) |
| [`reactnative.php`](reactnative.php) | หน้าประชาสัมพันธ์คอร์สอบรม Mobile Application ด้วย React Native |
| [`activities.php`](activities.php) | หน้ารวมกิจกรรมหลักสูตร (เมนู "อื่นๆ" เดิมที่ถูกซ่อนไว้ใน Navbar) |
| [`activities-59.php`](activities-59.php) – [`activities-63.php`](activities-63.php) | หน้าภาพกิจกรรมหลักสูตรแยกตามปีการศึกษา 2559, 2560, 2561, 2562 และ 2563 |
| [`roomtable.php`](roomtable.php) | หน้าตารางการใช้ห้องปฏิบัติการคอมพิวเตอร์ |
| [`equipment.php`](equipment.php) | ข้อมูลอุปกรณ์สนับสนุนการเรียนการสอน |
| [`team.php`](team.php) | หน้าแสดงข้อมูลทีมอาจารย์ในรูปแบบดีไซน์ทางเลือก |

---

## 3. ชิ้นส่วนประกอบหน้าเว็บ (`layouts/`)

ไฟล์ในโฟลเดอร์ `layouts/` ใช้สำหรับถูกดึง (`include`) ไปแสดงผลร่วมกันในหน้าต่างๆ:

| ไฟล์ | หน้าที่การทำงาน |
| :--- | :--- |
| [`layouts/meta.php`](layouts/meta.php) | ไส้ในของ `<head>` (Meta Tags, Open Graph, โหลดฟอนต์และ CSS หลัก รองรับทั้งหน้า Root และโฟลเดอร์ย่อยอัตโนมัติ) |
| [`layouts/navbar.php`](layouts/navbar.php) | เมนูนำทางด้านบน (Navbar) และเมนูมือถือ (รองรับทั้งหน้า Root และโฟลเดอร์ย่อยอัตโนมัติ) |
| [`layouts/footer-content.php`](layouts/footer-content.php) | แบนเนอร์สมัครเรียน, ส่วนท้ายเว็บไซต์ (Footer) และปุ่มลอย Messenger |
| [`layouts/scripts.php`](layouts/scripts.php) | สคริปต์ JavaScript ทั้งหมดก่อนปิด `</body>` (jQuery, Bootstrap JS, AOS, `main-js.php`, Google Analytics) |
| [`layouts/main-js.php`](layouts/main-js.php) | สคริปต์ JavaScript หลักที่เรียกใช้ใน `scripts.php` |
| [`layouts/slider.php`](layouts/slider.php) | ส่วนแบนเนอร์ภาพสไลด์หน้าแรก |
| [`layouts/technology-stack.php`](layouts/technology-stack.php) | ชิ้นส่วนแสดงเทคโนโลยีที่ได้เรียนในหลักสูตร (แสดงใน `index.php` และ `tcas.php`) |
| [`layouts/group-line-qr.php`](layouts/group-line-qr.php) | ชิ้นส่วนแสดง QR Code กลุ่มไลน์รับสมัครนักศึกษา |
| [`layouts/cs-course65.php`](layouts/cs-course65.php) | ข้อมูลตารางรายวิชาของหลักสูตรปรับปรุง พ.ศ. 2565 |
| [`layouts/cs-course60.php`](layouts/cs-course60.php) | ข้อมูลตารางรายวิชาของหลักสูตรฉบับ พ.ศ. 2560 |

---

## 4. หน้าเว็บและไฟล์ที่เก็บไว้แต่ไม่เปิดใช้งาน (`archive/`)

ไฟล์ทั้งหมดในโฟลเดอร์ `archive/` ถูกปิดกั้นการเข้าถึงจากเว็บเบราว์เซอร์ด้วย [`archive/.htaccess`](archive/.htaccess) และจัดเก็บโดยรักษาโครงสร้างโฟลเดอร์เดิมไว้:

### เคยอยู่ในโฟลเดอร์หลัก (`/`)
| ไฟล์ใน `archive/` | รายละเอียด |
| :--- | :--- |
| [`archive/teacher-alternative.php`](archive/teacher-alternative.php) | หน้าอาจารย์ประจำหลักสูตร (เวอร์ชันทดลองดึง JSON จาก GitHub) |
| [`archive/teacher-old.php`](archive/teacher-old.php) | หน้าอาจารย์ประจำหลักสูตร (เวอร์ชันตาราง HTML แบบเก่า) |
| [`archive/support-old.php`](archive/support-old.php) | หน้าบุคลากรประจำหลักสูตร (เวอร์ชันเก่า) |
| [`archive/publication copy.php`](archive/publication%20copy.php) | ไฟล์สำรองของหน้าผลงานตีพิมพ์ (`publication.php`) |
| [`archive/index1.php`](archive/index1.php) | หน้าแรกเวอร์ชันสำรอง 1 |
| [`archive/index2.php`](archive/index2.php) | หน้าแรกเวอร์ชันสำรอง 2 |
| [`archive/template.php`](archive/template.php) | โครงสร้างหน้าเว็บต้นแบบยุคเก่า (เรียกใช้ `a-head.php`, `a-menu.php`, `a-footer.php`) |
| [`archive/a-head.php`](archive/a-head.php) | ส่วน `<head>` รุ่นเก่า |
| [`archive/a-menu.php`](archive/a-menu.php) | ส่วนเมนูนำทางรุ่นเก่า |
| [`archive/a-footer.php`](archive/a-footer.php) | ส่วนท้ายเว็บ (Footer) รุ่นเก่า |
| [`archive/footerccc.php`](archive/footerccc.php) | ไฟล์ทดสอบส่วนท้ายเว็บ |
| [`archive/example.php`](archive/example.php) | หน้าตัวอย่างทดสอบ Theme (`theme-header.php` / `theme-footer.php`) |
| [`archive/test.php`](archive/test.php) | ไฟล์ทดสอบ PHP |
| [`archive/tcas-detail.php`](archive/tcas-detail.php) | ชิ้นส่วน HTML Accordion กำหนดการรับสมัคร TCAS ปีการศึกษา 2566 (ไม่ได้ถูก `include` แล้ว) |
| [`archive/admission.php`](archive/admission.php) | หน้ารับสมัครนักศึกษาปี พ.ศ. 2561–2562 (ถูกแทนที่ด้วย `tcas.php`) |
| [`archive/Recruit.php`](archive/Recruit.php) | หน้ารับสมัครนักศึกษาใหม่ปี พ.ศ. 2561 (ถูกแทนที่ด้วย `tcas.php`) |
| [`archive/Normal.php`](archive/Normal.php) | หน้าตารางการใช้ห้องปฏิบัติการคอมพิวเตอร์ ภาคปกติ 2/2562 |
| [`archive/Special.php`](archive/Special.php) | หน้าตารางการใช้ห้องปฏิบัติการคอมพิวเตอร์ ภาคพิเศษ 2/2562 |
| [`archive/intro.html`](archive/intro.html) / [`archive/intro.jpg`](archive/intro.jpg) | หน้า Landing Page พิเศษ (วันสำคัญ) และไฟล์รูปภาพประกอบ |
| [`archive/html.zip`](archive/html.zip) | ไฟล์ ZIP สำรองโค้ดเดิมที่เคยวางอยู่ใน Root |

### เคยอยู่ในโฟลเดอร์ย่อย (`layouts/`, `json/`, `new/`)
| ไฟล์ใน `archive/` | โฟลเดอร์เดิม | รายละเอียด |
| :--- | :--- | :--- |
| [`archive/layouts/header.php`](archive/layouts/header.php) | `layouts/` | ส่วนหัวแบบเดิม (สำหรับหน้าใน Root ก่อนเปลี่ยนเป็น Component Injection) |
| [`archive/layouts/footer.php`](archive/layouts/footer.php) | `layouts/` | ส่วนท้ายแบบเดิม (สำหรับหน้าใน Root ก่อนเปลี่ยนเป็น Component Injection) |
| [`archive/layouts/header2.php`](archive/layouts/header2.php) | `layouts/` | ส่วนหัวแบบเดิมสำหรับโฟลเดอร์ย่อย `content/` |
| [`archive/layouts/footer2.php`](archive/layouts/footer2.php) | `layouts/` | ส่วนท้ายแบบเดิมสำหรับโฟลเดอร์ย่อย `content/` |
| [`archive/layouts/theme.php`](archive/layouts/theme.php) / [`archive/layouts/theme2.php`](archive/layouts/theme2.php) | `layouts/` | ไฟล์รวม `header + footer` และ `header2 + footer2` สำหรับใช้วิเคราะห์โครงสร้าง |
| [`archive/layouts/theme-header.php`](archive/layouts/theme-header.php) | `layouts/` | ส่วนหัวที่ใช้คู่กับ `example.php` |
| [`archive/layouts/theme-footer.php`](archive/layouts/theme-footer.php) | `layouts/` | ส่วนท้ายที่ใช้คู่กับ `example.php` |
| [`archive/layouts/slider-example.php`](archive/layouts/slider-example.php) | `layouts/` | โค้ดตัวอย่าง Slider ต้นแบบจากเทมเพลต |
| [`archive/layouts/test.html`](archive/layouts/test.html) | `layouts/` | ไฟล์ HTML ทดสอบในโฟลเดอร์ `layouts` |
| [`archive/json/teacher-2024.json`](archive/json/teacher-2024.json) | `json/` | ข้อมูล JSON อาจารย์ฉบับสำรองปี 2024 |
| [`archive/new/index.html`](archive/new/index.html) | `new/` | หน้าทดสอบ HTML โฉมใหม่ |

