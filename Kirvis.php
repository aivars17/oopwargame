<?php

/**
* 
*/
class Kirvis implements WeaponInterface
{
	
	public function getName():string 
	{
		return 'Kirvis';
	}
	public function getMaxDamage(): float
	{
		return 200;
	}
	public function getMinDamage():float
	{
		return 50;
	}
}