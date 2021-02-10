<?php
$dbhost = 'localhost';
$username = 'root';
$password = '';
$dbname = "hamster";

if(!$con = mysqli_connect($dbhost, $username, $password, $dbname)){

    die("Failed to connect with database");
}
?>