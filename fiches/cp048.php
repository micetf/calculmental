<?php
$objectif = "Ajouter un nombre à un chiffre à une dizaine entière.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;
for ($i = 1; $i<10; $i++)
{
	for ($j =1; $j <10; $j++)
	{
		$i10 = $i*10;
		$tmp[]=array('q'=>"$i10 + $j = ", 's'=>$i10+$j);
	}
}
