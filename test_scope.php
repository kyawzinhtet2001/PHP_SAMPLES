<?php


$greet="myanmar";
$h=function() use ($greet){
    print_r($greet);
};

function myapp(){
    global $greet;
    echo($greet);
}


function adder(int $a , int $b){
    return $a+$b;
}

$h();

myapp();

echo adder(5,6);

echo mt_rand(0,1);
echo "<br>";

var_dump(  array_rand([1,2,3,4,5,6,7,8,9,0],3));


echo "\n <br>" . mt_getrandmax();

sleep(5);