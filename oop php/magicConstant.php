<?php
require_once "./namespace_sample.php";
function my(){
    echo "Buruma '" . __FILE__ . "' function. <br>";
}

echo "You reached ' " . __LINE__ ."' of File.<br>";

class Myanmar{
    function helloworld(){
        echo "You reached '". __CLASS__ ." of method of '" . __METHOD__ . " .";
    }
}

echo "You reached ' ". __DIR__ ." ' folder.";


use App\myanmar\MyanmarWorld;

$obj=new MyanmarWorld();