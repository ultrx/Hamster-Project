<?php 
session_start();
    $_SESSION;
    require 'config/dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatibel" content="IE=edge">
    <title>Hamster Store - News</title>
    <meta name="description" content="">
    <style> <?php include 'CSS/style.css'; include 'CSS/responsive.css'; ?> </style>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>   
</head>
<body>

    <!---NavBar-->
    <?php  $page = 'news'; include 'includes/navbar.php'; ?>
    <!---End of NavBar-->

    <main>
  
    </main>

    <!---Footer-->
    <?php  $page = 'news'; include 'includes/footer.php'; ?>
    <!---End of Footer-->
    
</body>
</html>