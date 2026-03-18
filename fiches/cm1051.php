<?php
$objectif = "Diviser un nombre par 50 ou 100.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=3;

for ($i = 1; $i <= 25; $i++)
{
	$m = 50*$i;
	$tmp[] = array('q'=>"$m divisé par 50 = ", 's'=>$i);
}
for ($i = 1; $i <= 25; $i++)
{
	$m = 100*$i;
	$tmp[] = array('q'=>"$m divisé par 100 = ", 's'=>$i);
}
