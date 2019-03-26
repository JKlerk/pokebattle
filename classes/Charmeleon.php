<?php

class Charmeleon extends Pokemon
{
	public $energytype = "Fire";
	public $hitpoints = '60';
	public $health = '60';
	public $weakness = ['Water', 2];
	public $resistance = ['Lightning', 10];
	public $attacks = [
		'Head butt',
		10,
		'Flare',
		30
	];

	function __construct($name)
	{
		parent::__construct($name, $this->energytype, $this->hitpoints, $this->health, $this->weakness, $this->resistance, $this->attacks);
	}
}