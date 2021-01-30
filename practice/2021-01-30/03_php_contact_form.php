<?php

if(isset($_POST['name']) && isset($_POST['email']) && $_POST['message']) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if(!empty($name) && !empty($email) && !empty($message)) {

        if(strlen($name) > 25 || strlen($email) > 50 || strlen($message) > 1000) {
            echo 'sorry, max length for each field is exceeded';
        }
        else {
            $to = 'fashion45srk@gmail.com';
            $subject = 'Contact form submitted';
            $body = $name . "\n" . $email . "\n " . $message;
            $headers = 'From: ';

            if(mail($to , $subject , $body , $headers)) {
                echo 'thank you for contacting us. we will contact you soon.';
            }
            else {
                echo 'sorry, an error occurred. please try again after some time'; 
            }
        }
    }
    else {
        echo 'please fill all the fields';
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
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name" maxlength="25"> <br><br>

        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" maxlength="50"> <br><br>

        <label for="message">Message</label><br>
        <textarea name="message" id="message" cols="40" rows="8" maxlength="1000"></textarea><br><br>
        
        <input type="submit" value="Send">
    </form>
</body>
</html>