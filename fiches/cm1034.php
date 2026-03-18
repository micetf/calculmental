<?php
$objectif = "Calculer sur des nombres entiers de dizaines, de centaines ou de milliers.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 0; $i < 40; $i++)
{
	$a=rand(1,9)*pow(10,rand(1,3));
	$b=rand(1,9)*pow(10,rand(1,3));
	
	$a > $b ? $tmp[] = array('q'=>"$a - $b = ", 's'=>$a-$b) : $tmp[] = array('q'=>"$b - $a = ", 's'=>$b-$a);
}
