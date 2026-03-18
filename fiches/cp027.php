<?php
$objectif = "Sommes et différences autour de 5.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i<=5; $i++)
{
	$tmp[] = array('q'=>"$i + 5 = ", 's'=>$i+5);
	$tmp[] = array('q'=>"5 + $i = ", 's'=>$i+5);
	$tmp[] = array('q'=>"5 - $i = ", 's'=>5-$i);
}
for ($i = 1; $i<=5; $i++)
{
	$tmp[] = array('q'=>"$i + 5 = ", 's'=>$i+5);
	$tmp[] = array('q'=>"5 + $i = ", 's'=>$i+5);
	$tmp[] = array('q'=>"5 - $i = ", 's'=>5-$i);
}
for ($i = 1; $i<=5; $i++)
{
	$tmp[] = array('q'=>"$i + 5 = ", 's'=>$i+5);
	$tmp[] = array('q'=>"5 + $i = ", 's'=>$i+5);
	$tmp[] = array('q'=>"5 - $i = ", 's'=>5-$i);
}
