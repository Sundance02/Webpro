<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab9.2</title>
    <style>
        label {
            font-size: 20px;
        }

        .cen {
            margin-left: 40%;
        }
    </style>
    <link href="http://10.0.15.21/lab/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://10.0.15.21/lab/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <div class='cen'>
        <h1>Course Detail</h1>
        <form action="2.php" method="get">
            <label for="">ID:</label>
            <input type="text" name="id"><br><br>
            <label for="">Title:</label>
            <input type="text" name="title"><br><br>
            <label for="">Dept. Name:</label>
            <input type="text" name="dept"><br><br>
            <label for="" name="credit">Credits:</label>
            <input type="text" name="credit"><br><br>
            <button name='Update'>Update</button> <button name='Delete'>Delete</button>
        </form>
        <br><br>
        <table>
            <tr>
                <th>Course ID</th>
                <th>Title</th>
                <th>Dept. Name</th>
                <th>Credits</th>
            </tr>
            <?php
            $servername = "localhost";
            $username = "S233H";
            $password = "LI46536";
            $dbname = "S233H";
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * from course";
            $result = mysqli_query($conn, $sql);
            $num = 0;
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td><a href='choose.php?cid=" . $row['course_id'] . "'>" . $row['course_id'] . "</a></td>";
                    echo "<td>" . $row['title'] . "</td>";
                    echo "<td>" . $row['dept_name'] . "</td>";
                    echo "<td>" . $row['credit'] . "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </div>
</body>

</html>