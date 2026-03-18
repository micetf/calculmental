<?php
$objectif = "Ajouter ou soustraire des dizaines entières et compléments.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i=1; $i<10; $i++)
{
	for ($j=1; $j <= 10-$i; $j++)
	{
		for ($k = 1; $k < 10; $k++)
		{
			$i10 = (10 * $i)+$k;
			$j10 = 10 * $j;
			$tmp[]= array('q'=>"$i10 + $j10 = ",'s'=>$i10+$j10);
			$tmp[]= array('q'=>"$j10 + $i10 = ",'s'=>$i10+$j10);
		}
	}
}
for ($i=1; $i<10; $i++)
{
	for ($j=$i ; $j <10; $j++)
	{
		for ($k = 1; $k < 10; $k++)
		{
			$i10 = 10 * $i;
			$j10 = (10 * $j)+$k;
			$tmp[]= array('q'=>"$j10 - $i10 = ",'s'=>$j10-$i10);
			$tmp[]= array('q'=>"$j10 = $i10 + ",'s'=>$j10-$i10);
		}
	}
}
