<?php
$objectif = "Sommes de petits nombres (résultats inférieurs à 20).";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;
for ($i = 0; $i<=10; $i++)
{
	for ($j = 0; $j < 10; $j++)
	{
		$tmp[] = array('q'=>"$i + $j = ", 's'=>$i+$j);
		$tmp[] = array('q'=>"$j + $i = ", 's'=>$i+$j);
	}
}
