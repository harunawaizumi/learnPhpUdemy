<?php

session_start();

echo "Name: ";

if(isset($_SESSION['name'])) {
    echo $_SESSION['name'];
}

echo "<br>";

echo "AGE: ";

if(isset($_SESSION['age'])) {
    echo $_SESSION['age'];
}

session_destroy();