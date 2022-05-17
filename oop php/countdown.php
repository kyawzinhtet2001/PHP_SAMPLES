<?php
    /* You need to give the number in seconds.... */
    function setTimeOut(int $num){
        for($i=$num;$i>0;$i--){
            // sleep(1);
            echo("$i second is elapsed .  <br>");
        }
    }
    /* You need to give the number in seconds.... */
    function setTimeOutrecursive(int $num){
        if($num==1){
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
    setTimeOut(1);
    setTimeOutrecursive(5);