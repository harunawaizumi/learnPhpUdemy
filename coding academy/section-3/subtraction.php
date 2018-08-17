<?php


date_default_timezone_set('Australia/Brisbane');

$christmasDay = strtotime('December 25');

$time = time();

$days = ceil(($christmasDay - $time)/60/60/24);

echo $days;