<?php
$objectif = "Maîtriser les tables de multiplication (3, 6 et 9).";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i <= 10; $i++)
{
	$p3=3*$i;
	$p6=6*$i;
	$p9=9*$i;
	
	$tmp[] = array('q'=>"3 x $i = ", 's'=>3*$i);
	$tmp[] = array('q'=>"$i x 3 = ", 's'=>3*$i);
	$tmp[] = array('q'=>"$p3 = $i x ", 's'=>$p3/$i);
	$tmp[] = array('q'=>"6 x $i = ", 's'=>6*$i);
	$tmp[] = array('q'=>"$i x 6 = ", 's'=>6*$i);
	$tmp[] = array('q'=>"$p6 = $i x ", 's'=>$p6/$i);
	$tmp[] = array('q'=>"9 x $i = ", 's'=>9*$i);
	$tmp[] = array('q'=>"$i x 9 = ", 's'=>9*$i);
	$tmp[] = array('q'=>"$p9 = $i x ", 's'=>$p9/$i);
}
