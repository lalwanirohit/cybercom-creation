<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="form2.css">
    <title>User Form</title>
</head>
<body> 
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="userform" onsubmit="return validateForm()">
    <span id="errors"></span>
    <fieldset>
        <legend>User Form</legend>
        <table>
            <tr>
                <td><li>FIRST NAME</li></td>
                <td><input type="text" name="fname" id="fname"></td>
            </tr>
            <tr>
                <td><li>PASSWORD</li></td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td><li>GENDER</li></td>
                <td>
                    <input type="radio" name="gender" id="male" value="Male"> <label for="gender">Male</label>
                    <input type="radio" name="gender" id="female" value="Female"> <label for="gender">Female</label>
                </td>
            </tr>
            <tr>
                <td><li>ADDRESS</li></td>
                <td><textarea name="address" id="address" cols="30" rows="6"></textarea></td>
            </tr>
            <tr>
                <td><li>DOB</li></td>
                <td>
                    <select name="month" id="month">
                        <option disabled selected>Month</option>
                    </select>
                    <select name="date" id="date">
                        <option disabled selected>Date</option>
                    </select>
                    <select name="year" id="year">
                        <option disabled selected>Year</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><li>SELECT GAMES</li></td>
                <td><input type="checkbox" name="games[]" value="hockey"> Hockey
                    <input type="checkbox" name="games[]" value="football"> Football
                    <input type="checkbox" name="games[]" value="cricket"> Cricket
                    <input type="checkbox" name="games[]" value="volleyball"> volleyball
                </td>
            </tr>
            <tr>
            <td><li>MERITAL STATUS</li></td>
                <td><input type="radio" name="status" id="married" value="Married"> Married
                    <input type="radio" name="status" id="unmarried" value="Unmarried"> Unmarried
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="checkbox" name="terms" id="terms"> I accept this agreement
                </td>
            </tr>
        </table>
    </fieldset>
    </form>

    <script src="form2.js"></script>
</body>
</html>

<?php

if(isset($_POST['fname']) && isset($_POST['password']) && isset($_POST['gender']) && isset($_POST['address'])  
    && isset($_POST['month']) && isset($_POST['date']) && isset($_POST['year']) && isset($_POST['status']) && isset($_POST['games'])) {

        $fname = $_POST['fname'];
        $password = md5($_POST['password']);
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $month = $_POST['month'];
        $date = $_POST['date'];
        $year = $_POST['year'];
        $status = $_POST['status'];
        $game = $_POST['games'];
        
        if(!empty($fname) && !empty($password) && !empty($address) && !empty($gender) && !empty($month)
         && !empty($date) && !empty($year) && !empty($status) && !empty($game))
        {
            echo '<div class="information">';

            echo "Name : <b> $fname </b> <br>";
            echo "Password is : <b> $password </b><br>";
            echo "Gender is : <b> $gender </b><br>";
            echo "Address is : <b> $address </b><br>";
            echo "Date of birth is : <b>$month - "."$date - "."$year</b><br>";
            echo "Selected game / games are :";
            foreach($_POST['games'] as $game) {
                echo '<br><b>'.$game.'</b>';
            }
            echo "<br>";
            echo "Marital status is : <b> $status </b><br>";

            echo '</div>';
        }
}

?>