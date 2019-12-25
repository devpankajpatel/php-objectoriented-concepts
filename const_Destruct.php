<?php

    class newClass{
        //properties 
        public $data="I am property";
        //Constructor
        public function __construct() {
            echo "This Class has been initiated..<br>";
        }
        //methods
        public function setNewProperty($newData){
            $this->data=$newData;
        }
        public function getProperty(){
            return $this->data;
        }
        //Destructor
        public function __destruct()
        {
            echo "<br>This is end of class..<br>";
        }
    }
?>