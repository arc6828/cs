    </div>
  <style>
    .site-footer ,.footer-heading ,.p {
    font-size: 16px;
    color: #ffffff;
    text-align: center !important;
    background:#5900b3 !important;
    }
    .site-footer p {
    color: #ffffff;
    }
  </style>
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">ติดต่อเรา</h2>
                    <p> &nbsp;&nbsp;&nbsp;&nbsp;อาคาร 75 ปี วไลยอลงกรณ์ <br>
                    โทรศัพท์ 0-2529-0674-7 ต่อ 365 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โทรสาร 02-909-3029</p>
                    
              </div>
              <div class="col-md-3 mx-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              
            </div>
          </div>
            <div class="col-md-4 mx-auto">
              <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="https://www.facebook.com/cs.vru.ac.th/" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p class="copyright">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> หลักสูตรวิทยาการคอมพิวเตอร์  คณะวิทยาศาสตร์และเทคโนโลยี 
            <br>
              มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์ เลขที่ 1 หมู่ 20 ต.คลองหนึ่ง
                          อ.คลองหลวง จ.ปทุมธานี 13180 </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!--script src="js/jquery-3.3.1.min.js"></script-->
    <script src="js/jquery-ui.js"></script>
    <!--script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script-->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <!--script src="js/jquery.easing.1.3.js"></script-->
    <script src="js/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>

    <!-- Load Facebook SDK for JavaScript -->
    <?php if(true) { ?>
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v7.0'
          });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat"
        attribution=setup_tool
        page_id="2105621063039483"
        logged_in_greeting="สวัสดี ... เราสามารถช่วยเหลืออะไรคุณได้บ้าง บอกเราได้นะ?"
        logged_out_greeting="สวัสดี ... เราสามารถช่วยเหลืออะไรคุณได้บ้าง บอกเราได้นะ?">
    </div>
    <?php } ?>

    <script>
    $(document).ready(function(){
        //$('a.sub-menu').dropdown();
        /*
        $('a.sub-menu').on("click", function(e){
            
            //$(this).next('ul').toggle();
            //e.stopPropagation();
            //e.preventDefault();
            
        });*/
    });
    </script>

    
  </body>
</html>
    