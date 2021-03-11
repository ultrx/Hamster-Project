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
    $query = "SELECT * from users";
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
                <td><?php echo $users['user_name']; ?></td>
                <td><?php echo $users['email']; ?></td>
                <td><?php echo $users['date']; ?></td>
                <td><?php echo $users['admin']; ?></td>
                <td>
                    <a href="edit-data.php?user_id=<?php echo $row['user_id']; ?>" class="edit_btn" ></a><button name="myBtnEdit" type = "button" id="myBtnEdit" class = "button button1">Edit</button></a>
                    <a href="delete-users.php?user_id=<?php echo $users['user_id']; ?>"><button type = "button" class = "button button2">Delete</button></a>
                </td>  
                <td></td>
            </tr>
            <?php endforeach; ?>
        </table>
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
            }
            ?>
        </div>
    </div>

    <!-- Edit Modal -->
    <div id="myModalEdit" class="modal">
        <div class="modal-content">
            <form class="addUserModal" name="form" action="manage-users.php" method="post" enctype="multipart/from-data">
            <span class="closeEdit">&times;</span>
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
            if(isset($_POST["addUserModal"])){
                if(!empty($_POST["unm"]) && !empty($_POST["uemail"]) && !empty($_POST["upassword"]) && !empty($_POST["urole"])){
                    $id_time = date("Y-m-d H:i:s",time());
                    mysqli_query($con,"INSERT INTO users values('','$_POST[urole])','$_POST[unm]','$_POST[uemail]','$_POST[upassword]','$id_time')");
                    header('Location: ../dashboard/manage-users.php');
                }
            }
            ?>
        </div>
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
    var modalEdit = document.getElementById("myModalEdit");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    var btnEdit = document.getElementById("myBtnEdit");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    var spanEdit = document.getElementsByClassName("closeEdit")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
    modal.style.display = "block";
    }
    btnEdit.onclick = function() {
        modalEdit.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
    spanEdit.onclick = function() {
        modalEdit.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modalEdit.style.display = "none";
        }
    }
</script>