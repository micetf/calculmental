<?php
$objectif = "Compter jusqu'à 1000.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 100; $i<999; $i++)
{
	$tmp[]= array('q'=>"$i + 1 = ",'s'=>$i+1);
}
for ($i = 101; $i<1000; $i++)
{
	$tmp[]= array('q'=>"$i - 1 = ",'s'=>$i-1);
}
