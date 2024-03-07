<?php
    $hostname = "localhost";
    $username = "root";
    $password = "admin";
    $dbname = "baru";

    $conn = mysqli_connect($hostname, $username, $password, $dbname) or die("gagal terhubung ke database");
?>