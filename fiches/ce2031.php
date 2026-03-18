<?php
$objectif = "Multiplier par 11.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=3;

for ($i = 1; $i < 9; $i++) {
	for ($j=1; $j<10;$j++) {
		$n=($i*10)+$j;
		$tmp[] = array('q'=>"11 fois $n = ", 's'=>$n*11);
		$n10 = $n*10;
		$tmp[] = array('q'=>"11 fois $n = $n10 + ", 's'=>$n);
	}
}
