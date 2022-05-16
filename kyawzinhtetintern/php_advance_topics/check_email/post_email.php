<?php

    if(isset($_POST["submit"])){
        // var_dump($_POST);
        $message=$_POST['inputMessage'];
        $name=$_POST['inputName'];
        $to=$_POST['inputEmail'];
        $from="two@two.com";
        $validated_email=filter_var("(___)".$to,FILTER_SANITIZE_EMAIL);

        $subject=$_POST['inputSubject'];
        var_dump( $validated_email);
        // mail($to,$subject,$message);
        echo "<ul>";
        echo "<li><em>Name:</em>$name</li>";
        echo "<li><em>Email:</em>$to</li>";
        echo "<li><em>message:</em>$message</li>";
        echo "<li><em>subject:</em>$subject</li>";
        echo "</ul>";
    }
    //scope check
    // $q="this is a book";
    // function u(){
    //     global $q;
    //    echo $q;
    // }
    // u();