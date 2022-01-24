<?php

Class Ville{


    private $nom;
    private $departement;

    function __construct($nom="",$departement="")
    {
        $this->nom =$nom;
        $this->departement =$departement;
    }

    function show(){
        echo "La ville ".$this->nom." est dans le département ".$this->departement;
    }
}

?>