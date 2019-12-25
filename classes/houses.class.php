<?php
    class Houses{
        //properties 
        public $name;
        public $age;


        public function __construct($name,$age) {
            $this->name=$name;
            $this->age=$age;
        }
        //methods
       
        public function getAddress(){
            $person =$this->name ." " .$this->age;
            return $person;
        }
    }
?>