<?php

    /* 
    here include_once() will check that previously this file has been included or not ?
    if the file is included then it will not include it again.
    remember , this will only check in previous code. if we include file again after include_once() then it will include it.   
    */

    include 'php_starter.php';
    include_once('php_starter.php');


    // if(defined('php_starter.php')) {
    //     include 'php_starter.php';
    // }
    $sub_heading = 'include_once()';
    echo '<h2>'.$sub_heading.'</h2>';
    echo 'this way we can use include_once() to include any file in PHP';
?>