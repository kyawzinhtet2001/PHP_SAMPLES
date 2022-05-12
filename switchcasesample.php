<?php

class Myanmar{
    public static  function get_Member_of_myanmar(string $type){
        switch ($type){
            case strcasecmp("gammer",$type):
                return new Gammer();
                break;
        }
        return new Gammer();
    }
}
class Gammer{
    public $name="blah blah";
    public function playGame(){
        echo('playing games');
    }
}


$m=Myanmar::get_Member_of_myanmar("GAMMER");
print_r($m);
