<?php
$objectif = "Multiplier par 12.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=3;

for ($i = 1; $i < 5; $i++) {
	for ($j=1; $j<10;$j++) {
		$n=($i*10)+$j;
		$tmp[] = array('q'=>"12 fois $n = ", 's'=>$n*12);
	}
}
for ($i = 1; $i < 10; $i++) {
	for ($j=1; $j<5;$j++) {
		$n=($i*10)+$j;
		$n10 = $n*10;
		$tmp[] = array('q'=>"12 fois $n = $n10 + ", 's'=>$n*2);
	}
}
