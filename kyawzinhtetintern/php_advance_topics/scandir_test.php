<?php


function outputFiles($path)
{
    if (file_exists("$path") and is_dir("$path")) {
        $result = scandir("$path",1);
        $result = array_diff($result, [".", "..",".git"]);
        if (count($result)>0) {
            foreach ($result as $i) {
                if (is_dir("$path/$i")) {
                    outputFiles("$path/$i");
                } elseif (is_file("$path/$i")) {
                    echo ("$path/$i" . "<br>");
                }
            }
        }
        else{
            echo "This is good";
        }
    } else {
        echo "This is not good";
    }
}

outputFiles("./mydir");
// var_dump($result);
