<?php
    // fopen() opens the file in specified mode
    $handle = fopen('CEOs.txt' , 'a');
    
    // fwrite() writes content in file
    fwrite($handle , 'Microsoft - Satya nadella' ."\n");
    fwrite($handle , 'spaceX - Elon musk' ."\n");
    echo 'data has been apended into file';

    // fclose() closes the file
    fclose($handle);
?>