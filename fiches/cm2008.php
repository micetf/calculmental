<?php
$objectif = "Multiplication de dizaines et de centaines...";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i < 10; $i++) {
	for ($j=1;$j<10;$j++) {
		$j10 = $j*10;
		$p10 = $i*$j10;
		$j100 = $j*100;
		$p100 = $i*$j100;
		$tmp[] = array('q'=>"$i fois $j10 = ", 's'=>$i*$j10);
		$tmp[] = array('q'=>"$j10 fois $i = ", 's'=>$i*$j10);
		$tmp[] = array('q'=>"$p10 = $j10 fois ", 's'=>$i);
		$tmp[] = array('q'=>"$p10 = $i fois ", 's'=>$j10);
		$tmp[] = array('q'=>"$i fois $j100 = ", 's'=>$i*$j100);
		$tmp[] = array('q'=>"$j100 fois $i = ", 's'=>$i*$j100);
		$tmp[] = array('q'=>"$p100 = $j100 fois ", 's'=>$i);
		$tmp[] = array('q'=>"$p100 = $i fois ", 's'=>$j100);
	}
}
