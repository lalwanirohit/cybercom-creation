<?php
    //global variables.
    echo "Global variables <br><br>";
    $pi = 3.14;

    function circleArea($r) {
        global $pi;
        $area = $pi * ($r*$r);
        return $area;
    }

    echo "the area of circle is : ".circleArea(5);
?>