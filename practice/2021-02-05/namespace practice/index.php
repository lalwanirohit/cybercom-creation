<?php

require 'product.php';

    // call namespace content from outside of namespace
    echo Product\NUM;
    Product\display();
    $obj = new Product\Laptop();

?>