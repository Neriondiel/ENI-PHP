<?php
session_start();
$tab = $_SESSION["courses"];
$indice = $_GET["indice"];

echo "indice : ".$indice."<br>";
echo "avant<br>";
var_dump($tab);

array_splice($tab, $indice, 1); 
$_SESSION["courses"] = $tab;

echo "après<br>";
var_dump($tab);
header('Location:maquette-courses.php');
?>