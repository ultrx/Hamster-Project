<?php
$dbhost = 'localhost';
$username = 'root';
$password = '';
$dbname = "hamster";

 $con = new mysqli ($dbhost, $username, $password, $dbname);

if($con->connect_error){
    die("Lidhja deshtoi" . $con->connect_error);
}
?>