<!DOCTYPE html>
<html>
<head>
    <title>Test Page</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

<form action="rock-paper-scissors.php" method="post" target="_blank">
    <select title="game" name="game">
        <option value="0">Rock</option>
        <option value="1">Paper</option>
        <option value="2">Scissor</option>
    </select>
    <br />
    <br />
    <input type="submit" name="submit">
    <br />
    <br />
</form>


</body>
</html>
<?php
# create input
$player = 0;
$computer = 0;
$draw = 0;
if(isset($_POST['submit'])) {
    $pKey = $_POST['game'];
    $input = array("rock", "paper", "scissor");
    $cKey = array_rand($input, 1);
    $result = "";
    if ($pKey == $cKey) {
        $draw++;
        $result = "It's draw!";
    } elseif (($pKey == 0 && $cKey == 1)|($pKey == 1 && $cKey == 2)|($pKey == 2 && $cKey == 0)) {
        $player++;
        $result = "Player wins!";
    } else {
        $computer++;
        $result = "Computer wins!";
    }
    echo "Player: " . $pKey;
    echo "<br/>";
    echo "Computer: " . $cKey;
    echo "<br/>";
    echo "Draw: " . $draw;
    echo "<br/>";
    echo $result;
}

