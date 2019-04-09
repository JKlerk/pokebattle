<?php

require 'Pikachu.php';
require 'Charmeleon.php';
require 'Attack.php';

class Pokemon
{
	public $name;
	public $energytype;
	public $hitpoints;
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
		// Styling
		if ($this->energytype == 'Lightning'){
			$this->color = 'yellow';
		} elseif ($this->energytype == 'Fire') {
			$this->color = 'orange';
		} elseif ($this->energytype == 'Water') {
			$this->color = 'blue';
		}
	}

	public function attack($attack, $opponent)
	{
		$damage = $attack->damage;

		if ($this->energytype == $opponent->weakness[0]) {
			$damage = $attack->damage * $opponent->weakness[1];
		}

		if ($this->energytype == $opponent->resistance[0]) {
			$damage = $attack->damage / $opponent->resistance[1];
		}

		$health = $opponent->health - $damage;

		return '<span class="font-bold">' . $this->name . '</span> does an <span class="text-'. $this->color .'-dark">'. $attack->name .'</span> attack against <span class="font-bold">'. $opponent->name .'</span>, he has <span class="text-red font-bold">' . $health . 'hp</span> left.';
	}
} 
?>