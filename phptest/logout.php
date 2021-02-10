<?php
    session_start(); 
    $_SESSION['user_id'] = ''; 
    unset($_SESSION['user_id']); 
    $_SESSION['user_email'] = ''; 
    unset($_SESSION['user_email']); 
    session_destroy(); 
    header('location:index.php'); 
?>