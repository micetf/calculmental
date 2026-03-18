<?php

include 'fiches' . DIRECTORY_SEPARATOR . 'classeur.php';

$niveaux  = ['cp', 'ce1', 'ce2', 'cm1', 'cm2'];
$classeur = getObjectifs();

// Construction des boutons de navigation (était dans la vue)
$modeleLien = '<a href="#{niveau}" class="btn btn-primary btn-lg"'
    . ' title="Aller au niveau {niveau}">{niveau}</a>';
$boutons = [];
foreach ($niveaux as $niveau) {
    $boutons[] = preg_replace('/{niveau}/', $niveau, $modeleLien);
}
$vue['liens_niveaux'] = implode(' ', $boutons);

// Préparation des données d'affichage par niveau (était dans la vue)
$vue['niveaux_data'] = [];
foreach ($niveaux as $niveau) {
    $fiches = [];
    foreach ($classeur[$niveau] as $fiche) {
        $reussite = new Reussite($niveau, $fiche['numero']);
        $fiches[] = [
            'numero'   => $fiche['numero'],
            'objectif' => $fiche['objectif'],
            'record'   => $reussite->getRecord(),
            'moyenne'  => $reussite->getMoyenne(),
        ];
    }
    $vue['niveaux_data'][$niveau] = $fiches;
}

$vue['nom'] = 'accueillir.php';
