<?php

$filename = 'file_to_rename.txt';
$newname = rand(1000 , 9999);

if(@rename($filename , $newname.'.txt')) {
    echo '<strong>'. $filename .'</strong> has been renamed to <strong>'. $newname .'.txt</strong>';
}
else {
    echo '<strong>'. $filename .'</strong> is either renamed already or does not exist';
}

?>