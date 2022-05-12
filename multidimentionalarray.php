<?php

    $a=array(1,2,array(2,1,3,4,5,array(9,3,4,2,1,3,1)));

    print_r($a);

    $a = array(array(1,2),array(1,2));
    var_dump($a);

    foreach($a as $i){
        foreach($i as $j){
            print($j);
        }
    }


    $a=["hello"=> "myanmmar","ctrl"=>"control"];
    unset($a["hello"]);
    print($a["ctrl"]);
?>