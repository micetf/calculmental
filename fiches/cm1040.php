<?php
$objectif = "Compter de 25 en 25.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

$d = 0;
for ($i = 1; $i <= 15; $i++)
{
	$tmp[] = array('q'=>"$d + 25 = ", 's'=>$d+25);
	$tmp[] = array('q'=>($d+10)." + 25 = ", 's'=>$d+35);
	$tmp[] = array('q'=>($d+15)." + 25 = ", 's'=>$d+40);
	$d += 25;
}
