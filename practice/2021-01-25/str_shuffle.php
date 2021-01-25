<?php
    $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    echo str_shuffle($str);

    echo "<br><br><br>";

    $numbers = "0123456789";
    $charachters = "abcdefghijklmnopqrstuvwxyz";

    $first_half = substr(str_shuffle($numbers),0,6);
    $second_half = substr(str_shuffle($charachters),0,6);

    $password = substr(str_shuffle($first_half.$second_half),0,8);

    echo "the password is : <b>" . $password . "</b>"; 
?>