<?php
    require("constructor.php");
?>
<!DOCTYPE html>
<html dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Constructor</title>
</head>
<body>
<?php
        $person1=new Person("VIVEK","BLACK","25");
    
        echo $person1->getName() ;



    /*passing value with object
    $person1=new Person();
    $person1->setName("PANKAJ ");
    echo $person1->name;
    $person2=new Person();
    $person2->setName("PATEL");
     echo $person2->name;*/

?>
</body>
</html>