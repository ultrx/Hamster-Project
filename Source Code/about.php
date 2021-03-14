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

    <main>

        <!---About Us-->
        <div class="about-section" >
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
    
        <!--What we offer-->
        <div class="news">
            <div class="container">
                <div class="card">
                    <div class="face face1">
                        <div class="content">
                            <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/design_128.png?raw=true">
                            <h3>Design</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="face face1">
                        <div class="content">
                            <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/code_128.png?raw=true">
                            <h3>Program</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="face face1">
                        <div class="content">
                            <img src="https://github.com/Jhonierpc/WebDevelopment/blob/master/CSS%20Card%20Hover%20Effects/img/launch_128.png?raw=true">
                            <h3>Launch</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cum cumque minus iste veritatis provident at.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of What we offer-->

    </main>

    <!---Footer-->
    <?php include 'includes/footer.php'; ?>
    <!---End of Footer-->

</body>
</html> 