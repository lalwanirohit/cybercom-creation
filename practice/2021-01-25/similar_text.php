<?php
    $str1 = "php is language";
    $str2 = "laravel is a framework of php";

    similar_text($str1 , $str2 , $result);
    echo "similarity between both string is : " . $result . "%";
?>