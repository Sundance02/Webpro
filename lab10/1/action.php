<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
    <link href="http://10.0.15.21/lab/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://10.0.15.21/lab/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
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


        $sql =<<<EOF
        DELETE from customers Where CustomerId = (SELECT MAX(CustomerId) from customers);
        EOF;

        // $sql = "DELETE from customers Where CustomerId = (SELECT MAX(CustomerId) from customers)";

        $ret = $db->exec($sql);
        if(!$ret) {
           echo $db->lastErrorMsg();
        }
        else{
            echo "deleted last row";
            header("refresh:1; url=index.php" );
        }
    ?>
</body>

</html>