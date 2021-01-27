<?php
    include 'php_starter.php';

    $sub_heading = 'Expression Matching';
    echo '<h2>'.$sub_heading.'</h2>';

    function has_space($line) {
        if(preg_match('/ /' , $line)) {
            return true;    
        }
        else {
            return false;
        }
    }

    $str = "there is a space in line";
    if(has_space($str)) {
        echo '<br>there is a single space or multiple spaces are available in the line';
    }
    else {
        echo '<br>there is no space in line';
    }
?>