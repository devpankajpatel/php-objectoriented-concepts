<?php

class Test extends Dbh{
public function getUser()
    {
      $sql="SELECT * FROM user_information";
      $stmt=$this->connect()->query($sql);   
      while ($row=$stmt->fetch()) {
          echo $row['first_name'] . '<br>';
       
      }
    }

    public function getUsersstmt($firstName , $lastName)
    {
      $sql="SELECT * FROM user_information WHERE first_name = ?  AND last_name = ?";
      $stmt=$this->connect()->prepare($sql);   
      $stmt->execute([$firstName,$lastName]);
      $names=$stmt->fetchAll();

      foreach($names as $name){
          echo $name['dateofbirth'] . '<br>';

      }
    }
    public function setUsersstmt($firstName, $lastName, $dob)
    {
      $sql = "INSERT INTO user_information(first_name,last_name,dateofbirth) VALUES(?, ?, ?)";
      $stmt=$this->connect()->prepare($sql);   
      $stmt->execute([$firstName,$lastName,$dob]);
      }
   
       
      }




