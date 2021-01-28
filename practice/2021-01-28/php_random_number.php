<?php
    include 'php_starter.php';
    $sub_heading = 'Generate Random Number';
    echo '<h2>'.$sub_heading.'</h2>';

    // getrandmax() is used to get the maximum number can be generated using rand()
    
    if(isset($_POST['roll'])) {
        $dice  = rand(1, 6);
        echo 'you rolled a : ' . $dice .'<br><br>';
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <form action="" method="post">
        <input type="submit" name="roll" value="Roll the dice">
    </form>
</body>
</html>