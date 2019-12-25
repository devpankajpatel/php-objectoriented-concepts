<?php
    class Persons{
        //properties and methods goes here
        public $first="Pankaj";
        public $last="patel";
        public $age="24";
    }
    Class Pet extends Persons{
        public function owner(){
            $a=$this->first;
            return $a;
        }
    }
?>

  