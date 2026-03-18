<?php
$objectif = "Connaître les tables de multiplication.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i < 10; $i++)
{
	for ($j = 1 ; $j < 10; $j++)
	{
		$p = $i*$j;
		$tmp[] = array('q'=>"$i fois $j = ", 's'=>$p);
		$tmp[] = array('q'=>"$p = $i fois ", 's'=>$j);
	}
}
