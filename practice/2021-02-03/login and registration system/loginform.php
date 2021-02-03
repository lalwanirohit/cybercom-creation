<?php


if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    if(!empty($email) && !empty($password)) {
        $sql = "select user_id from register_users where email = '".mysqli_real_escape_string($link , $email)."' and password = '".mysqli_real_escape_string($link , $password)."'";
        if($result = mysqli_query($link,$sql)) {
            $num_rows = mysqli_num_rows($result);
            if($num_rows == 0) {
                echo 'invalid username/password combination';
            }
            elseif($num_rows == 1) {
                $row = mysqli_fetch_array($result);
                $user_id = $row['user_id'];
                $_SESSION['user_id'] = $user_id;
                header('Location: index.php');
            }
        }
    }
    else {
        echo 'you must have to supply email and password';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <hr>
    <br>
    <form action="<?php echo $current_file ?>" method="post">
        Email <br>
        <input type="email" name="email" id="email"> <br><br>

        Password <br>
        <input type="password" name="password" id="password"><br><br>

        <input type="submit" value="Login">

        You are not a member ? then please <a href="register.php">Register</a> yourself.
    </form>
</body>
</html>