<?php
$objectif = "Additions du type 9+n, 8+n, 7+n (n<10).";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i < 10; $i++)
{
	$tmp[] = array('q'=>"$i + 9 = ", 's'=>$i+9);
	$tmp[] = array('q'=>"$i + 8 = ", 's'=>$i+8);
	$tmp[] = array('q'=>"$i + 7 = ", 's'=>$i+7);
	$tmp[] = array('q'=>"9 + $i = ", 's'=>$i+9);
	$tmp[] = array('q'=>"8 + $i = ", 's'=>$i+8);
	$tmp[] = array('q'=>"7 + $i = ", 's'=>$i+7);
}
