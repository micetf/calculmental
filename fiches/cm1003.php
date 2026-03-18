<?php
$objectif = "Calculer de 2 en 2, de 5 en 5, de 10 en 10.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 10; $i <= 100; $i++)
{
	$tmp[] = array('q'=>"$i + 2 = ", 's'=>$i+2);
	$tmp[] = array('q'=>"$i - 2 = ", 's'=>$i-2);
	$tmp[] = array('q'=>"$i + 5 = ", 's'=>$i+5);
	$tmp[] = array('q'=>"$i - 5 = ", 's'=>$i-5);
	$tmp[] = array('q'=>"$i + 10 = ", 's'=>$i+10);
	$tmp[] = array('q'=>"$i - 10 = ", 's'=>$i-10);
}
