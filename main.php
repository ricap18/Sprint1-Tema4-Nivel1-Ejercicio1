<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>

<?php

require_once "clases.php";
$persona1 = new Employee();
$persona1 -> initialize("Juan", 3500);
$persona1 -> print();
echo "</br>";
$persona2 = new Employee();
$persona2 -> initialize("Paula", 7800);
$persona2 -> print();

?>