<?php
$objectif = "Calculer autour du nombre 60.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=3;

for ($i = 1; $i < 60; $i++)
{
	$tmp[] = array('q'=>"$i pour aller à 60 ? ", 's'=>60-$i);
}
