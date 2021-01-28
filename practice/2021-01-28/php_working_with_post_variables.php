<?php
    $pass = 'pass8320247191';
    if(isset($_POST['password'])) {
        $password = $_POST['password'];

        if(!empty($password)) {
            if($password===$pass) {
                echo 'password is correct. your welcome';
            }
            else {
                echo 'please enter correct password';
            }
        }
        else {
            echo 'please enter the password';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP</title>
</head>
<body>
    <form action="" method="post">
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password"> <br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>