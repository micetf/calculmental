<?php
$objectif = "Ajouter un nombre entier de dizaines à un nombre à deux chiffres.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;
for ($i = 1; $i<5; $i++)
{
	for ($j =1; $j <6; $j++)
	{
		$i15 = ($i*10)+5;
		$j10 = $j*10;
		$tmp[]=array('q'=>"$i15 + $j10 = ", 's'=>$i15+$j10);
	}
}
for ($i = 1; $i<5; $i++)
{
	for ($j =1; $j <6; $j++)
	{
		$i15 = ($i*10)+5;
		$j10 = $j*10;
		$tmp[]=array('q'=>"$i15 + $j10 = ", 's'=>$i15+$j10);
	}
}
