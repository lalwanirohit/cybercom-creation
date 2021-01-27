<?php

    /* 
    here require_once() will check that previously this file has been require or not ?
    if the file is require then it will not require it again.
    remember , this will only check in previous code. if we require file again after require_once() then it will require it.   
    */

    require 'php_starter.php';
    require_once('php_starter.php');

    // if(defined('php_starter.php')) {
    //     require 'php_starter.php';
    // }
    $sub_heading = 'require_once()';
    echo '<h2>'.$sub_heading.'</h2>';
    echo 'this way we can use require_once() to require any file in PHP';
?>