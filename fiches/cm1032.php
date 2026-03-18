<?php
$objectif = "Multiplier et diviser un nombre par 10 ou par 100.";

$tmp = array();
$l=10;
$c=2;

for ($i = 1; $i < 50; $i++)
{
	$i10=$i*10;
	$i100=$i*100;
	$tmp[] = array('q'=>"$i fois 10 ? ", 's'=>$i10);
	$tmp[] = array('q'=>"$i fois 100 ? ", 's'=>$i100);
	$tmp[] = array('q'=>"10 fois $i ? ", 's'=>$i10);
	$tmp[] = array('q'=>"100 fois $i ? ", 's'=>$i100);
	$tmp[] = array('q'=>"Combien de fois 10 dans $i10 ? ", 's'=>$i);
	$tmp[] = array('q'=>"Combien de fois 100 dans $i100 ? ", 's'=>$i);
}