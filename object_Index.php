<?php
	require("person.inc.php");
?>
<!DOCTYPE html>
<html dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Class Example</title>
</head>
<body>
<?php

	$pet1 = new Pet();
	echo $pet1->owner();
?>
</body>
</html>

