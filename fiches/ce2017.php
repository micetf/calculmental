<?php
$objectif = "Multiple de 25 ou Non (N) ?";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i=1; $i<13; $i++) {
	srand((double) microtime()*1000000);
	$m25 = 25*$i;
	$tmp[] = array('q'=>"$m25, c'est 25 x ", 's'=>$i);
	$tmp[] = array('q'=>"$m25, c'est 25 x ", 's'=>$i);
	$m26 = $m25+rand(1,24);
	$tmp[] = array('q'=>"$m26, c'est 25 x ", 's'=>'n');
	$m24 = $m25-rand(1,24);
	$tmp[] = array('q'=>"$m24, c'est 25 x ", 's'=>'n');
}
