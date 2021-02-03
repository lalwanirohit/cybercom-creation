<?php

require 'core.php';
require '../01_connection.php';

if(loggedin()) {
   $username = getuserfield('first_name');
   echo 'welcome '.$username.' you\'re logged in.  <a href="logout.php"> Logout </a>';
 } 
 else {
    include 'loginform.php';
 } 

?>