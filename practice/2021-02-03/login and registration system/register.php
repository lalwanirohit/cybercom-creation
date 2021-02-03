<?php

require 'core.php';
require '../01_connection.php';

if(!loggedin()) {

if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password2']) && isset($_POST['fname']) && isset($_POST['lname'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $password2 = md5($_POST['password2']);
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    if(!empty($email) && !empty($password) && !empty($password2) && !empty($fname) && !empty($lname)) {
       if($password != $password2) {
           echo 'password and Confirm password must be same';
       } 
       else {
           $sql = "select email from register_users where email = '".$email."'";
           $result = mysqli_query($link, $sql);
           if(@mysqli_num_rows($result) == 1) {
                echo 'email , <b>'.$email.'</b> already exist';
           }
           else {
                $sql = "insert into register_users (email, password, first_name, last_name) values ('".$email."','".$password."','".$fname."','".$lname."')";
                if($result = mysqli_query($link, $sql)){
                    header('Location: register_success.php');
                }
                else {
                    'sorry , we couldn\'t register you at this time. please try again after some time';
                }
           }
       }
    }
    else {
        echo 'All fields are required';
    }
}


?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Register User</title>
    </head>
    <body>
        <hr>
        <br>
        <form action="register.php" method="post">
            Email : <br>
            <input type="email" name="email" id="email"><br><br>

            Password : <br>
            <input type="password" name="password" id="password"> <br><br>

            Confirm Password : <br>
            <input type="password" name="password2" id="password2"> <br><br>

            First Name : <br>
            <input type="text" name="fname" id="fname"><br><br>

            Last Name : <br>
            <input type="text" name="lname" id="lname"><br><br>

            <input type="submit" value="Register">
        </form>
    </body>
    </html>

<?php
}
else if (loggedin()) {
    echo 'You are already registered and logged in ..';
}

?>