<?php
$objectif = "Ajouter ou retrancher 9 ou 11.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 10; $i < 990; $i++)
{
	$tmp[] = array('q'=>"$i + 9 = ", 's'=>$i+9);
	$tmp[] = array('q'=>"$i - 9 = ", 's'=>$i-9);
}
for ($i = 10; $i < 988; $i++)
{
	$tmp[] = array('q'=>"$i + 11 = ", 's'=>$i+11);
	$tmp[] = array('q'=>"$i - 11 = ", 's'=>$i-11);
}
