<?php
    /* 
    we require php_starter.php file here.
    it will perform all the things which are in php_starter.php
    if the required file is not available then it will give an error and the execution will be stopped
    we can use variables declared in php_starter.php file
    */
    require 'php_starter.php';
    $sub_heading = 'require';
    echo '<h2>'.$sub_heading.'</h2>';

    echo 'this way we can require any file in PHP';
?>