<?php
$objectif = "Diviser par 2 ou par 4.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=3;

for ($i = 1; $i <= 25; $i++)
{
	$m=2*$i;
	$tmp[] = array('q'=>"$m divisé par 2 ? ", 's'=>$i);
	$m=4*$i;
	$tmp[] = array('q'=>"$m divisé par 4 ? ", 's'=>$i);
}
for ($j = 1; $j <= 25; $j++)
{
	$i = 10*$j;
	$m=2*$i;
	$tmp[] = array('q'=>"$m divisé par 2 ? ", 's'=>$i);
	$m=4*$i;
	$tmp[] = array('q'=>"$m divisé par 4 ? ", 's'=>$i);
}
