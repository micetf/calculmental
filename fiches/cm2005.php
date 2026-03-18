<?php
$objectif = "Ajouter ou retrancher un nombre du type 10, 200...";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i < 10; $i++)
{
	$i10 = $i*10;
	$i100 = $i*100;
	for ($j = 1 ; $j < 1000-$i100; $j++)
	{
		$tmp[] = array('q'=>"$j + $i10 = ", 's'=>$j+$i10);
		if ($j>$i10) $tmp[] = array('q'=>"$j - $i10 = ", 's'=>$j-$i10);
		$tmp[] = array('q'=>"$j + $i100 = ", 's'=>$j+$i100);
		if ($j>$i100) $tmp[] = array('q'=>"$j - $i100 = ", 's'=>$j-$i100);
	}
}
