<?php
session_start();
$_SESSION;
require '../config/dbconnect.php';
require '../config/functions.php';
$user_data = check_login($con);

// update
if(isset($_GET['edit'])){
    $user_id = $_GET['user_id'];
    $result_users = $mysqli->query("SELECT * FROM users WHERE user_id=$user_id");
    if(count($result)==1){
        $row = $result->fetch_array();
        $user_name = $row['user_name'];
        $email = $row['email'];
        $password = $row['password'];
        $admin = $row['admin'];
    }
}
