<?php
    $host = '127.0.0.1';
    $user = 'root';
    $password = 'root';
    $db = 'wnba';

    $connect = mysqli_connect($host, $user, $password, $db);

    if (!$connect) {
        echo 'Error Code: ' . mysqli_connect_errno();
        echo '<br>Error Message: ' . mysqli_connect_error();
        exit();
    } 
