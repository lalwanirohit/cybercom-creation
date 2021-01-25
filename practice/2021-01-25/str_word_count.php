<?php
    $string = "hello everyone. thank you for being here. it's my pleasure to have you all here.";
    echo(str_word_count($string))."<br>";
    print_r(str_word_count($string ,1));
    echo "<br>";
    print_r(str_word_count($string ,2));
?>