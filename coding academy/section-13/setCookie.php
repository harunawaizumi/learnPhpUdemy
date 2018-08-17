<?php

setcookie('name', 'haruna');

if(isset($_COOKIE['fruit'])) {
    echo $_COOKIE['fruit'];
}

setcookie('fruit', NULL, time()-3600);