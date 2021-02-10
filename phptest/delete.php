<?php 

require 'controller/controller.php';
if($_SESSION['user_email'] == '' && $_SESSION['user_id'] == '') {
    header('Location: index.php');
}

$obj = new Blog();

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $category = $obj->deleteRecord($id);
}
