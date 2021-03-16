<?php 
session_start();
    $_SESSION;
require 'config/dbconnect.php';
$query = "SELECT * from mouses";
$result_mouse = mysqli_query($con,$query);
$query = "SELECT * from keyboards";
$result_keyboard = mysqli_query($con,$query);
$query = "SELECT * from headsets";
$result_headset = mysqli_query($con,$query);
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
                <h1 class = "lg-title">GAMING MOUSES</h1>
                <p class = "text-light">As the brand that practically invented the gaming mouse category, we know a thing or two about what it takes to make a deadly-accurate, high-performance gaming mouse—and we’re constantly upping our game to raise yours. Whether you’re looking for a wired or wireless mouse, one specialized for FPS or MOBA, or a design suited for your mouse grip, our extensive arsenal of gaming mice has something for every gamer. The question is: which one will you choose?</p>
                <div class = "product-items">
                    <?php foreach($result_mouse as $product): ?>

                <!-- Single Product -->
                <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <a href="<?php echo $product['url']; ?>"target="_blank"><img src = "images/<?php echo $product['image']; ?>" alt = "product image"></a>
                            </div>
                            <div class = "product-btns">
                                <a href="<?php echo $product['url']; ?>"target="_blank"><button type = "button" class = "btn-buy">Buy Now </button></a>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                            </div>
                            <a href = "<?php echo $product['url']; ?>"target="_blank" class = "product-name"><?php echo $product['name']; ?></a>
                            <p class = "product-price">$<?php echo $product['price_before']; ?></p>
                            <p class = "product-price">$<?php echo $product['price_after']; ?></p>
                        </div>
                        <div class = "off-info">
                        </div>
                    </div>
                    <!--End of Single Product -->
                    
            <?php endforeach; ?>

                </div>
            </div>
        </div>
        <!--End of Product Section-->

        <!--Product Section Keyboards-->
        <div class = "products">
            <div class = "products-container">
                <h1 class = "lg-title">GAMING KEYBOARDS</h1>
                <p class = "text-light">From multi-award winning Razer™ Mechanical Switches designed specifically for gaming to a mecha-membrane hybrid, discover the gaming keyboard for you—equipped with speed, precision and your preferred typing experience.</p>
                <div class = "product-items">
                        
                 <?php foreach($result_keyboard as $product): ?>

                <!-- Single Product -->
                <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <a href="<?php echo $product['url']; ?>"target="_blank"><img src = "images/<?php echo $product['image']; ?>" alt = "product image"></a>
                            </div>
                            <div class = "product-btns">
                                <a href="<?php echo $product['url']; ?>"target="_blank"><button type = "button" class = "btn-buy">Buy Now</button></a>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                            </div>
                            <a href = "<?php echo $product['url']; ?>"target="_blank" class = "product-name"><?php echo $product['name']; ?></a>
                            <p class = "product-price">$<?php echo $product['price_before']; ?></p>
                            <p class = "product-price">$<?php echo $product['price_after']; ?></p>
                        </div>
                    </div>
                    <!--End of Single Product -->
                    
            <?php endforeach; ?>
            
                    </div>
            </div>
        </div>
        <!--End of Product Section-->

        <!--Product Section HeadSet-->
        <div class = "products">
            <div class = "products-container">
                <h1 class = "lg-title">GAMING HEADSETS</h1>
                <p class = "text-light">With our lethal line-up of advanced headsets and speakers, experience clear, powerful audio that builds incredible soundscapes for a new level of immersion, and gain the competitive edge with next-gen surround sound.</p>
                <div class = "product-items">
                <?php foreach($result_headset as $product): ?>

                <!-- Single Product -->
                <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <a href="<?php echo $product['url']; ?>"target="_blank"><img src = "images/<?php echo $product['image']; ?>" alt = "product image"></a>
                            </div>
                            <div class = "product-btns">
                                <a href="<?php echo $product['url']; ?>"target="_blank"><button type = "button" class = "btn-buy"> Buy Now </button></a>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                            </div>
                            <a href = "<?php echo $product['url']; ?>"target="_blank" class = "product-name"><?php echo $product['name']; ?></a>
                            <p class = "product-price">$<?php echo $product['price_before']; ?></p>
                            <p class = "product-price">$<?php echo $product['price_after']; ?></p>
                        </div>
                        <div class = "off-info">
                        </div>
                    </div>
                    <!--End of Single Product -->
                    
            <?php endforeach; ?>
                    </div>
            </div>
        </div>
        <!--End of Product Section-->

    </main>
    
    <!---Scroll Top Button-->
    <?php include 'includes/scrolltop.php'; ?>
    <!---Scroll Top Button-->

    <!---Footer-->
    <?php include 'includes/footer.php'; ?>
    <!---End of Footer-->
    
</body>
</html> 