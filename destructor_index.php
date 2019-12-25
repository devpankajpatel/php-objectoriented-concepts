<?php
    require("const_Destruct.php");
?>
<!DOCTYPE html>
<html dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Object delete</title>
</head>
<body>
<?php
        $object=new newClass();
        unset($object);
       // echo $object->getProperty() ;
?>
