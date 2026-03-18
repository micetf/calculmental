<?php
$objectif = "Calculs sur les dizaines ou des centaines entières.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i=1; $i<10; $i++)
{
	for ($j=1; $j < 10-$i; $j++)
	{
		$i10 = 10 * $i;
		$j10 = 10 * $j;
		$tmp[]= array('q'=>"$i10 + $j10 = ",'s'=>$j10+$i10);
		$tmp[]= array('q'=>"$j10 + $i10 = ",'s'=>$j10+$i10);
		$i100 = 100 * $i;
		$j100 = 100 * $j;
		$tmp[]= array('q'=>"$i100 + $j100 = ",'s'=>$j100+$i100);
		$tmp[]= array('q'=>"$j100 + $i100 = ",'s'=>$j100+$i100);
	}
}
for ($i=1; $i<10; $i++)
{
	for ($j=$i ; $j <10; $j++)
	{
		$i10 = 10 * $i;
		$j10 = 10 * $j;
		$tmp[]= array('q'=>"$j10 - $i10 = ",'s'=>$j10-$i10);
		$tmp[]= array('q'=>"$j10 = $i10 + ",'s'=>$j10-$i10);
		$i100 = 100 * $i;
		$j100 = 100 * $j;
		$tmp[]= array('q'=>"$j100 - $i100 = ",'s'=>$j100-$i100);
		$tmp[]= array('q'=>"$j100 = $i100 + ",'s'=>$j100-$i100);
	}
}
