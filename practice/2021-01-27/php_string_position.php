<?php
    include 'php_starter.php';
    $sub_heading = 'stringpos()';

    echo '<h2>'.$sub_heading.'</h2>';
    $str = 'we say good morning , good afternoon , good evening and good night as greeting when we meet someone';
    $find = 'good';

    echo 'the first position of <b>good</b> is at : ' . strpos($str , $find);


    // let's find all position 
    echo '<br><br>All occurances of good';
    $i=1;
    $offset = 0;
    $findLength = strlen($find);
    while($position = strpos($str , $find , $offset)) {
        echo '<br>'.$i.'. <b>good</b> found at : '.$position;
        $offset = $position + $findLength;
        $i++;
    }
?>