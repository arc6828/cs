<?php
$og_title = "ติดต่อเรา | หลักสูตรวิทยาการคอมพิวเตอร์ มรภ.วไลยอลงกรณ์ (VRU)";
$og_description = "ติดต่อหลักสูตรวิทยาการคอมพิวเตอร์ อาคาร 75 ปี วไลยอลงกรณ์ คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์ โทร. 0-2529-0674-7 ต่อ 365";
$og_url = "https://cs.vru.ac.th/contact.php";
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <?php include("layouts/meta.php"); ?>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php include("layouts/navbar.php"); ?>

    <div class="content">
        <div class="container py-4">
            <h1 class="h2">&starf;&nbsp;ติดต่อเรา</h1>
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
                        center: {
                            lat: 14.132371,
                            lng: 100.616594
                        },
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

            <h2 class="h4 mt-4">หลักสูตรวิทยาการคอมพิวเตอร์</h2>
            <p class="ml-4 mb-1">อาคาร 75 ปี วไลยอลงกรณ์ คณะวิทยาศาสตร์และเทคโนโลยี</p>
            <p class="ml-4 mb-1">มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์</p>
            <p class="ml-4 mb-1">เลขที่ 1 หมู่ 20 ถนนพหลโยธิน กม. 48 ต.คลองหนึ่ง อ.คลองหลวง จ.ปทุมธานี 13180</p>
            <p class="ml-4 mb-3">โทรศัพท์ 0-2529-0674-7 ต่อ 365 โทรสาร 02-909-3029</p>
            <div class="ml-4">
                <a href="https://www.facebook.com/cs.vru.ac.th" target="_blank" rel="noopener">
                    <img src="images/facebook-icon-preview-1.png" width="50" height="50" alt="Facebook หลักสูตรวิทยาการคอมพิวเตอร์ VRU"> FACEBOOK หลักสูตรวิทยาการคอมพิวเตอร์
                </a>
            </div>
        </div>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>
</body>

</html>
