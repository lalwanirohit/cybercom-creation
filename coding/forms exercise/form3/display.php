<?php

require "../connection.php";

if (
    isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['month']) && isset($_POST['date']) && isset($_POST['gender'])
    && isset($_POST['year']) && isset($_POST['country']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['password'])
    && isset($_POST['confirm_password'])
) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $month = $_POST['month'];
    $date = $_POST['date'];
    $year = $_POST['year'];
    $dob = $month . ' ' . $date . ' ' . $year;
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = md5($_POST['password']);


    if (
        !empty($fname) && !empty($lname) && !empty($month) && !empty($date) && !empty($year) && !empty($gender)
        && !empty($country) && !empty($email) && !empty($phone) && !empty($password)
    ) {
        $sql = "INSERT INTO trainees (first_name, last_name, dob, gender, country, email, phone, password) VALUES 
                    ('$fname','$lname','$dob','$gender','$country','$email','$phone','$password')";
        if (mysqli_query($link, $sql)) {
            echo "";
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
}
$sql = "SELECT * FROM trainees";
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>id</th>";
        echo "<th>first name</th>";
        echo "<th>last name</th>";
        echo "<th>dob</th>";
        echo "<th>gender</th>";
        echo "<th>country</th>";
        echo "<th>email</th>";
        echo "<th>phone</th>";
        echo "<th>password</th>";
        echo "</tr>";

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['trainee_id'] . "</td>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['last_name'] . "</td>";
            echo "<td>" . $row['dob'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['country'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
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
    <a href="03_form_three.php"><button>Go to form</button></a>
</body>

</html>