<?php 
session_start();
    $_SESSION;
    require 'config/dbconnect.php';
    $query = "SELECT * from homeproducts";
    $result = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatibel" content="IE=edge">
    <title>Hamster Store</title>
    <meta name="description" content="">
    <style> <?php include 'CSS/style.css'; include 'CSS/responsive.css'; ?> </style>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>   
</head>
<body>

    <!---NavBar-->
    <?php include 'includes/navbar.php'; ?>
    <!---End of NavBar-->

    <main>

        <!--Slider-->
        <div class="slider">
            <div class="myslider fade" style="display: block;">
                <div class="txt">
                    <h1>DESIGN</h1>
                </div>
                <img src="images/slide1.png" style="width: 100%; height: 100%;">
            </div>
            <div class="myslider fade">
                <div class="txt">
                    <h1>COMPATIBILITY</h1>
                </div>
                <img src="images/slide2.jpg" style="width: 100%; height: 100%;">
            </div>
            <div class="myslider fade">
                <div class="txt">
                    <h1>QUALITY</h1>
                </div>
                <img src="images/slide3.jpg" style="width: 100%; height: 100%;">
            </div>
            <div class="myslider fade">
                <div class="txt">
                    <h1>ERGONOMIC</h1>
                </div>
                <img src="images/slide4.png" style="width: 100%; height: 100%;">
            </div>
            <div class="myslider fade">
                <div class="txt">
                    <h1>COLORFUL</h1>
                </div>
                <img src="images/slide5.jpg" style="width: 100%; height: 100%;">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <div class="dotsbox" style="text-align: center;">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
            </div>

        </div>

    <!--Products-->
    <div class = "products">
        <div class = "products-container">
            <h1 class = "lg-title">Our Products</h1>
            <p class = "text-light">We offer you the best parts for Gaming</p>
            <div class = "home-product-items">
            <?php foreach($result as $product): ?>

                <!-- Single Product -->
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                                <a href="products.php"><img src = "images/<?php echo $product['image']; ?>" alt = "product image"></a>
                        </div>
                    </div>
                    <div class = "product-info">
                        <div class = "product-info-top">
                        </div>
                            <a href = "products.php" class = "product-name"><?php echo $product['name']; ?></a>
                    </div>
                </div>
                <!--End of Single Product -->
                    
            <?php endforeach; ?>
        </div>
    </div>
    <!--End of Products-->

    <script type="text/javascript">
        const myslide = document.querySelectorAll('.myslider');
            dot = document.querySelectorAll('.dot');

        let counter = 1;
        slidefun(counter);

        let timer = setInterval(autoslide, 5000);
        function autoslide() { 
            counter += 1;
            slidefun(counter);
        }
        function plusSlides(n){
            counter += n;
            slidefun(counter);
            resetTimer();
        }
        function currentSlide(n) {
            counter = n;
            slidefun(counter);
            resetTimer();
        }
        function resetTimer() {
            clearInterval(timer);
            timer = setInterval(autoslide, 5000);
        }

        function slidefun(n) {
            let i;
            for(i = 0; i<myslide.length; i++){
                myslide[i].style.display = "none";
            }
            for(i=0;i<dot.length; i++){
                dot[i].classList.remove('active');
            }
            if(n > myslide.length){
                counter = 1;
            }
            if(n < 1){
                counter = myslide.length;
            }
            myslide[counter - 1].style.display = "block";
            dot[counter - 1].classList.add('active');
        }
    </script>
    </main>

    <!---Footer-->
    <?php include 'includes/footer.php'; ?>
    <!---End of Footer-->
    
</body>
</html> 