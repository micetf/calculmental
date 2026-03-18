<?php
$objectif = "Lire, puis écrire des nombres jusqu'à 79.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

include 'outils'.DIRECTORY_SEPARATOR.'NombreEntier.php';

for ($i=0;$i<80;$i++) {
	$nbre = new NombreEntier($i);
	$tmp[] = array('q'=>$nbre->convertirEnLettres()." : ", 's'=>$i);
}

