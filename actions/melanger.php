<?php

/**
 * Mélange aléatoirement un tableau de questions et le réorganise en grille.
 *
 * @param array $tmp Tableau plat de questions (chaque élément : ['q' => ..., 's' => ...])
 * @param int   $l   Nombre de lignes de la grille
 * @param int   $c   Nombre de colonnes de la grille
 * @return array Tableau bidimensionnel [$ligne][$colonne] de questions mélangées
 */
function melanger($tmp, $l, $c)
{
    shuffle($tmp);

    $rep = [];
    $i   = 0;

    for ($ligne = 0; $ligne < $l; $ligne++) {
        for ($colonne = 0; $colonne < $c; $colonne++) {
            $rep[$ligne][$colonne] = $tmp[$i++];
        }
    }
    return $rep;
}
