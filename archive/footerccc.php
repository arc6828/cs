<div class="container">
    <div class="border-bottom"></div>
</div>

<footer class="main-footer">

    <!--Widgets Section-->
    <div class="widgets-section">
        <div class="container">
            <div class="row">
                <!--Big Column-->
                <div class="big-column col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">
                        <iframe
                            src="http://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/SciTechvru2018/&width=685&connections=12&stream=false&header=true&height=270"
                            scrolling="no" frameborder="0"
                            style="bodycolor:#DBE8F1;border:none; overflow:hidden; width:685px; height:270px;"
                            allowtransparency="true">
                        </iframe>

                    </div>
                </div>

                <!--Big Column-->
                <div class="big-column col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">


                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget contact-widget">
                                <h3 class="footer-title">ติดต่อเรา</h3>
                                <div class="widget-content">
                                    <ul class="contact-info">
                                        <li><span class="fa fa-map"></span>คณะวิทยาศาสตร์และเทคโนโลยี
                                            <br>มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์<br>
                                            เลขที่ 1 หมู่ 20 ถนนพหลโยธิน กม. 48 ต.คลองหนึ่ง อ.คลองหลวง
                                            จ.ปทุมธานี 13180</li>
                                        <li><span class="fa fa-phone"></span> โทรศัพท์ : 0-2529-3850 ,<br> 09-2265-8433<br>เบอร์ภายใน : 161 </li>
                                        <li><span class="fa fa-fax"></span> โทรสาร : 02-909-3029</li>
                                        <li><span class="fa fa-envelope"></span> sciencetech@vru.ac.th</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget news-widget">
                                <h3 class="footer-title">สถิติผู้เยี่ยมชมเว็บไซต์</h3>
                                <div class="widget-content">
                                <?php
	
	include "connect.php";

$wantcount = true;
$counter_file = "counter.txt"; //สร้างไฟล์ใน notepad แล้วตั้งชื่อนี้ counter.txt แล้วpermission 777
if ($wantcount) {
    if (file_exists($counter_file) and is_writeable($counter_file)) {
        $fp = fopen($counter_file, "r+") or die("Read File Error !");
        $count = fread($fp, filesize($counter_file));
        fclose($fp);
        $fp = fopen($counter_file, "w+") or die("Write File Error !");
        $count += 1;
        $count = $count;
        fputs($fp, $count);
        fclose($fp);
        echo "จำนวนผู้เข้าชมเว็บไซต์ $count";
    }
}
?>

                                </div>



                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--Footer Bottom-->
    <section class="footer-bottom">
        <div class="container">
            <div class="pull-left copy-text">
                <p style="color:#FFF;"><?//=$dbc['names']?></p>

            </div><!-- /.pull-right -->
            <div class="pull-right get-text">
                <ul>
                    <li>
                        <p style="color:#FFF;">Powered by :  Faculty of Science and Technology <a href="#"></a></p>
                    </li>

                </ul>
            </div><!-- /.pull-left -->
        </div><!-- /.container -->
    </section>

</footer>

<!-- Scroll Top Button -->
<button class="scroll-top tran3s color2_bg">
    <span class="fa fa-angle-up"></span>
</button>
<!-- pre loader  -->
<div class="preloader"></div>


<!-- jQuery js -->
<script src="js/jquery.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- jQuery ui js -->
<script src="js/jquery-ui.js"></script>
<!-- owl carousel js -->
<script src="js/owl.carousel.min.js"></script>
<!-- jQuery validation -->
<script src="js/jquery.validate.min.js"></script>

<!-- mixit up -->
<script src="js/wow.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/jquery.fitvids.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/menuzord.js"></script>

<!-- revolution slider js -->
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution.extension.actions.min.js"></script>
<script src="js/revolution.extension.carousel.min.js"></script>
<script src="js/revolution.extension.kenburn.min.js"></script>
<script src="js/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution.extension.migration.min.js"></script>
<script src="js/revolution.extension.navigation.min.js"></script>
<script src="js/revolution.extension.parallax.min.js"></script>
<script src="js/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution.extension.video.min.js"></script>

<!-- fancy box -->
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.polyglot.language.switcher.js"></script>
<script src="js/nouislider.js"></script>
<script src="js/jquery.bootstrap-touchspin.js"></script>
<script src="js/SmoothScroll.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/imagezoom.js"></script>
<script id="map-script" src="js/default-map.js"></script>
<script src="js/custom.js"></script>

</div>

</body>

</html>