<!DOCTYPE html>
<html>
<head>
    <title>Test Page</title>
</head>
<body>

<form action="Palindromes.php" method="post" target="_blank">
    <input type="text" name="str" title="str">
    <br />
    <input type="submit" name="submit">
</form>

</body>
</html>
<?php

if (isset($_POST['str'])) {
    $str = $_POST['str'];
    $str = strrev($str);
    $reverse = strrev($str);
    $result = "valid";
    if($str != $reverse) {
        $result = 'invalid';
    }
    echo $result;
}
