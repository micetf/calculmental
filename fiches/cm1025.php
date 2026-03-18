<?php
$objectif = "Calculer des compléments à la dizaine supérieure.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 11; $i < 1000; $i++)
{
	$j = 10*ceil($i/10);
	$tmp[] = array('q'=>"$j = $i + ", 's'=>$j-$i);
}
