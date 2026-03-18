<?php
function melanger($tmp,$l, $c) {
	$rep = array();
	srand((double) microtime()*1000000);
	shuffle($tmp);

	$i = 0;
	for ($ligne = 0; $ligne < $l; $ligne++)
	{
		for ($colonne = 0; $colonne < $c; $colonne++)
		{
			$rep[$ligne][$colonne] = $tmp[$i++]; 
		}
	}
	return $rep;
}