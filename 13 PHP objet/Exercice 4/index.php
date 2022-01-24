<?php
    require_once 'VilleAvecRegion.class.php';

    //Exercice 1
    $city = new VilleAvecRegion('Landiviseau','Finistère','Bretagne');
    $city = new VilleAvecRegion('Brest','Finistère','Bretagne');
    $city = new VilleAvecRegion('Quimper','Finistère','Bretagne');
    $city->showVilleRegion();

    var_dump($city);
    
?>