<?php

$mysqli_host = 'localhost';
$mysqli_user = 'root';
$mysqli_password = '';
$mysqli_database = 'training';

/* 
here we created two new custom exception classes by extending Exception class
because they are extending Exception class. they can also use all the methods of Exception class 
*/
class ServerException extends Exception {}
class DatabaseException extends Exception {}

// try block
try {
    if(!@$link = mysqli_connect($mysqli_host, $mysqli_user, $mysqli_password)) {
        // thrown exception from ServerException class
        throw new ServerException('Can not connect with server');
    }
    else if(!mysqli_select_db($link, $mysqli_database)){
        //// thrown exception from DatabaseException class
        throw new DatabaseException('can not connect with database');
    }
    else {
        echo 'OK.';
    }
}
catch (ServerException $se) {
    echo 'Error : '.$se->getMessage();
}
catch (DatabaseException $de) {
    echo 'Error : '.$de->getMessage();
}

?>