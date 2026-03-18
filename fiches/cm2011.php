<?php
$objectif = "Calculer le double, le quadruple, la moitié et le quart d'un nombre donné.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=3;

for ($i=1; $i<=40; $i++) {
	$moitie = rand(10,500);
	$double=2*$moitie;
	$tmp[] = array('q'=>"Le double de $moitie ? ", 's'=>$double);
	$tmp[] = array('q'=>"La moitié de $double ? ", 's'=>$moitie);
}
for ($i=1; $i<=40; $i++) {
	$quart = rand(10,250);
	$quadruple=4*$quart;
	$tmp[] = array('q'=>"Le quart de $quadruple ? ", 's'=>$quart);
	$tmp[] = array('q'=>"Le quadruple de $quart ? ", 's'=>$quadruple);
}
