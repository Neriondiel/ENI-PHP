<?php 
// concatenation
$prix = 42;
$str = "Le prix est de ".$prix." Euros";
$str2 = "Le prix est de $prix Euros";
?>
<h1>Les prix est de <?=$prix?> Euros</h1>

<h2><?=$str ?></h2>

<h2><?=$str2 ?></h2>