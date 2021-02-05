<?php

// give alias to namesapce
use Product as pro;
require 'product.php';

    // call constant , function and object using alias
    echo pro\NUM;
    pro\display();
    $obj = new pro\Laptop();

?>