<?php
$objectif = "Mémorisation de certains doubles et moitiés.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=3;

for ($i = 1; $i <= 20; $i++)
{
	$moitie = 5 * $i;
	$double = 2 * $moitie;
	$tmp[] = array('q'=>"Le double de $moitie, c'est ", 's'=>$double);
	$tmp[] = array('q'=>"La moitié de $double, c'est ", 's'=>$moitie);
}
