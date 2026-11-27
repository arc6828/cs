# แผนการปรับปรุงและพัฒนาระบบบทความ (Content Improvement & SEO Content Strategy Plan)
**โฟลเดอร์เป้าหมาย:** `content/` (`content/index.php`, `content/contents.php`, `content/content-detail.php`)  
**เว็บไซต์:** หลักสูตรวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์ ([cs.vru.ac.th](https://cs.vru.ac.th))  
**จัดทำเมื่อ:** พฤศจิกายน 2569  
**สถานะ:** แผนแม่บทเสนอแนะเพื่อดำเนินการ (Actionable Master Plan)

---

## 📌 1. บทนำและวัตถุประสงค์ (Executive Summary & Objectives)

หมวด **"บทความ" (`content/`)** คือหัวใจสำคัญที่สุดในการดึงดูดกลุ่มเป้าหมาย (นักเรียน ม.ปลาย, ปวช./ปวส., คนทำงานที่ต้องการอัปสกิล) เข้าสู่เว็บไซต์ผ่านระบบค้นหาของ Google (Organic Search Traffic) รวมทั้งเป็นเครื่องมือหลักในการสร้างความน่าเชื่อถือทางวิชาการ (Academic Authority & E-E-A-T)

จากการวิเคราะห์ระบบบทความปัจจุบัน พบว่าระบบยังทำงานด้วยรูปแบบดั้งเดิมที่พึ่งพา API ภายนอก ขาดระบบฐานข้อมูลสำรอง ขาดบทความใหม่มานานกว่า 3 ปี และยังไม่ได้ถูกปรับแต่งเพื่อรองรับมาตรฐาน SEO และ UX/UI ยุคใหม่ 

แผนงานนี้จัดทำขึ้นเพื่อเป็นแนวทางในการปฏิรูปหมวดบทความแบบครบวงจร ครอบคลุมทั้ง **สถาปัตยกรรมทางเทคนิค (Architecture)**, **กลยุทธ์เนื้อหาเพื่อการค้นหา (SEO Content Strategy)** และ **ประสบการณ์ผู้ใช้งาน (Modern UX/UI)**

---

## 🔍 2. การประเมินสถานะปัจจุบัน (Current State Audit & Gap Analysis)

### 2.1 สถาปัตยกรรมไฟล์ในปัจจุบัน
```
content/
├── index.php           # Front Controller ดักจับ URL /content และ /content/{id}
├── contents.php        # หน้ารวมบทความทั้งหมด (Grid 3 คอลัมน์)
└── content-detail.php  # หน้าอ่านเนื้อหาบทความรายเรื่อง + ข้อมูลอาจารย์ผู้เขียน
```

### 2.2 ตรวจสอบข้อมูลบทความที่มีอยู่ในระบบ
ปัจจุบันระบบดึงข้อมูลจาก Endpoint ภายนอก (`https://ckartisan.com/api/article/tagged/computer-science`) พบว่ามีบทความเพียง **7 เรื่อง** ดังนี้:

| ID | วันที่เผยแพร่ | หัวข้อบทความ | สถานะและความทันสมัย |
| :---: | :---: | :--- | :--- |
| **21** | 06/12/2023 | อาชีพที่สามารถประกอบได้หลังเรียนจบวิทยาการคอมพิวเตอร์ | เนื้อหาดี แต่ยังขาดข้อมูลอาชีพยุค Generative AI & Data |
| **11** | 06/10/2023 | รับสมัครนักศึกษาปริญญาตรี (จันทร์-ศุกร์ และ เสาร์-อาทิตย์) 2567 | **ข้อมูลล้าสมัย** (ปัจจุบันเป็นรอบรับสมัครปี 2570) |
| **12** | 26/05/2023 | กยศ. กองทุนให้กู้ยืมเพื่อการศึกษา | ข้อมูลพื้นฐาน ควรปรับปรุงตารางค่าครองชีพและเงื่อนไขใหม่ |
| **7** | 25/05/2023 | ประเพณีการละเล่นแข่งจุดลูกหนูของชาวมอญ | บทความบริการวิชาการ/วัฒนธรรมท้องถิ่น |
| **14** | 04/11/2022 | การเทียบโอนรายวิชานักศึกษาใหม่ | **ข้อมูลสำคัญมากสำหรับภาคพิเศษ** แต่เนื้อหาสั้นเกินไป |
| **15** | 12/07/2022 | หลักสูตรวิทยาการคอมพิวเตอร์ ภาคจันทร์ถึงศุกร์กับเสาร์อาทิตย์เหมือนหรือต่างกันอย่างไร? | **จุดขายเด่นของ VRU** ควรขยายรายละเอียดและทำ SEO เพิ่ม |
| **22** | 18/03/2022 | โครงการสัมฤทธิบัตรปริญญาตรี หลักสูตรวิทยาการคอมพิวเตอร์ | ข้อมูลโครงการเรียนล่วงหน้า |

---

### 2.3 จุดบกพร่องและข้อจำกัดที่ตรวจพบ (Critical Issues)

#### 1. ความเสี่ยงด้านความเสถียร (Single Point of Failure):
- `contents.php` และ `content-detail.php` ใช้คำสั่ง `file_get_contents("https://ckartisan.com/api/...")` สด ๆ ทุกครั้งที่ผู้ใช้เปิดหน้าเว็บ
- **ความเสี่ยง:** หากเซิร์ฟเวอร์ปลายทางล่ม มี Latency หรือเครือข่ายขัดข้อง หน้าบทความจะขึ้น Fatal Error หรือหน้าขาวทันที (เหมือนปัญหาที่เคยเกิดกับหน้ารวมผลงานตีพิมพ์ก่อนหน้านี้)
- **แนวทางแก้:** ต้องเปลี่ยนมาใช้ระบบ **Local Flat-file Database / Cache (`databases/articles.json`)** พร้อมสคริปต์ Sync อัตโนมัติ

#### 2. โครงสร้าง URL ไม่เอื้อต่อ SEO (Non-SEO Friendly URLs):
- ปัจจุบัน URL อยู่ในรูป: `https://cs.vru.ac.th/content/21` (ใช้ ID ตัวเลขโดด ๆ)
- **ผลเสีย:** Googlebot และผู้ใช้งานไม่ทราบว่าหน้านี้เกี่ยวกับอะไร ขาดพลังจาก Keyword ใน URL
- **แนวทางแก้:** ปรับให้รองรับ **Slug ภาษาไทยหรืออังกฤษ** เช่น:  
  `https://cs.vru.ac.th/content/career-opportunities` หรือ `https://cs.vru.ac.th/content/cs-vs-ce` ควบคู่กับการรองรับ ID เดิมเพื่อไม่ให้ลิงก์เก่าเสีย (Backward Compatibility)

#### 3. ขาด Schema Markup (Structured Data):
- ยังไม่มีการฝังแท็ก JSON-LD Schema ประเภท `Article`, `BlogPosting` หรือ `BreadcrumbList` ทำให้ Google ไม่สามารถแสดงผลเป็น Rich Snippets หรือ Google Discover ได้

#### 4. ขาดคุณสมบัติด้าน UX/UI สมัยใหม่:
- ไม่มีกล่องค้นหาบทความ (Search Bar)
- ไม่มีปุ่มตัวกรองตามหมวดหมู่ (Category Filter Pills)
- ไม่มีระยะเวลาประมาณการในการอ่าน (Estimated Reading Time)
- ไม่มีสารบัญนำทางอัตโนมัติ (Table of Contents - TOC) สำหรับบทความขนาดยาว
- ไม่มีปุ่มแชร์ไปยัง Social Media (Facebook, Line, X, คัดลอกลิงก์)
- ขาดกล่อง Call to Action (CTA) นำทางไปสู่การ **"สมัครเรียน"** หรือ **"ดูหลักสูตร"** ในส่วนท้ายบทความ

---

## 🛠️ 3. แผนยกระดับด้านสถาปัตยกรรมระบบ (Architecture Modernization)

```
┌────────────────────────────────────────────────────────────────────────┐
│                        สถาปัตยกรรมระบบบทความใหม่                       │
└────────────────────────────────────┬───────────────────────────────────┘
                                     │
            ┌────────────────────────┴────────────────────────┐
            ▼                                                 ▼
┌───────────────────────────────┐         ┌───────────────────────────────┐
│     Local Flat-file Storage   │         │     Dynamic Front Controller  │
│    (databases/articles.json)  │         │       (content/index.php)     │
├───────────────────────────────┤         ├───────────────────────────────┤
│ • แคชบทความแบบ Local 100%     │         │ • รองรับ URL ทั้ง 2 รูปแบบ:   │
│ • ทำงานเร็ว ไม่พึ่งพา API สด  │         │   1. /content/{slug} (SEO)    │
│ • มีสคริปต์ sync-articles.php │         │   2. /content/{id} (เดิม)     │
│ • ปลอดภัย มี Auto-backup      │         │ • มีระบบ Canonical ป้องกันซ้ำ │
└───────────────────────────────┘         └───────────────────────────────┘
                                     │
            ┌────────────────────────┴────────────────────────┐
            ▼                                                 ▼
┌───────────────────────────────┐         ┌───────────────────────────────┐
│       content/contents.php    │         │    content/content-detail.php │
│        (หน้ารวมบทความ)         │         │        (หน้าอ่านบทความ)       │
├───────────────────────────────┤         ├───────────────────────────────┤
│ • Search Box & Live Filter    │         │ • Breadcrumb & Reading Time   │
│ • Category Badges Filter      │         │ • Table of Contents (TOC)     │
│ • Featured Hero Article       │         │ • Social Share Buttons        │
│ • Pagination สวยงาม           │         │ • Author Card & Admission CTA │
└───────────────────────────────┘         └───────────────────────────────┘
```

### 3.1 การจัดทำระบบ Local Flat-file Database (`databases/articles.json`)
จัดเก็บข้อมูลบทความไว้ในเครื่องแบบ JSON (เหมือนกับ `publications.json`):
```json
{
  "id": "21",
  "slug": "career-opportunities-computer-science",
  "title": "อาชีพที่สามารถประกอบได้หลังเรียนจบวิทยาการคอมพิวเตอร์",
  "first_paragraph": "...",
  "content": "<p>...</p>",
  "category": ["วิทยาการคอมพิวเตอร์", "แนะแนวอาชีพ", "สมัครงาน"],
  "image_url": "https://cs.vru.ac.th/images/content/career-cs.jpg",
  "creator": "อ.ชวลิต โควีระวงศ์",
  "teacher_id": "chawalit",
  "pubDate": "2023-12-06 16:14:17",
  "updated_at": "2026-11-28",
  "views": 1540
}
```

---

## 📝 4. แผนกลยุทธ์เนื้อหาเพื่อ SEO (Pillar-Cluster Content Strategy)

เพื่อให้ [cs.vru.ac.th](https://cs.vru.ac.th) สามารถติดหน้าแรกของ Google ในคีย์เวิร์ดที่เกี่ยวข้องกับวิทยาการคอมพิวเตอร์ จำเป็นต้องผลิตเนื้อหาคุณภาพสูงแบบ **Topic Cluster** แบ่งเป็น 4 แกนหลัก:

```
                          ┌──────────────────────────┐
                          │     PILLAR CONTENT 1     │
                          │   วิทยาการคอมพิวเตอร์    │
                          │  คืออะไร? เรียนอะไรบ้าง? │
                          └─────────────┬────────────┘
                                        │
           ┌────────────────────────────┼───────────────────────────┐
           ▼                            ▼                           ▼
┌────────────────────┐       ┌────────────────────┐      ┌────────────────────┐
│ Cluster 1.1        │       │ Cluster 1.2        │      │ Cluster 1.3        │
│ วิทย์คอม vs        │       │ 10 อาชีพรายได้สูง  │      │ เรียนวิทย์คอม      │
│ วิศวะคอม vs ไอที   │       │ ของสาย ComSci 2026 │      │ เสาร์-อาทิตย์      │
└────────────────────┘       └────────────────────┘      └────────────────────┘
```

### กลุ่มที่ 1: เสาหลักดักคีย์เวิร์ดใหญ่ (Cornerstone / Pillar Articles)
1. **บทความที่ 1 (Pillar หลัก):** *"วิทยาการคอมพิวเตอร์ คืออะไร? เรียนอะไรบ้าง จบแล้วทำงานอะไร สรุปครบจบในที่เดียว"*
   - **Keywords:** `วิทยาการคอมพิวเตอร์`, `วิทยาการคอมพิวเตอร์ คือ`, `เรียนวิทยาการคอมพิวเตอร์`
   - **เป้าหมาย:** ชิงอันดับบน Organic SERP แข่งกับ Wikipedia และ Dek-D
2. **บทความที่ 2 (เปรียบเทียบข้อสงสัย):** *"เทียบชัดๆ! วิทยาการคอมพิวเตอร์ vs วิศวกรรมคอมพิวเตอร์ vs เทคโนโลยีสารสนเทศ (IT) ต่างกันอย่างไร เหมาะกับใคร?"*
   - **Keywords:** `วิทย์คอม กับ วิศวะคอม`, `วิทยาการคอมพิวเตอร์ ต่างจาก it อย่างไร`
   - **เป้าหมาย:** ตอบโจทย์ Search Intent กลุ่มนักเรียน ม.ปลาย ที่กำลังลังเลในการเลือกคณะ
3. **บทความที่ 3 (จุดเด่นเฉพาะของ VRU):** *"เรียนวิทยาการคอมพิวเตอร์ เสาร์-อาทิตย์: โอกาสของคนทำงาน เทียบโอน ปวส. เรียนจบใน 2 ปี ค่าเทอม และการต่อยอดอาชีพ"*
   - **Keywords:** `วิทยาการคอมพิวเตอร์ เสาร์ อาทิตย์`, `เรียนคอม เสาร์ อาทิตย์ เทียบโอน`
   - **เป้าหมาย:** กวาด Traffic กลุ่มคนทำงานและผู้จบ ปวส. ในเขตปทุมธานี อยุธยา กรุงเทพฯ

### กลุ่มที่ 2: อาชีพ ตลาดแรงงาน และเงินเดือน (Career & Salary Insights)
4. **บทความที่ 4:** *"เปิดเรตเงินเดือนสายเทค 2026: บัณฑิตวิทยาการคอมพิวเตอร์ ป้ายแดงสตาร์ทเท่าไหร่? ตำแหน่งไหนโตไวที่สุด"*
   - **Keywords:** `วิทยาการคอมพิวเตอร์ เงินเดือน`, `สายงานคอมพิวเตอร์ รายได้`
5. **บทความที่ 5:** *"เจาะลึก 5 สกิลทองคำที่ตลาดแรงงานต้องการตัวจากเด็ก ComSci ในยุค AI"*
   - **Keywords:** `ทักษะวิทยาการคอมพิวเตอร์`, `งาน AI วิทยาการคอมพิวเตอร์`

### กลุ่มที่ 3: ข้อมูลการรับสมัครและชีวิตนักศึกษา (TCAS & Student Success)
6. **บทความที่ 6 (อัปเดตบทความเดิม):** *"คู่มือการรับสมัครนักศึกษาใหม่ วิทยาการคอมพิวเตอร์ วไลยอลงกรณ์ (CS-VRU#70) ทั้งภาคปกติและภาคพิเศษ"*
7. **บทความที่ 7 (อัปเดตบทความเดิม):** *"กู้ กยศ. เรียนวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์: ค่าเล่าเรียน ค่าครองชีพ และขั้นตอนการยื่นเอกสาร"*

---

## 🎨 5. แผนการปรับปรุงหน้าตาและประสบการณ์ผู้ใช้งาน (Modern UX/UI Redesign)

### 5.1 หน้ารวมบทความ ([content/contents.php](file:///d:/php-vanila/cs/content/contents.php))
1. **Search & Filter Bar:**
   - ช่องค้นหาบทความแบบ Real-time (ค้นจากชื่อบทความ, เนื้อหา, หรือชื่อผู้แต่ง)
   - แถบป้ายหมวดหมู่แบบคลิกได้ (Category Pills): *ทั้งหมด, ความรู้ทั่วไป, แนะแนวอาชีพ, การรับสมัคร, นวัตกรรม/AI*
2. **Featured Hero Article:**
   - นำบทความล่าสุดหรือบทความไฮไลต์มาแสดงผลขนาดใหญ่ด้านบนสุดพร้อมรูปภาพปกสวยงาม
3. **Card Design ปรับปรุงใหม่:**
   - เพิ่มป้ายแสดงระยะเวลาในการอ่าน (เช่น `⏱️ อ่าน 4 นาที`)
   - แสดงวันที่แบบภาษาไทยที่เป็นมิตร (`15 พ.ย. 2569`)
   - แสดงรูปโปรไฟล์และชื่ออาจารย์ผู้เขียนชัดเจน
4. **Pagination หรือ Load More:**
   - รองรับการแบ่งหน้าบทความอย่างเป็นระเบียบเมื่อมีบทความเพิ่มขึ้น

---

### 5.2 หน้าแสดงรายละเอียดบทความ ([content/content-detail.php](file:///d:/php-vanila/cs/content/content-detail.php))
1. **Breadcrumb Navigation:**
   - เพิ่มแถบนำทาง: `หน้าแรก > บทความ > ชื่อหมวดหมู่ > ชื่อบทความ`
2. **Reading Progress Bar:**
   - หลอดสีแสดงความคืบหน้าในการอ่านด้านบนสุดของหน้าจอเมื่อผู้ใช้เลื่อนหน้าลงมา
3. **Table of Contents (สารบัญในบทความ):**
   - กล่องสรุปหัวข้อ `H2`, `H3` ในบทความ คลิกแล้ว Smooth Scroll ไปยังหัวข้อนั้นได้ทันที
4. **Social Sharing Buttons:**
   - ปุ่มแชร์ 1 คลิก: Facebook, X (Twitter), Line, และปุ่มคัดลอกลิงก์
5. **Author Profile Card (บัตรข้อมูลอาจารย์ผู้เขียน):**
   - แสดงภาพอาจารย์, ตำแหน่งทางวิชาการ, ความเชี่ยวชาญ และลิงก์เชื่อมโยงไปยังหน้า [teacher.php](file:///d:/php-vanila/cs/teacher.php) เพื่อดูผลงานวิจัยอื่น ๆ
6. **Admission Call-to-Action (กล่องเชิญชวนสมัครเรียน):**
   - ท้ายบทความทุกเรื่องจะมีแบนเนอร์กล่องข้อความ:  
     *"สนใจศึกษาต่อหลักสูตรวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์? เปิดรับสมัครทั้งภาคปกติและภาคพิเศษ (เสาร์-อาทิตย์)"* พร้อมปุ่มลิงก์ไปยัง [admission.php](file:///d:/php-vanila/cs/admission.php)

---

## ⚙️ 6. แผนยกระดับด้าน On-Page SEO & Structured Data

### 6.1 โครงสร้าง Meta Tags มาตรฐานในบทความ
```html
<title><?= htmlspecialchars($article['title']) ?> | วิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์</title>
<meta name="description" content="<?= htmlspecialchars(mb_substr(strip_tags($article['first_paragraph']), 0, 160)) ?>">
<link rel="canonical" href="https://cs.vru.ac.th/content/<?= htmlspecialchars($article['slug']) ?>">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="article">
<meta property="og:title" content="<?= htmlspecialchars($article['title']) ?>">
<meta property="og:description" content="<?= htmlspecialchars(mb_substr(strip_tags($article['first_paragraph']), 0, 160)) ?>">
<meta property="og:image" content="<?= htmlspecialchars($article['image_url']) ?>">
<meta property="og:url" content="https://cs.vru.ac.th/content/<?= htmlspecialchars($article['slug']) ?>">
<meta property="article:published_time" content="<?= htmlspecialchars($article['pubDate']) ?>">
<meta property="article:author" content="<?= htmlspecialchars($article['creator']) ?>">
```

### 6.2 Schema Markup (JSON-LD)
ฝังข้อมูลโครงสร้างเพื่อสร้างคะแนนความน่าเชื่อถือบน Google:
```html
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BlogPosting",
  "headline": "<?= addslashes($article['title']) ?>",
  "image": "<?= addslashes($article['image_url']) ?>",
  "datePublished": "<?= addslashes($article['pubDate']) ?>",
  "dateModified": "<?= addslashes($article['updated_at'] ?? $article['pubDate']) ?>",
  "author": {
    "@type": "Person",
    "name": "<?= addslashes($article['creator']) ?>"
  },
  "publisher": {
    "@type": "EducationalOrganization",
    "name": "หลักสูตรวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์",
    "logo": {
      "@type": "ImageObject",
      "url": "https://cs.vru.ac.th/images/logo/logo-anniversary-full.png"
    }
  },
  "description": "<?= addslashes(mb_substr(strip_tags($article['first_paragraph']), 0, 160)) ?>"
}
</script>
```

---

## 📅 7. ลำดับความสำคัญและขั้นตอนดำเนินการ (Implementation Roadmap)

| ระยะ | เป้าหมายงาน (Key Deliverables) | ผลลัพธ์ที่คาดหวัง |
| :---: | :--- | :--- |
| **Phase 1<br>(ระบบรากฐาน)** | 1. สร้าง `json/articles.json` เก็บข้อมูลบทความในเครื่องแบบ Flat-file 100%<br>2. ปรับ `.htaccess` และ `content/index.php` รองรับ Clean URL และไฟล์จริง<br>3. พัฒนา `content/article-helper.php` และ `content/template-article.php`<br>4. ฝัง JSON-LD Schema (BlogPosting, BreadcrumbList) และ Open Graph | [x] **เสร็จสมบูรณ์**<br>โหลดเร็วขึ้น ไม่เสี่ยงหน้าขาว URL สวยงาม |
| **Phase 2<br>(ปรับปรุง UI/UX)** | 1. ปรับปรุง [content/contents.php](file:///d:/php-vanila/cs/content/contents.php) หน้ารวมพร้อมระบบค้นหาและตัวกรองหมวดหมู่<br>2. ปรับปรุง [content/content-detail.php](file:///d:/php-vanila/cs/content/content-detail.php) พร้อม Breadcrumbs, TOC, Reading Progress, Author Card และ CTA | [x] **เสร็จสมบูรณ์**<br>ดีไซน์ทันสมัย UX สมบูรณ์ |
| **Phase 3<br>(ผลิตเนื้อหาเพื่อ SEO)** | 1. อัปเดตข้อมูลบทความรับสมัครและเทียบโอนเดิมให้เป็นปีปัจจุบัน (ปี 2570)<br>2. ผลิตและเผยแพร่บทความเสาหลัก (Pillar Articles) 3 เรื่องแรก:<br>&nbsp;&nbsp;• *วิทยาการคอมพิวเตอร์ คืออะไร?*<br>&nbsp;&nbsp;• *วิทย์คอม vs วิศวะคอม vs ไอที*<br>&nbsp;&nbsp;• *เรียนวิทย์คอม เสาร์-อาทิตย์* | [ ] **ขั้นตอนถัดไป**<br>เริ่มติดอันดับคำค้นหาหลักบน Google หน้า 1 และดึงดูดผู้สนใจสมัครเรียน |

---

*แผนงานนี้เชื่อมโยงกับรายงานการวิเคราะห์คู่แข่ง:*  
👉 [`seo/top10-computer-science-universities-analysis.md`](seo/top10-computer-science-universities-analysis.md)
