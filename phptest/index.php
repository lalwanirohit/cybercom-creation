<?php

include_once 'controller/controller.php';

$obj = new Blog();

if (isset($_POST['login'])) {
    $obj->loginUser($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jquery file -->
    <script src="js/jquery.js"></script>
    <!-- css for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- css files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Blog Application</title>
</head>

<body>

    <div class="container">
        <br>
        <div class="row">
            <div class="col-sm-6 mx-auto">
                <h2>Login</h2>
                <?php
                if (isset($_SESSION['loginerrormessage'])) {
                    unset($_SESSION['loginerrormessage']);
                ?>

                    <div class="errmsg"><label class="errdisplay"> </label></div>
                    <script>
                        $('.errmsg').html("<label class='errdisplay'>Please Enter Correct Data</label>");
                        $(".errdisplay").fadeOut(5000);
                    </script>
                <?php } ?>
                <hr>
            </div>
        </div>
        <form action="" method="POST" id="loginuser">
            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <button type="submit" class="btn btn-success" name="login" id="login">Login</button>
                    <button class="btn btn-warning" onclick="location.href='register.php'">Register</button>
                </div>
            </div>


    </div>
    </div>

    <!-- JS files -->
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/validate.js"></script>
</body>

</html>