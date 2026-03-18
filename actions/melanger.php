<?php

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
