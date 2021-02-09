<?php 

require 'datasource/controller.php';

$obj = new Contact();

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $contact = $obj->deleteRecord($id);
}

?>