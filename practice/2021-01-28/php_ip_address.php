<?php
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $blocked_ip = array('127.0.0.1' , '100.45.45.10' , '::1');

    foreach($blocked_ip as $ip) {
        if($ip==$ip_address) {
            die('Your ip address ' . $ip_address . ' is blocked');
        }
    }
?>

<h1>Welcome!</h1>