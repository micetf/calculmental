<?php
$objectif = "Ajouter ou soustraire un nombre entier de dizaines ou de centaines.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($s=11;$s<1000;$s++) {
	for ($j=1;$j<10;$j++) {
		$j10 = $j*10;
		$j100 = $j*100;
		if ($j10 < $s) {
			$i10 = $s-$j10;
			$tmp[] = array('q'=>"$i10 + $j10 = ", 's'=>$i10+$j10);
			$tmp[] = array('q'=>"$s - $j10 = ", 's'=>$s-$j10);
		}
		if ($j100 < $s) {
			$i100 = $s-$j100;
			$tmp[] = array('q'=>"$i100 + $j100 = ", 's'=>$i100+$j100);
			$tmp[] = array('q'=>"$s - $j100 = ", 's'=>$s-$j100);
		}
	}
}
