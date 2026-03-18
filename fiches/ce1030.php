<?php
$objectif = "Produits de petits nombres.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i=1; $i<6; $i++)
{
	for ($j=1; $j < 6; $j++)
	{
		$tmp[]= array('q'=>"$i x $j = ",'s'=>$i*$j);
		$tmp[]= array('q'=>"$j x $i = ",'s'=>$i*$j);
	}
}
for ($i=1; $i<6; $i++)
{
	for ($j=1; $j < 6; $j++)
	{
		$tmp[]= array('q'=>"$i x $j = ",'s'=>$i*$j);
		$tmp[]= array('q'=>"$j x $i = ",'s'=>$i*$j);
	}
}
