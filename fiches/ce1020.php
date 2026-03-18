<?php
$objectif = "Complément : passage par la dizaine supérieure";

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
		for ($k=1; $k<$j; $k++)
		{
			$i2n = $i20+$k;
			$i1n = $i10+$j;
			$tmp[]= array('q'=>"$i2n = $i1n + ",'s'=>$i2n-$i1n);
		}
	}
}
