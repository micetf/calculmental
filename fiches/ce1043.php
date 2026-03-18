<?php
$objectif = "Nombres jusqu'à 999.";

$tmp = array();
$l=10;
$c=2;

include 'outils'.DIRECTORY_SEPARATOR.'NombreEntier.php';

for ($i=0;$i<1000;$i++) {
	$nbre = new NombreEntier($i);
	$tmp[] = array('q'=>$nbre->convertirEnLettres()." : ", 's'=>$i);
}

