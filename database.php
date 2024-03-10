<?php

$hostname = "localhost";
$dbuser = "root";
$dbPassword = "";
$dbname = "keith";
$conn = mysqli_connect($hostname, $dbuser, $dbPassword, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
