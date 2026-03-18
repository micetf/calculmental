<?php
$objectif = "Calcul réfléchi de la soustraction.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i=1; $i<10; $i++) {
	for ($j=1; $j<10;$j++) {
		$s=$i+$j;
		$tmp[] = array('q'=>"$s - $i = ", 's'=>$s-$i);
		$tmp[] = array('q'=>"$s - $j = ", 's'=>$s-$j);
	}
}
