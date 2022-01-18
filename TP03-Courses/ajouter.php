<?php
session_start();
//var_dump($_POST["item"]);
if(!isset($_SESSION["courses"])){
    $_SESSION["courses"] = [];
}
var_dump($_SESSION["courses"]);

$item = $_POST["item"];
var_dump($item);

echo "nombre de ligne : ".count($_SESSION["courses"])."<br>";
if(isset($item) && !empty($item)){
    array_push($_SESSION["courses"], $item);
}

//$_SESSION["courses"][count($_SESSION["courses"])+1] = $item;
header('Location:maquette-courses.php');
?>