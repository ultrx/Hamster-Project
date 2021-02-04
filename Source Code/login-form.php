<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatibel" content="IE=edge">
    <title>Hamster Store - Log In</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="CSS/style.css">     
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>      
</head>
<body>
    <nav class="navbar">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">
            <a href="home.php">
                <img class="logo" src="images/bardh.png"/>
            </a>
        </label>
        <ul>
            <li><a id="linav" href="index.php">HOME</a></li>
            <li><a id="linav" href="products.php">PRODUCTS</a></li>
            <li><a id="linav" href="contact.php">CONTACT</a></li>
            <li><a id="linav" href="about.php">ABOUT</a></li>
            <li><a id="linav" class="activenav" href="login-form.php">LOG IN</a></li>
        </ul>
    </nav>
    <main>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button id="login-btn" type="button" class="toggle-btn" onclick="login()">Login</button>
                <button id="register-btn" type="button" class="toggle-btn" onclick="register()" style="margin-left: 5px;">Register</button>
            </div>
            <div class="social-icons">
                <a href="https://www.facebook.com" target="_blank"><img src="images/fb.png"></a>
                <a href="https://www.twitter.com" target="_blank"><img src="images/tw.png"></a>
                <a href="https://www.google.com" target="_blank"><img src="images/gp.png"></a>
            </div>
            <form id="login" name="myform" method="post" onsubmit="return validateform()" class="input-group"> 
                <input type="text" id="name" class="input-field" placeholder="Username" name="name" required>
                <input type="password" id="password" class="input-field" placeholder="Password" name="password" required>
                <button type="submit" class="submit-btn" style="color:white;" onclick="return validateform()">Log In</button>
            </form>
            <form id="register" name="myformRegister" method="post" onsubmit="return validateformRegister()" class="input-group">
                <input type="text" id="name" class="input-field" placeholder="Username" name="name" required>
                <input type="email" id="email" class="input-field" placeholder="Email" name="email" required>
                <input type="password" id="password" class="input-field" placeholder="Password" name="password" required>
                <button type="submit" class="submit-btn" style="color:white;" onclick="return validateformRegister()">Register</button>
            </form>
        </div>
    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");
        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }

        function validateform(){  
            var name=document.myform.name.value;  
            var password=document.myform.password.value;  
            if (name==null || name==""){  
                alert("Username can't be blank");  
                return false;  
            }
            if(password.length<6){  
                alert("Password must be at least 6 characters long.");  
                return false;  
            }  
        }  
        function validateformRegister(){  
            var name=document.myformRegister.name.value;  
            var email=document.myformRegister.email.value; 
            var password=document.myformRegister.password.value; 
            if(name==null || name==""){  
                alert("Username can't be blank");  
                return false;  
            }
            if(!(email.endsWith(".com") || email.includes("@"))){  
                alert("Please enter a valid e-mail address.");  
                return false;  
            }  
            if(password.length<6){  
                alert("Password must be at least 6 characters long.");  
                return false;  
            }  
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