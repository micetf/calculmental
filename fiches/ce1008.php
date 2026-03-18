<?php
$objectif = "Ecrire les nombres en lettres.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

include 'outils'.DIRECTORY_SEPARATOR.'NombreEntier.php';

for ($i=0;$i<100;$i++) {
	$nbre = new NombreEntier($i);
	$tmp[] = array('q'=>"$i : ", 's'=>$nbre->convertirEnLettres());
}

$vue['size'] = 20;