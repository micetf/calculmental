<?php
$objectif = "Ajouter cinq dixièmes (0,5).";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

$n=0;
for ($i = 0; $i < 40; $i++)
{
	$tmp[] = array('q'=>ereg_replace('\.',',',$n)." + 0,5 = ", 's'=>0.5+$n);
	$n +=0.5;
}
