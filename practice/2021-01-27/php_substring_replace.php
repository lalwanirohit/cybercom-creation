<?php
    include 'php_starter.php';
    $sub_heading = 'substr_replace()';

    echo '<h2>'.$sub_heading.'</h2>';

    $str = "hello, this is rohit lalwani.";
    echo substr_replace($str , 'sanket' , 15 , 5 );
?>