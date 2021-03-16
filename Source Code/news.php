<?php 
session_start();
    $_SESSION;
require 'config/dbconnect.php';
$query = "SELECT * from news";
$result_news = mysqli_query($con,$query);
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

        <!--News Section -->
        <div class = "products">
            <div class = "products-container">
                <h1 class = "lg-title">GAMING NEWS</h1>
                <div class = "home-product-items">
                <?php foreach($result_news as $news): ?>
                <!-- Single News -->
                 <div class="property-card">
                            <a href="#">
                            <div class="property-image">
                            <img class="property-image" src= "images/<?php echo $news['image']; ?>" alt="new image">
                            </div></a>
                        <div class="property-description">
                            <div class ="endnews">
                                <p>Author: <?php echo $news['posted_by']; ?></p>
                                <p>Date: <?php echo $news['date']; ?></p>
                                </div>
                                <div class="news1">
                                    <h3 class="news-title"> <?php echo $news['title']; ?> </h3> 
                                    <br>
                                    <p><?php echo $news['text']; ?></p>
                                    
                                </div>
                            </div>
                        </div>
                      
                    <!--End of Single News -->
                    <?php endforeach; ?>
    

                </div>
            </div>
        </div>
        <!--End of News Section-->

    </main>
    
    <!---Scroll Top Button-->
    <?php include 'includes/scrolltop.php'; ?>
    <!---Scroll Top Button-->

    <!---Footer-->
    <?php include 'includes/footer.php'; ?>
    <!---End of Footer-->
    
</body>
</html> 