<?php
$objectif = "Calculer sur les multiples de 25.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i < 10; $i++)
{
	$p25 = $i*25;
	
	$tmp[] = array('q'=>"$i x 25 = ", 's'=>$p25);
	$tmp[] = array('q'=>"25 x $i = ", 's'=>$p25);
	$tmp[] = array('q'=>"$p25 = 25 x ", 's'=>$i);
	for ($j=$i+1;$j<10;$j++)
	{
		$pj25 = $j*25;
		$tmp[] = array('q'=>"$pj25 - $p25 = ", 's'=>$pj25-$p25);
		$tmp[] = array('q'=>"$p25 = $pj25 - ", 's'=>$pj25-$p25);
		$tmp[] = array('q'=>"$pj25 = $p25 + ", 's'=>$pj25-$p25);
	}
}
