<?php
session_start();
$indice = $_GET["indice"];

echo "indice : ".$indice."<br>";
echo "avant<br>";
var_dump($_SESSION["invite"]);

$_SESSION["invite"][$indice]["statut"] = !$_SESSION["invite"][$indice]["statut"];

echo "après<br>";
var_dump($_SESSION["invite"]);
header('Location:maquette-cocktail.php');
?>