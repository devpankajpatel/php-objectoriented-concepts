<?php
    
    class UserController extends Users{
        public function createUser($firstName,$lastName,$dob){
            $this->setUser($firstName,$lastName,$dob);

        }

    }