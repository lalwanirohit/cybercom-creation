<?php
    echo "comparison operator <br>";
    $number = 45;
    $no = "45";

    if($number == $no) {
        echo "true <br>";
    }

    if($number === $no) {
        echo "true";
    }
    else {
        echo "false";
    }
?>