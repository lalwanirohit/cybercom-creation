<?php
    session_start();

    // store username and it's value to session
    $_SESSION['username']='Malcom';
    $_SESSION['age']=23;
    echo 'session set';
?>