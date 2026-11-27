                    </article>
                    <!-- Article Body Content Ends Above -->

                    <!-- Social Share Bar (Bottom) -->
                    <div class="social-share-bar py-3 border-top border-bottom my-4">
                        <span class="text-muted font-weight-bold mr-2"><i class="fa fa-share-alt mr-1"></i> แชร์บทความนี้:</span>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($canonicalUrl) ?>" target="_blank" rel="noopener noreferrer" class="btn-share btn-share-fb">
                            <i class="fa fa-facebook"></i> Facebook
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=<?= urlencode($canonicalUrl) ?>&text=<?= urlencode($title) ?>" target="_blank" rel="noopener noreferrer" class="btn-share btn-share-tw">
                            <i class="fa fa-twitter"></i> X
                        </a>
                        <a href="https://line.me/R/msg/text/?<?= urlencode($title . ' ' . $canonicalUrl) ?>" target="_blank" rel="noopener noreferrer" class="btn-share btn-share-line">
                            <i class="fa fa-comment"></i> LINE
                        </a>
                        <button type="button" class="btn-share btn-share-copy" onclick="copyCurrentLink()">
                            <i class="fa fa-link"></i> คัดลอกลิงก์
                        </button>
                    </div>

                    <!-- Author Profile Box -->
                    <div class="author-card-box">
                        <div class="media align-items-center">
                            <?php if (!empty($authorProfile['image'])) { ?>
                                <img src="<?= htmlspecialchars($authorProfile['image']) ?>" class="mr-3" alt="<?= htmlspecialchars($authorProfile['name']) ?>" onerror="this.src='<?= $root_path ?>images/logo/logo-anniversary-full.png'">
                            <?php } ?>
                            <div class="media-body">
                                <small class="text-uppercase text-muted font-weight-bold">ผู้เขียนบทความ</small>
                                <h3 class="h5 mb-1 font-weight-bold text-dark"><?= htmlspecialchars($authorProfile['name']) ?></h3>
                                <div class="text-muted small mb-2"><?= htmlspecialchars($authorProfile['academic_position'] ?: $authorProfile['role']) ?> • หลักสูตรวิทยาการคอมพิวเตอร์</div>
                                <?php if (!empty($authorProfile['expertise'])) { ?>
                                    <div class="small text-secondary mb-2">
                                        <strong>ความเชี่ยวชาญ:</strong> <?= htmlspecialchars(implode(', ', (array)$authorProfile['expertise'])) ?>
                                    </div>
                                <?php } ?>
                                <div>
                                    <a href="<?= $root_path ?><?= $authorProfile['profile_url'] ?>" class="btn btn-sm btn-outline-primary">
                                        <i class="fa fa-user-circle mr-1"></i> ดูประวัติและผลงานอาจารย์
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Admission CTA Banner -->
                    <div class="admission-cta-banner">
                        <h3>สนใจเรียนต่อ "วิทยาการคอมพิวเตอร์" วไลยอลงกรณ์</h3>
                        <p>
                            เปิดรับสมัครทั้ง <strong>ภาคปกติ (จันทร์-ศุกร์)</strong> และ <strong>ภาคพิเศษ (เสาร์-อาทิตย์ สำหรับคนทำงาน)</strong><br>
                            รองรับการเทียบโอน ปวส., มีกองทุน กยศ., หลักสูตรทันสมัยมุ่งเน้น AI, Software Dev, Cloud และ Data Science
                        </p>
                        <div>
                            <a href="<?= $root_path ?>admission.php" class="btn-cta-white">
                                <i class="fa fa-graduation-cap mr-1"></i> ดูรายละเอียดรับสมัคร (admission.php)
                            </a>
                            <a href="<?= $root_path ?>structure.php" class="btn-cta-outline">
                                <i class="fa fa-book mr-1"></i> ดูโครงสร้างหลักสูตร
                            </a>
                        </div>
                    </div>

                    <!-- Related Articles -->
                    <?php if (!empty($relatedArticles)) { ?>
                        <section class="mt-5">
                            <h2 class="h4 font-weight-bold mb-3 text-dark">บทความที่คุณอาจสนใจ</h2>
                            <div class="row">
                                <?php foreach ($relatedArticles as $rel) { 
                                    $relSlug = $rel['slug'] ?? "article-{$rel['id']}";
                                    $relImg = !empty($rel['image_url']) ? $rel['image_url'] : $root_path . 'images/logo5.png';
                                ?>
                                    <div class="col-md-4 mb-3">
                                        <div class="related-card">
                                            <a href="<?= $root_path ?>content/<?= htmlspecialchars($relSlug) ?>">
                                                <img src="<?= htmlspecialchars($relImg) ?>" alt="<?= htmlspecialchars($rel['title']) ?>" loading="lazy" onerror="this.src='<?= $root_path ?>images/logo5.png'">
                                            </a>
                                            <div class="p-3">
                                                <small class="text-muted"><i class="fa fa-calendar mr-1"></i> <?= format_thai_date($rel['pubDate']) ?></small>
                                                <h3 class="h6 font-weight-bold mt-1 mb-2">
                                                    <a href="<?= $root_path ?>content/<?= htmlspecialchars($relSlug) ?>" class="text-dark">
                                                        <?= htmlspecialchars(mb_substr($rel['title'], 0, 55)) ?>...
                                                    </a>
                                                </h3>
                                                <small class="text-secondary"><?= htmlspecialchars($rel['creator']) ?></small>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </section>
                    <?php } ?>

                </div>
            </div>
        </main>
    </div>

    <?php include(__DIR__ . "/../layouts/footer-content.php"); ?>
    <?php include(__DIR__ . "/../layouts/scripts.php"); ?>

    <script>
        // Reading Progress Bar
        window.addEventListener('scroll', function() {
            var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            var scrolled = (winScroll / height) * 100;
            var bar = document.getElementById("readingProgressBar");
            if (bar) bar.style.width = scrolled + "%";
        });

        // Copy Current Link Helper
        function copyCurrentLink() {
            var dummy = document.createElement('input');
            document.body.appendChild(dummy);
            dummy.value = window.location.href;
            dummy.select();
            document.execCommand('copy');
            document.body.removeChild(dummy);
            
            var msg = document.getElementById('copySuccessMsg');
            if (msg) {
                msg.style.display = 'inline';
                setTimeout(function() { msg.style.display = 'none'; }, 2500);
            }
        }

        // Auto-generate Table of Contents (TOC) if H2 or H3 tags exist
        document.addEventListener("DOMContentLoaded", function() {
            var body = document.querySelector(".article-body");
            if (!body) return;

            var headings = body.querySelectorAll("h2, h3");
            if (headings.length >= 2) {
                var tocContainer = document.getElementById("tocContainer");
                var tocList = document.getElementById("tocList");
                
                headings.forEach(function(h, idx) {
                    var id = h.id || ("section-" + (idx + 1));
                    h.id = id;
                    
                    var li = document.createElement("li");
                    if (h.tagName.toLowerCase() === 'h3') {
                        li.className = "toc-h3";
                    }
                    var a = document.createElement("a");
                    a.href = "#" + id;
                    a.textContent = h.textContent.trim();
                    li.appendChild(a);
                    tocList.appendChild(li);
                });

                if (tocContainer) tocContainer.style.display = "block";
            }
        });
    </script>
</body>
</html>
