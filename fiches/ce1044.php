<?php
$objectif = "Additions et soustractions à trous.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i<100; $i++) {
	for ($j = 0; $j<7; $j++) {
		$s=$i+$j;
		if ($s < 100) $tmp[] = array('q'=>"$i + ### = $s", 's'=>$j);
	}
}
for ($i = 1; $i<100; $i++) {
	for ($j = 0; $j<7; $j++) {
		$s=$i-$j;
		if ( $s >= 0 )  $tmp[] = array('q'=>"$i - ### = $s", 's'=>$j);
	}
}