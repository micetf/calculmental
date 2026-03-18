<?php
$objectif = "Diviser un nombre par 5, 10 ou 100.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=3;

for ($i = 1; $i <= 25; $i++)
{
	$m = 5*$i;
	$tmp[] = array('q'=>"$m divisé par 5 = ", 's'=>$i);
}
for ($i = 1; $i <= 25; $i++)
{
	$m = 10*$i;
	$tmp[] = array('q'=>"$m divisé par 10 = ", 's'=>$i);
}
for ($i = 1; $i <= 25; $i++)
{
	$m = 100*$i;
	$tmp[] = array('q'=>"$m divisé par 100 = ", 's'=>$i);
}
