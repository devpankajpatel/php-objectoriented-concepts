<?php
    class People{
       
        // Static Property and Method
        public static $drikingAge = 21;

        public static function setDrikingAge($newDA){
            self::$drikingAge=$newDA;
        }
        
    // Method
    public function getDA(){
        return self::$drikingAge;
    }
}
?>

  