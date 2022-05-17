<?php

class EmptyEmailException extends Exception{}
class InvilidEmailException extends Exception{}

// $email = "sumail@@@@gmail.com";
$email="";

try{
if(empty($email)){
    throw new EmptyEmailException("<p>This email is empty. We Need new Email and valid</p>");
}

if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    throw new InvilidEmailException("<p>We Need <b>new Email</b> and valid</p>");
}

echo "<p> This email is valid</p>";
}
catch(EmptyEmailException $e){
    echo $e->getMessage();
}
catch(InvilidEmailException $e){
    echo $e->getMessage();
}