<?php 

require 'server/server.php';

$contactObj = new Contact();

if(isset($_GET['deleteid']) && !empty($_GET['deleteid'])) {
    $editid = $_GET['deleteid'];
    $contact = $contactObj->deleteRecord($editid);
}

header('Location: contacts.php');

?>