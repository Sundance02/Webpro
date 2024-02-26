<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="http://10.0.15.21/lab/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://10.0.15.21/lab/bootstrap/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: "Merriweather", serif;
        }
    </style>
    <style>
        .myq{
            margin-top: 2%;
            margin-left: 40%;
        }
    </style>
</head>
<body>
    <div class="myq">
    <?php
        session_start();
        echo "<h1>"."You get ".$_SESSION['Point']." out of 10"."</h1>";
        session_destroy();

        header("refresh:3; url=index.php");
    ?>
    </div>
</body>
</html>