<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatibel" content="IE=edge">
    <title>Hamster Store</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="CSS/style.css">  
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>   
</head>
<body>
    <!---NavBar-->
    <nav class="navbar">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">
            <a href="home.php">
                <img class="logo" src="images/bardh.png" />
            </a>
        </label>
        <ul>
            <li><a id="linav" class="activenav" href="index.php">HOME</a></li>
            <li><a id="linav" href="products.php">PRODUCTS</a></li>
            <li><a id="linav" href="contact.php">CONTACT</a></li>
            <li><a id="linav" href="about.php">ABOUT</a></li>
            <li><a id="linav" href="login-form.php">LOG IN</a></li>
        </ul>
    </nav>
    <main>
        <!--Slideshow-->
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
        <div class = "product-items">

           <!-- single product -->
           <div class = "product">
            <div class = "product-content">
                <div class = "product-img">
                    <a href="products.html"><img src = "images/mouse3.png" alt = "product image"></a>
                </div>
            </div>
               <div class = "product-info">
                <div class = "product-info-top">
                </div>
                <a href = "products.html" class = "product-name">Mouses</a>
            </div>
        </div>

            <!-- single product -->
            <div class = "product">
                <div class = "product-content">
                    <div class = "product-img">
                        <a href="products.html"><img src = "images/keyboard1.png" alt = "product image"></a>
                    </div>
                </div>
                <div class = "product-info">
                    <div class = "product-info-top">
                    </div>
                    <a href = "products.html" class = "product-name">Keyboards</a>
                </div>
            </div>

            <!-- single product -->
            <div class = "product">
                <div class = "product-content">
                    <div class = "product-img">
                        <a href="products.html"><img src = "images/heatset3.png" alt = "product image"></a>
                    </div>
                </div>
                <div class = "product-info">
                    <div class = "product-info-top">
                    </div>
                    <a href ="products.html" class = "product-name">HeadSet</a>
                </div>
            </div>
        </div>
    </div>

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
    <footer class="footer">
        <div class="footer-left">
            <img class="footer-logo" src="images/bardh.png" >
            <div class="footer-links">
                <a href="home.html">HOME</a></li>
                <a href="products.html">PRODUCTS</a></li>   
                <a href="contact.html">CONTACT</a></li>    
            </div>
            <p class="footer-company">
                Hamster Store @ 2020
            </p>
        </div>
        <div class="footer-center">
            <div>
                <img class="footer-logos" src="images/loc.png">
                <p> Prishtine</p> 
            </div>
            <div>
                <img class="footer-logos" src="images/tel.png">
                <p>+383 38 541 400</p> 
            </div>
            <div>
                <img class="footer-logos" src="images/em.png">
                <p>support@hamster.com</p> 
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About Us</span>
                We are the Best Online Store!
            </p>
            <div class="footer-social">
                <a href="https://www.facebook.com" target="_blank"><img class="socials-logo" src="images/fb.png"></a>
                <a href="https://www.twitter.com" target="_blank"><img class="socials-logo" src="images/tw.png"></a>
                <a href="https://www.google.com" target="_blank"><img class="socials-logo" src="images/gp.png"></a>
            </div> 
        </div>
    </footer>  
</body>
</html> 