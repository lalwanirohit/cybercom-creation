<?php

function hit_count() {
    $filename = 'counter.txt';
    $handle = fopen($filename , 'r');
    $counter = fread($handle , filesize($filename));
    echo 'count is : ' . $counter;
    fclose($handle);

    $count = $counter + 1;

    $handle = fopen($filename , 'w');
    fwrite($handle , $count);
    fclose($handle);
}

hit_count();
echo '<br><br>refresh to hit count';
    
?>