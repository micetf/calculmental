<?php
$objectif = "Ajouter ou retrancher un nombre du type 11, 101...";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 11; $i < 989; $i++)
{
	$tmp[] = array('q'=>"$i + 11 = ", 's'=>$i+11);
	$tmp[] = array('q'=>"$i - 11 = ", 's'=>$i-11);
}
for ($i = 101; $i < 899; $i++)
{
	$tmp[] = array('q'=>"$i + 101 = ", 's'=>$i+101);
	$tmp[] = array('q'=>"$i - 101 = ", 's'=>$i-101);
}
