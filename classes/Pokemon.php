<?php

require 'Pikachu.php';
require 'Charmeleon.php';

class Pokemon
{
	public $name;
	public $energytype;
	public $hitpoins;
	public $health;
	public $weakness;
	public $resistance;
	public $attacks;

	public function __construct($name, $energytype, $hitpoints, $health, $weakness, $resistance, $attacks)
	{
		$this->name = $name;
		$this->energytype = $energytype;
		$this->hitpoints = $hitpoints;
		$this->health = $health;
		$this->weakness = $weakness;
		$this->resistance = $resistance;
		$this->attacks = $attacks;
	}
} 
?>