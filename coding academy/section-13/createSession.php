<?php

session_start();

$_SESSION['name'] = 'John';
$_SESSION['age'] = '50';
echo $_SESSION['name'];
echo $_SESSION['age'];

