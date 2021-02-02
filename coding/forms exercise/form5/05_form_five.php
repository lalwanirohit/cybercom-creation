<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form5.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>SIGN IN</h1>
        </div>
        <form action="display.php" method="post" name="userform" onsubmit="return validateForm()">
            <label for="email">E-mail Address</label><br><br>
            <input type="email" name="email" id="email">
            <div id="email_err"></div><br>

            <label for="password">Password</label> <br><br>
            <input type="password" name="password" id="password">
            <div id="password_err"></div><br>

            <input class="button" type="submit" value="Sign in">
        </form>
    </div>
    <script src="form5.js"></script>
</body>

</html>