<?php

$vue['recordbattu'] = false;

if ($erreurs == 0) {
    $reussite = new Reussite($_POST['niveau'], $_POST['numero']);
    $reussite->setTemps($vue['temps']);
    $vue['recordbattu'] = $reussite->isRecord() ? true : false;
}

$vue['message'] = messageAppreciation($erreurs, $nbreCalculs);
