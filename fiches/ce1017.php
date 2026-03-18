<?php
$objectif = "Additions itérées d'un petit nombre.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i < 10; $i++)
{
	$tmp[]= array('q'=>"$i + $i = ",'s'=>$i*2);
	$tmp[]= array('q'=>"$i + $i + $i = ",'s'=>$i*3);
	$tmp[]= array('q'=>"$i + $i + $i + $i = ",'s'=>$i*4);
}
for ($i = 1; $i < 10; $i++)
{
	$tmp[]= array('q'=>"$i + $i = ",'s'=>$i*2);
	$tmp[]= array('q'=>"$i + $i + $i = ",'s'=>$i*3);
	$tmp[]= array('q'=>"$i + $i + $i + $i = ",'s'=>$i*4);
}
