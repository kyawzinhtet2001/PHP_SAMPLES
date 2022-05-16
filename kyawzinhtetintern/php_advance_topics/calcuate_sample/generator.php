<?php

    function print_times($num,$times){
        for($i=1;$i<=$times;$i++){
            echo "$num * $i =  " . $num*$i . "<br>";
        }
    }


    if(isset($_POST['operator'])){
        $a=$_POST['first_num'];
        if($a === 0){
            echo "i don't need the zero zero cannot have multiplication... its always zero";
            die();
        }else if(!$a || is_string($a)){
            echo "i bad";
            die();
        }
        print_times($a,10);
        
    }

?>