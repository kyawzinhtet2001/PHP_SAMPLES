<?php
    $myanmar="This is a book";
    $i='Thi"s is a book {$myanmar}';
    $p="This's a book {$myanmar}";
    echo($i);
    echo($p);


    $path = realpath(".");
    define("Real_path",realpath("."));
    echo Real_path;
?>