<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1</title>
  <link href="http://10.0.15.21/lab/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://10.0.15.21/lab/bootstrap/js/bootstrap.min.js"></script>
  <style>
        form{
            margin-top: 5%;
            margin-left: 40%;
        }
    </style>
</head>
<body>
    <form action="1.php" method="get">
    <?php
      $servername = "localhost";
      $username = "S233H"; 
      $password = "LI46536"; 
      $dbname = "S233H";    
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }


      $want = $_GET['want']-1;

      $sql = "SELECT * from course LIMIT 1 OFFSET $want;" ; //OFFSET ระบุเเถวที่ต้องการว่าจะเอาเเถวไหน index 0
      $result = mysqli_query($conn, $sql);

      if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
          echo "<label>ID: ".$row['course_id']."</label>"."<br>";
          echo "<label>Title: ".$row['title']."</label>"."<br>";
          echo "<label>Dept. Name: ".$row['dept_name']."</label>"."<br>";
          echo "<label>Credits: ".$row['credit']."</label>"."<br>";
          echo "<label for='' >Enter a record number:</label>";
          echo "<input type='text' name='want'>"."<br>"."<br>";
          echo "<button> Display</button>";
        }
      }
      else{
        echo "There is no ".$want+1;
      }

      mysqli_close($conn);
    ?>
    </form>
</body>
</html>
