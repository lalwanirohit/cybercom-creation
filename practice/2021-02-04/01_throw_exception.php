<?php

// here we will throw an error but because there is no catch block it will also generate fatal error
function divide($num1 , $num2) {
    if($num2 == 0) {
        // throw the exception
        throw new Exception ('number can not be divided by zero');
    }
    else {
        return $num1 / $num2;
    }
}

echo divide(10,0);

?>