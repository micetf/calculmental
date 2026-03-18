<?php

include 'fiches' . DIRECTORY_SEPARATOR . $_GET['niveau'] . $_GET['numero'] . '.php';
include 'melanger.php';

if (empty($vue['size'])) {
    $vue['size'] = 10;
}

$vue['niveau']   = $_GET['niveau'];
$vue['numero']   = $_GET['numero'];
$vue['objectif'] = $objectif;
$vue['donnees']  = melanger($tmp, $l, $c);
$vue['nom']      = 'calculer.php';

// Stocker les solutions en session (retirées du HTML)
$_SESSION['solutions']    = $vue['donnees'];
$_SESSION['fiche_niveau'] = $vue['niveau'];
$_SESSION['fiche_numero'] = $vue['numero'];

// Préparer les données d'affichage SANS les solutions
$vue['donnees_affichage'] = [];
foreach ($vue['donnees'] as $ligne) {
    $ligneAff = [];
    foreach ($ligne as $cellule) {
        $ligneAff[] = ['q' => $cellule['q']];  // on ne passe que la question
    }
    $vue['donnees_affichage'][] = $ligneAff;
}

$reussite = new Reussite($vue['niveau'], $vue['numero']);
$record   = $reussite->getRecord();
$vue['record'] = $record ? $record . ' s.' : 'aucun';
