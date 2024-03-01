<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

    <?php
    // display Session ID
    echo "Session ID : "  . session_id()."<br>";
    // Set session variables
    $_SESSION["scolor"] = "Green";
    $_SESSION["sanimal"] = "Cat";
    echo "Session variables are set.";

    echo "Data from session. <br>";
    echo $_SESSION["scolor"]  . "<br>";
    echo $_SESSION["sanimal"] . "<br>";

    ?>

</body>
</html>
