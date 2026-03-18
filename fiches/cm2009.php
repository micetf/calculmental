<?php
$objectif = "Calculer un complément à la centaine supérieure.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i < 600; $i++) {
	$j = ceil($i/100)*100;
	$tmp[] = array('q'=>"$j = $i + ", 's'=>$j-$i);
}
