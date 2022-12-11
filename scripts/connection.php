<?php
    $hostName = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'db1';

    $conn = mysqli_connect($hostName, $dbUsername, $dbPassword, $dbName);
    if(!$conn) {
        die('Konekcija neuspesna!!! Greska: '.mysqli_connect_errno());
    }
?>