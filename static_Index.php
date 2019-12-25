<?php
    require("static_property_method.php");
?>
<!DOCTYPE html>
<html dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Static Property Method</title>
</head>
<body>
<?php
        $people1=new People();
        
        echo $people1->getDA() ;

        /*For Access static propery and method withaout object
        echo People::$drikingAge;
        People::setDrikingAge(18);
        echo People::$drikingAge;*/

?>
</body>
</html>