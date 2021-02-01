<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form1.css">
    <title>User Form</title>
</head>
<body>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="userform" onsubmit="return validateForm()">
    <span id="errors"></span>
        <table border="1">
            <tr>
                <th colspan="2">User Form</th>
            </tr>
            <tr>
                <td><label for="name">Enter Name</label></td>
                <td><input type="text" name="name" id="name" autofocus></td>
            </tr>
            <tr>
                <td><label for="password">Enter Password</label></td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td><label for="address">Enter Address</label></td>
                <td><textarea name="address" id="address" cols="30" rows="5"></textarea></td>
            </tr>
            <tr>
                <td><label for="game">Select Game</label></td>
                <td><input class="select" type="checkbox" name="games[]" value="hockey">Hockey<br>
                    <input class="select" type="checkbox" name="games[]" value="football">Football<br>
                    <input class="select" type="checkbox" name="games[]" value="badminton">Badminton<br>
                    <input class="select" type="checkbox" name="games[]" value="cricket">Cricket<br>
                    <input class="select" type="checkbox" name="games[]" value="volleyball">Volleyball<br>
                </td>
            </tr>
            <tr>
                <td><label for="gender">Gender</label></td>
                <td>   
                    <input class="select" type="radio" name="gender" id="male" value="Male"> <label for="male">Male</label>
                    <input class="select" type="radio" name="gender" id="female" value="female"> <label for="female">Female</label>
                </td>
            </tr>
            <tr>
                <td><label for="age">Select your age</label></td>
                <td>
                    <select name="age" id="age">
                        <option selected disabled>Age</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="file"><input  type="file" name="photo" id="photo" accept=".jpg"></td>
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

<?php

if(isset($_POST['name']) && isset($_POST['password']) && isset($_POST['address']) && isset($_POST['gender']) 
    && isset($_POST['age']) && isset($_POST['photo']) && isset($_POST['games'])) {

        $name = $_POST['name'];
        $password = md5($_POST['password']);
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $photo = $_POST['photo'];
        $game = $_POST['games'];
        
        if(!empty($name) && !empty($password) && !empty($address) && !empty($gender) && !empty($age) && !empty($photo) && !empty($game))
        {
            echo '<div class="information">';

            echo "Name : <b> $name </b> <br>";
            echo "Password is : <b> $password </b><br>";
            echo "address is : <b> $address </b><br>";
            echo "selected game / games are :";
            foreach($_POST['games'] as $game) {
                echo '<br><b>'.$game.'</b>';
            }
            echo "<br>";
            echo "gender is : <b> $gender </b><br>";
            echo "age is : <b> $age </b><br>";
            echo "photo : <b> $photo </b><br>";

            echo '</div>';
        }
}

?>