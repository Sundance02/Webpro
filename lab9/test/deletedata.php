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
    
    $c_id = $_GET['CourseID'];
    // echo "$c_id";

    $sql = "DELETE FROM Course Where course_id = '$c_id'";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
?>