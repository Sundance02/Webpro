<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <tr>
        <th>course_id</th>
        <th>title</th>
        <th>dept_name</th>
        <th>year</th>
        <th>semester</th>
        <th>building</th>
</tr>





    <?php
$servername = "localhost";
$username = "root"; // Replace with your actual username
$password = ""; // Replace with your actual password
$dbname = "test9";    // Replace with your actual database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "SELECT course.course_id, course.title, course.dept_name, section.year, section.semester, section.building FROM course Join section using (course_id)";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    // echo " " . $row["course_id"]. " " . $row["title"]. 
    // " " . $row["dept_name"] . " " . $row["year"] . "<br>".
    // " " . $row["semester"] . " " . $row["building"] . "<br>";
    echo "<tr>";
        echo "<td>".$row["course_id"]."</td>";
        echo "<td>".$row["title"]."</td>";
        echo "<td>".$row["dept_name"]."</td>";
        echo "<td>".$row["year"]."</td>";
        echo "<td>".$row["semester"]."</td>";
        echo "<td>".$row["building"]."</td>";
    echo "</tr>";
  }
} else {
  echo "0 results";
}








mysqli_close($conn);
    ?>
    </table>
</body>

</html>