<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatibel" content="IE=edge">
    <title>Hamster Store - Contact</title>
    <meta name="description" content="">
    <style> <?php include 'CSS/style.css'; include 'CSS/responsive.css'; ?> </style>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>   
</head>
<body>

    <!---NavBar-->
    <?php include 'includes/navbar.php'; ?>
    <!---End of NavBar-->

    <main>

        <!---Contact Form-->
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
        <!---End of Contact Form-->

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

    <!---Footer-->
    <?php include 'includes/footer.php'; ?>
    <!---End of Footer-->
    
</body>
</html>