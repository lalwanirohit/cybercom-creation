<?php

require "../connection.php";

if (
    isset($_POST['name']) && isset($_POST['password']) && isset($_POST['address']) && isset($_POST['gender'])
    && isset($_POST['age']) && isset($_POST['photo']) && isset($_POST['games'])
) {

    $name = $_POST['name'];
    $password = md5($_POST['password']);
    $address = $_POST['address'];
    $game = $_POST['games'];
    $games = "";
    foreach ($game as $g) {
        $games .= ' ' . $g;
    }
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $photo = $_POST['photo'];

    if (!empty($name) && !empty($password) && !empty($address) && !empty($gender) && !empty($age) && !empty($photo) && !empty($games)) {
        $sql = "INSERT INTO employees (name, password, address, games, gender, age, photo) VALUES 
                    ('$name','$password','$address','$games','$gender','$age','$photo')";
        if (mysqli_query($link, $sql)) {
            echo "";
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
}

$sql = "SELECT * FROM employees";
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>id</th>";
        echo "<th>Name</th>";
        echo "<th>Password</th>";
        echo "<th>address</th>";
        echo "<th>Favorit Games</th>";
        echo "<th>gender</th>";
        echo "<th>age</th>";
        echo "<th>photo</th>";
        echo "</tr>";

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['employee_id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['games'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['photo'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else {
        echo "No records matching your query were found.";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <br><br>
    <a href="01_form_one.php"><button>Go to form</button></a>
</body>

</html>