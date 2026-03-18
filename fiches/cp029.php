<?php
$objectif = "Compter jusqu'à 59.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i<58; $i++)
{
	$j = $i+1;
	$tmp[] = array('q'=>"$i, $j, ", 's'=>$j+1);
}
