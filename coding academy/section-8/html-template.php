<!DOCTYPE html>
<html>
    <head>
        <title>Test Page</title>
    </head>
    <body>
        
        <form action="html-template.php" method="post" target="_self">
            <input type="text" name="message" title="message">
            <br />
            <input type="submit" name="submit">
        </form>
    
    </body>
</html>

<?php

$temperatures = [32.3, 31.3, 28.2, 29.3, 29.7, 29.9, 28.7, 28.4, 30.5, 30.5, 31.7, 30.6, 29.4, 32.0,
    36.2, 31.3, 32.8, 33.3, 32.9, 28.8, 30.8, 28.0, 25.9, 30.8, 32.4, 32.0, 31.3, 25.2,
    29.1, 28.6, 30.6];

$result = array();
$total = array_sum($temperatures);
$count = count($temperatures);
$average = $total / $count;

echo "The average daily temperature is " . round($average, 1);

sort($temperatures);

$lowest = array_slice($temperatures, 0, 5);
$lowest = implode(", ", $lowest);

$highest = array_slice($temperatures, -5, 5);
$highest = implode(", ", $highest);

echo "The 5 lowest temperatures are: " . $lowest;
echo "<br>";
echo "THe 5 highest temperatures are: " . $highest;




