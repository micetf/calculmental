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
			$s= $i+$j+$k;
			$tmp[] = array('q'=>"$i + $j + $k = ", 's'=>$i+$j+$k);
			$tmp[] = array('q'=>"$s = $i + $j + ", 's'=>$s-($i+$j));
		}
	}
}
