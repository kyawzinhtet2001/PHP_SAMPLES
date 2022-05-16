<?php

    function getMinAndMaxOfSingleArray(array $arr){
        return ["min"=>min($arr),"max"=>max($arr)];
    }
    function getMinAndMaxOfMultipleArray(array ...$arr){
        $marged_array=array_merge(...$arr);
        return ["min"=>min($marged_array),"max"=>max($marged_array)];
    }
    $marks1 = array(360,310,310,330,313,375,456,111,256);
    $marks2 = array(350,340,356,330,321);
    $marks3 = array(630,340,570,635,434,255,298);
   
    // $arr=array_merge($marks1,$marks2,$marks3);
    // $k= getMinAndMaxOfSingleArray($arr);
    $k= getMinAndMaxOfMultipleArray($marks1,$marks2,$marks3);
    
    echo "minium is " . $k["min"] . ", maximum is " . $k["max"];
?>



































































































































