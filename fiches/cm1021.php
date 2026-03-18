<?php
$objectif = "Ajouter ou retrancher des nombres du type 15, 45.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=3;

for ($i = 3; $i < 20; $i++)
{
	$i5 = 5*$i;
	for ($j=11;$j<60;$j++)
	{
		$j10=$j*10;
		$tmp[] = array('q'=>"$j10 + $i5 = ", 's'=>$j10+$i5);
		$tmp[] = array('q'=>"$j10 - $i5 = ", 's'=>$j10-$i5);
		$tmp[] = array('q'=>"$i5 pour aller à $j10 ? ", 's'=>$j10-$i5);
	}
}
