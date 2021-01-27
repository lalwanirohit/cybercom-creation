<!DOCTYPE html>
<html lang="en">
<head>
    <title>Foreach loop</title>
</head>
<body>
    <h1>Welcome to PHP</h1>
    <h2>Foreach Loop</h2>
</body>
</html>

<?php
    // created names array
    $names = array('rohit','sumant','ankit','mayur','naimish','jay');

    // echo each name one by one using foreach loop
    foreach($names as $name) {
        echo $name . '<br>';
    }

    $ages = array('rohit'=>22 , 'sumant'=>23 , 'ankit'=>29 , 'mayur'=>35 , 'naimish'=>40 , 'jay'=>36);

    echo '<br><br><b>List of all names with their ages</b><br><br>';
    foreach($ages as $name=>$age) {
        echo $name . ' is ' . $age . ' years old. <br>';
    }
?>