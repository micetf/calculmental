<?php
$objectif = "Diviser par 3.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i=1; $i<13; $i++) {
	srand((double) microtime()*1000000);
	$m3 = 3*$i;
	$tmp[] = array('q'=>"$m3 : 3 ? q = ", 's'=>$m3/3);
	$tmp[] = array('q'=>"$m3 : 3 ? r = ", 's'=>0);
	$m26 = $m3+rand(1,2);
	$tmp[] = array('q'=>"$m26 : 3 ? q = ", 's'=>($m26-($m26%3))/3);
	$tmp[] = array('q'=>"$m26 : 3 ? r = ", 's'=>$m26%3);
	$m24 = $m3-rand(1,2);
	$tmp[] = array('q'=>"$m24 : 3 ? q = ", 's'=>($m24-($m24%3))/3);
	$tmp[] = array('q'=>"$m24 : 3 ? r = ", 's'=>$m24%3);
}
