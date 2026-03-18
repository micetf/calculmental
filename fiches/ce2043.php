<?php
$objectif = "Diviser par 5.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

$b=5;

for ($i=1; $i<13; $i++) {
	srand((double) microtime()*1000000);
	$mb = $b*$i;
	$tmp[] = array('q'=>"$mb : $b ? q = ", 's'=>$mb/$b);
	$tmp[] = array('q'=>"$mb : $b ? r = ", 's'=>0);
	$mPlus = $mb+rand(1,$b-1);
	$tmp[] = array('q'=>"$mPlus : $b ? q = ", 's'=>($mPlus-($mPlus%$b))/$b);
	$tmp[] = array('q'=>"$mPlus : $b ? r = ", 's'=>$mPlus%$b);
	$mMoins = $mb-rand(1,$b-1);
	$tmp[] = array('q'=>"$mMoins : $b ? q = ", 's'=>($mMoins-($mMoins%$b))/$b);
	$tmp[] = array('q'=>"$mMoins : $b ? r = ", 's'=>$mMoins%$b);
}
