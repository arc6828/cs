<?php include("layouts/header.php") ?>
<div class="container">
   <br />
   <h2>&starf;&nbsp;ติดต่อเรา</h2>
   <hr>
    
    <style>
    #map_container {
        height: 250px;
        margin-bottom: 10px;
    }
    #map {
        width: 100%;
        height: 100%;
    }
</style>
<div id="map_container">
    <div id="map"></div>
</div>
<script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 14.132371, lng: 100.616594},
          zoom: 15
        });
var marker = new google.maps.Marker({
   position: new google.maps.LatLng(14.132371, 100.616594),
   map: map,
   title: 'หลักสูตรวิทยาการคอมพิวเตอร์ มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ฯ'
});
      }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoZlRLPlMJTXe38xtlDFiyI9rj6BoG10M&callback=initMap" async defer></script>
    
<p></p>
<h4>หลักสูตรวิทยาการคอมพิวเตอร์</h4>
<p>&nbsp; &nbsp; &nbsp; &nbsp;อาคาร 75 ปี วไลยอลงกรณ์ </p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;เลขที่ 1 หมู่ 20 ถนนพหลโยธิน กม. 48 ต.คลองหนึ่ง อ.คลองหลวง จ.ปทุมธานี 13180</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp;โทรศัพท์  0-2529-0674-7 ต่อ 365 โทรสาร 02-909-3029</p>
&nbsp; &nbsp; &nbsp; &nbsp;<a href="https://www.facebook.com/profile.php?id=100008113098809&fref=ts"><img src="images/facebook-icon-preview-1.png" width="50" height="50"> FACEBOOK หลักสูตรวิทยาการคอมพิวเตอร์</a>	   
</div>
<?php include("layouts/footer.php") ?>  
</div>
</body>
</html>