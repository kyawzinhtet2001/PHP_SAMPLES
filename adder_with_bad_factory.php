<?php

interface Calculate
{
    function operate($a, $b);
}


class BadFactory
{
    public static $p;
    public static function GetOperator(string $Operator): Calculate
    {
        switch ($Operator) {
            case "add":
                return new Adder();
                break;
            case "a":
                return new Multiply();
                break;
        }
    }
}
class Adder implements Calculate
{
    public function operate($a, $b)
    {
        return $a + $b;
    }
    public function __toString()
    {
        return __CLASS__;
    }
}
class Multiply
{
    public function operate($a, $b)
    {
        return $a + $b;
    }
    public function __toString()
    {
        return __CLASS__;
    }
}

$apk = BadFactory::GetOperator("a");
echo gettype($apk) . "\n";
var_dump( $apk);

echo $apk->operate(1, 2);
