<?php

    session_start();

    if(isset($_SESSION["serious"])){
        echo $_SESSION['serious'];
        // unset($_SESSION['serious']);
    }
    else{
        echo "nothing here";
    }
    // session_destroy();