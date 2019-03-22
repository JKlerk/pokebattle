<?php


/**
 * 
 */
class EnergyType extends Pokemon
{
	public $energyType = 'Lightning';

	function __construct($name, $hitpoints, $health, $weakness, $resistance)
	{
		parent::__construct($name, $this->energyType, $hitpoints, $health, $weakness, $resistance);
	}
}


?>