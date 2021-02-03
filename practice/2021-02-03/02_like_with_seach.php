<?php

// get connection file
require '01_connection.php';

// check if name is submitted or not
if (isset($_POST['name'])) {
    // store value of input into variable
    $name = $_POST['name'];
    // check if the input value is blank or not
    if (!empty($name)) {
        // check if the length of input is 5 characters long or not
        if (strlen($name) > 4) {
            $sql = "select * from employees where name like '%" . $name . "%'";
            if ($result = mysqli_query($link, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        echo $row['name'] . '<br>';
                    }
                } 
                else {
                    echo 'result not found';
                }
            }
            else {
                'please check the query';
            }
        }
        else {
            echo 'keyword should be atleast 5 characters long';
        }
    }
    else {
        echo 'please fill the value for name';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Search form</title>
</head>

<body>
    <hr>
    <br>
    <form action="" method="post">
        <label for="name">Search name</label> <br>
        <input type="text" name="name" id="name"> <br>
        <input type="submit" value="Search">
    </form>
</body>

</html>