<?php


class Indroduction
{
    /* @var $name string */
    private $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function sayHello():void
    {
        echo "Hello All, I am  $this->name" . " . ";
    }
}

$q = new Indroduction("Kyaw Zin Htet");
$q->sayHello();
