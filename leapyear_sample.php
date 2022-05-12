<?php
    declare(strict_types=1);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year Sample</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php
        $year='1995';
        $result=gettype($year%100);
        $result=$year%100;
        echo gettype($year) . "and <br>   {$result} <br>";
        $year=1995;
        $p='555';
        if(($year%400==0 and $year%100==0 )or $year%4==0){
            print("Leap Year <br>");
        }
        else{
            print("not leap Year");
        }


?>
</body>

</html>