<?php
$objectif = "Multiplier par 5, 10 ou 25.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=3;

for ($i = 1; $i < 15; $i++)
{
	$tmp[] = array('q'=>"$i fois 5 ? ", 's'=>$i*5);
	$tmp[] = array('q'=>"5 fois $i ? ", 's'=>$i*5);
	$tmp[] = array('q'=>"$i fois 10 ? ", 's'=>$i*10);
	$tmp[] = array('q'=>"10 fois $i ? ", 's'=>$i*10);
	$tmp[] = array('q'=>"$i fois 25 ? ", 's'=>$i*25);
	$tmp[] = array('q'=>"25 fois $i ? ", 's'=>$i*25);
}
