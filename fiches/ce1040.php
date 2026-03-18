<?php
$objectif = "Soustraire des unités, des dizaines ou des centaines entières.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i=1; $i<99; $i++)
{
	for ($j = 1; $j < 10; $j++)
	{
		$i10 = $i*10;
		$j10 = 10 * $j;
		$j100 = 10 * $j10;
		
		if ($i > $j) $tmp[]= array('q'=>"$i - $j = ",'s'=>$i-$j);
		if ($i > $j10) $tmp[]= array('q'=>"$i - $j10 = ",'s'=>$i-$j10);
		if ($i10 > $j100) $tmp[]= array('q'=>"$i10 - $j100 = ",'s'=>$i10-$j100);
	}
}
