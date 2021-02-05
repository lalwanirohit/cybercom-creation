<?php

if(isset($_GET['search_text'])){
    $search_text = $_GET['search_text'];
}

if(!empty($search_text)) {
    if (@$link = new mysqli('localhost','root','','training')) {
        $sql = "select name from names where name like '".mysqli_real_escape_string($link , $search_text)."%'";
        $result = mysqli_query($link , $sql);
        while($row = mysqli_fetch_array($result)) {
            echo $row['name'].'<br>';
        }
    }
}

?>