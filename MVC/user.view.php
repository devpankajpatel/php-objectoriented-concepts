<?php
    
    class UserView extends Users{
        public function showUser($name)
        {
            $results=$this->getUser($name); 
            
            echo "Full name :" .$results[0]['first_name'] . " " .$results[0]['last_name']."<br>";
            echo "Date of Birth :" . $results[0]['dateofbirth'];
        }
        

    }