<?php include("layouts/header.php"); ?>

<section>
    <div class="container">
        <br>
        <br>
        <div class="section-header text-center">
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
                // echo $_POST["flexRadioDefault" . $i] . "<br>";
                [$code, $answer] = explode("-", $_POST["flexRadioDefault" . $i]);
                if ($answer == "yes") {
                    // if-yes
                    $summary[$code] = isset($summary[$code]) ? $summary[$code] + 1 : 1;
                } else {
                    // if-no
                    $summary[$code] = isset($summary[$code]) ? $summary[$code] + 0 : 0;
                }
            }
            // print_r($summary);
            $codes = array_keys($summary);
            $values = array_values($summary);

            // print_r($summary);
            // print_r($codes);
            // print_r($values);

            ?>
            <div style="max-width: 600px; margin:auto;">
                <canvas id="radarChart"></canvas>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                // Sample data for the radar chart
                var codes = <?php echo json_encode($codes); ?>;
                var values = <?php echo json_encode($values); ?>;
                var majors = <?php echo json_encode($majors); ?>;

                var data = {
                    // labels: ["Label 1", "Label 2", "Label 3", "Label 4", "Label 5"],
                    labels: codes.map(function(item) {
                        return majors[item]
                    }),
                    datasets: [{
                        label: "",
                        backgroundColor: "rgba(179,181,198,0.2)",
                        borderColor: "rgba(179,181,198,1)",
                        pointBackgroundColor: "rgba(179,181,198,1)",
                        pointBorderColor: "#fff",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "rgba(179,181,198,1)",
                        // data: [65, 59, 90, 81, 56],
                        data: values,
                    }],
                };

                // Options for the radar chart
                var options = {
                    scale: {
                        ticks: {
                            beginAtZero: true
                        },
                    },
                    legend: {
                        display: false // hide legend
                    },
                };

                // Get the context of the canvas element we want to select
                var ctx = document.getElementById("radarChart").getContext("2d");

                // Create the radar chart
                var myRadarChart = new Chart(ctx, {
                    type: "radar",
                    data: data,
                    options: options,
                });
            </script>



        </div>
    </div>
</section>

<?php include("layouts/footer.php"); ?>