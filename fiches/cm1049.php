<?php
$objectif = "Ajouter un ou cinq dixièmes (0,1 ou 0,5).";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

$n=0;
for ($i = 0; $i < 15; $i++)
{
	$tmp[] = array('q'=>ereg_replace('\.',',',$n)." + 0,5 = ", 's'=>0.5+$n);
	$tmp[] = array('q'=>ereg_replace('\.',',',($n+0.1))." + 0,5 = ", 's'=>0.6+$n);
	$tmp[] = array('q'=>ereg_replace('\.',',',($n+0.2))." + 0,5 = ", 's'=>0.7+$n);
	$tmp[] = array('q'=>ereg_replace('\.',',',($n+0.3))." + 0,5 = ", 's'=>0.8+$n);
	$tmp[] = array('q'=>ereg_replace('\.',',',($n+0.4))." + 0,5 = ", 's'=>0.9+$n);
	$n +=0.5;
}
$n=0;
for ($i = 0; $i < 15; $i++)
{
	$tmp[] = array('q'=>ereg_replace('\.',',',$n)." + 0,1 = ", 's'=>0.1+$n);
	$tmp[] = array('q'=>ereg_replace('\.',',',$n)." + 0,1 = ", 's'=>0.1+$n);
	$tmp[] = array('q'=>ereg_replace('\.',',',$n)." + 0,1 = ", 's'=>0.1+$n);
	$tmp[] = array('q'=>ereg_replace('\.',',',$n)." + 0,1 = ", 's'=>0.1+$n);
	$tmp[] = array('q'=>ereg_replace('\.',',',$n)." + 0,1 = ", 's'=>0.1+$n);
	$n +=0.1;
}
