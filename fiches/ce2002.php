<?php
$objectif = "Doubles et doubles+1.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i < 10; $i++)
{
	$j=$i+1;
	$tmp[] = array('q'=>"$i + $i = ", 's'=>$i+$i);
	$tmp[] = array('q'=>"$i + $j = ", 's'=>$i+$j);
	$tmp[] = array('q'=>"$j + $i = ", 's'=>$i+$j);
	$tmp[] = array('q'=>"$i + $i + 1 = ", 's'=>$i+$i+1);
	$tmp[] = array('q'=>"1 + $i + $i = ", 's'=>$i+$i+1);
}
