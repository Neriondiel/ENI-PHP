<?php
// Personne.class.php
class Personne
{
	private $nom;
	private $prenom;
	public static $i;
	function __construct($prenom="",$nom="")
	{
		$this->nom =$nom;
		$this->prenom =$prenom;
		self::$i++;
	}
	
	function getFullName()
	{
		return $this->prenom." ".$this->nom;
	}
}