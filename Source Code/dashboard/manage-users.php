<?php 
session_start();
    $_SESSION;
    require '../config/dbconnect.php';
    require '../config/functions.php';
    $user_data = check_login($con);

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatibel" content="IE=edge">
    <title>Hamster Store - Manage Users</title>
    <meta name="description" content="">
    <style> <?php include '../CSS/style.css'; include '../CSS/responsive.css'; ?> </style>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>   
</head>
<body>

    <!---NavBar-->
    <?php  $page = 'manage-users'; include '../includes/admin-navbar.php'; ?>
    <!---End of NavBar-->

    <main>

    </main>

    <!---Footer-->
    <?php include '../includes/admin-footer.php'; ?>
    <!---End of Footer-->
    
</body>
</html>