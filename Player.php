<?php

/**
* 
*/
class Player implements PlayerInterface
{
	public $name;
	public $armor;
	public $weapon;
	public $health;
	public $reduceHealth;

	public function __construct($name,$health,$armor,$weapon)
		{
			$this->name = $name;
			$this->armor = $armor;
			$this->health = $health;
			$this->weapon = $weapon;
		}

	public function getName():string
	{
		return $this->name;
	}
	public function getArmor()
	{
		return $this->armor;
	}
	public function getWeapon()
	{
		return $this->weapon;
	}
	public function getHealth():float
	{
		return $this->health;
	}
	public function reduceHealth(float $amount):float
	{
		return $this->health -= $amount;
	}

}