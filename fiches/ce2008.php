<?php
$objectif = "Multiplier par 10.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i < 30; $i++)
{
	$tmp[] = array('q'=>"10 x $i = ", 's'=>10*$i);
	$tmp[] = array('q'=>"$i x 10 = ", 's'=>10*$i);
}
