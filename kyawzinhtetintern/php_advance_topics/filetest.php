 <?php

    // if(file_exists("./sa.txt")){
    //     $file=fopen("./sa.txt","r");
    // }
    // fwrite($file,"this is a book");
    // try{
    // print(get_resource_type($file));
    // }
    // catch(Exception $e){
    //     // var_dump($e);
    // }
    if(file_exists("./sa.txt")){
        $file=fopen("./sa.txt",'r') or die("Error : file cannot open");
        while (!feof($file)){
            $fread=fgets($file);
            echo "<p>".$fread."</p>";
        }
        unset($fread);

        fclose($file);
    }else{
        die("Error file does not exists");
    }