<?php
$objectif = "Ajouter un dixième (0,1).";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 0; $i < 40; $i++)
{
	
	$n=rand(1,99);
	$tmp[] = array('q'=>ereg_replace('\.',',',($n/10))." + 0,1 = ", 's'=>0.1+$n/10);
}