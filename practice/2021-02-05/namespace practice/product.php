<?php

// create namespace
namespace Product;  
    const NUM = 45;
    class Laptop {
        function __construct()
        {
            echo '<h1>product namespace - Laptop class</h1>';
        }
    }
    function display() {
        echo '<h1>product namespace - display function</h1>';
    }

    // echo NUM;
    // display();
    // $obj = new Laptop();

?>