<?php
$objectif = "Soustractions rencontrées dans la technique en colonnes.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 0; $i < 10; $i++) {
	for ($j=0; $j<10;$j++) {
		($j>=$i)?$n=$j:$n=$j+10;
		$tmp[] = array('q'=>"$n - $i = ", 's'=>$n-$i);
	}
}
