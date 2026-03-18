<?php
$objectif = "Calculs de complements.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;
for ($i = 1; $i<10; $i++)
{
	for ($j = $i+1; $j <= 10; $j++)
	{
		$tmp[]=array('q'=>"$j = $i + ", 's'=>$j-$i);
	}
	$j = 10 + $i;
	$tmp[]=array('q'=>"$j = 10 + ", 's'=>$j-10);
}
for ($i = 1; $i<6; $i++)
{
	for ($j = $i+1; $j <= 6; $j++)
	{
		$i10 = $i * 10;
		$j10 = $j * 10;
		$tmp[]=array('q'=>"$j10 = $i10 + ", 's'=>$j10-$i10);
	}
}
