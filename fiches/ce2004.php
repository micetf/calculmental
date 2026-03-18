<?php
$objectif = "Additions du type 30 + 40, 20 + 50.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i < 10; $i++)
{
	$i10 = $i*10;

	for ($j = 1; $j < 10-$i; $j++)
	{
		$j10 = $j*10;

		$tmp[] = array('q'=>"$i10 + $j10 = ", 's'=>$i10+$j10);
		$tmp[] = array('q'=>"$j10 + $i10 = ", 's'=>$i10+$j10);
	}
}
