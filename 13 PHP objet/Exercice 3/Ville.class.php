<?php

Class Ville{


    protected $nom;
    protected $departement;
    public static $nomPlusGrand;

    function __construct($nom="",$departement="")
    {
        $this->nom =$nom;
        $this->departement =$departement;
        if($nom >= $nomPlusGrand){
            self::$nomPlusGrand;
        }
    }

    function show(){
        echo "La ville ".$this->nom." est dans le département ".$this->departement;
    }
}

?>