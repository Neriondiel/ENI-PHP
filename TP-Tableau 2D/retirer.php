<?php
session_start();
$indice = $_GET["indice"];

echo "indice : ".$indice."<br>";
echo "avant<br>";
var_dump($_SESSION["invite"]);

array_splice($_SESSION["invite"], $indice, 1); 

echo "après<br>";
var_dump($_SESSION["invite"]);
header('Location:maquette-cocktail.php');
?>