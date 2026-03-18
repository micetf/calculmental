<?php
$objectif = "Multiplier un nombre simple par 20 ou 50.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i < 10; $i++)
{
	$p20 = 20*$i;		
	$p50 = 50*$i;		
	$tmp[] = array('q'=>"$i x 20 = ", 's'=>$i*20);
	$tmp[] = array('q'=>"$i x 50 = ", 's'=>$i*50);
	$tmp[] = array('q'=>"20 x $i = ", 's'=>$i*20);
	$tmp[] = array('q'=>"50 x $i = ", 's'=>$i*50);
	$tmp[] = array('q'=>"$p20 = 20 x ", 's'=>$i);
	$tmp[] = array('q'=>"$p50 = 50 x ", 's'=>$i);
	$tmp[] = array('q'=>"$p20 = $i x ", 's'=>20);
	$tmp[] = array('q'=>"$p50 = $i x ", 's'=>50);
}
