<?php
$objectif = "Compléments à 1000 (Cas simples).";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i=11; $i<100; $i++) {
	$i10=$i*10;
	$tmp[] = array('q'=>"1000 = $i10 + ", 's'=>1000-$i10);
	$tmp[] = array('q'=>"1000 - $i10 = ", 's'=>1000-$i10);
}
