<!DOCTYPE html>
<html lang="en">
<head>
    <title>Multidimensional Array</title>
</head>
<body>
    <h1>Welcome to PHP</h1>
    <h2>Multidimensional Array</h2>
</body>
</html>

<?php
    // create a multi-dimensional array
    $frameworks = array('PHP'=>array('Laravel','Symfony','CodeIgniter','CakePHP','Phalcon') , 
                        'JAVA'=>array('Spring','Hibernet','Struts','Blade','Grails') ,
                        'JAVASCRIPT'=>array('Angular','Express','React','Vue.js','Ember.js') ,
                        'PYTHON'=>array('CubicWeb','Django','Glotto','Web2py','TurboGears'));
    
    // print array
    print_r($frameworks);

    //access single element from array
    echo "<br><br>PHP frameworks are : ";
    print_r($frameworks['PHP']);

    //access single elements as well as particular element from inner array
    echo "<br>" . $frameworks['PHP'][0];

    // add value or element in array
    $frameworks['PHP'][5] = 'Zend';
    echo "<br>" . $frameworks['PHP'][5];

    foreach($frameworks as $language => $framework_list) {
        echo '<br><br><strong>' . $language . '</strong><br>';
        foreach($framework_list as $framework) {
            echo '<br>' . $framework;
        }
    }
?>