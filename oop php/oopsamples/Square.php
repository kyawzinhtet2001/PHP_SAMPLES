<?php

require "Retangle.php";

class Square extends Retangle
{
    public function __construct(int $side = 0)
    {
        parent::__construct($side, $side);
    }


    public function isSquare():bool{
        if($this->height=== $this->width){
            return true;
        }
        return false;
    }
}

$s = new Square(10);
if($s->isSquare()){
    echo "Area of the square is ";
}
else{
    echo "Area of the rectangle is ";
}
echo $s->getArea();
// echo $s->getPeremeter();
