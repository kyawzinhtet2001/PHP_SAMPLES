<?php

    function is_prime(int $num){
        if($num == 1 ){
            return "This is not prime";
        }
        $flag=true;
        for($i=2; $i<ceil($num/2); $i++){
            if(($num%$i)==0){
                $flag=false;
                return "not a prime";
            }
        }
        if($flag)
        return "Prime";
    }

    function is_array_prime(array $num){
        $arr=[];
        foreach($num as $i){
            array_push($arr," $i is  ".is_prime($i));
        }
        return $arr;
    }

    echo is_prime(337);

    $array=array_merge(array(360,310,310,330,313,375,456,111,256),array(350,340,356,330,321), array(630,340,570,635,434,255,298));
    print_r(is_array_prime($array));