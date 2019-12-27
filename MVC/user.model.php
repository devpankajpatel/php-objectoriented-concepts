
<?php
include 'databaseConnection.php';
include 'users.php';
include 'user.view.php';
include_once 'user.controller.php'
?>  

<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>QUERY EXAMPLE</title>
</head>

<body>
    <?php
    $userObj = new UserView();
    $userObj->showUser("Pankaj");

    $userObj1 = new UserController();
    $userObj1->createUser("Sunny", "Shingala", "1994-12-16");
 ?>
