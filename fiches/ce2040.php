<?php
$objectif = "Diviser par 25.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i=1; $i<13; $i++) {
	srand((double) microtime()*1000000);
	$m25 = 25*$i;
	$tmp[] = array('q'=>"$m25 : 25 ? q = ", 's'=>$m25/25);
	$tmp[] = array('q'=>"$m25 : 25 ? r = ", 's'=>0);
	$m26 = $m25+rand(1,24);
	$tmp[] = array('q'=>"$m26 : 25 ? q = ", 's'=>($m26-($m26%25))/25);
	$tmp[] = array('q'=>"$m26 : 25 ? r = ", 's'=>$m26%25);
	$m24 = $m25-rand(1,24);
	$tmp[] = array('q'=>"$m24 : 25 ? q = ", 's'=>($m24-($m24%25))/25);
	$tmp[] = array('q'=>"$m24 : 25 ? r = ", 's'=>$m24%25);
}
