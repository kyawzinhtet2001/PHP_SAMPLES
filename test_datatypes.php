<?php


    $k="boolean";
    $q=true;
    $r=1;
    $a=2.9;
    $u=[];
    $io=[
        1=>"Hello world",
        2=> "This is a book"
    ];

    $iop=0x453A;
    $iok=0b01;
    
    if(phpversion() == "8.1.5" ){
        echo "myanmar";
    }else{
        $y=0123;
    }
     // octal number (as of PHP 8.1.0)

    echo "The type of the variable is k".gettype($k) . "<br> \n ";
    echo "The type of the variable is q".gettype($q) . "<br> \n ";
    echo "The type of the variable is r".gettype($r) . "<br> \n ";
    echo "The type of the variable is a".gettype($a) . "<br> \n ";
    echo "The type of the variable is u".gettype($u) . "<br> \n ";
    echo "The type of the variable is iop".gettype($iop) . "<br> \n ";
    echo "The value of the variable is iop".$iop . "<br> \n ";
    echo "The type of the variable is iok".gettype($iok) . "<br> \n ";
    echo "The type of the variable is $y ".gettype($y) . "<br> \n ";
    echo var_dump($io) . "<br> \n ";
    print_r($io) . "<br> \n ";
    print($io) . "<br> \n ";