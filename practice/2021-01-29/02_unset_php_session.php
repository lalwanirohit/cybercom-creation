<?php
    session_start();

    // unset($_SESSION['username']);  unset() is used to unset a single session
    
    // session_destroy() is used to destroy all the sessions.
    session_destroy();   
    echo 'session unseted';
?>