<?php
$objectif = "Ajouter ou retrancher un nombre du type 9, 99...";

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
for ($i = 100; $i < 900; $i++)
{
	$tmp[] = array('q'=>"$i + 99 = ", 's'=>$i+99);
	$tmp[] = array('q'=>"$i - 99 = ", 's'=>$i-99);
}
