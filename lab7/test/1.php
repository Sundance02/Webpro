<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>PHP code part 1</h1>
<?php
    $value = 10;
    $myarr = array(1,2,3,4,5,6,7,8,9,10,11,12);
    $power_value = $value * $value;
    echo "Power of " . $value . " is " . $power_value;
?>
<h1>PHP code part 2</h1>
<?php
    for ($i = 0; $i < $value; $i++) {
        echo $i . " x " . $value . " = " . $i * $value . "<br>";
    }
?>
<h1>PHP code part 3</h1>
<?php
    for ($i = 0; $i < sizeof($myarr); $i++) {
        echo $myarr[$i] . " x " . $value . " = " . $myarr[$i] * $value . "<br>";
    }
      //using foreach
    foreach ($myarr as $value) {
        print ("$value x 10 = ".$value*10 . "<br>");
    }
    
?>
    <br><br>
    <!--C) assosiative array -->
    <?php
    $DayOfMonth = array( // Key => Value
        "Januaray" => 31,
        "February" => 28,
        "March" => 31,
        "April" => 30,
        "May" => 31,
        "June" => 30,
        "July" => 31,
        "August" => 31,
        "September" => 30,
        "October" => 31,
        "November" => 30,
        "December" => 31
    );
    // foreach loop
    echo "<ol>";
        foreach ($DayOfMonth as $Month => $Day) {
            echo "<li>" . $Month . $Day . "</li>";
        }
    echo "</ol>";
   
    echo "<select>";
        foreach ($DayOfMonth as $Month => $Day) {
            echo '<option value = ""'.$Day.">" . $Month . "</option>";
        }
    echo "</select>";

?>

</body>
</html>