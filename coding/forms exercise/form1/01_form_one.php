<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form1.css">
    <title>User Form</title>
</head>

<body>

    <form action="display.php" method="post" name="userform" onsubmit="return validateForm()">
        <table border="1">
            <tr>
                <th colspan="2">User Form</th>
            </tr>
            <tr>
                <td><label for="name">Enter Name</label></td>
                <td><input type="text" name="name" id="name" autofocus>
                    <div id="name_err"></div>
                </td>
            </tr>
            <tr>
                <td><label for="password">Enter Password</label></td>
                <td><input type="password" name="password" id="password">
                    <div id="password_err"></div>
                </td>
            </tr>
            <tr>
                <td><label for="address">Enter Address</label></td>
                <td><textarea name="address" id="address" cols="30" rows="5"></textarea>
                    <div id="address_err"></div>
                </td>
            </tr>
            <tr>
                <td><label for="game">Select Game</label></td>
                <td><input class="select" type="checkbox" name="games[]" value="hockey">Hockey<br>
                    <input class="select" type="checkbox" name="games[]" value="football">Football<br>
                    <input class="select" type="checkbox" name="games[]" value="badminton">Badminton<br>
                    <input class="select" type="checkbox" name="games[]" value="cricket">Cricket<br>
                    <input class="select" type="checkbox" name="games[]" value="volleyball">Volleyball<br>
                    <div id="game_err"></div>
                </td>
            </tr>
            <tr>
                <td><label for="gender">Gender</label></td>
                <td>
                    <input class="select" type="radio" name="gender" id="male" value="Male"> <label for="male">Male</label>
                    <input class="select" type="radio" name="gender" id="female" value="female"> <label for="female">Female</label>
                    <div id="gender_err"></div>
                </td>
            </tr>
            <tr>
                <td><label for="age">Select your age</label></td>
                <td>
                    <select name="age" id="age">
                        <option selected disabled>Age</option>
                    </select>
                    <div id="age_err"></div>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="file"><input type="file" name="photo" id="photo" accept=".jpg">
                    <div id="photo_err"></div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input class="buttons" type="reset" value="Reset">
                    <input class="buttons" type="submit" value="Submit Form">
                </td>
            </tr>
        </table>
    </form>


    <script src="form1.js"></script>
</body>

</html>