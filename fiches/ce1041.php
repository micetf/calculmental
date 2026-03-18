<?php
$objectif = "Doubles ou moitiés.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($moitie=1; $moitie<=10; $moitie++)
{
	$double = 2 * $moitie;
	$tmp[]= array('q'=>"Moitié de $double : ",'s'=>$double/2);
	$tmp[]= array('q'=>"Double de $moitie : ",'s'=>$moitie*2);
}
for ($moitie=1; $moitie<=10; $moitie++)
{
	$double = 2 * $moitie;
	$tmp[]= array('q'=>"Moitié de $double : ",'s'=>$double/2);
	$tmp[]= array('q'=>"Double de $moitie : ",'s'=>$moitie*2);
}
