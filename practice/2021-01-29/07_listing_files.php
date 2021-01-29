<?php

$directory = 'files';

if($handle = opendir($directory.'/')) {
    echo 'looking inside  ' . $directory . '/ .....<br>';
    while($file = readdir($handle)) {
        if($file != '.' && $file != '..') {
            echo '<br><a href="'.$directory.'/'.$file.'" target="_blank"> '.$file.'</a>';
        }
    }
}

?>