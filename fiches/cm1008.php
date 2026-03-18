<?php
$objectif = "Calculer de 20 en 20, de 50 en 50.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i=100;$i<450;$i++)
{
		$tmp[] = array('q'=>"$i + 20 = ", 's'=>$i+20);
		$tmp[] = array('q'=>"$i + 50 = ", 's'=>$i+50);
		$tmp[] = array('q'=>"$i = 20 + ", 's'=>$i-20);
		$tmp[] = array('q'=>"$i = 50 + ", 's'=>$i-50);
}
