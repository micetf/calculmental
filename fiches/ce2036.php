<?php
$objectif = "Multiple de 4 ou Non (N) ?";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i=1; $i<13; $i++) {
	srand((double) microtime()*1000000);
	$m4 = 4*$i;
	$tmp[] = array('q'=>"$m4, c'est 4 x ", 's'=>$i);
	$tmp[] = array('q'=>"$m4, c'est 4 x ", 's'=>$i);
	$m2 = $m4-rand(1,2);
	$tmp[] = array('q'=>"$m2, c'est 4 x ", 's'=>'n');
	$m5 = $m4+rand(1,2);
	$tmp[] = array('q'=>"$m5, c'est 4 x ", 's'=>'n');
}
