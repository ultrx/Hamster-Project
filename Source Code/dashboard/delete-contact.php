<?php
ob_start();
session_start();
$_SESSION;
require '../config/dbconnect.php';
require '../config/functions.php';
$user_data = check_login($con);

$sql ="DELETE FROM contacts WHERE id ='" . $_GET['id'] . "'";
if(mysqli_query($con, $sql)){
    header("Location:manage-contact.php");

}

?>