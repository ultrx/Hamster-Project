<?php
ob_start();
session_start();
$_SESSION;
require '../config/dbconnect.php';
require '../config/functions.php';
$user_data = check_login($con);

$sql ="DELETE FROM users WHERE user_id ='" . $_GET['user_id'] . "'";
if(mysqli_query($con, $sql)){
    header("Location:manage-users.php");

}


?>