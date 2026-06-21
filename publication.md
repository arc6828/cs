# คู่มือและการออกแบบการปรับปรุงข้อมูลงานวิจัย (Research & Publications Design Note)

เอกสารฉบับนี้จัดทำขึ้นเพื่อบันทึกแนวทางการออกแบบและข้อแนะนำในการปรับปรุงโครงสร้างการจัดเก็บข้อมูลผลงานทางวิชาการ (Publications) ของหลักสูตรวิทยาการคอมพิวเตอร์ เพื่อให้รองรับมาตรฐานการอ้างอิง **APA 7th Edition** และการแสดงผลในรูปแบบตาราง (Tabular Layout) ในอนาคต

---

## 1. การออกแบบโครงสร้างตารางฐานข้อมูล (Database Schema)

เพื่อทดแทนการดึงข้อมูลจากภายนอกแบบเดิม แนะนำให้ใช้ฐานข้อมูลแบบ **SQLite** โดยเก็บไฟล์ไว้ที่ `database/database.sqlite` และสร้างตารางชื่อ `publications` ตามโครงสร้างดังนี้:

```sql
CREATE TABLE publications (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    
    -- ข้อมูลบทความหลัก
    title TEXT NOT NULL,                      -- ชื่อบทความวิชาการ (Article/Paper Title)
    authors TEXT NOT NULL,                    -- ชื่อผู้เขียน (เช่น ชวลิต โควีระวงศ์ หรือ Kooveerawong, C., & Somchai, K.)
    publication_year INTEGER NOT NULL,        -- ปีที่ตีพิมพ์ (ค.ศ. เช่น 2024)
    
    -- ตัวจำแนกหมวดหมู่
    pub_type TEXT NOT NULL,                   -- ประเภท: 'journal' (วารสาร) หรือ 'conference' (งานประชุมวิชาการ)
    pub_language TEXT NOT NULL,               -- ภาษา: 'national' (ภาษาไทย) หรือ 'international' (ภาษาอังกฤษ)
    
    -- ข้อมูลระดับคุณภาพวารสาร (TCI / Scopus / SJR)
    ranking_tier TEXT,                        -- ระดับคุณภาพ: เช่น 'TCI 1', 'TCI 2', 'Scopus Q1', 'Scopus Q2'
    
    -- ข้อมูลเฉพาะของ วารสารวิชาการ (Journal)
    journal_name TEXT,                        -- ชื่อวารสารวิชาการ
    volume TEXT,                              -- ปีที่/เล่มที่ (Volume)
    issue TEXT,                               -- ฉบับที่ (Issue)
    
    -- ข้อมูลเฉพาะของ เอกสารสืบเนื่องงานประชุมวิชาการ (Conference Proceedings)
    conference_name TEXT,                     -- ชื่อการประชุมวิชาการ / เล่มเอกสารสืบเนื่อง
    conf_date_range TEXT,                     -- ช่วงวันที่จัดประชุม (เช่น 22-23 กรกฎาคม)
    conf_city TEXT,                           -- เมืองที่จัดประชุม (เช่น ปทุมธานี)
    conf_country TEXT,                        -- ประเทศที่จัดประชุม (เช่น ประเทศไทย)
    organizer_publisher TEXT,                 -- หน่วยงานที่จัดประชุม/ผู้พิมพ์เผยแพร่ (Publisher)
    
    -- ข้อมูลการจัดหน้าและการเข้าถึงทางดิจิทัล
    pages TEXT,                               -- หมายเลขหน้า (เช่น 120-135)
    doi TEXT,                                 -- รหัส DOI (ถ้ามี เช่น https://doi.org/10.1234/...)
    article_url TEXT,                         -- ลิงก์เข้าถึงไฟล์ดาวน์โหลด PDF หรือหน้าเว็บต้นฉบับ
    
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
```

---

## 2. วิธีการแปลงข้อมูลเป็นรูปแบบการอ้างอิงมาตรฐาน APA 7th Edition

ในการแสดงผลผลงานวิชาการ สคริปต์ PHP/JavaScript จะวิเคราะห์ฟิลด์ `pub_type` และ `pub_language` เพื่อแสดงผลการอ้างอิงให้ถูกต้องตามหลัก APA7 ดังต่อไปนี้:

### 2.1 บทความวารสารวิชาการ (Journal Article)

* **วารสารวิชาการในประเทศ (ภาษาไทย):**
  > `ชื่อผู้เขียน`. (`ปี พ.ศ. ที่ตีพิมพ์`). `ชื่อบทความ`. *`ชื่อวารสาร`*, *`ปีที่`*(`ฉบับที่`), `หน้าแรก-หน้าสุดท้าย`. `ลิงก์ดาวน์โหลดหรือ DOI (ถ้ามี)`
  > *(หมายเหตุ: ปี พ.ศ. คำนวณจาก ปี ค.ศ. + 543)*
  > **ตัวอย่าง:** ชวลิต โควีระวงศ์. (2566). ระบบการทดสอบออนไลน์อัจฉริยะ. *วารสารวิทยาการคอมพิวเตอร์ราชภัฏ*, *8*(2), 45-56.

* **วารสารวิชาการต่างประเทศ (ภาษาอังกฤษ):**
  > `Authors`. (`Year`). `Title of article`. *`Journal Name`*, *`Volume`*(`Issue`), `Pages`. `DOI or URL`
  > **ตัวอย่าง:** Kooveerawong, C. (2023). Intelligent online examination system. *Journal of Computer Science VRU*, *8*(2), 45-56. https://doi.org/10.1234/jcsvru.2023.001

