

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" cntent="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="form4.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <span id="errors"></span>
        <div class="subcontainer">
            <div class="header">
                <h1>CONTACT US!</h1>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="userform" onsubmit="return validateForm()">
            <div class="content">
                    <input type="text" name="name" id="name" placeholder="Name..."> <br>
                    <input type="email" name="email" id="email" placeholder="Email..."> <br>
                    <input type="text" name="subject" id="subject" placeholder="Subject..."> <br>
                    <textarea name="message" id="message" cols="30" rows="6"></textarea> <br>
            </div>
            <div class="submission">
                <input class="button" type="submit" value="SEND MESSAGE">
            </div>
            </form>
        </div>
    </div>

    <script src="form4.js"></script>
</body>
</html>

<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
   
    if(!empty($email) &&!empty($email) && !empty($subject) &&!empty($message))
    {
        echo '<div class="information">';
        echo "Name is : <b> $name </b><br>";
        echo "Email is : <b> $email </b><br>";
        echo "Subject is : <b> $subject </b><br>";
        echo "Message is : <b> $message </b><br>";
        echo '</div>';
    }
}


?>