<?php
$objectif = "Additions du type 25 + 7 ou 27 + 5.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i < 9; $i++)
{
	$i0 = $i*10;

	for ($j = 1; $j < 10; $j++)
	{
		$i5 = $i0 + 5;
		$in = $i0 + $j;
		
		$tmp[] = array('q'=>"$i5 + $j = ", 's'=>$i5+$j);
		$tmp[] = array('q'=>"$in + 5 = ", 's'=>$in+5);
		$tmp[] = array('q'=>"$j + $i5 = ", 's'=>$i5+$j);
		$tmp[] = array('q'=>"5 + $in = ", 's'=>$in+5);
	}
}
