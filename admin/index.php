<?php
    session_start();
    ob_start();
    if(isset($_SESSION['role']) &&($_SESSION['role'] == 1)) header('Location: category');
    
    else{
        header('location: ./user/login.php');
    }
?>