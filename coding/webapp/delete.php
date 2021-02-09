<?php 

require 'server/server.php';

$contactObj = new Contact();

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $contact = $contactObj->deleteRecord($id);
}

?>