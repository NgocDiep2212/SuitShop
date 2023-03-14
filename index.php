<?php
session_start();
ob_start();
if(!isset($_SESSION['role']) || ($_SESSION['role'] != 0))  header('location: ./admin/user/login.php');
else if(isset($_SESSION['role']) && ($_SESSION['role'] == 0)) header('location: frontend');
?>