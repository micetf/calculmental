<?php
$objectif = "La soustraction (calcul en avançant).";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 11; $i < 200; $i++) {
	$jMin = ceil($i/2);
	for ($j=$jMin; $j<$i;$j++) {
		$tmp[] = array('q'=>"$i - $j = ", 's'=>$i-$j);
	}
}
