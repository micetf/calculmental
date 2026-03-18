<?php
$objectif = "Multiple de 3 ou Non (N) ?";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i=1; $i<13; $i++) {
	srand((double) microtime()*1000000);
	$m3 = 3*$i;
	$tmp[] = array('q'=>"$m3, c'est 3 x ", 's'=>$i);
	$tmp[] = array('q'=>"$m3, c'est 3 x ", 's'=>$i);
	$m2 = $m3-rand(1,2);
	$tmp[] = array('q'=>"$m2, c'est 3 x ", 's'=>'n');
	$m4 = $m3+rand(1,2);
	$tmp[] = array('q'=>"$m4, c'est 3 x ", 's'=>'n');
}
