<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
    <link href="http://10.0.15.21/lab/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://10.0.15.21/lab/bootstrap/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: "Merriweather", serif;
        }
    </style>
    <style>
        .myq{
            margin-top: 2%;
            margin-left: 40%;
        }
    </style>
</head>



<!-- หลักการของข้อนี้ที่ใช้
1.คือใช้ SESSION เก็บข้อปัจจุบันที่ทำจะ+1ไปเเต่ละครั้งที่กด submit(ทำใน action) 
2.เเละจะเก็บคะเเนนโดยเริ่มจาก0 
3.เก็บคำตอบว่าข้อไหนถูก //$_SESSION["ans"] = $row['Correct'];
4.ให้formเป็นตัวดูว่า userกดปุ่มไหนมาโดยใช้ name จาก radio ซึ่งเมื่อกดsubmitคำตอบจะเก็บไว้ใน $Post
5.พอกด submit จะเช็คคำตอบว่าถูกไหมโดยใช้ $_SESSION['ans'] == $_POST['Q'] ถ้าถูกคะเเนนจะ+1
6.เมื่อถึงหน้า10จะ directไปหน้า score.php เพื่อเเสดงคะเเนนที่ user ได้รับ-->

<body>
    <div class="myq">
        <form action="action.php" method="Post">
            <?php
            class MyDB extends SQLite3
            {
                function __construct()
                {
                    //ถ้าไม่มีไฟล์ dbที่ชื่อนี้อยู่มันจะสร้างใหม่
                    $this->open('questions.db');
                }
            }
            $db = new MyDB();
            if (!$db) {
                echo $db->lastErrorMsg();
            } else {
                //echo "Opened database successfully<br>";
            }

            $_SESSION["NO"] = 1;
            $_SESSION["Point"] = 0;

            $sql = <<<EOF
            SELECT * from questions Where QID = $_SESSION[NO];
        EOF;
            $ret = $db->query($sql);
            while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                echo "<h3>" . $row['QID'] . ")" . $row['Stem'] . "</h3>";
                echo "<input type='radio' name='Q'" . "value='A'>" . "<label>" . $row['Alt_A'] . "</label>" . "<br>";
                echo "<input type='radio' name='Q'" . "value='B'>" . "<label>" . $row['Alt_B'] . "</label>" . "<br>";
                echo "<input type='radio' name='Q'" . "value='C'>" . "<label>" . $row['Alt_C'] . "</label>" . "<br>";
                echo "<input type='radio' name='Q'" . "value='D'>" . "<label>" . $row['Alt_D'] . "</label>" . "<br>";
                $_SESSION["ans"] = $row['Correct'];
            }
            ?>
            <br>
            <input type="submit">
        </form>
    </div>
</body>

</html>