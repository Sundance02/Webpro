<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // 1. Connect to Database เชื่อมฐานข้อมูล sqlite
        class MyDB extends SQLite3 {
            function __construct() {
                            //ถ้าไม่มีไฟล์ dbที่ชื่อนี้อยู่มันจะสร้างใหม่
                $this->open('lab10-file.db');
            }
        }

        // 2. Open Database //ทดสอบการเปิด db
        $db = new MyDB();
        if(!$db) {
            echo $db->lastErrorMsg();
        } else {
            //echo "Opened database successfully<br>";
        }

        // 3. Query Execution

        //สร้างตาราง
        $sql =<<<EOF
        CREATE TABLE questions (
        QID INTEGER PRIMARY KEY AUTOINCREMENT,
        Stem VARCHAR(150) NOT NULL,
        Alt_A VARCHAR(50) NOT NULL,
        Alt_B VARCHAR(50) NOT NULL,
        Alt_C VARCHAR(50) NOT NULL,
        Alt_D VARCHAR(50) NOT NULL,
        Correct VARCHAR(3) NOT NULL
        );
        EOF;

        //เพิ่มข้อมูล
        // $sql =<<<EOF
        // INSERT INTO questions (Stem, Alt_A, Alt_B, Alt_C, Alt_D, Correct)
        // VALUES 
        // ('Which of the following is not a valid SQL type?','FLOAT','NUMERIC','DECIMAL','CHARACTER','C'),
        // ('Which of the following is not a DDL command?','TRUNCATE','ALTER','CREATE','UPDATE','D'),
        // ('Which of the following are TCL commands?','COMMIT and ROLLBACK','UPDATE and TRUNCATE','SELECT and INSERT','GRANT and REVOKE','A'),
        // ('Which statement is used to delete all rows in a table without having the action logged?','DELETE','REMOVE','DROP','TRUNCATE','D');
        // EOF;
     
                //db->exec ใช้กับคำสั่งไม่ returnค่าพวก update delete insert
        // $ret = $db->exec($sql);
        // if(!$ret){
        //    echo $db->lastErrorMsg();
        // } else {
        //    echo "Record inserted successfully<br>";
        // }

        //--------------------------------------------------------------------------------------------------------------------------------------------------------

                //db->query เอาไว้ใช้กับ select เพราะselectมีการreturnค่า
        $sql ="SELECT * from questions";
        $ret = $db->query($sql);   
        // <input type="radio">
        // <label>Alternative Answer</label><br> 
        while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
           echo"<h2>".$row['QID'].")".$row['Stem']."</h2>";
           echo "<input type='radio' name=".$row['QID'].">"."<label>".$row['Alt_A']."</label>"."<br>";
           echo "<input type='radio' name=".$row['QID'].">"."<label>".$row['Alt_B']."</label>"."<br>";
           echo "<input type='radio' name=".$row['QID'].">"."<label>".$row['Alt_C']."</label>"."<br>";
           echo "<input type='radio' name=".$row['QID'].">"."<label>".$row['Alt_D']."</label>"."<br>";
           echo "Corrected answer: ". $row['Correct'] . "<br>";
        }


        // 4. Close database
        $db->close();
    ?>
</body>
</html>