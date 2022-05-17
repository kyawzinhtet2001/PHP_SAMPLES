<?php

function birthday_calculator($date){
    $ok=date_parse($date);
    $today = date("j-m-Y");
    $date_new=$ok['day'] . "-" .$ok["month"]. "-" .date("Y");
    // var_dump($date_new);
    $today=new DateTime($today);

    $birthday=new DateTime($date_new);

    $age=$birthday->diff($today);
    // var_dump($age);
    if($age->d == 0 && $age->m==0 && $age->y==0){
        echo "Today is your birthday";
    }
    else{
        // echo $age->format("%y-%m-%d") . "required";
        $total_date=0;
        if($age->m!=0){
            $total_date+=$age->m*30;
        }
        if($age->d!=0){
            $total_date+=$age->d;
        }
        echo $total_date . "days";
    }
}

birthday_calculator("18-10-2001");
