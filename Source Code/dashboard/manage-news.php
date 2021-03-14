<?php 
ob_start();
session_start();
    $_SESSION;
    require '../config/dbconnect.php';
    require '../config/functions.php';
    $user_data = check_login($con);
    $query = "SELECT * from news";
    $result_news = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatibel" content="IE=edge">
    <title>Hamster Store - Manage News</title>
    <meta name="description" content="">
    <style> <?php include '../CSS/style.css'; include '../CSS/responsive.css'; ?> </style>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>   
</head>
<body>
    <!---Alerts-->
    <?php include '../includes/alerts.php'; ?>
    <!---End of Alerts--> 

     <!---NavBar-->
     <?php  $page = 'news'; include '../includes/admin-navbar.php'; ?>
    <!---End of NavBar-->

    <main>
    <button type = "button" id="myBtn" class = "button3" style="margin: 1% 1% 1% 1%;float:right;color:white">Add News</button>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <form class="addUserModal" id="myForm" name="form" action="manage-news.php" method="POST" enctype="multipart/form-data">
                <table class="addUsersForm">
                <span class="close">&times;</span>
                    <tr>
                        <td>Title</td>
                        <td><input type="text" name="title"></td>
                    </tr>
                    <tr>
                        <td>Image</td>
                        <td><input type="file" name="image"></td>
                    </tr>
                    <tr>
                        <td>Author</td>
                        <td><input type="text" name="author"></td>
                    </tr>
                    <tr>
                        <td>Text</td>
                        <td><textarea style="width: 100%;" type="textbox"  class="textarea" name="text"></textarea></td>
                    </tr>
                    <tr>
                        <td align ="center"colspan="2"><input type="submit" name="submit1" value="Add" onClick="window.location.reload();"></td>
                    </tr>
                </table>
            </form>
            <!--Add News-->
            <?php
            if(isset($_POST["submit1"])){
                $filename = time() . $_FILES["image"]["name"]; 
                $tempname = $_FILES["image"]["tmp_name"];     
                move_uploaded_file($tempname, "../images/".$filename);
                if(!empty($_POST["title"]) && !empty($filename) && !empty($_POST["author"]) && !empty($_POST["text"])){
                    $id_time = date("Y-m-d H:i:s",time());
                    mysqli_query($con,"INSERT INTO news VALUES('','$_POST[title]','$filename','$_POST[text]','$_POST[author]','$id_time')");
                    header('Location: ../dashboard/manage-news.php');
                }
                else{
                    echo '<script type="text/javascript">';
                    echo 'document.getElementById("alert").style.display = "block" ';
                    echo '</script>';    
                }
            }
            ?>
            <!--End of Add News-->
        </div>
    </div>

    <!--News Section -->
    <div class = "products">
        <div class = "products-container">
            <div class = "product-items">
            <?php foreach($result_news as $news): ?>

            <!-- Single News -->
            <div class="property-card">
                        <a href="#">
                        <div class="property-image">
                        <img class="property-image" src= "../images/<?php echo $news['image']; ?>" alt="new image">
                        </div></a>
                    <div class="property-description">
                        <div class ="endnews">
                            <p>Author:<?php echo $news['posted_by']; ?></p>
                            <a href="delete-news.php?news_id=<?php echo $news['news_id']; ?>"><button type = "button" class = "news-button">Delete</button></a>
                            <p>Date:<?php echo $news['date']; ?></p>
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

    <!---Footer-->
    <?php include '../includes/admin-footer.php'; ?>
    <!---End of Footer-->
    
</body>
</html>
<!--Modal Open Javascript-->
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
    modal.style.display = "block";
    }
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<!--End of Modal Open Javascript-->