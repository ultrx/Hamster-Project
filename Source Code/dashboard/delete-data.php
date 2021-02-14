<?php
session_start();
$_SESSION;
require '../config/dbconnect.php';
require '../config/functions.php';
$user_data = check_login($con);

$sql ="DELETE FROM mouses WHERE mouse_id ='" . $_GET['mouse_id'] . "'";
if(mysqli_query($con, $sql)){
    header("Location: http://localhost/Hamster/Hamster-Project-WEB-/Source%20Code/dashboard/manage-products.php");

}
$sql ="DELETE FROM keyboards WHERE keyboard_id ='" . $_GET['keyboard_id'] . "'";
    if(mysqli_query($con, $sql)){
    header("Location: http://localhost/Hamster/Hamster-Project-WEB-/Source%20Code/dashboard/manage-products.php");

}
$sql ="DELETE FROM headsets WHERE headset_id ='" . $_GET['headset_id'] . "'";
if(mysqli_query($con, $sql)){
    header("Location: http://localhost/Hamster/Hamster-Project-WEB-/Source%20Code/dashboard/manage-products.php");

}


?>