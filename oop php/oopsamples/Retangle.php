<?php
    class Retangle{
        public  $height;
        public  $width;

        public function __construct(int $height=0,int $width=0)
        {
            $this->height=$height;
            $this->width=$width;
        }

        public function getPeremeter(){
            return 2*($this->width+$this->height);
        }

        public function getArea(){
            return ($this->width * $this->height);
        }
    }

?>