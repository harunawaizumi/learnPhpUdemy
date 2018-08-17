<?php

session_start();
if (isset($_SESSION['count'])) {
    $_SESSION['count']++;
    echo "You have visited this page " . $_SESSION['count'] . "times.";
} else {
    $_SESSION['count'] = 1;
    echo "This is the first page";
}
