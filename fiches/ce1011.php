<?php
$objectif = "Sommes avec appui sur les doubles.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($k=0;$k<4;$k++)
{
	for ($i = 1; $i<5; $i++)
	{
		$j = $i+1;
		$tmp[]= array('q'=>"$i + $i = ",'s'=>$i+$i);
		$tmp[]= array('q'=>"$i + $j = ",'s'=>$i+$j);

	}
	for ($i = 2; $i<6; $i++)
	{
		$j = $i-1;
		$tmp[]= array('q'=>"$i + $i = ",'s'=>$i+$i);
		$tmp[]= array('q'=>"$i + $j = ",'s'=>$i+$j);

	}
}
