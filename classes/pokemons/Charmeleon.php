<?php

class Charmeleon extends Pokemon
{
	public $energytype = "Fire";
	public $hitpoints = '60';
	public $health = '60';

	/**
	 * Creates the pokemon based on his parent.
	 * 
	 * @param $name
	 */
	public function __construct($name)
	{
		parent::__construct($name, $this->energytype, $this->hitpoints, $this->health, new Weakness('Water', 2), new Resistance('Lightning', 10), [new Attack('Head butt', 10),
		new Attack('Flare', 30)]);
	}
}