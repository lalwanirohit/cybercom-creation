<?php

require '01_connection.php';

$sql = "select distinct last_name from trainees";
if($result = mysqli_query($link,$sql)) {
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
            echo $row['last_name'] .'<br>';
        }
    }
}
else {
    echo 'please check query';
}

?>

