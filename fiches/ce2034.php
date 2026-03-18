<?php
$objectif = "Multiple de 50 ou Non (N) ?";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i=1; $i<13; $i++) {
	srand((double) microtime()*1000000);
	$m50 = 50*$i;
	$tmp[] = array('q'=>"$m50, c'est 50 x ", 's'=>$i);
	$tmp[] = array('q'=>"$m50, c'est 50 x ", 's'=>$i);
	$m26 = $m50+rand(1,49);
	$tmp[] = array('q'=>"$m26, c'est 50 x ", 's'=>'n');
	$m24 = $m50-rand(1,49);
	$tmp[] = array('q'=>"$m24, c'est 50 x ", 's'=>'n');
}
