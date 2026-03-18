<?php
$objectif = "Réécrire le plus grand des deux nombres.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i<=39; $i++)
{
	for ($j = 1; $j<=39; $j++)
	{
		if ($i != $j) $tmp[] = array('q'=>"$i ou $j ? ", 's'=>max($i,$j));
	}
}
