<?php
include 'appreciation.php';

$erreurs = 0;
$vue['temps'] = time()-$_POST['tempsDebut'];
$vue['objectif'] = $_POST['objectif'];

$nbreCalculs=0;
foreach($_POST['fiche'] as $ligne) {
	foreach ($ligne as $cellule) {
		$cellule['r'] = preg_replace('/,/','\.',strtolower($cellule['r']));
		if ($cellule['s'] != $cellule['r']) $erreurs++;
		$nbreCalculs++;
	}
}

$vue['nom'] = 'corriger.php';