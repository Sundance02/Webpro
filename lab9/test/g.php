<?php
    $servername = "localhost";
    $username = "root"; // Replace with your actual username
    $password = ""; // Replace with your actual password
    $dbname = "test9";    // Replace with your actual database name

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);


    $c_id = $_GET['CourseID'];
    $c_title = $_GET['CourseTitle'];
    $c_dept = $_GET['DeptName'];
    $c_credits = $_GET['Credits'];
    echo "$c_id / $c_title / $c_dept / $c_credits " ;
    $sql = "UPDATE course 
            SET credit = '$c_credits'
            WHERE course_id = '$c_id'";
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);
?>  