<?php
$objectif = "Compléments à la dizaine, centaine ou au millier supérieur.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i < 10; $i++)
{
	for ($j = 1 ; $j < 10; $j++)
	{
			$j10 = $j*10;
			$j1n = $j10+$i;
			$j20 = $j10+10;
			$j1n0 = $j1n*10;
			$j200 = $j20*10;
			$j1n00 = $j1n*100;
			$j2000 = $j20*100;
			$tmp[] = array('q'=>"$j20 = $j1n + ", 's'=>$j20-$j1n);
			$tmp[] = array('q'=>"$j200 = $j1n0 + ", 's'=>$j200-$j1n0);
			$tmp[] = array('q'=>"$j2000 = $j1n00 + ", 's'=>$j2000-$j1n00);
	}
}
