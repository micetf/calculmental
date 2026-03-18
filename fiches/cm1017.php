<?php
$objectif = "Calculer des compléments à 100 ou 1000.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 5; $i < 100; $i+=5)
{
	$i10=10*$i;
	$tmp[] = array('q'=>"100 = $i + ", 's'=>100-$i);
	$tmp[] = array('q'=>"1000 = $i10 + ", 's'=>1000-$i10);
	$tmp[] = array('q'=>"100 - $i = ", 's'=>100-$i);
	$tmp[] = array('q'=>"1000 - $i10 = ", 's'=>1000-$i10);
}
