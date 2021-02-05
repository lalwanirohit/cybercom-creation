<?php

$link = new mysqli('localhost','root','','training');

if(isset($_POST['text'])) {
    $text = $_POST['text'];

    if(!empty($text)) {
        $sql = "INSERT into names (name) VALUES ('" . mysqli_real_escape_string($link , $text) . "')";
        if(mysqli_query($link, $sql)) {
            echo 'Name inserted Successfully';
        }
        else {
            echo 'sorry, operation failed';
        }
    }
    else {
        echo 'please fill some value';
    }
}

?>