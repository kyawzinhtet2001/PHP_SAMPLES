<?php

    function divied(int $a , int $b){
        if($b==0){
            trigger_error("Divied function : the divisor cannot be zero",E_USER_WARNING);
            return false;
        }
        return $a/$b;
    }
    function customError($errno,$errstr,$errfile,$errline,$errcontext){
        $message="Error : [ $errno ]  $errstr in  $errfile on  line  $errline  \n Variables: " . print_r($errcontext , true) . " \r \n";
        error_log("$message" , 3,"app/error_log.log");
        die("problem try again later");
    }

    set_error_handler("customError",E_ALL);

    echo divied(100,0);
    echo "This will never be created";