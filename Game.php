<?php

/**
* 
*/
class Game
{
	
		public $player1;
		public $player2;
		public $damage;
		public $damage1;

	public function __construct($player1,$player2)
	{
	 	$this->player1 = $player1;
	 	$this->player2 = $player2;
	}

	public function countDamage(WeaponInterface $weapon, Armorinterface $armor)
	{
		return mt_rand($weapon->getMinDamage(),$weapon->getMaxDamage()) * 100 /(100 + $armor->getAmount());
	}

	public function start()
	{
		
		while ($this->player1->getHealth() > 0 && $this->player2->getHealth() > 0 ) {
			
			if($this->player1->getHealth() > 0)
			{
				$this->damage1 = $this->countDamage($this->player1->getWeapon(),$this->player2->getArmor());
				$this->player2->reduceHealth($this->damage1);
				echo $this->player1->getName() . " kirto su " . $this->player1->getWeapon()->getName() . " ir nuo smugio " . $this->player2->getName() . " padare " . $this->damage . " gyvybem zalos<br>";
			}else {
				//$this->player1->getHealth() = 0;
				echo $this->player1->getName() . " DEAD<bre> ";
				echo $this->player2->getName() . " <bold>WIN</bold>";
			}
			if($this->player2->getHealth() > 0)
			{
				$this->damage = $this->countDamage($this->player1->getWeapon(),$this->player2->getArmor());
				$this->player1->reduceHealth($this->damage);
				echo $this->player2->getName() . " kirto su " . $this->player2->getWeapon()->getName() . " ir nuo smugio " . $this->player1->getName() . " padare " . $this->damage . " gyvybem zalos<br>";
			}else {
				//$this->player2->getHealth() = 0;
				echo $this->player2->getName() . " DEAD<br> ";
				echo $this->player1->getName() . " <bold>WIN</bold>";
			}
		}
	}
}