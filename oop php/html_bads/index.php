<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="container">
    <table class="table table-primary table-borderless table-striped my-5 rounded-3 shadow shadow-sm">
        
        <!-- <tr>
            <th scope='col'>Name</th>
            <th scope='col'>Age</th>
            <th scope='col'>School</th>
        </tr> -->
       
        <tbody>
        <?php
            $json='[
                {
                "name" : "John Garg",
                "age"  : "15",
                "school" : "Ahlcon Public school"
                },
                {
                "name" : "Smith Soy",
                "age"  : "16",
                "school" : "St. Marie school"
                },
                {
                "name" : "Charle Rena",
                "age"  : "16",
                "school" : "St. Columba school"
                }
                ]';

            $arr=json_decode($json,true);
            echo "<thead> <tr> ";
            foreach(array_keys($arr[0]) as $j){
                echo "<th role='col'> ".ucfirst($j)." </th>";
            }
            echo "</thead></tr>";
            for($i=0;$i<count($arr);$i++){
                echo "<tr>";
                foreach(array_values($arr[$i]) as $values){
                    echo "<td>" . $values . "</td>";
                }
                echo "</tr>";
            }
            
        ?>
        </tbody>
    </table>
</body>
</html>