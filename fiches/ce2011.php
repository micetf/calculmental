<?php
$objectif = "Additions du type 50 + 70, 20 + 90.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i=1; $i<10; $i++) {
	for ($j=1; $j<10;$j++) {
		$i10 = 10*$i;
		$j10 = 10*$j;
		$tmp[] = array('q'=>"$i10 + $j10 = ", 's'=>$i10+$j10);
	}
}
