<?php
    $handle = fopen('CEOs.txt' , 'w');
    fwrite($handle , 'Apple - Tim cook' ."\n" );
    fwrite($handle , 'Google - Sundar pichai' ."\n");
    echo 'file written successfully';
    fclose($handle);
?>