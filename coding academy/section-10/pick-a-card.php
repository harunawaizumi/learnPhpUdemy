<?php

$suits = ["Clubs", "Diamonds", "Hearts", "Spades"];
$nums = ["Ace", 2, 3, 4, 5, 6, 7, 8, 9, 10, "Jack", "Queen", "King"];

echo $suits[array_rand($suits)] . " of " . $nums[array_rand($nums)];