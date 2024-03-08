<?php
// web service URL 
$url = "http://10.0.15.21/lab/lab12/restapis/ws-for-barchart.php";
$response = file_get_contents($url);

$dataPoints = $response;
?>

<!DOCTYPE HTML>
<html>
<head>
    <script>
        window.onload = function() {
            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title: {
                    text: "Revenue Chart of Cricket Hotel"
                },
                axisY: {
                    title: "Revenue (in THB)",
                    includeZero: true,
                    prefix: "",
                    suffix: "M"
                },
                data: [{
                    type: "column",
                    yValueFormatString: "#,##0M",
                    indexLabel: "{y}",
                    indexLabelPlacement: "inside",
                    indexLabelFontWeight: "bolder",
                    indexLabelFontColor: "white",
                    dataPoints: <?php echo $dataPoints; ?>
                }]
            });
            chart.render();
        }
    </script>
</head>
<body>
    <div id="chartContainer" style="height: 450px; width: 80%;"></div>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>