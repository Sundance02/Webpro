<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


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










//b



// --- Create connection
// --- SQL SELECT statement  


// $sql = "SELECT * FROM course;";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//   // output data of each row
//   while($row = mysqli_fetch_assoc($result)) {
//     echo " " . $row["course_id"]. " " . $row["title"]. 
//     " " . $row["dept_name"] . " " . $row["credit"] . "<br>";
//   }
// } else {
//   echo "0 results";
// }




//c

$sql = "SELECT course.course_id, course.title, course.dept_name, section.year, section.semester, section.building FROM course Join section using (course_id)";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo " " . $row["course_id"]. " " . $row["title"]. 
    " " . $row["dept_name"] . " " . $row["year"] . "<br>";
  }
} else {
  echo "0 results";
}














// ---- close connection
mysqli_close($conn);
?>


</body>
</html>
