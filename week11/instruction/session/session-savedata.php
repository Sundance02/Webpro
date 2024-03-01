<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // Start the session
    session_start();

        $c_id = $_GET['CourseID'];
        $c_title = $_GET['CourseTitle'];
        $c_dept = $_GET['DeptName'];
        $c_credits = $_GET['Credits'];

        $_SESSION["CourseID"] = $c_id;
        $_SESSION["CourseTitle"] = $c_title;
        $_SESSION["DeptName"] = $c_dept;
        $_SESSION["Credits"] = $c_credits;

        echo "Session variables are set to " . session_id();

    ?>
</body>
</html>