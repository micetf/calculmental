<?php
$objectif = "Nombres entre 100 et 499.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

$tmp[] = "100 + 1 = ........";
for ($i = 101; $i < 500; $i++)
{
	$tmp[]= array('q'=>"$i + 1 = ",'s'=>$i+1);
	$tmp[]= array('q'=>"$i - 1 = ",'s'=>$i-1);
}
