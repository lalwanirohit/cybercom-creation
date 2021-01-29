<?php

    // open the file in reading mode
    $filename = 'CEOs.txt';
    $handle = fopen($filename,'r');

    // read the file and store all data of file into $data
    $data = fread($handle , filesize($filename));
    
    // convert string data into array using explode()
    $data_arr = explode(' ', $data);

    // print the array of data
    print_r($data_arr);

    // close file
    fclose($handle);
?>