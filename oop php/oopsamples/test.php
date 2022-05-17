<?php
    require "./Retangle.php";

    $obj=new Retangle;
    $obj1=new Retangle(20,30);
    $obj2=new Retangle;



    echo "The Area of the Rectangle is" .$obj->getArea(). "<br>";
    echo "The Area of the Rectangle is" .$obj1->getArea(). "<br>";
    echo "The Area of the Rectangle is" .$obj2->getArea(). "<br>";

    $obj->width=30;
    $obj->height=50;

    $obj2->width=35;
    $obj2->height=50;

    echo "The Area of the Rectangle is" .$obj->getArea(). "<br>";
    echo "The Area of the Rectangle is" .$obj2->getArea(). "<br>";
    
    echo "The Peremeter is ".$obj->getPeremeter(). "<br>";
    echo "The Peremeter is ".$obj2->getPeremeter(). "<br>";
