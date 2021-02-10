<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=hamster","root","");
}catch(PDOException $pdo){
    die("Lidhja me DB - Deshtoi!");
}

?>