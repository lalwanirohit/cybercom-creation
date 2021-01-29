<?php
    
    if(!isset($_COOKIE['username'])){
        echo 'cookie is not set';
    }
    else {
        echo $_COOKIE['username']; 
    }
    echo '<br>';
    print_r($_COOKIE);
?>