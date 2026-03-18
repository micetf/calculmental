<?php
$objectif = "Calculer des expressions comportant des parenthèses.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i=1;$i<10;$i++) {
	for ($j=1;$j<10;$j++) {
		for ($k=1;$k<10;$k++) {
			if ($j+$k < 10) {
				$tmp[] = array('q'=>"$i x ($j + $k) = ", 's'=>$i*($j+$k));
				$tmp[] = array('q'=>"($j + $k) x $i = ", 's'=>$i*($j+$k));
			}
			if ($j>$k) {
				$tmp[] = array('q'=>"$i x ($j - $k) = ", 's'=>$i*($j-$k));
				$tmp[] = array('q'=>"($j - $k) x $i = ", 's'=>$i*($j-$k));
				($i>$j-$k) ? $tmp[] = array('q'=>"$i - ($j - $k) = ", 's'=>$i-($j-$k)) : $tmp[] = array('q'=>"($j - $k) - $i = ", 's'=>($j-$k)-$i);
			}
			$tmp[] = array('q'=>"$i + ($j x $k) = ", 's'=>$i+($j*$k));
			$tmp[] = array('q'=>"($j x $k) + $i = ", 's'=>$i+($j*$k));
			($i>$j*$k) ? $tmp[] = array('q'=>"$i - ($j x $k) = ", 's'=>$i-($j*$k)) : $tmp[] = array('q'=>"($j x $k) - $i = ", 's'=>($j*$k)-$i);
			($i>$j+$k) ? $tmp[] = array('q'=>"$i - ($j + $k) = ", 's'=>$i-($j+$k)) : $tmp[] = array('q'=>"($j + $k) - $i = ", 's'=>($j+$k)-$i);
		}
	}
}
