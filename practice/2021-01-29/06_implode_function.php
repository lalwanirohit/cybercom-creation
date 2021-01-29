<?php
    // simple array
    $arr = array('hello' , 'good' , 'afternoon.' , 'how' , 'are' , 'you ?' );
    print_r($arr);

    // convert array into string using implode()
    $str = implode(" ", $arr);
    echo '<br><br>'.$str;

?>