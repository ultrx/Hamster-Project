<?php 
    session_start(); 

    session_destroy();

    header('Location: ../Source Code/index.php');
?>
