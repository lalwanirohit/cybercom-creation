<?php

    // basic functions that we can create using function keyword.
    
    echo "Basic functions in php <br><br>";
    function addition() {
        $number1 = 40;
        $number2 = 5;
        $result = $number1 + $number2;
        echo "the addition of two numbers is : " . $result;
    }
    addition();

    function greetingMessage($name) {
        echo "<br>Hello Mr.".$name.", welcome to our college. we are very happy to have you here.";
        echo "<br>ladies and gentlemen i would request ".$name." to start the function by giving a speech.";
    }
    greetingMessage('rohit lalwani');
?>
