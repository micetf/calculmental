<?php
$objectif = "Calculer la moitié d'un nombre pair.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=3;

for ($i = 1; $i < 500; $i++)
{
	$i2 = 2*$i;
	
	$tmp[] = array('q'=>"La moitié de $i2 ? ", 's'=>$i);
}
