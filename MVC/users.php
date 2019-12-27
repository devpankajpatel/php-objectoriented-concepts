<?php
    
    class Users extends Dbh{
        protected function getUser($name){
            
            
            $sql="SELECT * FROM user_information WHERE first_name=?";
            
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute([$name]);

            $results=$stmt->fetchAll();
            return $results;
        }

        protected function setUser($firstName,$lastName,$dob){
            $sql = "INSERT INTO user_information(first_name,last_name,dateofbirth) VALUES(?, ?, ?)";
            $stmt=$this->connect()->prepare($sql);   
            $stmt->execute([$firstName,$lastName,$dob]);

        }

    }