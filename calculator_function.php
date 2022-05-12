<?php


function add($a,$b) : int{
    return $a + $b;
}
function substract($a,$b) : int{
    return $a - $b;
}
function multiply($a,$b) : int{
    return $a * $b;
}
function divide($a,$b) : int{
    return $a / $b;
}
function dividetoend($a,$b) : float{
    return $a /(double) $b;
}
function mod($a,$b) : int{
    return $a % $b;
}





echo dividetoend(1,2);
echo add(1,2);
echo multiply(1,2);
echo substract(1,2);