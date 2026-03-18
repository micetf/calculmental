<?php
$objectif = "Ajouter un nombre à un chiffre à un nombre à deux chiffres.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;
for ($i = 1; $i<9; $i++)
{
	for ($j =1; $j <10; $j++)
	{
		$i15 = ($i*10)+5;
		$tmp[]=array('q'=>"$i15 + $j = ", 's'=>$i15+$j);
	}
}
