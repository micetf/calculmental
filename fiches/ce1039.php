<?php
$objectif = "Ajout ou retrait de dizaines et de centaines.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i=1; $i<10; $i++)
{
	$i10 = 10 * $i;
	$i100 = 10 * $i10;
	for ($j10 = 11; $j10 < 100; $j10++)
	{
		$j100 = 10 * $j10;
		
		if ($j10+$i10 < 100) $tmp[]= array('q'=>"$j10 + $i10 = ",'s'=>$i10+$j10);
		if ($j100+$i100 < 1000) $tmp[]= array('q'=>"$j100 + $i100 = ",'s'=>$i100+$j100);
		if ($j10>$i10) $tmp[]= array('q'=>"$j10 - $i10 = ",'s'=>$j10-$i10);
		if ($j100>$i100) $tmp[]= array('q'=>"$j100 - $i100 = ",'s'=>$j100-$i100);
	}
}
