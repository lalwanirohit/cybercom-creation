<?php
$link = mysqli_connect("localhost", "root", "", "students");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('sanket', 'lalwani', 'lalwanisanket123@gmail.com')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>