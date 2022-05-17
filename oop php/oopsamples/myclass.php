<?php
    
    class myclass{
        public function __construct(){
            echo "The class '" .__CLASS__ ."' is created. <br>";
        }
        public function __destruct(){
            echo "The class '".__CLASS__ . "' is destructed. <br>";
        }
    }
    function middleiscalledmiddle(){
        $obj=new myclass();
        echo ("The end of the file is reached. <br>");
    }
    function middleiscalledlate(){
        $obj=new myclass();
        unset($obj);
        echo("The end of the file is reached. <br>");
    }
    middleiscalledmiddle();
    echo("<br>");
    middleiscalledlate();
?>