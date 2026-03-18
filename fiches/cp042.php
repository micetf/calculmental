<?php
$objectif = "Ajouter ou retirer dix.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i<=49; $i++)
{
	$tmp[]=array('q'=>"$i + 10 = ", 's'=>$i+10);
}
for ($i = 10; $i<=59; $i++)
{
	$tmp[]=array('q'=>"$i - 10 = ", 's'=>$i-10);
}
