<?php
$objectif = "Trouver un quotient en utilisant la table de multiplication.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=3;

for ($i = 2; $i < 10; $i++)
{
	for ($j=1;$j<10*$i;$j++)
	{
		$q=($j-($j%$i))/$i;
		$tmp[] = array('q'=>"$j divisé par $i ? q = ", 's'=>$q);
	}
}
