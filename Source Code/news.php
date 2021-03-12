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
    <title>Hamster Store - Products</title>
    <meta name="description" content="">
    <style> <?php include 'CSS/style.css'; include 'CSS/responsive.css'; ?> </style>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> 
</head>
<body>

    <!---NavBar-->
    <?php  $page = 'products'; include 'includes/navbar.php'; ?>
    <!---End of NavBar-->

    <main>

        <!--Product Section Mouses-->
        <div class = "products">
            <div class = "products-container">
                <div class = "product-items">
                <?php foreach($result_news as $news): ?>
                <!-- Single Product -->
                 <div class="property-card">
                            <a href="#">
                            <div class="property-image">
                            <img class="property-image" src= "images/<?php echo $news['image']; ?>" alt="new image">
                                <div class="property-image-title">
                                <!-- Optional <h5>Card Title</h5> If you want it, turn on the CSS also. -->
                                </div>
                            </div></a>
                        <div class="property-description">
                            <div class ="endnews">
                                <p>Author:<?php echo $news['posted_by']; ?></p>
                                <p>Date:<?php echo $news['date']; ?></p>
                                </div>
                                <div class="news">
                                    <h3> <?php echo $news['title']; ?> </h3>
                                    <br>
                                    <p><?php echo $news['text']; ?></p>
                                </div>
                            </div>
                        </div>
                      
                    <!--End of Single Product -->
                    <?php endforeach; ?>
    

                </div>
            </div>
        </div>
        <!--End of Product Section-->

        

    </main>

    <!---Footer-->
    <?php include 'includes/footer.php'; ?>
    <!---End of Footer-->
    
</body>
</html> 