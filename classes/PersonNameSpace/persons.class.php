<?php

    namespace PersonNameSpace;
    class Persons{
        //properties 
        public $name;
        public $age;


        public function __construct($name,$age) {
            $this->name=$name;
            $this->age=$age;
        }
        //methods
       
        public function getPerson(){
            $person =$this->name . "is" . $this->age . "year old";
            return $person;
        }
    }
?>