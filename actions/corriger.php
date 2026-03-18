<?php

include 'appreciation.php';

$erreurs = 0;
$vue['temps']   = time() - $_POST['tempsDebut'];
$vue['objectif'] = $_POST['objectif'];
$vue['niveau']  = $_POST['niveau'];
$vue['numero']  = $_POST['numero'];

// Récupérer les solutions depuis la session
$solutions = $_SESSION['solutions'] ?? [];

$nbreCalculs = 0;
$vue['lignes_corrigees'] = [];

foreach ($solutions as $indexLigne => $ligne) {
    $ligneCor = [];
    foreach ($ligne as $indexCol => $cellule) {
        // Réponse saisie par l'élève (peut être absente si case vide)
        $reponse  = $_POST['reponses'][$indexLigne][$indexCol] ?? '';
        $reponse  = preg_replace('/,/', '.', strtolower(trim($reponse)));
        $solution = $cellule['s'];
        $question = $cellule['q'];
        $estCorrect = ((string)$solution === (string)$reponse);

        if (!$estCorrect) {
            $erreurs++;
        }
        $nbreCalculs++;

        $ligneCor[] = [
            'q'          => $question,
            's'          => $solution,
            'r'          => $reponse,
            'est_correct' => $estCorrect,
        ];
    }
    $vue['lignes_corrigees'][] = $ligneCor;
}

// Libérer les solutions de la session après usage
unset($_SESSION['solutions']);
unset($_SESSION['fiche_niveau']);
unset($_SESSION['fiche_numero']);

$vue['nom'] = 'corriger.php';
