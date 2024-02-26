<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $number = $_POST['value'];

    echo "<h2>" . 'ตารางสูตรคูณเเม่ ' . $number . "</h2>";

    for ($i = 1; $i <= 12; $i++) {
        echo "<h2>" . $number . ' x ' . $i . ' = ' . $number * $i . "</h2>";
        echo "<hr style='margin-right: 90%;'>";
    }

    ?>
    <br>
    <form id="myform" action="action.php" method="post">
        <label for="">กรอกสูตรคูณ : </label>
        <input type="text" id="value" name="value">
        <input type="submit" id="submit" name="submit" value="แสดงตาราง">
    </form>

</body>

</html>