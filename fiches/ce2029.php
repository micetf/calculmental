<?php
$objectif = "Multiplier par 20.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i < 5; $i++) {
	for ($j=1; $j<10;$j++) {
		$n=($i*10)+$j;
		$tmp[] = array('q'=>"$n x 20 = ", 's'=>$n*20);
	}
	for ($j=1; $j<10;$j++) {
		$n=($i*10)+$j;
		$tmp[] = array('q'=>"20 x $n = ", 's'=>$n*20);
	}
}
