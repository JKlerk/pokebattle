<?php

require 'pokemons/Pikachu.php';
require 'pokemons/Charmeleon.php';
require 'Attack.php';
require 'Resistance.php';
require 'Weakness.php';


class Pokemon
{
	protected $name;
	protected $energytype;
	protected $hitpoints;
	protected $health;
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
	}

	/**
	 * Returns name of pokemon.
	 * 
	 * @return string
	 */
	public function getName(){
		return $this->name;
	}

	public function getPokeData($health){
		$health = $this->health;
		return $health;
	}

	/**
	 * Returns color based on energytype of pokemon.
	 * 
	 * @return string
	 */
	public function getColor(){
		if ($this->energytype == 'Lightning'){
			return 'yellow';
		} elseif ($this->energytype == 'Fire') {
			return 'orange';
		} elseif ($this->energytype == 'Water') {
			return 'blue';
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

		return '<span class="font-bold text-'. $this->getColor() .'-dark">' . $this->getName() . '</span> does an <span class="text-'. $this->getColor() .'-dark">'. $attack->name .'</span> attack against <span class="font-bold text-'. $opponent->getColor() .'-dark">'. $opponent->getName() .'</span>, he has <span class="text-red font-bold">' . $health . 'hp</span> left.';
	}
} 
?>