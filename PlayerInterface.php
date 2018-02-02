<?php

interface PlayerInterface
	{
		public function getName(): string;
		public function getHealth(): float;
		public function reduceHealth(float $amount): float;
		public function getWeapon();
		public function getArmor(); 
	}