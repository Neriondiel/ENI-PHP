<?php
//phpinfo();
// se connecter a la base
// login mdp url port database
//3306 8889
define ('LOGIN','root');
define ('MDP','');
define ('HOST','localhost');
define ('BASE','invite');

try{
	$db="mysql:host=".HOST.";dbname=".BASE.";charset=utf8";
	$pdo = new PDO($db,LOGIN,MDP);
	$pdo->setAttribute(
		PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $e){
	echo " PB connection :".$e->getMessage();
}
//----------------------------------------
$sql = "SELECT * FROM film";
// envoie de la rqt
$results = $pdo->query($sql);

// on souhaite avoir le nom des colonnes
$films  = $results->fetchAll(PDO::FETCH_ASSOC);

foreach($films as $f){
	echo $f["nom"]." - ";
	echo $f["annee"]."<br>";
}








