<?php 
  session_start();
       $_SESSION;
    require '../config/dbconnect.php';
    require '../config/functions.php';
    $user_data = check_login($con);
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"hamster");

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

    <!---NavBar-->
    <?php  $page = 'manage-products'; include '../includes/admin-navbar.php'; ?>
    <!---End of NavBar-->

    <main>
    <!---Mouse-->
<form name="form1" action="manage-products.php" method="post" enctype="multipart/from-data">
<table>
<tr>
<td>Mouse Name</td>
<td><input type="text" name="pnm"></td>
</tr>
<tr>
<td>Before Price</td>
<td><input type="text" name="pbprice"></td>
</tr>
<tr>
<td>After Price</td>
<td><input type="text" name="paprice"></td>
</tr>
<tr>
<td>Author</td>
<td><input type="text" name="paa"></td>
</tr>
<tr>
<td>Image</td>
<td><input type="file" name="pimage"></td>
</tr>
<tr>
<td>Product Category</td>
<td>
<select name="pcategory">
<option  value="mouses">Mouse</option>
<option  value="keyboards">Keyboard</option>
<option  value="headsets">Headset</option>
</select>
</td>
</tr>
<tr>
<td align="center"><input type="submit" name="submit1" value="Add"></td>
</tr>

</table>
</form>
    
<?php
if(isset($_POST["submit1"])){
     if(!empty($_POST["pcategory"])){
          $selected = $_POST["pcategory"];
               mysqli_query($con,"insert into $selected values('','$_POST[pimage]','$_POST[pnm]','$_POST[pbprice]','$_POST[paprice]','$_POST[paa]')");
     }
   
}


?>
<!---End Mouse-->


 </main>


    <!---Footer-->
    <?php include '../includes/admin-footer.php'; ?>
    <!---End of Footer-->
    
</body>
</html> 