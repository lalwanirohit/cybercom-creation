<?php
    $offset = 0;
    if(isset($_POST['user_input']) && isset($_POST['search_for']) && isset($_POST['replace_with'])) {
        $user_input = $_POST['user_input'];
        $find = $_POST['search_for'];
        $replace = $_POST['replace_with'];

        $length = strlen($find);

        if(!empty($user_input) && !empty($find) && !empty($replace)) {    
            while($str_pos = strpos($user_input , $find , $offset)) {
                $offset = $str_pos + $length;
                $user_input = substr_replace($user_input , $replace , $str_pos , $length);
            }
            echo $user_input;
        } 
        else {
            echo 'please fill in all the fields';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Find and Replace Application</title>
</head>
<body>
    <hr>
    <form action="php_find_and_replace_application.php" method="post">
        <textarea name="user_input" rows="6" cols="30"></textarea><br><br>

        <label for="search_for">Search for : </label> <br>
        <input type="text" name="search_for" id="search-for"> <br><br>

        <label for="replace_with">Replace With : </label> <br>
        <input type="text" name="replace_with" id="replace_with"> <br><br>

        <input type="submit" value="Find and Replace">
    </form>
</body>
</html>