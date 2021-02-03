<?php

include '../01_connection.php';

ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];

if(isset( $_SERVER['HTTP_REFERER']) && !empty( $_SERVER['HTTP_REFERER']) ) {
    $http_referer = $_SERVER['HTTP_REFERER'];
}


function loggedin() {
    if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
        return true;
    }
    else {
        return false;
    }
}

function getuserfield($field) {
    global $link;
    $sql = "select $field from register_user where id = ".$_SESSION['user_id']."'";
    if( $result = mysqli_query($link , $sql)) {
        $row = mysqli_fetch_array($result);
        return $row[$field];
    }
}


?>