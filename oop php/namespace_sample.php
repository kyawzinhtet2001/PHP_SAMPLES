<?php


namespace App\myanmar;

echo "You reached ' ". __DIR__ ." ' folder.<br>";




echo "You reached ' " . __LINE__ ."' of File.<br>";
echo "Buruma '" . __FILE__ . "' function. <br>";

class MyanmarWorld{
    public function __construct(){
        echo "This is Myanmar world ' ". __NAMESPACE__ ."' namespace;";
    }
}
