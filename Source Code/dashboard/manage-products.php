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
    $query = "SELECT * from mouses";
    $result_mouse = mysqli_query($con,$query);
    $query = "SELECT * from keyboards";
    $result_keyboard = mysqli_query($con,$query);
    $query = "SELECT * from headsets";
    $result_headset = mysqli_query($con,$query);

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
    <div>
<form name="form1" action="manage-products.php" method="post" enctype="multipart/from-data">
<table>
<tr>
<td>Mouse Name</td>
<td><input type="text" name="pnm"></td>
</tr>
<tr>
<td>Url</td>
<td><input type="url" name="purl"></td>
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
<td align ="center"colspan="2"><input type="submit" name="submit1" value="Add"></td>
</tr>

</table>
</form>
<?php
if(isset($_POST["submit1"])){
     if(!empty($_POST["pcategory"]) && !empty($_POST["pimage"]) && !empty($_POST["pnm"]) && !empty($_POST["purl"]) && !empty($_POST["pbprice"]) && !empty($_POST["paprice"]) && !empty($_POST["paa"])){
          $selected = $_POST["pcategory"];
               mysqli_query($con,"insert into $selected values('','$_POST[pimage]','$_POST[pnm]','$_POST[purl]','$_POST[pbprice]','$_POST[paprice]','$_POST[paa]')");
               header("Location:manage-products.php");
               exit;
     }
    
   
}


?>
</div>

 <!--Product Section Mouses-->
 <div class = "products">
            <div class = "products-container">
                <h1 class = "lg-title">GAMING MOUSES</h1>
                <div class = "product-items">
                    <?php foreach($result_mouse as $product): ?>

                <!-- Single Product -->
                <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <a href="<?php echo $product['url']; ?>"target="_blank"><img src = "../images/<?php echo $product['image']; ?>" alt = "product image"></a>
                            </div>
                            <div class = "product-btns">
                                <a href="delete-data.php?mouse_id=<?php echo $product['mouse_id']; ?>"><button type = "button" class = "btn-buy">Delete </button></a>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                            </div>
                            <a href = "<?php echo $product['url']; ?>"target="_blank" class = "product-name"><?php echo $product['name']; ?></a>
                            <p class = "product-price">$<?php echo $product['price_before']; ?></p>
                            <p class = "product-price">$<?php echo $product['price_after']; ?></p>
                            <p class="product-name" align="center">Added by: <?php echo $product['added_by']; ?>
                        </div>
                        <div class = "off-info">    
                        </div>
                    </div>
                    <!--End of Single Product -->
                    
            <?php endforeach; ?>

                </div>
            </div>
        </div>
        <!--End of Product Section-->

        <!--Product Section Keyboards-->
        <div class = "products">
            <div class = "products-container">
                <h1 class = "lg-title">GAMING KEYBOARDS</h1>
                <div class = "product-items">
                        
                 <?php foreach($result_keyboard as $product): ?>

                <!-- Single Product -->
                <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <a href="<?php echo $product['url']; ?>"target="_blank"><img src = "../images/<?php echo $product['image']; ?>" alt = "product image"></a>
                            </div>
                            <div class = "product-btns">
                                <a href="delete-data.php?keyboard_id=<?php echo $product['keyboard_id']; ?>"><button type = "button" class = "btn-buy">Delete</button></a>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                            </div>
                            <a href = "<?php echo $product['url']; ?>"target="_blank" class = "product-name"><?php echo $product['name']; ?></a>
                            <p class = "product-price">$<?php echo $product['price_before']; ?></p>
                            <p class = "product-price">$<?php echo $product['price_after']; ?></p>
                            <p class="product-name" align="center">Added by: <?php echo $product['added_by']; ?>
                        </div>
                    </div>
                    <!--End of Single Product -->
                    
            <?php endforeach; ?>
            
                    </div>
            </div>
        </div>
        <!--End of Product Section-->

        <!--Product Section HeadSet-->
        <div class = "products">
            <div class = "products-container">
                <h1 class = "lg-title">GAMING HEADSETS</h1>
                <div class = "product-items">
                <?php foreach($result_headset as $product): ?>

                <!-- Single Product -->
                <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <a href="<?php echo $product['url']; ?>"target="_blank"><img src = "../images/<?php echo $product['image']; ?>" alt = "product image"></a>
                            </div>
                            <div class = "product-btns">
                                <a href="delete-data.php?headset_id=<?php echo $product['headset_id']; ?>"><button type = "button" class = "btn-buy"> Delete </button></a>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                            </div>
                            <a href = "<?php echo $product['url']; ?>"target="_blank" class = "product-name"><?php echo $product['name']; ?></a>
                            <p class = "product-price">$<?php echo $product['price_before']; ?></p>
                            <p class = "product-price">$<?php echo $product['price_after']; ?></p>
                            <p class="product-name" align="center">Added by: <?php echo $product['added_by']; ?>
                        </div>
                        <div class = "off-info">
                        </div>
                    </div>
                    <!--End of Single Product -->
                    
            <?php endforeach; ?>
                    </div>
            </div>
        </div>
        <!--End of Product Section-->
        


    


<!---End Mouse-->


 </main>


    <!---Footer-->
    <?php include '../includes/admin-footer.php'; ?>
    <!---End of Footer-->
    
</body>
</html> 