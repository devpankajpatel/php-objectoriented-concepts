<?php

    include_once 'simple_class.php';
    //Regular Class 
    $obj =new simpleClass();
    $obj->helloWorld();

    //Anonymous Class
    $newObj = new class(){
        public function helloWorld(){
            echo "This is anonymous class method!";
        }
    };
    $newObj->helloWorld();
?>