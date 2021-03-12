<?php 
    ob_start();
    session_start();
    $_SESSION;
    require 'config/dbconnect.php';
    require 'config/functions.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatibel" content="IE=edge">
    <title>Hamster Store - Log In</title>
    <meta name="description" content="">
    <style> <?php include 'CSS/style.css'; include 'CSS/responsive.css'; ?> </style>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>      
</head>
<body>

    <!---Alerts-->
    <?php include '../Source Code/includes/alerts.php'; ?>
    <!---End of Alerts--> 

    <!---NavBar-->
    <?php  $page = 'login'; include 'includes/navbar.php'; ?>
    <!---End of NavBar-->

    <main>

    <!---Form Box-->
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

            <!---Log In Form-->
            <form id="login" name="myform" method="POST" onsubmit="return validateform()" class="input-group"> 
                <input type="text" id="name" class="input-field" placeholder="Username" name="user_name" required>
                <input type="password" id="password" class="input-field" placeholder="Password" name="password" required>
                <br>
                <br>
                <input type="checkbox" onclick="showPassword()"><a style="color:white;font-size:15px;"> Show Password </a>
                <button type="submit" id="login" class="submit-btn" style="color:white;" onclick="return validateform()" name="login" value="login">Log In</button>
            </form>
            <!---End of Log In Form-->

            <!---Sign Up Form-->
            <form id="register" name="myformRegister" method="POST" onsubmit="return validateformRegister()" class="input-group">
                <input type="text" id="name" class="input-field" placeholder="Username" name="user_name" required>
                <input type="email" id="email" class="input-field" placeholder="Email" name="email" required>
                <input type="password" id="passwordReg" class="input-field" placeholder="Password" name="passwordReg" required>
                <br>
                <br>
                <input type="checkbox" onclick="showPasswordReg()"><a style="color:white;font-size:15px;"> Show Password </a>
                <button type="submit" id="register" class="submit-btn" style="color:white;" onclick="return validateformRegister()" name="register" value="register">Register</button>
            </form>
            <!---End of Sign Up Form-->

        </div>
    </div>
    <!---End of Form Box-->

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
            var password=document.myformRegister.passwordReg.value; 
            if(name == null || name == ""){  
                alert("Username can't be blank");  
                return false;  
            }
            if(!(email.endsWith(".com") || email.includes("@"))){  
                alert("Please enter a valid e-mail address.");  
                return false;  
            }  
            if(password.length < 6){  
                alert("Password must be at least 6 characters long.");  
                return false;  
            }  
        }  
        function showPassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
        function showPasswordReg() {
            var x = document.getElementById("passwordReg");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
    </main>

    <!---Footer-->
    <?php include 'includes/footer.php'; ?>
    <!---End of Footer-->
    
</body>
</html>

<?php 
   //LOGIN
   if(isset($_POST['login'])) { 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //if true then info was POSTed
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        if(!empty($_POST['admin'])){
            $admin = $_POST['admin'];
        }
        if(!empty($user_name) && !empty($password)){
            //read from database
            $user_id = random_number(20);
            $query = "SELECT * from users WHERE user_name = '$user_name' limit 1";
            $result = mysqli_query($con, $query);    
            if($result){
                if($result && mysqli_num_rows($result) > 0){
                    $user_data = mysqli_fetch_assoc($result);
                    $row=mysqli_fetch_array($result);
                    if($user_data['user_name'] === $user_name && $user_data['password'] === $password  && $user_data['admin'] == TRUE){
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header('Location: ../Source Code/dashboard/manage-users.php');
                        die;
                    }
                    else if($user_data['user_name'] === $user_name && $user_data['password'] === $password){
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header('Location: ../Source Code/redirect.php');
                        die;
                    }
                    else{
                        echo '<script type="text/javascript">';
                        echo 'document.getElementById("alert").style.display = "block" ';
                        echo '</script>';
                    }
               }
            }
        }
    }
} 
//REGISTER
if(isset($_POST['register'])) { 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //if true then info was POSTed
        $user_name = $_POST['user_name'];
        $email = $_POST['email'];
        $password = $_POST['passwordReg'];

        $sql_u = "SELECT * FROM users WHERE user_name='$user_name'";
        $sql_e = "SELECT * FROM users WHERE email='$email'";
        $res_u = mysqli_query($con, $sql_u);
        $res_e = mysqli_query($con, $sql_e);

        if (mysqli_num_rows($res_u) > 0) {
            echo '<script type="text/javascript">';
            echo 'document.getElementById("alertExists").style.display = "block" ';
            echo '</script>';
        }
        else if(mysqli_num_rows($res_e) > 0){
            echo '<script type="text/javascript">';
            echo 'document.getElementById("alertExistsEmail").style.display = "block" ';
            echo '</script>';	
        }
        else{
            //save to database
            $query = "INSERT into users (user_name, email, password) values ('$user_name', '$email', '$password')";
            mysqli_query($con, $query);
            echo '<script type="text/javascript">';
            echo 'document.getElementById("alert success").style.display = "block" ';
            echo '</script>';
        }
    }  
}
?>