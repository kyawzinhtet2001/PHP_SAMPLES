<?php
    header("Content-type:text/plain");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Sample PHP File</title>
</head>
<body>
<?php
    //this is comment form myanmar;
    /*
    we won't defeat the myanmar;;; with simicolons army
    */
    echo "This is welcome from php";
    $h=0;
?>



<?php
    echo ++$h;
    echo $H;
    echo gettype($h);
    echo GETTYPE($h);
    ECHO "MYANMAR {$h}";
    
?>


<?php
    define(E_ERROR,1);
    const m="This is a book";
    echo m;
    define("SITE_URL","www.google.com");
    echo "You can visit " . SITE_URL;
?>
</body>
</html>
