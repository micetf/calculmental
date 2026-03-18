<?php
$objectif = "Ecrire en chiffres des nombres décimaux.";

$tmp = array();
$l=10;
$c=2;

function s($n) {
	($n==1) ? $tmp="":$tmp="s";
	return $tmp;
}


for ($i = 1; $i < 40; $i++)
{
	
	$n=rand(20,9999);
	$nbre = "";
	$cu=($n-($n%1000))/1000;
	if ($cu) $nbre .= "$cu unité".s($cu);
	$cd=(($n%1000)-($n%100))/100;
	if ($cd) {
		$nbre ? $nbre .= ", $cd dixième".s($cd):$nbre .= "$cd dixième".s($cd);
	}
	$cc=(($n%100)-($n%10))/10;
	if ($cc) {
		$nbre ? $nbre .= ", $cc centième".s($cc):$nbre .= "$cc centième".s($cc);
	}	
	$cm=($n%10);
	if ($cm) {
		$nbre ? $nbre .= ", $cm millième".s($cm):$nbre .= "$cm millième".s($cm);
	}	
	$nbre .= " ? ";
	$tmp[] = array('q'=>$nbre, 's'=>$n/1000);
}
