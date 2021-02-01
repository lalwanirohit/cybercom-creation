<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form3.css">
    <title>Sign Up Form</title>
</head>
<body>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="userform" onsubmit="return validateForm()">
    <span id="errors"></span>
        <div class="form_header">
            Sign Up
        </div>
        <div class="form_main">
            <table>
                <tbody>
                    <tr>
                        <td><label for="fname">First Name</label></td>
                        <td><input type="text" name="fname" id="fname" placeholder="Enter First Name"></td>
                    </tr>
                    <tr>
                        <td><label for="lname">Last Name</label></td>
                        <td><input type="text" name="lname" id="lname" placeholder="Enter Last Name"></td>
                    </tr>
                    <tr>
                        <td><label for="dob">Date of birth</label></td>
                        <td>
                            <select name="date" id="date">
                                <option disabled selected>Date</option>
                            </select>
                            <select name="month" id="month">
                                <option disabled selected>Month</option>
                            </select>
                            <select name="year" id="year">
                                <option disabled selected>Year</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="gender">Gender</label></td>
                        <td>
                            <input type="radio" name="gender" id="male" value="Male"> <label for="gender">Male</label>
                            <input type="radio" name="gender" id="female" value="Female"> <label for="gender">Female</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="country">Country</label></td>
                        <td>
                            <select name="country" id="country">
                                <option disabled selected>Country</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="email">Email</label></td>
                        <td><input type="email" name="email" id="email" placeholder="Enter E-mail"></td>
                    </tr>
                    <tr>
                        <td><label for="phone">Phone</label></td>
                        <td><input type="text" name="phone" id="phone" placeholder="Enter phone"></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password</label></td>
                        <td><input type="password" name="password" id="password"></td>
                    </tr>
                    <tr>
                        <td><label for="confirm_password">Confirm Password</label></td>
                        <td><input type="password" name="confirm_password" id="confirm_password"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="checkbox" name="terms" id="terms"> <label for="terms">I agree the terms of use</label></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form_submit">
            <input class="button" type="submit" value="Submit">
            <input type="reset" value="Cancel">
        </div>
    </form>

    <script src="form3.js"></script>
</body>
</html>

<?php

if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['month']) && isset($_POST['date']) && isset($_POST['gender'])
    && isset($_POST['year']) && isset($_POST['country']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['password']) 
    && isset($_POST['confirm_password'])) {

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $month = $_POST['month'];
        $date = $_POST['date'];
        $year = $_POST['year'];
        $gender = $_POST['gender'];
        $country = $_POST['country'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = md5($_POST['password']);
        
        
        if(!empty($fname) && !empty($lname) && !empty($month) && !empty($date) && !empty($year) && !empty($gender)
         && !empty($country) && !empty($email) && !empty($phone) && !empty($password))
        {
            echo '<div class="information">';

            echo "First Name : <b> $fname </b> <br>";
            echo "Last Name : <b> $lname </b> <br>";
            echo "Date of birth is : <b>$date - "."$month - "."$year</b><br>";
            echo "Gender is : <b> $gender </b> <br>";
            echo "Country is : <b> $country </b><br>";
            echo "Email is : <b> $email </b><br>";
            echo "Phone number is : <b> $phone </b><br>";
            echo "Password is : <b> $password </b><br>";
            echo '</div>';
        }
}

?>