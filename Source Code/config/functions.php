<?php 
//login check and validation
function check_login($pdo){

   if(isset($_SESSION['user_id'])){
       $id = $_SESSION['user_id'];
       $query = "SELECT * from users WHERE user_id = '$id' LIMIT 1";

       $result = mysqli_query($pdo, $query);
       if($result && mysqli_num_rows($results) > 0){

            $user_data = mysqli_fetch_assoc($results);
            return $user_data;
       }
   }
   //redirect to login if validation fails
   header("Location: login-form.php");
   die;
}
//random user_id generator
function random_number($length){
    $text = "";
    if($length < 5){
        $length = 5;
    }
    $len = rand(4, $length);

    for($i=0; $i < $len ; $i++){

        $text = rand(0, 9);
    }
    return $text;
}

?>