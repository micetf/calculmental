<?php
$objectif = "Lire, puis écrire des nombres jusqu'à 39.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

$nbres=array("zéro", "un", "deux", "trois", "quatre", "cinq", "six", "sept", "huit", "neuf", "dix", "onze", "douze", "treize", "quatorze", "quinze", "seize", "dix-sept", "dix-huit", "dix-neuf", "vingt", "vingt-et-un", "vingt-deux", "vingt-trois", "vingt-quatre", "vingt-cinq", "vingt-six", "vingt-sept", "vingt-huit", "vingt-neuf", "trente", "trente-et-un", "trente-deux", "trente-trois", "trente-quatre", "trente-cinq", "trente-six", "trente-sept", "trente-huit", "trente-neuf");

for ($i=0;$i<40;$i++) {
	$nbre=$nbres[$i];
	$tmp[]= array('q'=>"$nbre : ",'s'=>$i);
}