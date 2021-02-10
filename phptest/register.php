<?php

include_once 'controller/controller.php';

$obj = new Blog();

if (isset($_POST['register'])) {
    $obj->registerUser($_POST);
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
                <h2>Register</h2>
                <?php
                if (isset($_SESSION['emailmessage'])) {
                    unset($_SESSION['emailmessage']);
                ?>

                    <div class="msg"><label class="display"> </label></div>
                    <script>
                        $('.msg').html("<label class='display'>Email Already Exist</label>");
                        $(".display").fadeOut(5000);
                    </script>
                <?php } ?>
                <hr>
            </div>
        </div>
        <form action="register.php" method="POST" id="registeruser">
            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <label for="prefix" class="form-label">Prefix</label> <br>
                    <select class="form-select" name="prefix" id="prefix">
                        <option value="Mr.">Mr.</option>
                        <option value="Mrs.">Mrs.</option>
                        <option value="Ms.">Ms.</option>
                        <option value="Miss.">Miss.</option>
                    </select>
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" name="firstname" id="firstname" class="form-control">
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" name="lastname" id="lastname" class="form-control">
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <label for="mobilenumber" class="form-label">Mobile Number</label>
                    <input type="text" name="mobilenumber" id="mobilenumber" class="form-control">
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <label for="password2" class="form-label">Confirm Password</label>
                    <input type="password" name="password2" id="password2" class="form-control">
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <label for="information" class="form-label">Information</label>
                    <textarea name="information" id="information" rows="3" class="form-control"></textarea>
                </div>
            </div> <br>
            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="terms[]" id="terms" class="form-check-input">
                        <label for="cricket" class="form-check-label">Hereby, I accept all the terms & conditions</label>
                    </div>
                    <br><label for="terms[]" class="error" style="display:none;"></label>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <button type="submit" class="btn btn-success" name="register" id="register">Register</button>
                </div>
            </div>
    </div>
    </div>

    <!-- JS files -->
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/validate2.js"></script>
</body>

</html>