<?php

    function validater($hello){
        if(filter_var($hello,FILTER_VALIDATE_INT)){
            echo "This is valid <br>";
        }
        else{
            echo "Thats not valid <br>";
        }
    }
    function validater_int_with_range($hello,$max,$min){
        if(filter_var($hello,FILTER_VALIDATE_INT,array('options'=>array("min_range"=> $min , "max_range"=> $max)))){
            echo "This is valid <br>";
        }
        else{
            echo "Thats not valid <br>";
        }
    }
    function validater_ip($hello){
        if(filter_var($hello,FILTER_VALIDATE_IP)){
            echo "This is valid <br>";
        }
        else{
            echo "Thats not valid <br>";
        }
    }
    function validater_ip6($hello){
        if(filter_var($hello,FILTER_VALIDATE_IP,FILTER_FLAG_IPV6)){
            echo "This is valid<br>";
        }
        else{
            echo "Thats not valid <br>";
        }
    }
    function validater_email($hello){
        $email = filter_var($hello , FILTER_SANITIZE_EMAIL);
        echo($email);
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "This is valid <br>";
        }
        else{
            echo "Thats not valid <br>";
        }
    }
    function validater_url($hello){
        $url = filter_var($hello , FILTER_SANITIZE_URL);
        if(filter_var($url,FILTER_VALIDATE_URL)){
            echo "This is valid <br>";
        }
        else{
            echo "Thats not valid <br>";
        }
    }
    function validater_url_with_querystrng($hello){
        if(filter_var($hello,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED)){
            echo "This is valid <br>";
        }
        else{
            echo "Thats not valid <br>";
        }
    }
    function validate_zero($hello){
        if(filter_var($hello,FILTER_VALIDATE_INT) === 0 || filter_var($hello,FILTER_VALIDATE_INT)){
            echo "This is valid <br>";
        }
        else{
            echo "Thats not valid <br>";
        }
    }

    validater("2");
    validate_zero(0);
    validater_ip("127.0.0.1");
    validater_ip6("2001:db8:3333:4444:5555:6666:7777:8888");
    validater_email("one@one.com");
    validater_url("https://example.com");
    validater_url_with_querystrng("https://example.comn?my=ok");
    validater_int_with_range(-5,100,-10);
    // var_dump(filter_var("20",FILTER_VALIDATE_INT));
    // var_dump(filter_var("<h1> This is book</h1>",FILTER_SANITIZE_STRING));
    // var_dump(htmlspecialchars("<h1> This is book</h1>"));
    // var_dump(filter_var("2001:db8:3333:4444:5555:6666:7777:8888",FILTER_VALIDATE_IP,FILTER_FLAG_IPV6));
?>