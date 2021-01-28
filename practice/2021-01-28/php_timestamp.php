<?php
    include 'php_starter.php';
    $sub_heading = 'Timestamp';
    echo '<h2>'.$sub_heading.'</h2>';
    // display amount of time in seconds since 1st january 1970
    //echo time();
    date_default_timezone_set('Asia/Calcutta');
    // echo date_default_timezone_get ( );

    $time = time();
    $actual_time = date('H:i:s', $time);

    echo 'the actual time is : ' . $actual_time .'<br><br>';

    $actual_time = date('d M Y @ H:i:s', $time);
    echo 'the actual date/time is : ' . $actual_time;  
?>