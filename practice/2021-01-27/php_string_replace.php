<?php
    include 'php_starter.php';
    $sub_heading = 'str_replace()';

    echo '<h2>'.$sub_heading.'</h2>';
    $str = 'we say nice morning , nice afternoon , nice evening and nice night as greeting when we meet someone';
    $new_str = str_replace('nice' , 'good' , $str);
    echo '<br>'.$new_str;

    // replace multiple different words
    $odl_values = array('we', 'nice');
    $new_values = array('I','good');
    $new_string = str_replace($odl_values , $new_values , $str);
    echo '<br>'.$new_string;
?>