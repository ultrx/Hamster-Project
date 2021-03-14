<?php 
    session_start();
    $_SESSION;
    require '../config/dbconnect.php';
    require '../config/functions.php';
    $user_data = check_login($con);
    $query = "SELECT * from contacts";
    $result_contacts = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatibel" content="IE=edge">
    <title>Hamster Store - Manage Contact</title>
    <meta name="description" content="">
    <style> <?php include '../CSS/style.css'; include '../CSS/responsive.css'; ?> </style>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>   
</head>
<body>

    <!---NavBar-->
    <?php  $page = 'manage-contact'; include '../includes/admin-navbar.php'; ?>
    <!---End of NavBar-->

    <main>

        <!--Product Section Mouses-->
        <div class = "contacts">
            <div class = "contacts-container">
                <div class = "contact-items">
                    <?php foreach($result_contacts as $contacts): ?>

                    <!-- Single Product -->
                    <div class = "contact-div">
                        <div class = "contact-info">
                            <p class = "contact"><b>Sent by: </b><?php echo $contacts['name'];?> <?php echo $contacts['lastname'];?></p>
                            <br>
                            <p class = "contact"><b>Email: </b><?php echo $contacts['email'];?></p>
                            <br>
                            <br>
                            <h2 class = "contact"><b>Message</b><br></h2>
                            <p class = "contact"><?php echo $contacts['subject'];?></p>
                            <div class = "product-btns">
                                <a href = "delete-contact.php?id=<?php echo $contacts['id']; ?>"><button type = "button" class = "button button2">Delete</button></a>
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
    <?php include '../includes/admin-footer.php'; ?>
    <!---End of Footer-->
    
</body>
</html>