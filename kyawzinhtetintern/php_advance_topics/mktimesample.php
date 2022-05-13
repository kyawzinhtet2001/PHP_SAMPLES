<?php

$result = date("l", mktime(0, 0, 0, 1, 4, 2014));

$result1 = date("d-m-Y", mktime(0, 0, 0, date("m") + 1, date("d"), date("Y")));
$result2 = date("d-m-Y", mktime(0, 0, 0, date("m") - 30, date("d"), date("Y")));
$result3 = date("d-m-Y", mktime(0, 0, 0, date("m"), date("d") + 135, date("Y")));
$result4 = date("d-m-Y", mktime(0, 0, 0, date("m"), date("d"), date("Y") - 1));
$result4 = date("d-m-Y", mktime(date("h") + 35, 0, 0, date("m"), date("d"), date("Y") - 1));

echo $result . "<br>";
echo $result1 . "<br>";
echo $result2 . "<br>";
echo $result3 . "<br>";
echo $result4 . "<br>";


function get_future()
{
    $result3 = date("d-m-Y", mktime(0, 0, 0, date("m"), date("d") + 135, date("Y")));
    return $result3;
}
