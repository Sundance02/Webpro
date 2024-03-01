<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
    <link href="http://10.0.15.21/lab/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://10.0.15.21/lab/bootstrap/js/bootstrap.min.js"></script>
    <style>
        .div1 {
            margin-top: 5%;
        }

        h3 {
            margin-left: 16%;
        }
    </style>
</head>

<body>
    <?php
    

    class MyDB extends SQLite3 {
        function __construct() {
           $this->open('customers.db');
        }
     }
 

    $db = new MyDB();
    if(!$db) {
       echo $db->lastErrorMsg();
    }

    // SQL SELECT 
    $sql ="SELECT * from Customers  LIMIT 1";
    $ret = $db->query($sql);   

    while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
        $id = $row['CustomerId'];
        $first = $row['FirstName'];
        $last = $row['LastName'];
        $address = $row['Address'];
        $email = $row['Email'];
        $phone = $row['Phone'];
    }

    
    // 4. Close Database 
    $db->close();
    ?>


    <h3>Employee Information</h3>
    <div class="container">
        <div class="div1">
            <form action="action.php" method="get">
                <div class="form-group">
                    <label for="">Employee ID:</label> <br>
                    <input type="text" class="form-control" name="ID" value="<?php echo $id;  ?>"> <br>
                </div>
                <div class="form-group">
                    <label for="">Firstname:</label> <br>
                    <input type="text" class="form-control" name="firstname" value="<?php echo $first;  ?>"> <br>
                </div>
                <div class="form-group">
                    <label for="">Lastname:</label> <br>
                    <input type="text" class="form-control" name="lastname" value="<?php echo $last;  ?>"> <br>
                </div>
                <div class="form-group">
                    <label for="">Address:</label> <br>
                    <textarea name="" id="" cols="30" rows="10" class="form-control" name="address"> <?php echo $address;  ?></textarea> <br>
                </div>
                <div class="form-group">
                    <label for="">Email:</label> <br>
                    <input type="text" class="form-control" name="email" value="<?php echo $email;  ?>"> <br>
                </div>
                <div class="form-group">
                    <label for="">Phone:</label> <br>
                    <input type="text" class="form-control" name="phone" value="<?php echo $phone;  ?>"> <br>
                </div>
                <button name="save">Save Data</button>  <button name="show">Show Data</button>  <button name="clear">Clear Data</button>
            </form>
            
        </div>
    </div>
</body>

</html>