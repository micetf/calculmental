<?php
$objectif = "Calcul d'additions avec formation d'un nouveau millier";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i=1; $i<9; $i++) {
	for ($j=10-$i;$j<10;$j++) {
		$i100=$i*100;
		$j10=10*$j;
		for ($k=$j10+1;$k<$j10+10;$k++) {
			$j100=$k*10;
			$tmp[] = array('q'=>"$i100 + $j100 = ", 's'=>$i100+$j100);
			$tmp[] = array('q'=>"$j100 + $i100 = ", 's'=>$i100+$j100);
		}
	}
}
