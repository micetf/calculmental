<?php
$objectif = "Complément à une dizaine supérieure quelconque.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i<10; $i++)
{
	for ($j = 1; $j < 10; $j++)
	{
		$j10 = 10 * $j;
		$tmp[]= array('q'=>"$j10 = $i + ",'s'=>$j10-$i);
	}
}
