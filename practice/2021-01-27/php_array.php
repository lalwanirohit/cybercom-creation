<!DOCTYPE html>
<html lang="en">
<head>
    <title>php Arrays</title>
</head>
<body>
    <h1>Welcome to PHP</h1>
    <h2>Arrays</h2>
</body>
</html>

<?php
    // create array
    $programming_languages = array('PHP' , 'JAVA' , 'C' , 'C++' , 'C#');

    // print whole array using print_r() function
    print_r($programming_languages);

    // echo single value of array
    echo "<br>element at index 0 is : " . $programming_languages[0];
    echo "<br>element at index 2 is : " . $programming_languages[2] . "<br>"; 

    // add new value to array
    $programming_languages[5] = 'JAVASCRIPT';

    print_r($programming_languages);

    // count the number of elements in array
    echo "<br> length of array is : " . count($programming_languages);

    // unset () is used to remove array element from array.
    unset($programming_languages[4]);
    print_r($programming_languages);

    // short syntax for array creation
    $friends = ['sumant','ankit','mayur'];
?>