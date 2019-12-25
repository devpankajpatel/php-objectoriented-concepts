<?php
    include 'autoLoader.inc.php';
?>
<!DOCTYPE html>
<html dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Auto Load Class</title>
</head>
<body>
<?php
       // $person1=new Persons("Pankaj",26);
        $person1=new PersonNameSpace\Persons("Pankaj",26);
        /* For NameSpace
        $person1=new Person\Persons("Pankaj",26);
        */
        echo $person1->getPerson() ;
        echo "<br>";

        $house1=new Houses("Sunny",25);
        echo $house1->getAddress() ;

?>
</body>
</html>