<?php
ob_start();
session_start();
$_SESSION;
require '../config/dbconnect.php';
require '../config/functions.php';
$user_data = check_login($con);

$sql ="DELETE FROM news WHERE news_id ='" . $_GET['news_id'] . "'";
if(mysqli_query($con, $sql)){
    header("Location:manage-news.php");

}

?>