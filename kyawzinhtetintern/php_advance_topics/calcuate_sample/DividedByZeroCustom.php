<?php


class DividedByZeroCustom extends Exception{
    protected $message="bye bye";

    public function __toString(){
        return __CLASS__ . " " . $this->message;
    }
}