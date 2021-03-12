<?php 
session_start();
    $_SESSION;
    require 'config/dbconnect.php';
    require 'config/functions.php';
    $user_data = check_login($con);
    session_destroy();

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatibel" content="IE=edge">
    <title>Hamster Store - Contact</title>
    <meta name="description" content="">
    <style> <?php include 'CSS/style.css'; include 'CSS/responsive.css'; ?> </style>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>   
</head>
<body>

    <!---NavBar-->
    <?php  $page = 'redirect'; include 'includes/navbar.php'; ?>
    <!---End of NavBar-->

    <main>
    <div class = "redirect">
        <h1 class = "lg-title"> Welcome, <?php echo $user_data['user_name']; ?> </h1>
        <p class = "text-light">Our store will offer you the best choices when it comes to gaming products. 
                                <br>Our products have the best quality, design & durability!
                                <br> Thanks for believing in us! :)</p>
    </div>
    </main>

    <!---Footer-->
    <?php include 'includes/footer.php'; ?>
    <!---End of Footer-->
    
</body>
</html>