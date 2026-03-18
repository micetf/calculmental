<?php
$objectif = "Compléments à 100";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i=11; $i<100; $i++) {
	$tmp[] = array('q'=>"100 = $i + ", 's'=>100-$i);
	$tmp[] = array('q'=>"100 - $i = ", 's'=>100-$i);
}
