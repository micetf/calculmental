<?php
$objectif = "Calculer un complément à un nombre situé dans la centaine supérieure.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i < 500; $i++) {
	$j = ceil($i/100)*100;
	for ($k=$j+1;$k<$j+50;$k++) {
		$tmp[] = array('q'=>"$k = $i + ", 's'=>$k-$i);
	}
}
