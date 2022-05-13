<?php

    function example1(){
        $file="note.txt";

        $file_open=fopen($file,"a") or die("Error file not found");

        fwrite($file_open,"The quick fox jumps over the lazy dog..");

        fclose($file_open);

        echo "file write successfully";
    }
    
    function example2(){
        $file="note.txt";

        // $file_open=fopen($file,FILE_APPEND) or die("Error file not found");

        file_put_contents($file,"The quick fox jumps over the lazy dog..",FILE_APPEND) or die("cannot write a file");

        // fclose($file_open);

        echo "file write successfully";
    }
    function example4(){
        $file="note.txt";

        if(file_exists($file))
        {
            if(rename($file,"new_file.txt")){
                echo "file renamed successfully";
            }else{
                echo "cannot rename file";
            }
        }
        else{
            echo "file does not exists";
        }

        // echo "file write successfully";
    }
    function example5(){
        $file="note.txt";

        if(file_exists($file))
        {
            if(unlink($file)){
                echo "file deleted successfully";
            }else{
                echo "cannot delete file";
            }
        }
        else{
            echo "file does not exists";
        }

        // echo "file write successfully";
    }


    // example1();
    // example2();
    // example4();
    // example5();

    // echo realpath("new_file.txt");

    //  echo filetype("new_file.png");

    echo mime_content_type("new_file.txt");