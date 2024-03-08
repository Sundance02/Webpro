<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            //วิธีดึงข้อมูลเเบบ 2 (ใช้เเบบ2เถอะ)
            $url = "https://covid19.ddc.moph.go.th/api/Cases/today-cases-all";
            $response = file_get_contents($url);
            $result = json_decode($response);
            echo "ปี : ".$result[0]->year ."<br>";
            echo "สัปดาห์ที่ : ".  $result[0]->weeknum ."<br>";
            echo "ผู้ป่วยใหม่ : ". $result[0]->new_case ."<br>";
            echo "ผู้ป่วยทั้งหมด :".  $result[0]->total_case ."<br>";
            echo "ผู้เสียชีวิตทั้งหมด :".  $result[0]->total_death ."<br>";
            //      
        ?>
</body>
</html>