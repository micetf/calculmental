<?php
$objectif = "Calculer le triple ou le tiers d'un nombre.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=3;

for ($i = 0; $i <= 33; $i++)
{
	$tiers = $i;
	$triple = 3 * $tiers;
	$tmp[] = array('q'=>"Le triple de $tiers, c'est ", 's'=>$triple);
	$tmp[] = array('q'=>"Le tiers de $triple, c'est ", 's'=>$tiers);
}
for ($i = 4; $i <= 10; $i++)
{
	$tiers = $i*10;
	$triple = 3 * $tiers;
	$tmp[] = array('q'=>"Le triple de $tiers, c'est ", 's'=>$triple);
	$tmp[] = array('q'=>"Le tiers de $triple, c'est ", 's'=>$tiers);
}
for ($i = 2; $i <= 3; $i++)
{
	$tiers = $i*100;
	$triple = 3 * $tiers;
	$tmp[] = array('q'=>"Le triple de $tiers, c'est ", 's'=>$triple);
	$tmp[] = array('q'=>"Le tiers de $triple, c'est ", 's'=>$tiers);
}
