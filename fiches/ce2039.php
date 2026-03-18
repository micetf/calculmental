<?php
$objectif = "Compléments à 1000.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i=11; $i<100; $i++) {
	$dizaine=$i*10;
	for ($i10=$dizaine;$i10<$dizaine+10;$i10++) {
		$tmp[] = array('q'=>"1000 = $i10 + ", 's'=>1000-$i10);
		$tmp[] = array('q'=>"1000 - $i10 = ", 's'=>1000-$i10);
	}
}
