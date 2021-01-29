<?php

function hit_count() {

    $ip_address = $_SERVER['REMOTE_ADDR'];

    $ip_file = file('ip.txt');
    foreach($ip_file as $ip) {
        $ip_single = trim($ip);
        if($ip_address == $ip_single) {
            $found = true;
            break;
        }
        else {
            $found = false;
        }
    }

    if(@$found == false) {
        $filename = 'unique_counter.txt';
        $handle = fopen($filename , 'r');
        $counter = fread($handle , filesize($filename));
        fclose($handle);

        $count = $counter + 1;

        $handle = fopen($filename , 'w');
        fwrite($handle , $count);
        fclose($handle);

        $handle = fopen('ip.txt' , 'a');
        fwrite($handle , $ip_address."\n");
        fclose($handle);
    } 
}

hit_count();
echo "check <strong>ip.txt</strong> and <strong>unique_counter.txt</strong>";
    
?>