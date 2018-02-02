<?php

/**
* 
*/
class Knife implements WeaponInterface
{
	
	public function getName():string 
	{
		return 'Peilis';
	}
	public function getMaxDamage(): float
	{
		return 100;
	}
	public function getMinDamage():float
	{
		return 2;
	}
}