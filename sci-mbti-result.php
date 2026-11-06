<?php
$og_title = "ผลลัพธ์แบบทดสอบหลักสูตรที่เหมาะกับคุณ (Sci-MBTI) | คณะวิทยาศาสตร์ฯ VRU";
$og_description = "ผลการวิเคราะห์ความเหมาะสมในการเข้าศึกษาต่อในหลักสูตรของคณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์";
$og_url = "https://cs.vru.ac.th/sci-mbti-result.php";
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <?php include("layouts/meta.php"); ?>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php include("layouts/navbar.php"); ?>

    <div class="content">
        <section class="py-4">
            <div class="container">
                <div class="section-header text-center mb-4">
                    <h1 class="h2">หลักสูตรในคณะวิทยาศาสตร์ที่เหมาะกับคุณ</h1>
                </div>
                <div>
                    <?php
                    $summary = [
                        "CS" => 0,
                        "IT" => 0,
                        "DISE" => 0,
                        "HE" => 0,
                        "NU" => 0,
                        "FB" => 0,
                        "SET" => 0,
                        "OHS" => 0,
                    ];
                    $majors = [
                        "CS" => "วิทยาการคอมพิวเตอร์ (CS)",
                        "IT" => "เทคโนโลยีสารสนเทศ (IT)",
                        "DISE" => "นวัตกรรมดิจิทัลและวิศวกรรมซอฟต์แวร์ (DISE)",
                        "HE" => "คหกรรมศาสตร์ (HE)",
                        "NU" => "โภชนาการและการกำหนดอาหาร (NU)",
                        "FB" => "นวัตกรรมอาหารและเครื่องดื่มเพื่อสุขภาพ (FB)",
                        "SET" => "วิทยาศาสตร์และเทคโนโลยีสิ่งแวดล้อม (SET)",
                        "OHS" => "อาชีวอนามัยและความปลอดภัย (OHS)",
                    ];
                    for ($i = 1; $i <= count($_POST); $i++) {
                        if (!isset($_POST["flexRadioDefault" . $i])) {
                            continue;
                        }
                        [$code, $answer] = explode("-", $_POST["flexRadioDefault" . $i]);
                        if ($answer == "yes") {
                            $summary[$code] = isset($summary[$code]) ? $summary[$code] + 1 : 1;
                        } else {
                            $summary[$code] = isset($summary[$code]) ? $summary[$code] + 0 : 0;
                        }
                    }
                    $codes = array_keys($summary);
                    $values = array_values($summary);
                    ?>
                    <div style="max-width: 600px; margin:auto;">
                        <canvas id="radarChart"></canvas>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <script>
                        var codes = <?php echo json_encode($codes); ?>;
                        var values = <?php echo json_encode($values); ?>;
                        var majors = <?php echo json_encode($majors); ?>;

                        var data = {
                            labels: codes.map(function(item) {
                                return majors[item];
                            }),
                            datasets: [{
                                label: "",
                                backgroundColor: "rgba(179,181,198,0.2)",
                                borderColor: "rgba(179,181,198,1)",
                                pointBackgroundColor: "rgba(179,181,198,1)",
                                pointBorderColor: "#fff",
                                pointHoverBackgroundColor: "#fff",
                                pointHoverBorderColor: "rgba(179,181,198,1)",
                                data: values,
                            }],
                        };

                        var options = {
                            scales: {
                                r: {
                                    beginAtZero: true,
                                    min: 0,
                                    max: 3,
                                    ticks: {
                                        stepSize: 1
                                    }
                                },
                            }
                        };

                        var ctx = document.getElementById("radarChart").getContext("2d");
                        var myRadarChart = new Chart(ctx, {
                            type: "radar",
                            data: data,
                            options: options,
                        });
                    </script>
                </div>
            </div>
        </section>
    </div>

    <?php include("layouts/footer-content.php"); ?>
    <?php include("layouts/scripts.php"); ?>
</body>

</html>
