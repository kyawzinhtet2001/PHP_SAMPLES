<?php
require "./DividedByZeroCustom.php";


function add(int $a, int $b)
{
    return $a + $b;
}
function subtract(int $a, int $b)
{
    return $a - $b;
}
function multiply(int $a, int $b)
{
    return $a * $b;
}
function divide(int $a, int $b): float
{
    // if($b ==0 ){
    //     throw new DividedByZeroCustom();
    // }
    return $a / $b;
}
function mod(int $a, int $b): float
{
    // if($b ==0 ){
    //     throw new DividedByZeroCustom();
    // }
    return $a % $b;
}


    // class Calculator{
    //     function add(int $a,int $b){
    //         return $a+$b;
    //     }
    //     function subtract(int $a,int $b){
    //         return $a-$b;
    //     }
    //     function multiply(int $a,int $b){
    //         return $a*$b;
    //     }
    //     function divide(int $a,int $b) :float{
    //         if($b ==0 ){
    //             throw new DividedByZeroCustom();
    //         }
    //         return $a/$b;
    //     }
    //     function mod(int $a,int $b) :float{
    //         if($b ==0 ){
    //             throw new DividedByZeroCustom();
    //         }
    //         return $a%$b;
    //     }
    // }