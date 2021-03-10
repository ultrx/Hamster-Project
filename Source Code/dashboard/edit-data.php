<?php
session_start();
$_SESSION;
require '../config/dbconnect.php';
require '../config/functions.php';
$user_data = check_login($con);


$sql ="UPDATE FROM users SET user_id ='" . $_GET['user_id'] . "', admin ='" . $_GET['admin'] . "', user_name ='" . $_GET['user_name'] . "' , password ='" . $_GET['password'] . "' ";
if(mysqli_query($con, $sql)){
    header("Location:manage-users.php");

}



?>