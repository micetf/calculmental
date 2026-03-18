<?php
$objectif = "Calculer le double d'un nombre décimal simple.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=3;

for ($i = 1; $i <7; $i++)
{
	for ($j=1;$j<6;$j++)
	{
		$d = ((10*$i)+$j)/10;
		$d2 = 2*$d;
		$tmp[] = array('q'=>"Le double de ".ereg_replace('\.',',',$d)." ? ", 's'=>$d2);
	}
}