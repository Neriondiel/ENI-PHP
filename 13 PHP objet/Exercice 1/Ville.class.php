<?php

Class Ville{


    private $nom;
    private $departement;

    function setNom($var=""){
        $this->nom=$var;
    }

    function setDepartement($var=""){
        $this->departement=$var;
    }

    function show(){
        echo "La ville ".$this->nom." est dans le département ".$this->departement;
    }
}

?>