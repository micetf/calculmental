<?php
$objectif = "Additions itérées d'un petit nombre. Ajouter...";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i < 10; $i++)
{
	for ($j=2; $j <6; $j++)
	{
		$tmp[]= array('q'=>"$j fois $i = ",'s'=>$i*$j);
	}
}
for ($i = 1; $i < 10; $i++)
{
	for ($j=2; $j <6; $j++)
	{
		$tmp[]= array('q'=>"$j fois $i = ",'s'=>$i*$j);
	}
}
