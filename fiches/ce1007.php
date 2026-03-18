<?php
$objectif = "Compléments à 5 et à 10.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1 ; $i <= 5; $i++)
{
	$tmp[]= array('q'=>"5 = $i +  ",'s'=>5-$i);
	$tmp[]= array('q'=>"10 = $i +  ",'s'=>10-$i);
}
for ($i = 6 ; $i <= 10; $i++)
{
	$tmp[]= array('q'=>"10 = $i +  ",'s'=>10-$i);
}
for ($i = 1 ; $i <= 5; $i++)
{
	$tmp[]= array('q'=>"5 = $i +  ",'s'=>5-$i);
	$tmp[]= array('q'=>"10 = $i +  ",'s'=>10-$i);
}
for ($i = 6 ; $i <= 10; $i++)
{
	$tmp[]= array('q'=>"10 = $i +  ",'s'=>10-$i);
}
for ($i = 1 ; $i <= 5; $i++)
{
	$tmp[]= array('q'=>"5 = $i +  ",'s'=>5-$i);
	$tmp[]= array('q'=>"10 = $i +  ",'s'=>10-$i);
}
for ($i = 6 ; $i <= 10; $i++)
{
	$tmp[]= array('q'=>"10 = $i +  ",'s'=>10-$i);
}
