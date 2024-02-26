<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
    <style>
        table,
        td,
        th {
            border-collapse: collapse;
            border: 1px solid;
        }

        h1 {
            text-align: center;
        }
    </style>
    <link href="http://10.0.15.21/lab/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://10.0.15.21/lab/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    $month = $_POST['se_month'];
    if ($month == 'January') {
        echo '<h1>' . 'January' . '</h1>';
    } else if ($month == 'February') {
        echo '<h1>' . 'February' . '</h1>';
    } else if ($month == 'March') {
        echo '<h1>' . 'March' . '</h1>';
    } else if ($month == 'April') {
        echo '<h1>' . 'April' . '</h1>';
    } else if ($month == 'May') {
        echo '<h1>' . 'May' . '</h1>';
    } else if ($month == 'June') {
        echo '<h1>' . 'June' . '</h1>';
    } else if ($month == 'July') {
        echo '<h1>' . 'July' . '</h1>';
    } else if ($month == 'August') {
        echo '<h1>' . 'August' . '</h1>';
    } else if ($month == 'September') {
        echo '<h1>' . 'September' . '</h1>';
    } else if ($month == 'October') {
        echo '<h1>' . 'October' . '</h1>';
    } else if ($month == 'November') {
        echo '<h1>' . 'November' . '</h1>';
    } else if ($month == 'December') {
        echo '<h1>' . 'December' . '</h1>';
    }
    ?>

    <table class="table table-striped">
        <tr>
            <th>Su</th>
            <th>Mo</th>
            <th>Tu</th>
            <th>We</th>
            <th>Th</th>
            <th>Fr</th>
            <th>Sa</th>
        </tr>

        <?php


        if ($month == 'January') {
            echo '<tr>';
            echo '<td>' . ' ' . '</td>';
            echo '<td>' . '1' . '</td>';
            echo '<td>' . '2' . '</td>';
            echo '<td>' . '3' . '</td>';
            echo '<td>' . '4' . '</td>';
            echo '<td>' . '5' . '</td>';
            echo '<td>' . '6' . '</td>';
            echo '</tr>';

            $count = 0;
            for ($i = 7; $i <= 31; $i++) {
                if ($count == 0) {
                    echo '<tr>';
                }
                if ($count == 7) {
                    echo '</tr>';
                    $count = 0;
                }

                echo '<td>' . $i . '</td>';


                $count++;
            }
        } else if ($month == 'February') {
            echo '<tr>';
            echo '<td>' . ' ' . '</td>';
            echo '<td>' . ' ' . '</td>';
            echo '<td>' . ' ' . '</td>';
            echo '<td>' . ' ' . '</td>';
            echo '<td>' . '1' . '</td>';
            echo '<td>' . '2' . '</td>';
            echo '<td>' . '3' . '</td>';
            echo '</tr>';

            $count = 0;
            for ($i = 4; $i <= 29; $i++) {
                if ($count == 0) {
                    echo '<tr>';
                }
                if ($count == 7) {
                    echo '</tr>';
                    $count = 0;
                }

                echo '<td>' . $i . '</td>';


                $count++;
            }
        } else if ($month == 'March') {
            echo '<tr>';
            echo '<td>' . ' ' . '</td>';
            echo '<td>' . ' ' . '</td>';
            echo '<td>' . ' ' . '</td>';
            echo '<td>' . ' ' . '</td>';
            echo '<td>' . '' . '</td>';
            echo '<td>' . '1' . '</td>';
            echo '<td>' . '2' . '</td>';
            echo '</tr>';

            $count = 0;
            for ($i = 3; $i <= 31; $i++) {
                if ($count == 0) {
                    echo '<tr>';
                }
                if ($count == 7) {
                    echo '</tr>';
                    $count = 0;
                }

                echo '<td>' . $i . '</td>';


                $count++;
            }
        } else if ($month == 'April') {
            echo '<tr>';
            echo '<td>' . ' ' . '</td>';
            echo '<td>' . '1' . '</td>';
            echo '<td>' . '2' . '</td>';
            echo '<td>' . '3' . '</td>';
            echo '<td>' . '4' . '</td>';
            echo '<td>' . '5' . '</td>';
            echo '<td>' . '6' . '</td>';
            echo '</tr>';

            $count = 0;
            for ($i = 7; $i <= 30; $i++) {
                if ($count == 0) {
                    echo '<tr>';
                }
                if ($count == 7) {
                    echo '</tr>';
                    $count = 0;
                }

                echo '<td>' . $i . '</td>';


                $count++;
            }
        } else if ($month == 'May') {
            echo '<tr>';
            echo '<td>' . ' ' . '</td>';
            echo '<td>' . ' ' . '</td>';
            echo '<td>' . ' ' . '</td>';
            echo '<td>' . '1' . '</td>';
            echo '<td>' . '2' . '</td>';
            echo '<td>' . '3' . '</td>';
            echo '<td>' . '4' . '</td>';
            echo '</tr>';

            $count = 0;
            for ($i = 5; $i <= 31; $i++) {
                if ($count == 0) {
                    echo '<tr>';
                }
                if ($count == 7) {
                    echo '</tr>';
                    $count = 0;
                }

                echo '<td>' . $i . '</td>';


                $count++;
            }
        } else if ($month == 'June') {
            echo '<tr>';
            echo '<td>' . ' ' . '</td>';
            echo '<td>' . ' ' . '</td>';
            echo '<td>' . ' ' . '</td>';
            echo '<td>' . '' . '</td>';
            echo '<td>' . '' . '</td>';
            echo '<td>' . '' . '</td>';
            echo '<td>' . '1' . '</td>';
            echo '</tr>';

            $count = 0;
            for ($i = 2; $i <= 30; $i++) {
                if ($count == 0) {
                    echo '<tr>';
                }
                if ($count == 7) {
                    echo '</tr>';
                    $count = 0;
                }

                echo '<td>' . $i . '</td>';


                $count++;
            }
        } else if ($month == 'July') {
            echo '<tr>';
            echo '<td>' . ' ' . '</td>';
            echo '<td>' . '1' . '</td>';
            echo '<td>' . '2' . '</td>';
            echo '<td>' . '3' . '</td>';
            echo '<td>' . '4' . '</td>';
            echo '<td>' . '5' . '</td>';
            echo '<td>' . '6' . '</td>';
            echo '</tr>';

            $count = 0;
            for ($i = 7; $i <= 31; $i++) {
                if ($count == 0) {
                    echo '<tr>';
                }
                if ($count == 7) {
                    echo '</tr>';
                    $count = 0;
                }

                echo '<td>' . $i . '</td>';


                $count++;
            }
        } else if ($month == 'August') {
            echo '<tr>';
            echo '<td>' . '' . '</td>';
            echo '<td>' . '' . '</td>';
            echo '<td>' . '' . '</td>';
            echo '<td>' . '' . '</td>';
            echo '<td>' . '1' . '</td>';
            echo '<td>' . '2' . '</td>';
            echo '<td>' . '3' . '</td>';
            echo '</tr>';

            $count = 0;
            for ($i = 4; $i <= 31; $i++) {
                if ($count == 0) {
                    echo '<tr>';
                }
                if ($count == 7) {
                    echo '</tr>';
                    $count = 0;
                }

                echo '<td>' . $i . '</td>';


                $count++;
            }
        } else if ($month == 'September') {
            echo '<tr>';
            echo '<td>' . '1' . '</td>';
            echo '<td>' . '2' . '</td>';
            echo '<td>' . '3' . '</td>';
            echo '<td>' . '4' . '</td>';
            echo '<td>' . '5' . '</td>';
            echo '<td>' . '6' . '</td>';
            echo '<td>' . '7' . '</td>';
            echo '</tr>';

            $count = 0;
            for ($i = 8; $i <= 30; $i++) {
                if ($count == 0) {
                    echo '<tr>';
                }
                if ($count == 7) {
                    echo '</tr>';
                    $count = 0;
                }

                echo '<td>' . $i . '</td>';


                $count++;
            }
        } else if ($month == 'October') {
            echo '<tr>';
            echo '<td>' . '' . '</td>';
            echo '<td>' . '' . '</td>';
            echo '<td>' . '1' . '</td>';
            echo '<td>' . '2' . '</td>';
            echo '<td>' . '3' . '</td>';
            echo '<td>' . '4' . '</td>';
            echo '<td>' . '5' . '</td>';
            echo '</tr>';

            $count = 0;
            for ($i = 6; $i <= 31; $i++) {
                if ($count == 0) {
                    echo '<tr>';
                }
                if ($count == 7) {
                    echo '</tr>';
                    $count = 0;
                }

                echo '<td>' . $i . '</td>';


                $count++;
            }
        } else if ($month == 'November') {
            echo '<tr>';
            echo '<td>' . '' . '</td>';
            echo '<td>' . '' . '</td>';
            echo '<td>' . '' . '</td>';
            echo '<td>' . '' . '</td>';
            echo '<td>' . '' . '</td>';
            echo '<td>' . '1' . '</td>';
            echo '<td>' . '2' . '</td>';
            echo '</tr>';

            $count = 0;
            for ($i = 3; $i <= 30; $i++) {
                if ($count == 0) {
                    echo '<tr>';
                }
                if ($count == 7) {
                    echo '</tr>';
                    $count = 0;
                }

                echo '<td>' . $i . '</td>';


                $count++;
            }
        } else if ($month == 'December') {
            echo '<tr>';
            echo '<td>' . '1' . '</td>';
            echo '<td>' . '2' . '</td>';
            echo '<td>' . '3' . '</td>';
            echo '<td>' . '4' . '</td>';
            echo '<td>' . '5' . '</td>';
            echo '<td>' . '6' . '</td>';
            echo '<td>' . '7' . '</td>';
            echo '</tr>';

            $count = 0;
            for ($i = 8; $i <= 31; $i++) {
                if ($count == 0) {
                    echo '<tr>';
                }
                if ($count == 7) {
                    echo '</tr>';
                    $count = 0;
                }

                echo '<td>' . $i . '</td>';


                $count++;
            }
        }

        ?>
    </table>
    <form action="action.php" method="post">
        <select name="se_month" id="" style="margin-left: 45%;">
            <option name="months" value="January">January</option>
            <option name="months" value="February">February</option>
            <option name="months" value="March">March</option>
            <option name="months" value="April">April</option>
            <option name="months" value="May">May</option>
            <option name="months" value="June">June</option>
            <option name="months" value="July">July</option>
            <option name="months" value="August">August</option>
            <option name="months" value="September">September</option>
            <option name="months" value="October">October</option>
            <option name="months" value="November">November</option>
            <option name="months" value="December">December</option>
        </select>
        <input type="submit" name="submit">
    </form>
</body>

</html>