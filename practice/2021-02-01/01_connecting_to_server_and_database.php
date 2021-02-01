<?php

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_password = '';

$mysql_database = 'training';

$mysql_err = 'sorry, could not connect.';

// procedural style
$link = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Print host information
echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);

?>