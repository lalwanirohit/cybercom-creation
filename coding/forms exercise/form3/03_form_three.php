<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form3.css">
    <title>Sign Up Form</title>
</head>

<body>

    <form action="display.php" method="post" name="userform" onsubmit="return validateForm()">
        <div class="form_header">
            Sign Up
        </div>
        <div class="form_main">
            <table>
                <tbody>
                    <tr>
                        <td><label for="fname">First Name</label></td>
                        <td><input type="text" name="fname" id="fname" placeholder="Enter First Name">
                            <div id="fname_err"></div>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="lname">Last Name</label></td>
                        <td><input type="text" name="lname" id="lname" placeholder="Enter Last Name">
                            <div id="lname_err"></div>
                        </td>
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
                            <div id="dob_err"></div>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="gender">Gender</label></td>
                        <td>
                            <input type="radio" name="gender" id="male" value="Male"> <label for="gender">Male</label>
                            <input type="radio" name="gender" id="female" value="Female"> <label for="gender">Female</label>
                            <div id="gender_err"></div>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="country">Country</label></td>
                        <td>
                            <select name="country" id="country">
                                <div id="country_err"></div>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="email">Email</label></td>
                        <td><input type="email" name="email" id="email" placeholder="Enter E-mail">
                            <div id="email_err"></div>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="phone">Phone</label></td>
                        <td><input type="text" name="phone" id="phone" placeholder="Enter phone">
                            <div id="phone_err"></div>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="password">Password</label></td>
                        <td><input type="password" name="password" id="password">
                            <div id="password_err"></div>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="confirm_password">Confirm Password</label></td>
                        <td><input type="password" name="confirm_password" id="confirm_password">
                            <div id="cpassword_err"></div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="checkbox" name="terms" id="terms"> <label for="terms">I agree the terms of use</label>
                            <div id="terms_err"></div>
                        </td>
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