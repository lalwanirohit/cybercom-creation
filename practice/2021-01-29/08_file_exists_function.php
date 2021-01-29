<?php

$filename = 'CEOs.txt';

// it will return true if file exist and false if not
if(file_exists($filename)) {
    echo '<b>'. $filename .'</b> File already exists';
}
else {
    $handle = fopen('CEOs.txt' , 'w');
    fwrite($handle , 'Apple - Tim cook' ."\n" );
    fwrite($handle , 'Google - Sundar pichai' ."\n");
    fwrite($handle , 'Microsoft - Satya nadella' ."\n");
    fwrite($handle , 'spaceX - Elon musk' ."\n");
    fclose($handle);
    echo '<b>'. $filename .'</b> file was not there but now it is created';
}

?>