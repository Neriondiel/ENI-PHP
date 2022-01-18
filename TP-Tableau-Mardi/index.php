<?php 
//Etape 1
$etape1 = range(0, 41);
var_dump($etape1);

//Etape 2
shuffle($etape1);
var_dump($etape1);

//Etape 3
$etape3 = array_rand($etape1, 16);
var_dump($etape3);

//Etape 4 
$etape4 = array_merge($etape3,$etape3);
var_dump($etape4);

//Etape 5
shuffle($etape4);
var_dump($etape4);

//Etape 6
echo "<br> Majong <br>";
foreach($etape4 as $nom){
    echo "<img src='./majhong/images/".$nom.".jpg'>";
}
?>