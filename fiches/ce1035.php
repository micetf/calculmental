<?php
$objectif = "Multiplier par 2 et par 5.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i=0; $i<=10; $i++)
{
		$tmp[]= array('q'=>"$i x 5 = ",'s'=>$i*5);
		$tmp[]= array('q'=>"5 x $i = ",'s'=>$i*5);
		$tmp[]= array('q'=>"$i x 2 = ",'s'=>$i*2);
		$tmp[]= array('q'=>"2 x $i = ",'s'=>$i*2);
}
