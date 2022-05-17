<?php

    class Person{
        /* @var $name string */
        public $name;
        public function __construct(string $name){
            $this->name=$name;
        }  
    }

    class Indroduction{
        /* @var $name Person */
        private $person;
        public function __construct(Person $person){
            $this->person=$person;
        }   
        public function sayHello(){
            echo "Hello All, I am ". $this->person->name ." . ";
        }
    }

    $q=new Indroduction(new Person("Kyaw Zin Htet"));
    $q->sayHello();