---

### 2.2 เอกสารสืบเนื่องการประชุมวิชาการ (Conference Proceeding)

* **เอกสารประชุมวิชาการในประเทศ (ภาษาไทย):**
  > `ชื่อผู้เขียน`. (`ปี พ.ศ. ที่ตีพิมพ์`). `ชื่อบทความ`. ใน *`ชื่อการประชุมวิชาการ`* (หน้า `หน้าแรก-หน้าสุดท้าย`). `เมืองที่จัด`: `หน่วยงานที่จัด/ผู้จัดพิมพ์`.
  > **ตัวอย่าง:** ชวลิต โควีระวงศ์. (2567). การวิเคราะห์ใบหน้าด้วยปัญญาประดิษฐ์. ใน *การประชุมวิชาการระดับชาติวิทยาศาสตร์และเทคโนโลยีระหว่างสถาบัน ครั้งที่ 10* (หน้า 120-130). ปทุมธานี: มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์.

* **เอกสารประชุมวิชาการต่างประเทศ (ภาษาอังกฤษ):**
  > `Authors`. (`Year`). `Title of paper`. In *`Title of Conference/Proceedings`* (pp. `Pages`). `City`, `Country`: `Publisher/Organizer`. `DOI or URL`
  > **ตัวอย่าง:** Kooveerawong, C. (2024). Facial recognition using deep learning. In *Proceedings of the 10th International Conference on Computer Science* (pp. 120-130). Pathum Thani, Thailand: Valaya Alongkron Rajabhat University. https://doi.org/10.1234/iccs.2024.002

---

## 3. รูปแบบสคริปต์ตัวอย่างในภาษา PHP สำหรับดึงข้อมูลและประกอบเป็น APA7

เมื่อผู้พัฒนาในอนาคตต้องการดึงข้อมูลมาเรียงในหน้าเว็บ สามารถใช้โค้ด PHP ในลักษณะนี้ได้:

```php
<?php
// ฟังก์ชันจัดรูปแบบ APA7 ของแต่ละแถวข้อมูล
function renderAPA7($row) {
    $authors = htmlspecialchars($row['authors']);
    $title = htmlspecialchars($row['title']);
    $year = intval($row['publication_year']);
    $pages = htmlspecialchars($row['pages']);
    $doi = htmlspecialchars($row['doi']);
    $url = htmlspecialchars($row['article_url']);
    
    $citation = "";
    
    // คำนวณปี พ.ศ. หรือใช้ ค.ศ.
    $display_year = ($row['pub_language'] === 'national') ? ($year + 543) : $year;
    
    if ($row['pub_type'] === 'journal') {
        $j_name = htmlspecialchars($row['journal_name']);
        $volume = htmlspecialchars($row['volume']);
        $issue = htmlspecialchars($row['issue']);
        
        $citation = "{$authors}. ({$display_year}). {$title}. *{$j_name}*, *{$volume}*";
        if (!empty($issue)) {
            $citation .= "({$issue})";
        }
        $citation .= ", {$pages}.";
    } 
    else if ($row['pub_type'] === 'conference') {
        $c_name = htmlspecialchars($row['conference_name']);
        $city = htmlspecialchars($row['conf_city']);
        $country = htmlspecialchars($row['conf_country']);
        $organizer = htmlspecialchars($row['organizer_publisher']);
        
        if ($row['pub_language'] === 'national') {
            $citation = "{$authors}. ({$display_year}). {$title}. ใน *{$c_name}* (หน้า {$pages}). {$city}: {$organizer}.";
        } else {
            $citation = "{$authors}. ({$display_year}). {$title}. In *{$c_name}* (pp. {$pages}). {$city}, {$country}: {$organizer}.";
        }
    }
    
    // แนบลิงก์สำหรับเข้าถึง (DOI หรือ URL)
    if (!empty($doi)) {
        $citation .= " " . $doi;
    } elseif (!empty($url)) {
        $citation .= " " . $url;
    }
    
    return $citation;
}
?>
```

---

## 4. แผนผังการจัดแสดงผลแบบตาราง (Tabular/Table Layout)

ฟิลด์ข้อมูลที่ควรนำเสนอในหน้าแสดงผลแบบตารางเพื่อการค้นหาและการเปรียบเทียบที่รวดเร็ว ประกอบด้วย:

1. **ปีที่ตีพิมพ์ (Year):** แสดงผลควบคู่กันทั้ง ค.ศ. และ พ.ศ. (เช่น `2024 / 2567`)
2. **ผู้เขียน (Authors):** รายนามผู้ประพันธ์บทความ
3. **ชื่อเรื่อง (Title):** ชื่อหัวข้องานวิจัยวิชาการ
4. **แหล่งเผยแพร่ (Source):**
   * หากเป็น **วารสาร:** แสดง `ชื่อวารสาร (ปีที่..., ฉบับที่...)`
   * หากเป็น **ประชุมวิชาการ:** แสดง `ชื่อการประชุม (สถานที่จัดงาน)`
5. **ประเภทผลงาน (Type):** เช่น วารสาร (ต่างประเทศ) หรือ ประชุมวิชาการ (ในประเทศ) เพื่อสะดวกต่อการคัดกรอง (Filter)
6. **การเข้าถึง (Link):** ลิงก์ตรงสำหรับเปิดไฟล์ PDF หรือไปหน้ารหัส DOI ของบทความนั้นๆ
