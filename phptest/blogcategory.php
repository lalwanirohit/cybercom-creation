<?php 
include_once 'controller/controller.php';

if($_SESSION['user_email'] == '' && $_SESSION['user_id'] == '') {
    header('Location: index.php');
}
