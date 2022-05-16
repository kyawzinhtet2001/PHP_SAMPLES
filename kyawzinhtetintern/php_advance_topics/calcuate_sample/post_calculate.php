<?php

include "calculator.php";
// $cal = new Calculator();
// function do_calculate(Calculator $cal)
// {s
//     if (isset($_POST['operator'])) {
//         // $a = $_POST['first_num'];
//         // $b = $_POST['second_num'];

//         $a=filter_input(INPUT_POST,"first_num",FILTER_VALIDATE_INT);
//         $b=filter_input(INPUT_POST,"second_num",FILTER_VALIDATE_INT);

//         if(!($a and $b)) die("Error");
//         $result = 0;
//         switch ($_POST['operator']) {
//             case "+":
//                 $result = $cal->add($a, $b);
//                 break;
//             case "-":
//                 $result = $cal->subtract($a, $b);
//                 break;
//             case "*":
//                 $result = $cal->multiply($a, $b);
//                 break;
//             case "/":
//                 $result = $cal->divide($a, $b);
//                 break;
//             case "%":
//                 $result = $cal->mod($a, $b);
//                 break;
//         }
//         echo ($result);
//     }
// }
function do_calculate()
{
    if (isset($_POST['operator'])) {
        $a = $_POST['first_num'];
        $b = $_POST['second_num'];

       

        
        $result = 0;
        switch ($_POST['operator']) {
            case "+":
                $result = add($a, $b);
                break;
            case "-":
                $result = subtract($a, $b);
                break;
            case "*":
                $result = multiply($a, $b);
                break;
            case "/":
                $result = divide($a, $b);
                break;
            case "%":
                $result = mod($a, $b);
                break;
            default: 
                echo "please go back and go choose valid";
        }
        echo ($result);
    }
}
do_calculate();