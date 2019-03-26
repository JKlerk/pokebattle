<?php

class Charmeleon extends Pokemon
{
	public $energytype = "Fire";
	public $hitpoints = '60';
	public $health = '60';
	public $weakness = 'Water';
	public $resistance = 'Lightning';
	public $attacks = [
		'Head butt',
		'Flare' 
	];

	function __construct($name)
	{
		parent::__construct($name, $this->energytype, $this->hitpoints, $this->health, $this->weakness, $this->resistance, $this->attacks);
	}
}