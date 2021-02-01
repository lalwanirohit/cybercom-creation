<?php
include '01_connecting_to_server_and_database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>PHP</title>
</head>
<body>
    <form action="" method="post">
        Select Gender : <select name="gender" id="gender">
            <option disabled selected>Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php

    if(isset($_POST['gender'])) {
        $gender = $_POST['gender'];
        if(!empty($gender)) {
            $sql = "SELECT * FROM users where `gender` = '$gender' ORDER BY `id`";
            if($result = mysqli_query($link, $sql)){
                if(mysqli_num_rows($result) > 0){
                    echo "<table>";
                        echo "<tr>";
                            echo "<th>id</th>";
                            echo "<th>Name</th>";
                            echo "<th>Email</th>";
                            echo "<th>Gender</th>";
                            echo "<th>Password</th>";
                        echo "</tr>";
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['gender'] . "</td>";
                            echo "<td>" . $row['password'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    // Free result set
                    mysqli_free_result($result);
                } else{
                    echo "No records matching your query were found.";
                }
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
        }
    }
?>