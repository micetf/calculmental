<?php
$objectif = "Diviser un nombre par 5, 10 ou 25.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i <= 10; $i++)
{
	$m = 5*$i;
	$m10 = 50*$i;
	$tmp[] = array('q'=>"$m : 5 = ", 's'=>$i);
	$tmp[] = array('q'=>"$m10 : 5 = ", 's'=>$i*10);
}
for ($i = 1; $i <= 10; $i++)
{
	$m = 25*$i;
	$tmp[] = array('q'=>"$m : 25 = ", 's'=>$i);
}
for ($i = 1; $i <= 25; $i++)
{
	$m = 10*$i;
	$tmp[] = array('q'=>"$m : 10 = ", 's'=>$i);
}
