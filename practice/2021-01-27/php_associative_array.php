<!DOCTYPE html>
<html lang="en">
<head>
    <title>Associative array</title>
</head>
<body>
    <h1>Welcome to PHP</h1>
    <h2>Associative Array</h2>
</body>
</html>

<?php
    // create an associative array
    $founders = array('PHP'=>'Rasmus Lerdorf' , 'JAVA'=>'James Goling', 'C'=>'Dennis Ritchie', 'C++'=>'Bjarne Stroustrup', 'JAVASCRIPT'=>'Brendan Eich');

    // print whole array
    print_r($founders);

    // echo single value from associative array
    echo "<br>Founder of PHP is : " . $founders['PHP'];
    echo "<br>Founder of JAVASCRIPT is : " . $founders['JAVASCRIPT'] . "<br>";

    // add another key value pait into associative array
    $founders['PYTHON'] = 'Guido Van Russom';
    print_r($founders);

    // count the length of associative array
    echo "<br>The length of array is : " . count($founders);
?>