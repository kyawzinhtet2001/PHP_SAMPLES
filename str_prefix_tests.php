<?php


    $example_string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam ratione deleniti quibusdam architecto eum consectetur maiores harum! Officiis deleniti eveniet atque accusantium unde repudiandae saepe, quis officia provident fugiat quos!";
    $b="myanmar";
    $b1=strtoupper($b);
    echo str_word_count($example_string);
    echo $example_string;

    echo str_replace("ipsum","hello",$example_string);

    echo strrev($example_string);


    echo strcmp($example_string,$b);
    echo strnatcasecmp($b1,$b);
    echo strcasecmp($b1,$b);