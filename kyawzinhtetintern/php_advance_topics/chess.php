<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <table style="height:240px;">
        <?php

        for ($i = 0; $i < 8; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 8; $j++) {

                if ($i % 2 != 0) {
                    if ($j % 2 == 0) {
                        echo '<td class="bg-light" style="height:30px; width:30px;"></td>';
                    } else {
                        echo "<td class='bg-dark' style='height:30px; width:30px;'></td>";
                    }
                } else {
                    if ($j % 2 == 0) {
                        echo "<td class='bg-dark' style='height:30px; width:30px;'></td>";
                    } else {
                        echo '<td class="bg-light" style="height:30px; width:30px;"></td>';
                    }
                }
            }
            echo "</tr>";
        }
        ?>
        <!-- <tr>
            <td class="bg-dark" style="height:200px; width:200px;">

            </td>
            <td class="bg-light" style="height:200px; width:200px;">

            </td>
        </tr> -->
    </table>
</body>

</html>