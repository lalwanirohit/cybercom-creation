<?php 

$mysqli_host = 'localhost';
$mysqli_user = 'root';
$mysqli_password = '';
$mysqli_database = 'training';

// created new ServerExceotion class which extends Exception class
class ServerException extends Exception {
    public function getDetails() {
        // it can use Exceotion class' all methods and properties
        echo 'Error : ' .$this->getMessage() . '<br><br> thrown at line ' . $this->getLine() . ' in file ' . $this->getFile();
    }
}
class DatabaseException extends Exception {
    public function getDetails() {
        // it can use Exceotion class' all methods and properties
        echo 'Error : ' .$this->getMessage() . '<br><br> thrown at line ' . $this->getLine() . ' in file ' . $this->getFile();
    }
}

try {
    if(!@$link = mysqli_connect($mysqli_host, $mysqli_user, $mysqli_password)) {
        // thrown exception from ServerException class
        throw new ServerException('Can not connect with server');
    }
    else if(!mysqli_select_db($link, $mysqli_database)){
        // thrown exception from DatabaseException class
        throw new DatabaseException('can not connect with database');
    }
    else {
        echo 'OK.';
    }
}
catch (ServerException $se) {
    echo $se->getDetails();
}
catch (DatabaseException $de) {
    echo $de->getDetails();
}

?>