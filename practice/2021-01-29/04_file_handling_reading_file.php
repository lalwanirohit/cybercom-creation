<?php

    //read whole file
    echo '<b>Read whole file</b><br>';
    $handle = fopen('CEOs.txt' , 'r');
    echo fread($handle , filesize('CEOs.txt'));
    fclose($handle);

    //read single line
    echo '<br><br><b>Read single line from file</b><br>';
    $handle = fopen('CEOs.txt' , 'r');
    echo fgets($handle) .'<br>'; 
    fclose($handle);

    // read all lines untill it reaches end of file
    echo '<br><br><b>Read single line from file until it reaches end of file</b><br>';
    $handle = fopen('CEOs.txt' , 'r');
    while(!feof($handle)) {
        echo fgets($handle) .'<br>'; 
    }
    fclose($handle);

?>