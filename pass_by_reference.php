<?php

    function g(&$a){
        $a++;
    }


    $a=100;
    for($i=0; $i< 10000000000; $i+=1){
        g($a);
    }
    print($a);  
?>