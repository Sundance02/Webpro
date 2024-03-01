<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    unset($_SESSION["userid"]);
    unset($_SESSION["password"]);

    session_destroy();

    echo '<h2>You have cleaned session</h2>';
    header('Refresh: 2; URL = loginform.html');
    ?>
</body>
</html>