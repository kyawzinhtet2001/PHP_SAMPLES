<?php

    $age=78;


    if($age==12){
        echo("You are 12 years old");
    }
    else{
        header("HTTP/1.1 500 I BAN YOU");
        echo "you are not 12 years old So you cannot join";
    }

    class Today{
        private Days $day;
        public function __construct(Days $day){
            $this->day=$day;
        }
    }

    enum Days : int{
        case Mon=0;
        case Tues=1;
        case Wed=2;
        case Thu=3;
        case Fri=4;
        case Sat=5;
        case Sun=6;
    }
    $day_array=array("Mon"=>0,"Thu"=>3);
    $s=date("D");
    echo($s);
    echo($day_array[$s]);
    // switch($day_array[$s]){
    //     case Days::Mon:
    //         echo "its monday";break;
    //     case Days::Thu:
    //         echo "its thusday";break;
    //     default :
    //         echo "ok";
            
    // }
    

?>