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
    session_start();
    

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

    //check ว่ากดปุ่มไรมา
    if(isset($_GET["save"])){

        $_SESSION['ID'] =  $id;
        $_SESSION['first'] = $first;
        $_SESSION['last'] = $last;
        $_SESSION['address'] = $address;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;

        echo "<h3>".'Employee Information'."</h3>";
        echo "<div class='container'>";
            echo "<div class='div1'>";
                echo "<form action='action.php' method='get'>";
                    echo "<div class='form-group'>";
                        echo "<label for=''>"."Employee ID:"."</label>"."<br>";
                        echo "<input type='text' class='form-control' name='ID' value=''>"."<br>";
                    echo "</div>";
                    echo "<div class='form-group'>";
                    echo  "<label for=''>"."Firstname:"."</label>"."<br>";
                        echo"<input type='text' class='form-control' name='firstname' value=''>"."<br>";
                    echo "</div>";
                    echo "<div class='form-group'>";
                        echo "<label for=''>Lastname:</label>"."<br>";
                        echo "<input type='text' class='form-control' name='lastname' value=''>"."<br>";
                    echo "</div>";
                    echo "<div class='form-group'>";
                        echo "<label for=''>"."Address:"."</label>"."<br>";
                        echo "<textarea name='' id='' cols='30' rows='10' class='form-control' name='address'>"."</textarea>"."<br>";
                    echo "</div>";
                    echo "<div class='form-group'>";
                        echo "<label for=''>"."Email:"."</label>"."<br>";
                        echo "<input type='text' class='form-control' name='email' value=''>"."<br>";
                    echo "</div>";
                    echo "<div class='form-group'>";
                        echo "<label for=''>"."Phone:"."</label>"."<br>";
                        echo "<input type='text' class='form-control' name='phone' value=''>"."<br>";
                    echo "</div>";
                    echo "<button name='save'>"."Save Data"."</button> ";  echo"<button name='show'>"."Show Data"."</button> ";  echo "<button name='clear'>"."Clear Data"."</button> ";
                echo "</form>";
            echo "</div>";
        echo "</div>";
    }
    else if(isset($_GET['show'])){
        echo "<h3>".'Employee Information'."</h3>";
        echo "<div class='container'>";
            echo "<div class='div1'>";
                echo "<form action='action.php' method='get'>";
                    echo "<div class='form-group'>";
                        echo "<label for=''>"."Employee ID:"."</label>"."<br>";
                        echo "<input type='text' class='form-control' name='ID' value=".$_SESSION['ID'].">"."<br>";
                    echo "</div>";
                    echo "<div class='form-group'>";
                    echo  "<label for=''>"."Firstname:"."</label>"."<br>";
                        echo"<input type='text' class='form-control' name='firstname' value=".$_SESSION['first'].">"."<br>";
                    echo "</div>";
                    echo "<div class='form-group'>";
                        echo "<label for=''>Lastname:</label>"."<br>";
                        echo "<input type='text' class='form-control' name='lastname' value=".$_SESSION['last'].">"."<br>";
                    echo "</div>";
                    echo "<div class='form-group'>";
                        echo "<label for=''>"."Address:"."</label>"."<br>";
                        echo "<textarea name='' id='' cols='30' rows='10' class='form-control' name='address'>".$_SESSION['address']."</textarea>"."<br>";
                    echo "</div>";
                    echo "<div class='form-group'>";
                        echo "<label for=''>"."Email:"."</label>"."<br>";
                        echo "<input type='text' class='form-control' name='email' value=".$_SESSION['email'].">"."<br>";
                    echo "</div>";
                    echo "<div class='form-group'>";
                        echo "<label for=''>"."Phone:"."</label>"."<br>";
                        echo "<input type='text' class='form-control' name='phone' value=".$_SESSION['phone'].">"."<br>";
                    echo "</div>";
                    echo "<button name='save'>"."Save Data"."</button> ";  echo"<button name='show'>"."Show Data"."</button> ";  echo "<button name='clear'>"."Clear Data"."</button> ";
                echo "</form>";
            echo "</div>";
        echo "</div>";
    }
    else if(isset($_GET['clear'])){
        unset($_SESSION['ID']);
        unset($_SESSION['first']);
        unset($_SESSION['last']);
        unset($_SESSION['address']);
        unset($_SESSION['email']);
        unset($_SESSION['phone']);

        echo "<h3>".'Employee Information'."</h3>";
        echo "<div class='container'>";
            echo "<div class='div1'>";
                echo "<form action='action.php' method='get'>";
                    echo "<div class='form-group'>";
                        echo "<label for=''>"."Employee ID:"."</label>"."<br>";
                        echo "<input type='text' class='form-control' name='ID' value=''>"."<br>";
                    echo "</div>";
                    echo "<div class='form-group'>";
                    echo  "<label for=''>"."Firstname:"."</label>"."<br>";
                        echo"<input type='text' class='form-control' name='firstname' value=''>"."<br>";
                    echo "</div>";
                    echo "<div class='form-group'>";
                        echo "<label for=''>Lastname:</label>"."<br>";
                        echo "<input type='text' class='form-control' name='lastname' value=''>"."<br>";
                    echo "</div>";
                    echo "<div class='form-group'>";
                        echo "<label for=''>"."Address:"."</label>"."<br>";
                        echo "<textarea name='' id='' cols='30' rows='10' class='form-control' name='address'>"."</textarea>"."<br>";
                    echo "</div>";
                    echo "<div class='form-group'>";
                        echo "<label for=''>"."Email:"."</label>"."<br>";
                        echo "<input type='text' class='form-control' name='email' value=''>"."<br>";
                    echo "</div>";
                    echo "<div class='form-group'>";
                        echo "<label for=''>"."Phone:"."</label>"."<br>";
                        echo "<input type='text' class='form-control' name='phone' value=''>"."<br>";
                    echo "</div>";
                    echo "<button name='save'>"."Save Data"."</button> ";  echo"<button name='show'>"."Show Data"."</button> ";  echo "<button name='clear'>"."Clear Data"."</button> ";
                echo "</form>";
            echo "</div>";
        echo "</div>";
    }
    ?>


    <!-- <h3>Employee Information</h3>
    <div class="container">
        <div class="div1">
            <form action="action.php" method="get">
                <div class="form-group">
                    <label for="">Employee ID:</label> <br>
                    <input type="text" class="form-control" name="ID" value=""> <br>
                </div>
                <div class="form-group">
                    <label for="">Firstname:</label> <br>
                    <input type="text" class="form-control" name="firstname" value=""> <br>
                </div>
                <div class="form-group">
                    <label for="">Lastname:</label> <br>
                    <input type="text" class="form-control" name="lastname" value=""> <br>
                </div>
                <div class="form-group">
                    <label for="">Address:</label> <br>
                    <textarea name="" id="" cols="30" rows="10" class="form-control" name="address"> </textarea> <br>
                </div>
                <div class="form-group">
                    <label for="">Email:</label> <br>
                    <input type="text" class="form-control" name="email" value=""> <br>
                </div>
                <div class="form-group">
                    <label for="">Phone:</label> <br>
                    <input type="text" class="form-control" name="phone" value=""> <br>
                </div>
                <button name="save">Save Data</button>  <button name="show">Show Data</button>  <button name="clear">Clear Data</button>
            </form>
            
        </div>
    </div> -->
</body>

</html>