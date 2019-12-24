<?php
    class Person{
        //properties and methods goes here
        public $first="Pankaj";
        public $last="patel";
        public $age="24";
    }
    Class Pet extends Person{
        public function owner(){
            $a=$this->first;
            return $a;
        }
    }
?>

  