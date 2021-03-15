<script>
function refreshPage(){
    window.location.reload();
}
</script>
<?php 
    ob_start();
    session_start();
    $_SESSION;
    require '../config/dbconnect.php';
    require '../config/functions.php';
    $user_data = check_login($con);
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"hamster");
    $query = "SELECT * FROM users";
    $result_users = mysqli_query($con, $query);
   
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatibel" content="IE=edge">
    <title>Hamster Store - Manage Users</title>
    <meta name="description" content="">
    <style> <?php include '../CSS/style.css'; include '../CSS/responsive.css'; ?> </style>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>   
</head>
<body>

    <!---Alerts-->
    <?php include '../includes/alerts.php'; ?>
    <!---End of Alerts--> 

    <!---NavBar-->
    <?php  $page = 'manage-users'; include '../includes/admin-navbar.php'; ?>
    <!---End of NavBar-->

    <main>
    
        <div class="table-container">
            <form  name="form" action="manage-users.php" method="POST" enctype="multipart/from-data">
                <table id="usersTable">
                    <tr>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Register Date</th>
                        <th>Role</th>
                        <th>Action</th>
                        <th><button type = "button" id="myBtn" class = "button button1">+</button></th>
                    </tr>
                    <?php foreach($result_users as $users): ?>
                    <tr>
                        <td><input type="text" value="<?php echo $users['user_name']; ?>" name="updatedName" style="background-color:transparent;border:none;color:white;font-size:18px;text-align:left;"></td>
                        <td><input type="email" value="<?php echo $users['email']; ?>" name="updatedEmail" style="background-color:transparent;border:none;color:white;font-size:18px;text-align:left;"></td>
                        <td><?php echo $users['date']; ?></td>
                        <td><input type="text" value="<?php echo $users['admin']; ?>" name="updatedRole" style="background-color:transparent;border:none;color:white;font-size:18px;text-align:center;"></td>
                        <td>
                            <a href="manage-users.php?user_id=<?php echo $users['user_id']; ?>"><button id="myBtn" name="editUser" type = "button" class = "button button3">Save</button></a>
                            <a href="delete-users.php?user_id=<?php echo $users['user_id']; ?>"><button type = "button" class = "button button2">Delete</button></a>
                        </td>  
                        <td></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </form>
        </div>

        <div id="myModal" class="modal">
            <div class="modal-content">
                <form class="addUserModal" name="form" action="manage-users.php" method="post" enctype="multipart/from-data">
                    <span class="close">&times;</span>
                    <table class="addUsersForm">
                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="unm"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="email" name="uemail"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="text" name="upassword"></td>
                        </tr>
                        <tr>
                            <td>Role</td>
                            <td><input type="text" name="urole"></td>
                        </tr>
                        <tr>
                            <td align ="center" colspan="2"><input type="submit"  name="addUser" value="Add"></td>
                        </tr>
                    </table>
                </form>
                <?php
                if(isset($_POST["addUser"])){
                    if(!empty($_POST["unm"]) && !empty($_POST["uemail"]) && !empty($_POST["upassword"]) && !empty($_POST["urole"])){
                        $id_time = date("Y-m-d H:i:s",time());
                        mysqli_query($con,"INSERT INTO users values('','$_POST[urole])','$_POST[unm]','$_POST[uemail]','$_POST[upassword]','$id_time')");
                        header('Location: ../dashboard/manage-users.php'); 
                    }
                    else{
                        echo '<script type="text/javascript">';
                        echo 'document.getElementById("alert").style.display = "block" ';
                        echo '</script>';
                    }
                }
                if(isset($_POST['editUser'])){
                    $id=$_GET['user_id'];
                    //mysqli_query($con,"INSERT INTO users VALUES('','$_POST[updatedRole])','$_POST[updatedName]','$_POST[updatedEmail]','$_POST[upassword]','')");
                    mysqli_query($con,"UPDATE users SET user_name='$_POST[updatedName]', admin='$_POST[updatedRole]', email='$_POST[updatedEmail]' WHERE user_id = '$id'");
                    header('Location: ../dashboard/manage-users.php');
                }
               
                
                ?>
            </div>
        </div>
    </main>

    <!---Footer-->
    <?php include '../includes/admin-footer.php'; ?>
    <!---End of Footer-->
    
</body>
</html>
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