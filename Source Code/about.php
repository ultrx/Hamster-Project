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
    <?php include 'includes/navbar.php'; ?>
    <!---End of NavBar-->

    <main>

        <!---About Us-->
        <div class="about-section">
            <div class="inner-container">
                <h1>ABOUT US</h1>
                <p class="text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus velit ducimus, enim inventore earum, eligendi nostrum pariatur necessitatibus eius dicta a voluptates sit deleniti autem error eos totam nisi neque voluptates sit deleniti autem error eos totam nisi neque.
                </p>
                <div class="hamster-provides">
                    <span>Quality Products</span>
                    <span>Great Warranty</span>    
                    <span>Customer Services</span>
                </div>
            </div>
        </div>
        <!---End of About Us-->

    </main>

    <!---Footer-->
    <?php include 'includes/footer.php'; ?>
    <!---End of Footer-->

</body>
</html> 