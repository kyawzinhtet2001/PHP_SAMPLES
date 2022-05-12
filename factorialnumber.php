<?php

    function factorial(int $a){
        if ($a ==0 )
         return 0;
        else{
        
        return $a + factorial($a-1);
        }
    }

    echo "factorial number is ". factorial(5);

?>