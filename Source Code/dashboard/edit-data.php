<?php
session_start();
$_SESSION;
require '../config/dbconnect.php';
require '../config/functions.php';
$user_data = check_login($con);

// update
if(isset($_POST['update'])){
    $user_name = mysql_real_escape_string($_POST['user_name']);
    $email = mysql_escape_string($_POST['email']);
    $admin = mysql_escape_string($_POST['admin']);
    $user_id = mysql_escape_string($_POST['user_id']);

    mysqli_query($con, "UPDATE info  SET  user_name = '$user_name', email='$email', 'admin='$emadminail' WHERE user_id=$user_id");
    header('location: crud.php');
}
