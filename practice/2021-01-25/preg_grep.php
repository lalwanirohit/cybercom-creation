<?php
    echo "<b>preg_grep() function returns an array containing only elements from the input that match the given pattern</b><br><br>";
    $input = [
        "Red",
        "Pink",
        "Orange",
        "Purple",
        "Poweder blue",
        "Black",
    ];
    print_r(preg_grep('/^P/i' , $input));
?>