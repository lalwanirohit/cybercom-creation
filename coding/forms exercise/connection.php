<?php

$mysql_host = 'localhost';
$mysql_username = 'root';
$mysql_password = '';
$mysql_database = 'training';

$link = mysqli_connect($mysql_host, $mysql_username, $mysql_password, $mysql_database);

if($link == false) {
    die('connection error'. mysqli_connect_error());
}
?>