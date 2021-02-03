<?php

$link = mysqli_connect('localhost','root','','training');
    
if($link == true && mysqli_select_db($link,'training')) {
    echo '';
}
else {
    die('Sorry , '.mysqli_connect_error());
}

?>