<?php
function ordonner($a, $b)
{
	if ($a['numero'] == $b['numero']) {
			return 0;
	}
	return ($a['numero'] < $b['numero']) ? -1 : 1;
}
function getObjectifs() {
	$nomRep = dirname(__FILE__);
	$tmp = array();
	$pRep = dir($nomRep);
	while ($nomFichier = $pRep->read()) {
		if (preg_match("/^cp...\.php/",$nomFichier) || preg_match("/^ce1...\.php/",$nomFichier) || preg_match("/^ce2...\.php/",$nomFichier) || 
			preg_match("/^cm1...\.php/",$nomFichier) || preg_match("/^cm2...\.php/",$nomFichier)) {
				$niveau = preg_replace("/^(.*)...\.php$/","\\1",$nomFichier);
				$numero = preg_replace("/^.*(...)\.php$/","\\1",$nomFichier);

				$lignes = file($nomRep.DIRECTORY_SEPARATOR.$nomFichier);
				$objectif = htmlspecialchars(preg_replace("/^.*\"(.*)\";/","\\1",$lignes[1]));
				$tmp[$niveau][] = array('numero'=>$numero,'objectif'=>$objectif);
		}
	}
	$ret=array();
	foreach ($tmp as $niveau => $fiches) {
		$ret[$niveau]=array();
		usort($fiches, "ordonner");
		$ret[$niveau]=$fiches;
	}
	return $ret;
}

