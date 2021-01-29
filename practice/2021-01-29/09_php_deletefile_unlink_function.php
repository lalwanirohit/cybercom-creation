<?php

$filename = 'file_to_delete.txt';

// return true if file is there and deleted otherwise return false is file is not there
if(@unlink($filename)) {
    echo '<strong>'.$filename.'</strong> has been deleted successfully';
}
else {
    echo 'File is not Available';
}

?>