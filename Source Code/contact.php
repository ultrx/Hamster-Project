<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatibel" content="IE=edge">
    <title>Hamster Store - Contact</title>
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
                <img class="logo" src="images/bardh.png" />
            </a>
        </label>
        <ul>
            <li><a id="linav" href="index.php">HOME</a></li>
            <li><a id="linav" href="products.php">PRODUCTS</a></li>
            <li><a id="linav" class="activenav" href="contact.php">CONTACT</a></li>
            <li><a id="linav" href="about.php">ABOUT</a></li>
            <li><a id="linav" href="login-form.php">LOG IN</a></li>
        </ul>
    </nav>
    <main>
        <div class="contact-container">
            <form id="myform" name="validation"  onsubmit="return validationonSubmit()" >
              <label for="fname">First Name</label>
              <input type="text" id="fname" name="firstname" placeholder="First name" required>
          
              <label for="lname">Last Name</label>
              <input type="text" id="lname" name="lastname" placeholder="Last name"required >
          
              <label for="lname">E-mail</label>
              <input type="text" id="email" name="email" placeholder="Email" required>
          
              <label for="subject">Subject</label>
              <textarea id="subject" name="subject" placeholder="Write something..." style="height:200px" required></textarea>
          
              <a href="home.html"><input type="submit" value="Submit" onclick="return validationonSubmit()"> </a>
            </form>
        </div>
          <script>
              function validationonSubmit(){  
            var firstname=document.validation.firstname.value;  
            var lastname=document.validation.lastname.value; 
            var email=document.validation.email.value; 
            var subject=document.validation.subject.value;  
            if(firstname==null || firstname==""){  
                alert("Name can't be blank");  
                return false;  
            }
            if(lastname==null || lastname==""){
                alert("Lastname can't be blank");
                return false;
            }
            if(!(email.endsWith(".com") || email.includes("@"))){  
                alert("Please enter a valid e-mail address.");  
                return false;  
            } 
            if(subject==null || subject==""){
                alert("Please add a subject");
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