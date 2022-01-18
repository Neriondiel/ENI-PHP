<?php
echo $_POST['poids']."<br>";
echo $_POST['taille']."<br>";
$poids = floatval($_POST['poids']);
$taille = floatval($_POST['taille']);
$imc = $poids/($taille*$taille);

$str = "Votre tranche est ";

if($imc<18.5){
    $str .="maigreur";
} else if($imc<25){
    $str .="normal";
} else {
    $str .="surpoids";
}
echo $str;
?>