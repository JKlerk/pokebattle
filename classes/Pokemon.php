<?php

require 'pokemons/Pikachu.php';
require 'pokemons/Charmeleon.php';
require 'Attack.php';
require 'Resistance.php';
require 'Weakness.php';


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

	/**
	 * Make the calculations whenever a pokemon attacks his opponent.
	 * 
	 * @param  $attack
	 * @param  $opponent
	 * @return string
	 */
	public function attack($attack, $opponent)
	{
		$damage = $attack->damage;

		if ($this->energytype == $opponent->weakness->name) {
			$damage = $attack->damage * $opponent->weakness->multiplier;
		}

		if ($this->energytype == $opponent->resistance->name) {
			$damage = $attack->damage - $opponent->resistance->multiplier;
		}

		return $this->takeDamage($opponent, $damage, $attack);
		
	}


	/**
	 * Take the damage, from the attack, and substract it from the health and returns the final output.
	 * 
	 * @param  $opponent
	 * @param  $damage
	 * @param  $attack
	 * @return string
	 */
	public function takeDamage($opponent, $damage, $attack){
		$health = $opponent->health - $damage;

		return '<span class="font-bold text-'. $this->color .'-dark">' . $this->name . '</span> does an <span class="text-'. $this->color .'-dark">'. $attack->name .'</span> attack against <span class="font-bold text-'. $opponent->color .'-dark">'. $opponent->name .'</span>, he has <span class="text-red font-bold">' . $health . 'hp</span> left.';
	}
} 
?>