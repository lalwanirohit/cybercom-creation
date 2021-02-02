<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form2.css">
    <title>User Form</title>
</head>

<body>
    <form action="display.php" method="post" name="userform" onsubmit="return validateForm()">
        <fieldset>
            <legend>User Form</legend>
            <table>
                <tr>
                    <td>
                        <li>FIRST NAME</li>
                    </td>
                    <td><input type="text" name="fname" id="fname">
                        <div id="fname_err"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <li>PASSWORD</li>
                    </td>
                    <td><input type="password" name="password" id="password">
                        <div id="password_err"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <li>GENDER</li>
                    </td>
                    <td>
                        <input type="radio" name="gender" id="male" value="Male"> <label for="gender">Male</label>
                        <input type="radio" name="gender" id="female" value="Female"> <label for="gender">Female</label>
                        <div id="gender_err"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <li>ADDRESS</li>
                    </td>
                    <td><textarea name="address" id="address" cols="30" rows="6"></textarea>
                        <div id="address_err"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <li>DOB</li>
                    </td>
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
                        <div id="dob_err"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <li>SELECT GAMES</li>
                    </td>
                    <td><input type="checkbox" name="games[]" value="hockey"> Hockey
                        <input type="checkbox" name="games[]" value="football"> Football
                        <input type="checkbox" name="games[]" value="cricket"> Cricket
                        <input type="checkbox" name="games[]" value="volleyball"> volleyball
                        <div id="game_err"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <li>MERITAL STATUS</li>
                    </td>
                    <td><input type="radio" name="status" id="married" value="Married"> Married
                        <input type="radio" name="status" id="unmarried" value="Unmarried"> Unmarried
                        <div id="mstatus_err"></div>
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
                        <div id="terms_err"></div>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>

    <script src="form2.js"></script>
</body>

</html>