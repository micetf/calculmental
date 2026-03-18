<?php
$objectif = "Ajouter ou retrancher un nombre entier de dizaines.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 100; $i < 900; $i++)
{
	for ($j=1; $j <10; $j++)
	{
		$j10=$j*10;
		$d10 = $i-$j10;
		
		$tmp[] = array('q'=>"$i + $j10 = ", 's'=>$i+$j10);
		$tmp[] = array('q'=>"$i - $j10 = ", 's'=>$d10);
		$tmp[] = array('q'=>"$i = $d10+ ", 's'=>$j10);
	}
}
