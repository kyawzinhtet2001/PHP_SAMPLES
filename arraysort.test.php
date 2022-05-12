<?php

    $hello=[1,2,3,4,5];
    var_dump(array_keys($hello));
    echo "<br>";
    krsort($hello);
    var_dump($hello);



    $real_array=new SplFixedArray(5);
    echo $real_array->key();

    $real_array[1]=2;
    print_r($real_array);