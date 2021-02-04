<?php

$mysqli_host = 'localhost';
$mysqli_user = 'root';
$mysqli_password = '';
$mysqli_database = 'training';

$link  = new mysqli($mysqli_host , $mysqli_user , $mysqli_password , $mysqli_database);

if($link == false) {
    echo 'Error : '.$mysqli_error();
}
else {
    echo 'Done';
}

?>