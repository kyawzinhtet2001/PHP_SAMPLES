<?php
    header("Content-type:text/plain");
    $data="sa.txt";

    if(file_exists("sa.txt")){
        $content=file_get_contents($data) or die("Error : Thsi is infected");

        echo $content;
    }else{
        die("Error : This is not exists");
    }

    ?>
    <?php
    $data="sa.txt";

    if(file_exists("sa.txt")){
        $content=file($data) or die("Error : Thsi is infected");
        foreach($content as $i){
            echo $i;
        }
        
    }else{
        die("Error : This is not exists");
    }