<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab9.2</title>
</head>

<body>
    <?php
      $servername = "localhost";
      $username = "S233H"; 
      $password = "LI46536"; 
      $dbname = "S233H";    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $id = $_GET['id'];
    $title = $_GET['title'];
    $dept = $_GET['dept'];
    $credit = $_GET['credit'];

    if (isset($_GET['Update'])) {

        $sql = "UPDATE course 
        SET course_id = '$id',
        title = '$title',
        dept_name = '$dept',
        credit = $credit
        WHERE course_id = '$id'";
        $result = mysqli_query($conn, $sql);
        echo "Successfully Updated";
        header("refresh:1; url=index.php" ); 
        die();
    } else if (isset($_GET['Delete'])) {
        $sql = "DELETE From course Where course_id ='$id'";
        $result = mysqli_query($conn, $sql);
        echo "Successfully Deleted";
        header("refresh:1; url=index.php" ); 
        die();
    }

    mysqli_close($conn);
    ?>
</body>

</html>