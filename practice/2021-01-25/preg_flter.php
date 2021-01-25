<?php
    $input = [
        "i am 22 years old",
        "you are 35 years old",
        "rohit sharma's jersey number is 45",
        "india has 29 states",
        "the price of hyundai i10 is 600000",
    ];

    print_r (preg_filter('/[0-9]+/' ,'($0)', $input));
?>