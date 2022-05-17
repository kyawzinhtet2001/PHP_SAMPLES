<?php
    /* You need to give the number in seconds.... */
    function setTimeOut(int $num):void{
        if($num<0) {
            echo "You cannot add negative number";
            return ;    
        }
        for($i=$num;$i>0;$i--){
            // sleep(1);
            echo("$i second is elapsed .  <br>");
        }
    }
    /* You need to give the number in seconds.... */
    function setTimeOutrecursive(int $num):void{
        if($num<0) {
            echo "You cannot add negative number";
            return ; 
        }
               

        if($num==0){
            // sleep(1);
            echo "$num <br>";
            echo "go <br>";
            return;
        }
        else{
            echo "$num <br>";
            // sleep(1);
            setTimeOutrecursive($num-1);
        }
    }


    class Calculator{
        public function setTimeOutrecursive(int $num):void{
            if($num<0) {
                echo "You cannot add negative number";
                return ; 
            }
                   
    
            if($num==0){
                // sleep(1);
                echo "$num <br>";
                echo "go <br>";
                return;
            }
            else{
                echo "$num <br>";
                // sleep(1);
                setTimeOutrecursive($num-1);
            }
        }
    
    }


    // setTimeOut(1);
    // setTimeOutrecursive(30);
    $cal=new Calculator();
    $cal->setTimeOutrecursive(5);