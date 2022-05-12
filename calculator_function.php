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





// echo dividetoend(1,2);
// echo add(1,2);
// echo multiply(1,2);
// echo substract(1,2);

if(isset($_POST['submit'])){
    $a=$_POST['a'];
    $b=$_POST['b'];

    switch($_POST['mode']){
        case "add":
            echo add($a,$b);
            break;
        case "mul":
            echo multiply($a,$b);
            break;
        case "sub":
            echo substract($a,$b);
            break;
        case "mod":
            echo mod($a,$b);
            break;
    }
}
