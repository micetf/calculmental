<?php
function appreciation($erreur) {
	if ($erreur == 0 || $erreur == 1) return "EXCELLENT ! ";
	if ($erreur == 2 || $erreur == 3) return "Très bien ! ";
	if ($erreur == 4 || $erreur == 5) return "Bien ! ";
	if ($erreur == 6 || $erreur == 7) return "Assez Bien ! ";
	if ($erreur == 8 || $erreur == 9) return "Moyen ! ";
	if ($erreur > 9) return "Insuffisant ! ";
}

function messageAppreciation($erreur,$nbreCalculs) {
	$errSur20 = ceil(20*$erreur/$nbreCalculs);
	$appreciation=appreciation($errSur20);
	switch ($appreciation) {
		case 'EXCELLENT ! ' :
			if ($erreur==0) return $appreciation." Tu n'as fait aucune erreur.";
			if ($erreur==1) return $appreciation." Tu n'as fait qu'une erreur.";
			if ($erreur>1) return $appreciation." Tu n'as fait que $erreur erreurs.";
			break;
		case 'Très bien ! ' :
			return $appreciation." Tu n'as fait que $erreur erreurs.";
			break;
		case 'Bien ! ' :
			return $appreciation." Tu as fait $erreur erreurs.";
			break;
		case 'Assez Bien ! ' :
			return $appreciation." Tu as fait $erreur erreurs.";
			break;
		case 'Moyen ! ' :
			return $appreciation." Tu as tout de même fait $erreur erreurs.";
			break;
		case 'Insuffisant ! ' :
			return $appreciation." Tu as fait trop d'erreurs.";
			break;
		default :
			return "ERREUR !";
			break;
	}
}
