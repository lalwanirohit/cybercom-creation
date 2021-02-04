<?php

$age = 16;
// try block. here we will put that code which might generate exception 
try {
    if($age > 18) {
        echo "old enough";
    }
    else {
        // thrown the exception 
        throw new Exception ('not old enough');
    }
}
// catch block to catch the exception 
catch(Exception $e) {
    // getMessage() is a method of Exception class. it displays the message
    echo 'Error: '.$e->getMessage();
}

?>