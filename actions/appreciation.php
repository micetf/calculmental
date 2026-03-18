<?php

/**
 * Convertit un nombre d'erreurs (sur 20) en appréciation textuelle.
 *
 * @param int $erreur Nombre d'erreurs ramenées sur 20
 * @return string Appréciation (ex : "EXCELLENT ! ", "Très bien ! ", etc.)
 */
function appreciation($erreur)
{
    if ($erreur <= 1) {
        return 'EXCELLENT ! ';
    }
    if ($erreur <= 3) {
        return 'Très bien ! ';
    }
    if ($erreur <= 5) {
        return 'Bien ! ';
    }
    if ($erreur <= 7) {
        return 'Assez Bien ! ';
    }
    if ($erreur <= 9) {
        return 'Moyen ! ';
    }
    return 'Insuffisant ! ';
}

/**
 * Génère un message d'appréciation complet tenant compte du nombre réel d'erreurs
 * et du nombre total de calculs.
 *
 * @param int $erreur      Nombre d'erreurs réelles
 * @param int $nbreCalculs Nombre total de calculs de l'exercice
 * @return string Message d'appréciation complet
 */
function messageAppreciation($erreur, $nbreCalculs)
{
    $errSur20    = ceil(20 * $erreur / $nbreCalculs);
    $appreciation = appreciation($errSur20);

    switch ($appreciation) {
        case 'EXCELLENT ! ':
            if ($erreur == 0) {
                return $appreciation . "Tu n'as fait aucune erreur.";
            }
            if ($erreur == 1) {
                return $appreciation . "Tu n'as fait qu'une erreur.";
            }
            return $appreciation . "Tu n'as fait que $erreur erreurs.";

        case 'Très bien ! ':
            return $appreciation . "Tu n'as fait que $erreur erreurs.";

        case 'Bien ! ':
        case 'Assez Bien ! ':
            return $appreciation . "Tu as fait $erreur erreurs.";

        case 'Moyen ! ':
            return $appreciation . "Tu as tout de même fait $erreur erreurs.";

        case 'Insuffisant ! ':
            return $appreciation . "Tu as fait trop d'erreurs.";

        default:
            return 'ERREUR !';
    }
}
