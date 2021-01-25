<?php

    // htmlentities function converts the simple text into html content
    echo "htmlentities() <br><br>";

    $str = '<a href="https://www.php.net/">go to php.net</a>';
    echo htmlentities($str);
?>