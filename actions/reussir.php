<?php
$vue['recordbattu'] = false;

if ($erreurs==0) {
	$reussite = new Reussite($_POST['niveau'],$_POST['numero']);
	$reussite->setTemps($vue['temps']);
	($reussite->isRecord()) ? $vue['recordbattu']='vues'.DIRECTORY_SEPARATOR.'recordBattu.php' : $vue['recordbattu'] = '';
}

$vue['message'] = messageAppreciation($erreurs,$nbreCalculs);
