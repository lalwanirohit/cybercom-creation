<?php
    if(isset($_GET['first_name']) && isset($_GET['middle_name']) && isset($_GET['last_name'] )) {
        $first_name = $_GET['first_name'];
        $middle_name = $_GET['middle_name'];
        $last_name = $_GET['last_name'];

        if(!empty($first_name) && !empty($middle_name) && !empty($last_name)) {
            echo 'Full name is : ' . $first_name . ' ' . $middle_name . ' ' . $last_name;
        }
        else {
            echo 'please fill in all the fields';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP</title>
</head>
<body>
    <form action="" method="get">
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