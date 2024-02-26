<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
    <link href="http://10.0.15.21/lab/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://10.0.15.21/lab/bootstrap/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: "Merriweather", serif;
        }
    </style>
</head>

<body>
    <form action="action.php">
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
        </tr>
        <?php
        class MyDB extends SQLite3
        {
            function __construct()
            {
                //ถ้าไม่มีไฟล์ dbที่ชื่อนี้อยู่มันจะสร้างใหม่
                $this->open('customers.db');
            }
        }
        $db = new MyDB();
        if (!$db) {
            echo $db->lastErrorMsg();
        } else {
            //echo "Opened database successfully<br>";
        }

        $sql = "SELECT * from customers";
        $ret = $db->query($sql);
        while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
            echo "<tr>";
                    echo "<td>".$row['CustomerId']."</td>";
                    echo "<td>".$row['FirstName']." ".$row['LastName']."</td>";
                    echo "<td>".$row['Address']."</td>";
                    echo "<td>".$row['Phone']."</td>";
                    echo "<td>".$row['Email']."</td>";
            echo "</tr>";
        }


        $db->close();
        ?>
    </table>
    <button>Delete Last row</button>
    </form>
</body>

</html>