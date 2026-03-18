<?php
$objectif = "Ajouter et retrancher des nombres comme 8, 9, 11, 12.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 20; $i < 988; $i++)
{
	$tmp[] = array('q'=>"$i + 8 = ", 's'=>$i+8);
	$tmp[] = array('q'=>"$i + 9 = ", 's'=>$i+9);
	$tmp[] = array('q'=>"$i + 11 = ", 's'=>$i+11);
	$tmp[] = array('q'=>"$i + 12 = ", 's'=>$i+12);
	$tmp[] = array('q'=>"$i - 8 = ", 's'=>$i-8);
	$tmp[] = array('q'=>"$i - 9 = ", 's'=>$i-9);
	$tmp[] = array('q'=>"$i - 11 = ", 's'=>$i-11);
	$tmp[] = array('q'=>"$i - 12 = ", 's'=>$i-12);
}
