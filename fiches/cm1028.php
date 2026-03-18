<?php
$objectif = "Calculer sur les multiples de 250.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i < 10; $i++)
{
	$i10 = 10*$i;
	$p250 = $i*250;
	
	$tmp[] = array('q'=>"$i10 x 25 = ", 's'=>$p250);
	$tmp[] = array('q'=>"25 x $i10 = ", 's'=>$p250);
	$tmp[] = array('q'=>"$p250 = 250 x ", 's'=>$i);
	for ($j=$i+1;$j<10;$j++)
	{
		$pj250 = $j*250;
		$tmp[] = array('q'=>"$pj250 - $p250 = ", 's'=>$pj250-$p250);		
		$tmp[] = array('q'=>"$p250 = $pj250 - ", 's'=>$pj250-$p250);		
		$tmp[] = array('q'=>"$pj250 = $p250 + ", 's'=>$pj250-$p250);		
	}
}
