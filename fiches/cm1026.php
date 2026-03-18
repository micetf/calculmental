<?php
$objectif = "Calculer des produits du type 80 x 4 ou 800 x 4.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i < 10; $i++)
{
	for ($j=1; $j<10; $j++)
	{
		$j10 = 10*$j;
		$j100 = 100*$j;
		$tmp[] = array('q'=>"$i x $j10 = ", 's'=>$j10*$i);
		$tmp[] = array('q'=>"$i x $j100 = ", 's'=>$j100*$i);
		$tmp[] = array('q'=>"$j10 x $i = ", 's'=>$j10*$i);
		$tmp[] = array('q'=>"$j100 x $i = ", 's'=>$j100*$i);
	}
}
