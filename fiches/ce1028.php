<?php
$objectif = "Soustraction d'un petit ou d'un grand nombre.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 10; $i<50; $i++)
{
	for ($petit = 1; $petit < 9; $petit++)
	{
		$grand = $i - $petit;
		$tmp[]= array('q'=>"$i - $petit = ",'s'=>$i-$petit);
		$tmp[]= array('q'=>"$i - $grand = ",'s'=>$i-$grand);
	}
}
