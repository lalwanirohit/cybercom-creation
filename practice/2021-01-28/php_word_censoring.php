<?php
    $find = ['sumant','ankit','mayur'];
    $replace = ['Su***t','A***t','M***r'];

    if(isset($_POST['user_input']) && !empty($_POST['user_input'])) {
        $user_input = $_POST['user_input'];
        
        // first way to do it
        //$lc_input = strtolower($user_input);
        // second way is str_ireplace().

        $new_user_input = str_ireplace($find , $replace , $user_input);
        echo $new_user_input;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Word censoring</title>
</head>
<body>
    <hr>
    <form action="php_word_censoring.php" method="post">
        <textarea name="user_input" rows="6" cols="30"><?php if(isset($_POST['user_input'])){echo $user_input;} ?></textarea> <br><br>
        <input type="submit" value="Submit">      
    </form>
</body>
</html>

