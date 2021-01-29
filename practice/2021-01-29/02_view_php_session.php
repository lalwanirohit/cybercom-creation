<?php
    session_start();
    if(isset($_SESSION['username']) && isset($_SESSION['age'])) {
        echo 'welcome, '.$_SESSION['username'] .'. you are ' .$_SESSION['age'].' years old.';
    }
    else {
        echo 'please log in';
    }
?>    