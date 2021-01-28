<?php
    include 'php_starter.php';
    $sub_heading = 'Modify timestamp';
    echo '<h2>'.$sub_heading.'</h2>';
    date_default_timezone_set('Asia/Calcutta');

    $time = time();
    echo '<br>current date/time : '. date('D M Y @ H:i:s',$time);
    echo '<br>current date/time : '. date('d m y @ h:i:s',$time);

    // add 1 day
    echo '<br><br>Added one day into current time : '. date('d M Y @ H:i:s', strtotime('+1 day'));
    // add 1 week
    echo '<br><br>Added one week into current time : '. date('d M Y @ H:i:s', strtotime('+1 week'));
    // add 1 hour
    echo '<br><br>Added one hour into current time : '. date('d M Y @ H:i:s', strtotime('+1 hour'));
    // one month, 2 hours , 25 minutes , 30 seconds
    echo '<br><br>Added one month, 2 hours , 25 minutes , 30 seconds into current time : '. date('d M Y @ H:i:s', strtotime('+1 month 2 hours 25 minutes 30 seconds'));
    // one month, 2 hours , 25 minutes , 30 seconds
    echo '<br><br>added 5 hours : '. date('d M Y @ H:i:s' , $time + (60*60*5));
?>