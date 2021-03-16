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
    <title>Hamster Store - About Us</title>
    <meta name="description" content="">
    <style> <?php include 'CSS/style.css'; include 'CSS/responsive.css'; ?> </style>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>       
</head>
<body>
    
    <!---NavBar-->
    <?php  $page = 'about';include 'includes/navbar.php'; ?>
    <!---End of NavBar-->
    <img src="images/aboutpic.jpg"/>
    <main>

        <!---About Us-->
        <div class="about-section" >
            <div class="inner-container">
                <h1>ABOUT US</h1>
                <p class="text">
                    Hamster™ is the world’s leading lifestyle brand for gamers.

                    The triple-headed snake trademark of Hamster is one of the most recognized logos in the global gaming and esports communities.

                    With a fan base that spans every continent, the company has designed and built the world’s largest gamer-focused ecosystem of hardware, software and services. </p>
                <div class="hamster-provides">
                    <a href="products.php"><span>Quality Products</span></a>
                    <a href="news.php"><span>Gaming News</span></a> 
                    <a href="contact.php"><span>Customer Services</span></a>
                </div>
            </div>
        </div>
        <!---End of About Us-->
    </main>
    
    <!---Scroll Top Button-->
    <?php include 'includes/scrolltop.php'; ?>
    <!---Scroll Top Button-->
    
    <!---Footer-->
    <?php include 'includes/footer.php'; ?>
    <!---End of Footer-->

</body>
</html> 