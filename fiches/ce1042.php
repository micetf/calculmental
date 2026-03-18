<?php
$objectif = "Doubles ou moitiés.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($moitie=1; $moitie<=10; $moitie++)
{
	$moitie10 = 10 * $moitie;
	$double10 = 2 * $moitie10;
	$tmp[]= array('q'=>"Moitié de $double10 : ",'s'=>$double10/2);
	$tmp[]= array('q'=>"Double de $moitie10 : ",'s'=>$moitie10*2);
}
for ($moitie=1; $moitie<=10; $moitie++)
{
	$moitie10 = 10 * $moitie;
	$double10 = 2 * $moitie10;
	$tmp[]= array('q'=>"Moitié de $double10 : ",'s'=>$double10/2);
	$tmp[]= array('q'=>"Double de $moitie10 : ",'s'=>$moitie10*2);
}
