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
// HEIDI 2012
$nom = "Heidi";
$annee = 2012;
$prepared_sql = "INSERT INTO film  VALUES (NULL,:nom,:annee)";
$prepared_query = $pdo->prepare($prepared_sql);
// binder 
$prepared_query->bindParam(":nom",$nom,PDO::PARAM_STR); 
$prepared_query->bindParam(":annee",$annee,PDO::PARAM_INT); 

$prepared_query->execute();

$id = $pdo->lastInsertId();
echo $id;









