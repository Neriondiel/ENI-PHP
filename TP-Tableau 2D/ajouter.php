<?php
session_start();

if(isset($_SESSION["invite"]) && isset($_POST["prenom"]) && isset($_POST["nom"]) && isset($_POST["age"])){

    $taille = sizeof($_SESSION["invite"]);
    print_r($taille);

    $_SESSION["invite"][$taille]["prenom"] = $_POST["prenom"];
    $_SESSION["invite"][$taille]["nom"] = $_POST["nom"];
    $_SESSION["invite"][$taille]["age"] = $_POST["age"];
    $_SESSION["invite"][$taille]["statut"] = true;
}

var_dump($_SESSION["invite"]);
header('Location:maquette-cocktail.php');
?>