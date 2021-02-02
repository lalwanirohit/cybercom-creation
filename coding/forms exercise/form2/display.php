<?php

require "../connection.php";

if (
    isset($_POST['fname']) && isset($_POST['password']) && isset($_POST['gender']) && isset($_POST['address'])
    && isset($_POST['month']) && isset($_POST['date']) && isset($_POST['year']) && isset($_POST['status']) && isset($_POST['games'])
) {

    $fname = $_POST['fname'];
    $password = md5($_POST['password']);
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $month = $_POST['month'];
    $date = $_POST['date'];
    $year = $_POST['year'];
    $dob = $month . ' ' . $date . ' ' . $year;
    $status = $_POST['status'];
    $game = $_POST['games'];
    $games = "";
    foreach ($game as $g) {
        $games .= ' ' . $g;
    }

    if (
        !empty($fname) && !empty($password) && !empty($address) && !empty($gender) && !empty($month)
        && !empty($date) && !empty($year) && !empty($status) && !empty($games)
    ) {
        $sql = "INSERT INTO students (name, password, gender, address, dob, games, marital_status) VALUES 
                    ('$fname','$password','$gender','$address','$dob','$games','$status')";
        if (mysqli_query($link, $sql)) {
            echo "";
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
}

$sql = "SELECT * FROM students";
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>id</th>";
        echo "<th>Name</th>";
        echo "<th>Password</th>";
        echo "<th>gender</th>";
        echo "<th>address</th>";
        echo "<th>dob</th>";
        echo "<th>Favorit Games</th>";
        echo "<th>marital_status</th>";
        echo "</tr>";

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['student_id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['dob'] . "</td>";
            echo "<td>" . $row['games'] . "</td>";
            echo "<td>" . $row['marital_status'] . "</td>";
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
    <a href="02_form_two.php"><button>Go to form</button></a>
</body>

</html>