<?php
$objectif = "Nombres au-delà de 1000.";

include 'outils'.DIRECTORY_SEPARATOR.'NombreEntier.php';

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=3;

for ($i = 1; $i < 10; $i++)
{
	for ($j=1;$j<10;$j++) {
		$nbre1 = new NombreEntier(($i*1000)+$j);
		$tmp[] = array('q'=>$nbre1->convertirEnLettres()." : ", 's'=>($i*1000)+$j);
		$nbre2 = new NombreEntier(($i*1000)+$j*10);
		$tmp[] = array('q'=>$nbre2->convertirEnLettres()." : ", 's'=>($i*1000)+($j*10));
		$nbre3 = new NombreEntier(($i*1000)+$j*100);
		$tmp[] = array('q'=>$nbre3->convertirEnLettres()." : ", 's'=>($i*1000)+($j*100));
	}
}
