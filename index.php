<?php
    session_start();
    $connection = mysqli_connect("localhost", "root", "secret", "Students");
    if (!$connection) {
        echo "Failed to connect." . mysqli_connect_error();
        exit();
    }
    ?>