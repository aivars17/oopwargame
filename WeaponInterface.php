<?php

interface WeaponInterface 
	{
		public function getName(): string;
		public function getMaxDamage(): float;
		public function getMinDamage(): float;
	}