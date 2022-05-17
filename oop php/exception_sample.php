<?php

try {
    $file_name = "./html_bads/index.html";

    $file = fopen($file_name, 'r');

    if (!$file) {
        throw new Exception("File cannot Open");
    }
    $content=fread($file,filesize($file_name));

    if(!$content){
        throw new Exception("Cannot read the file");
    }
    echo $content;
} catch (Exception $e) {
    echo "<h3> Caught Exception! </h3>";
    echo "<p> Error Message: ".$e->getMessage()." </p>";
    echo "<p> File: ". $e->getFile(). " </p>";
    echo "<p> Line: ".$e->getLine()." </p>";
    echo  "<p> Error Code: ".$e->getCode() ."</p>";

    echo "<p> Trace : " . $e->getTraceAsString() ."</p>";
}
