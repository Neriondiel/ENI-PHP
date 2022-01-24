<?php
require_once 'Ville.class.php';
Class VilleAvecRegion extends Ville{

    protected $region; 
    function __construct($nom="",$departement="", $region="")
	{
		parent::__construct($nom,$departement);
		$this->region =$region;
	}
    
    function showVilleRegion(){
        echo "La ville ".$this->nom." est dans le département "
        .$this->departement." dans la région ".$this->region;
        echo "<br>";
        echo "La ville avec le nom le plus grand : ".parent::$nomPlusGrand;
    }
}

?>