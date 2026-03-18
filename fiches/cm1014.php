<?php
$objectif = "Ajouter ou retrancher un nombre à un chiffre à un nombre inférieur à 1000.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 11; $i < 990; $i++)
{
	for ($j=1; $j <10; $j++)
	{
		$dif = $i-$j;
		$tmp[] = array('q'=>"$i + $j = ", 's'=>$i+$j);
		$tmp[] = array('q'=>"$i - $j = ", 's'=>$i-$j);
		$tmp[] = array('q'=>"$i = $dif + ", 's'=>$j);
	}
}
