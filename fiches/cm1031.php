<?php
$objectif = "Compléter à la centaine supérieure ou soustraire d'une centaine entière.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=3;

for ($i = 1; $i < 100; $i++)
{
	for ($j=1;$j<10;$j++)
	{
		$j100=$j*100;
		$j99=$j100-$i;
		$tmp[] = array('q'=>"$j100 moins $i ? ", 's'=>$j100-$i);
		$tmp[] = array('q'=>"$j99 pour aller à $j100 ? ", 's'=>$i);
	}
}
