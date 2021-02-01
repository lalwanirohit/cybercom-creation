<?php
if(isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    
    if(!empty($email) &&!empty($password))
    {
        echo '<div class="information">';
        echo "Email is : <b> $email </b><br>";
        echo "Password is : <b> $password </b><br>";
        echo '</div>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form5.css">
    <title>Document</title>
</head>
<body>
    <span id="errors"></span>
    <div class="container">
        <div class="header">
            <h1>SIGN IN</h1>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="userform" onsubmit="return validateForm()">
            <label for="email">E-mail Address</label><br><br>
            <input type="email" name="email" id="email"><br><br>

            <label for="password">Password</label> <br><br>
            <input type="password" name="password" id="password"> <br><br>

            <input class = "button" type="submit" value="Sign in">
        </form>
        </div>
    <script src="form5.js"></script>
</body>
</html>