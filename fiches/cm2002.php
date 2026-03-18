<?php
$objectif = "Connaître la table d'addition (addition de 3 nombres).";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i < 10; $i++)
{
	for ($j = 1 ; $j < 10; $j++)
	{
		for ($k = 1 ; $k < 10; $k++)
		{
			$s=$i+$j+$k;
			$i10 = $i*10;
			$j10 = $j*10;
			$k10 = $k*10;
			$s10= $s*10;
			$tmp[] = array('q'=>"$i10 + $j10 + $k10 = ", 's'=>10*($i+$j+$k));
			$tmp[] = array('q'=>"$s10 = $i10 + $j10 + ", 's'=>10*($s-($i+$j)));
		}
	}
}
