<?php

function calculate($num1, $num2) {
    $add =$num1 + $num2;
    $subtract = $num1 - $num2;
    return array($add, $subtract);
}

print_r( calculate(3, 5));