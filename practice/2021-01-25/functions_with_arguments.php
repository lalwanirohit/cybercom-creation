<?php 
    echo "<b>Functions can have arguments. we can pass arguments while we call the function.</b><br><br>";

    function battingAverage($name , $innings , $runs , $notouts) {
        $total_dismisals = $innings - $notouts ;
        $average = $runs / $total_dismisals;
        echo "<p><b>" . $name . "</b> has played <b>" . $innings . "</b> innings in which he remains <b>" . $notouts . "</b> times notout. <br>
         that's why his batting avearge is <b>" . $average . "</b></p><br>";
    }
    battingAverage("rohit sharma" , 217 , 9115 , 32);
    battingAverage("virat kohli" , 242 , 12040 , 39);
    battingAverage("m.s.dhoni" , 297 , 10773 , 84);
?>