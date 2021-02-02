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
        <div class="subcontainer">
            <div class="header">
                <h1>CONTACT US!</h1>
            </div>
            <form action="display.php" method="post" name="userform" onsubmit="return validateForm()">
                <div class="content">
                    <input type="text" name="name" id="name" placeholder="Name...">
                    <div id="name_err"></div> <br>
                    <input type="email" name="email" id="email" placeholder="Email...">
                    <div id="email_err"></div> <br>
                    <input type="text" name="subject" id="subject" placeholder="Subject...">
                    <div id="subject_err"></div> <br>
                    <textarea name="message" id="message" cols="30" rows="6"></textarea>
                    <div id="message_err"></div> <br>
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