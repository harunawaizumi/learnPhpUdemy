<!DOCTYPE html>
<html lang="en">
<head>
    <title>Credit Card Validator Form</title>
</head>
<body>
<form action="go-shopping.php" method="POST">
    <input type="text" name="cc" title="cc">
    <input type="submit" name="submit">
</form>
</body>
</html>
<?php

if (isset($_POST['submit'])) {
    $cc = $_POST['cc'];
    $cc = str_split($cc);
    $reverse = array_reverse($cc);
    $i = 1;
    $total = 0;
    foreach($reverse as $digit) {
        if ($i % 2 == 0) {
            $digit *= 2;
            if ($digit > 9) {
                $digit -= 9;
            }
        }
        $total += $digit;
        $i++;
    }

    if ($total % 10 == 0) {
        echo "valid";
    } else {
        echo "invalid";
    }
}