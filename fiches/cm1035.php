<?php
$objectif = "Calculer des produits du type 70 x 8, 700 x 8.";

$tmp = array();
$l=10;
$c=2;

for ($i = 1; $i < 10; $i++)
{
	$n10=10*rand(1,9);
	$n100=100*rand(1,9);
	$i10=$i*$n10;
	$i100=$i*$n100;
	$tmp[] = array('q'=>"$i fois $n10 ? ", 's'=>$i10);
	$tmp[] = array('q'=>"$i fois $n100 ? ", 's'=>$i100);
	$tmp[] = array('q'=>"$n10 fois $i ? ", 's'=>$i10);
	$tmp[] = array('q'=>"$n100 fois $i ? ", 's'=>$i100);
	$tmp[] = array('q'=>"Combien de fois $n10 dans $i10 ? ", 's'=>$i);
	$tmp[] = array('q'=>"Combien de fois $n100 dans $i100 ? ", 's'=>$i);
	$tmp[] = array('q'=>"Combien de fois $i dans $i10 ? ", 's'=>$n10);
	$tmp[] = array('q'=>"Combien de fois $i dans $i100 ? ", 's'=>$n100);
}
