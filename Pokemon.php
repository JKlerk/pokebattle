<?php

class Pokemon
{
	public $name;
	public $energytype;
	public $hitpoins;
	public $health;
	public $weakness;
	public $resistance;

	public function __construct($name, $energytype, $hitpoints, $health, $weakness, $resistance)
	{
		$this->name = $name;
		$this->energytype = $energytype;
		$this->hitpoints = $hitpoints;
		$this->health = $health;
		$this->weakness = $weakness;
		$this->resistance = $resistance;
	}

	public function __toString(){
		return 'Pokemon: ' . $this->name;
	}
}
?>

<!--function getGender(){
		return $this->gender;
	}

	function setGender($gender){
	 	if ($gender == 'Male'){
	 		$this->gender = 1;
	 	} else if($gender == 'Female'){
	 		$this->gender = 2;
	 	} else{
	 		$this->gender = 0;
	 	}
	} -->