<?php

class DatabaseConnection {
    function __construct($mysqli_host , $mysqli_user , $mysqli_password) 
    {
        if($this->connect($mysqli_host , $mysqli_user , $mysqli_password)) {
            echo 'connected successfully';
        }
        else if (!@$this->connect($mysqli_host , $mysqli_user , $mysqli_password)) {
            echo 'sorry, connection can not be established';
        }
    }

    private function connect($mysqli_host , $mysqli_user , $mysqli_password) {
        if(!@mysqli_connect($mysqli_host , $mysqli_user , $mysqli_password)) {
            return false;
        }
        else {
            return true;
        }
    }
}

$connection = new DatabaseConnection('localhost','root','');

?>