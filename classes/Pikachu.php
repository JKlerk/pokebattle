<?php

class Pikachu extends Pokemon
{
	public $energytype = "Lightning";
	public $hitpoints = '60';
	public $health = '60';
	public $weakness = ['Fire', 1.5];
	public $resistance = ['Fighting', 20];
	public $attacks = [
		'Electric Ring',
		50,
		'Pika Punch',
		20
	];

	function __construct($name)
	{
		parent::__construct($name, $this->energytype, $this->hitpoints, $this->health, $this->weakness, $this->resistance, $this->attacks);
	}
}