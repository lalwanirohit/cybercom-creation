<?php

    // preg_match will return the matching words or characters.
    echo "preg_match() <br><br>";
    $string = "This is the string";
    if (preg_match( '/This/' , $string)) {
        echo "Found in the string";
    }
    else {
        echo "Not found in string";
    }

    echo ('<br>'.preg_match('/he string/' , $string , $matches).'<br>');
    print_r($matches);
?>