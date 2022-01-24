<?php
// include
// include_once
// require
// require_once
require_once 'Personne.class.php';

$p = new Personne('Jean','DUJARDIN');

$p->age = 18;
var_dump($p);
echo $p->getFullName();

$p2 = new StdClass();
$p2->nom = 'WILLIS';
$p2->prenom = 'Bruce';
var_dump($p2);

$tab["prenom"] = 'BOB';
$tab["nom"] ='EPONGE';
$p3 = (Object) $tab;
var_dump($p3);

//$p4 = (Personne) $p2;
//var_dump($p4);
echo Personne::$i;

$p5 = new Personne();