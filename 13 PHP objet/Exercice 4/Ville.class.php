<?php

Class Ville{

    protected $nom;
    protected $departement;
    public static $nomPlusGrand;

    function __construct($nom="",$departement="")
    {
        $this->nom =$nom;
        $this->departement =$departement;
        if(strlen($nom) >= strlen(self::$nomPlusGrand)){
            self::$nomPlusGrand=$nom;
        }
    }

    function show(){
        echo "La ville ".$this->nom." est dans le département ".$this->departement;
    }
}

?>