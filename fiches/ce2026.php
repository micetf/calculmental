<?php
$objectif = "La soustraction (calcul en reculant).";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 50; $i < 200; $i++) {
	for ($j=1; $j<10;$j++) {
		$tmp[] = array('q'=>"$i - $j = ", 's'=>$i-$j);
	}
	$dizaine=($i-($i%10))/10;
	if ($dizaine>9) $dizaine -= 10;
	for ($k=1;$k<=($dizaine-($dizaine%2))/2;$k++) {
		for ($u=0;$u<5;$u++) {
			$k10 = $u + $k*10;
			$tmp[] = array('q'=>"$i - $k10 = ", 's'=>$i-$k10);
		}
	}
}
