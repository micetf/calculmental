<?php
$objectif = "Maîtriser les tables de multiplication.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i <= 10; $i++)
{
	for ($j=1; $j <=10; $j++)
	{
		$p=$j*$i;
	
		$tmp[] = array('q'=>"$j x $i = ", 's'=>$j*$i);
		$tmp[] = array('q'=>"$i x $j = ", 's'=>$j*$i);
		$tmp[] = array('q'=>"$p = $i x ", 's'=>$j);
	}
}
