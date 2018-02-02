<?php

/**
* 
*/
class NanoSuit implements ArmorInterface
{
	public function getName():string{
		return 'Nano Suit';
	}
	public function getAmount():int
	{
		return 100;
	}
}