<?php
    echo "<b>we can also return some value through a function. for that we have to use return keyword.</b><br>";

    function bowlingAverage($name , $runs , $wickets) {
        $average = $runs / $wickets;
        echo "<br><br><b>" . $name . "</b><br> Average : ";
        return $average;
    }

    echo(bowlingAverage("jasprit bumrah" , 2736 , 108));
    echo(bowlingAverage("trent boult" , 4148 , 164));
    echo(bowlingAverage("mithcel starc" , 4263 , 184));
?>