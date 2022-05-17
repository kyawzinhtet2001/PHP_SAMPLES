<?php


$json_text='{"myanmar":1,"burma":2,"peter":3}';

var_dump(json_decode($json_text));
echo("<br>");




$json = '{"Peter":65,"Harry":80,"Jhon":78,"Clark":90}';

$arr=json_decode($json,true);

echo $arr['Peter'] . "<br>";
echo $arr['Harry'] . "<br>";
echo $arr['Jhon'] . "<br>";
echo $arr['Clark'] . "<br>";


$obj=json_decode($json);

echo($obj->Peter . "<br>");
echo($obj->Harry . "<br>");
echo($obj->Jhon . "<br>");
echo($obj->Clark . "<br>");


foreach($arr as $key=>$value){
    echo("$key => $value <br>");
}

echo("<hr>");


foreach($obj as $key=>$value){
    echo("$key => $value <br>");
}

echo("<hr>");