<?php
$objectif = "Complément à la dizaine supérieure";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i < 9; $i++)
{
	$i10 = $i*10;
	$i20 = ($i+1)*10;
	for ($j=1; $j<10; $j++)
	{
		$i1n = $i10+$j;
		$tmp[]= array('q'=>"$i20 = $i1n + ",'s'=>$i20-$i1n);
	}
}
