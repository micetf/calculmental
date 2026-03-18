<?php
$objectif = "Réaliser des calculs du type 1000-400, 1000-430.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 10; $i < 100; $i++)
{
	$i10 = 10*$i;
	$tmp[] = array('q'=>"1000 - $i10 = ", 's'=>1000-$i10);
}
