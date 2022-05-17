<?php

    class AutoMobile{
        public $fuel;
        protected $engine;
        private $fuus;
    }

    class Car extends AutoMobile{
        public function __construct(){
            echo "This is '".__CLASS__."' created.";
        }

        
        
    }

    $car= new Car;

    $car->fuel=20;
    // $car->engine="33";
    $car->fuus=90;

    // // echo $car->engine;
     echo $car->fuus;
    // print_r($car);
?>