<?php
$objectif = "Sommes et différences (résultats jusqu'à 19).";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i=1; $i<10; $i++)
{
	for ($j=1; $j <= 10; $j++)
	{
		$tmp[]= array('q'=>"$i + $j = ",'s'=>$i+$j);
		$tmp[]= array('q'=>"$j + $i = ",'s'=>$i+$j);
	}
}
for ($i=1; $i<10; $i++)
{
	for ($j=$i ; $j <=10; $j++)
	{
		$tmp[]= array('q'=>"$j - $i = ",'s'=>$j-$i);
		$tmp[]= array('q'=>"$j = $i + ",'s'=>$j-$i);
	}
}
