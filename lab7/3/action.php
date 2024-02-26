<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3</title>
</head>
<body>
    <?php 
        $name = $_POST["Name"];
        $ad = $_POST["Address"];
        $age = $_POST["Age"];
        $pro = $_POST["Profession"];
        $re = $_POST["Resident"];
   

        if(strlen($name) < 5 || strlen($ad) <5 ||strlen($pro) < 5){
            echo "<label style='color: red;'>".'***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***'."</label>";
        }
        else if(strlen($name) >= 5 || strlen($ad) >= 5 ||strlen($pro) >= 5){
            echo "<label>".'Name:'.$name."</label> <br>";
            echo "<label>".'Address:'.$ad."</label> <br>";
            echo "<label>".'Age:'.$age."</label> <br>";
            echo "<label>".'Professional:'.$pro."</label> <br>";
            echo "<label>".'Residential status::'.$re."</label> <br>";
        }
    ?>
</body>
</html>