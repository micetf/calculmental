<?php
$objectif = "Calculer sur des nombres entiers de dizaines, de centaines ou de milliers.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=3;

for ($i = 0; $i < 40; $i++)
{
	$ta=rand(1,9)*pow(10,rand(1,3));
	$tb=rand(1,9)*pow(10,rand(1,3));
	$tc=rand(1,9)*pow(10,rand(1,3));
	
	$tmp[] = array('q'=>"$ta + $tb + $tc = ", 's'=>$ta+$tb+$tc);
}
