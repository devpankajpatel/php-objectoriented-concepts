<?php

declare(strict_types=1);
include ('class_autoload.inc.php');

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Calculator</title>
</head>

<body>
    <form action="calc.inc.php" method="POST">
        <p>My Own Calculator!</p>
        <input type="number" name="num1" placeholder="First Number">
        <select name="oper">
            <option value="add">Addition</option>
            <option value="sub">Subtraction</option>
            <option value="mul">Multiplication</option>
            <option value="div">Division</option>
        </select>
        <input type="number" name="num2" placeholder="Second Number">
        <button type="submit" name="submit">Calculate</button>
    </form>

</body>

</html>