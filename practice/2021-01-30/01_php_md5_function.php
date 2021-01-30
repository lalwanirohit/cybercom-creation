<?php

if(isset($_POST['password'])) {
    $password = md5($_POST['password']);
    if(!empty($password)) {
        $filename = 'hash.txt';
        $handle = fopen($filename , 'r');
        $file_password = fread($handle , filesize($filename));
        
        if($password == $file_password) {
            echo 'passwords are same';
        }
        else {
            echo 'passwords are not same. please enter password again';
        }
    }
    else {
        echo 'please enter password';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP</title>
</head>
<body>
    <hr>
    <form action="" method="post">
        <input type="password" name="password" id="password"> <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>