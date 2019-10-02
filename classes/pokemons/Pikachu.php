<?php

class Pikachu extends Pokemon
{
	public $energytype = "Lightning";
	public $hitpoints = '60';
	public $health = '60';

	/**
	 * Creates the pokemon based on his parent.
	 * 
	 * @param $name
	 */
	public function __construct($name)
	{
		parent::__construct($name, $this->energytype, $this->hitpoints, $this->health, new Weakness('Fire', 1.5), new Resistance('Fighting', 20), [new Attack('Electric Ring', 50), new Attack('Pika Punch', 20)]);
	}
}