<?php
    function get_something_new(){
        echo "nothing new around here! You need to call argument function to get something new ........";
    }
    function get_chinese_character(){
        echo "no you cannot get something new";
    }
    function get_array(){
        return [
            "hello"=>"aung aung"
        ];
    }
    function produce_newFont(string $fontname,int $size=5){
        echo "Myanmar thu ka font is    {$fontname}              {$size}";
    }
    get_something_new();
    get_chinese_character();
    $array=get_array();
    var_dump($array);
    produce_newFont("Times New Norman");
    echo date('l',mktime(1));
    


    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    var_dump($GLOBALS);
?>