<?php
$objectif = "Nombres jusqu'à 999 999.";

include 'outils'.DIRECTORY_SEPARATOR.'NombreEntier.php';

$tmp = array();
$l=10;
$c=2;

for ($i = 1; $i < 10; $i++)
{
	for ($j = 1; $j < 10; $j++)
	{
		srand((double) microtime()*1000000);
		$p = rand(0,2);
		$u = $i*pow(10,$p);
		$p = rand(0,2);
		$m = $j*pow(10,$p)*1000;
		
		$k = $u+$m;
		$nbre = new NombreEntier($k);
		$tmp[] = array('q'=>$nbre->convertirEnLettres()." : ", 's'=>$k);
	}
}
