<?php
$objectif = "Compter jusqu'à 79.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;
for ($i = 1; $i<79; $i++)
{
	$tmp[]=array('q'=>"$i + 1 = ", 's'=>$i+1);
}
for ($i = 2; $i<80; $i++)
{
	$tmp[]=array('q'=>"$i - 1 = ", 's'=>$i-1);
}
