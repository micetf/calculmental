<?php
$objectif = "Somme et différence : passage par la dizaine supérieure ou inférieure";

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
			$dif = $i2n - $i1n;
			$tmp[]= array('q'=>"$i1n + $dif = ",'s'=>$i1n+$dif);
			$tmp[]= array('q'=>"$i2n - $dif = ",'s'=>$i2n-$dif);
		}
	}
}
