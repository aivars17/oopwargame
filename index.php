<?php

spl_autoload_register(function ($class)
{
	include $class . '.php';
});

$nanoSuit = new NanoSuit();
$knife = new Knife();
$player1 = new Player('Petras',2000,$nanoSuit,$knife);


$nanoSuit = new NanoSuit();
$kirvis = new Kirvis();
$player2 = new Player('Jonas',1000,$nanoSuit,$kirvis);

$game = new Game($player1,$player2);

$game->start();
