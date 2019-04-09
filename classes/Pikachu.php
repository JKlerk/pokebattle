<?php

class Pikachu extends Pokemon
{
	public $energytype = "Lightning";
	public $hitpoints = '60';
	public $health = '60';
	public $weakness = ['Fire', 1.5];
	public $resistance = ['Fighting', 20];

	public function __construct($name)
	{
		parent::__construct($name, $this->energytype, $this->hitpoints, $this->health, $this->weakness, $this->resistance, [new Attack('Electric Ring', 50), new Attack('Pika Punch', 20)]);
	}
}