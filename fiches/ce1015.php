<?php
$objectif = "Sommes, différences, compléments";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 10; $i < 20; $i++)
{
	for ($j = 1; $j < 10; $j++)
	{
		$k = $i - $j;
		if ($k < 10)
		{
			$tmp[]= array('q'=>"$j + $k = ",'s'=>$j+$k);
			$tmp[]= array('q'=>"$i = $j + ",'s'=>$i-$j);
			$tmp[]= array('q'=>"$i = $k + ",'s'=>$i-$k);
			$tmp[]= array('q'=>"$i - $j = ",'s'=>$i-$j);
			$tmp[]= array('q'=>"$i - $k = ",'s'=>$i-$k);
		}
	}
}
