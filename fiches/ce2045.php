<?php
$objectif = "La soustraction en avançant.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 51; $i < 100; $i++) {
	
	$i10=10*$i;
	for ($j=0;$j<6;$j++) {
		$n=1000+($j*100);
		$tmp[] = array('q'=>"$n - $i10 = ", 's'=>$n-$i10);
	}
}
