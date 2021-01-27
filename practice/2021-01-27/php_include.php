<?php
    /* 
    we included php_starter.php file here.
    it will perform all the things which are in php_starter.php
    if the included file is not available then it will give an warning but the execution will occur.
    we can also use variables declared in php_starter.php file
    */
    include 'php_starter.php';
    $sub_heading = 'include';
    echo '<h2>'.$sub_heading.'</h2>';

    echo 'this way we can include any file in PHP';
?>