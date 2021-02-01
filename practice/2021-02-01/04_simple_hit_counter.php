<?php

require '01_connecting_to_server_and_database.php';

$user_ip = $_SERVER['REMOTE_ADDR'];

function ip_exixsts($ip) {
    global $user_ip;

}

$sql = "SELECT count from hit_count";
if($result = mysqli_query($link , $sql)) {    
    if(mysqli_num_rows($result) > 0){
        $count=0;
        while($row = mysqli_fetch_array($result)){
            $count = $row['count'];
            echo $count;
        }
        $count += 1;
        $update_sql = "UPDATE hit_count set count='$count'";
        $do_update = mysqli_query($link, $sql);
        echo '<br> ok.';
    }
    else{
        echo "No records matching your query were found.";
    }
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


?>