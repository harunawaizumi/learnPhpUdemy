<!DOCTYPE html>
<html>
<head>
    <title>Test Page</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

<form action="matrix.php" method="post" target="_blank">
    <input type="text" name="num" title="num">
    <br />
    <br />
    <input type="submit" name="submit">
    <br />
    <br />
</form>


</body>
</html>
<?php

if(isset($_POST['num'])) {
    $num = $_POST['num'];
    $column = 1;
    echo "<table>";
    while($column <= $num * 2) {
        echo "</tr>";
        if ($column % 2 == 0) {
            $row = 1;
            while($row <= $num) {
                echo "<td class='black'></td>";
                echo "<td></td>";
                $row++;
            }
        } else {
            $row = 1;
            while($row <= $num) {
                echo "<td></td>";
                echo "<td class='black'></td>";
                $row++;
            }
        }
        echo "</tr>";
        $column++;
    }

    echo "</table>";
}
