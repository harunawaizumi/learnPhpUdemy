<?php

$string = "John|Sam|Billy|Karen|Ben|Jane|Bob";

$newString = str_replace('|', ' , ', $string);

echo $newString;
echo "<br/>";

$shuffle = 'good morning';
$newShuffle = str_shuffle($shuffle);

echo $newShuffle;
echo "<br/>";

