<?php
    // check is all the fields are set or not ?
    if(isset($_POST['first_name']) && isset($_POST['middle_name']) && isset($_POST['last_name']))
    {
        $first_name = htmlentities($_POST['first_name']);
        $middle_name = htmlentities($_POST['middle_name']);
        $last_name = htmlentities($_POST['last_name']);

        // check if all the fields are filled or not ?
        if(!empty($first_name) && !empty($middle_name) && !empty($last_name)) {
            echo 'Full name is : ' . $first_name .' '. $middle_name .' '. $last_name;
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
    <label for="first_name">First Name</label><br>
        <input type="text" name="first_name" id="first_name"> <br><br>

        <label for="middle_name">Middle Name</label><br>
        <input type="text" name="middle_name" id="middle_name"> <br><br>

        <label for="last_name">Last Name</label><br>
        <input type="text" name="last_name" id="last_name"> <br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>