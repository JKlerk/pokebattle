<?php

class Pikachu extends Pokemon
{
	public $energytype = "Lightning";
	public $hitpoints = '60';
	public $health = '60';
	public $weakness = 'Fire';
	public $resistance = 'Fighting';
	public $attacks = [
		'Electric Ring',
		'Pika Punch'
	];

	function __construct($name)
	{
		parent::__construct($name, $this->energytype, $this->hitpoints, $this->health, $this->weakness, $this->resistance, $this->attacks);
	}
}