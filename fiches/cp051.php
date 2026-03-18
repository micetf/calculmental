<?php
$objectif = "Ajouter un nombre entier de dizaines à un nombre à deux chiffres.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;
for ($i = 11; $i<100; $i++)
{
	for ($j =1; $j <19; $j++)
	{
		$j10 = $j*10;
		if ($j10+$i < 100)
		{
			$tmp[]=array('q'=>"$i + $j10 = ", 's'=>$i+$j10);
			$tmp[]=array('q'=>"$j10 + $i = ", 's'=>$i+$j10);
		}
	}
}
