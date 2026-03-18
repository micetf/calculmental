<?php
$objectif = "Compter jusqu'à 1000.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 100; $i<998; $i++)
{
	$j = $i+1;
	$tmp[]= array('q'=>"$i, $j, ",'s'=>$i+2);
}
