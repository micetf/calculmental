<?php
$objectif = "Nombres inférieurs au milliard.";

include 'outils'.DIRECTORY_SEPARATOR.'NombreEntier.php';

$tmp = array();
$l=10;
$c=2;

for ($iUnites = 1; $iUnites < 10; $iUnites++)
{
	for ($iMilliers = 1; $iMilliers < 10; $iMilliers++)
	{
		for ($iMillions = 1; $iMillions < 10; $iMillions++)
		{
			srand((double) microtime()*1000000);
			$p = rand(0,2);
			$unites = $iUnites*pow(10,$p);
			$p = rand(0,2);
			$milliers = $iMiliers*pow(10,$p)*1000;
			$p = rand(0,2);
			$millions = $iMillions*pow(10,$p)*1000000;
			
			$k = $unites+$miliers+$millions;
			$nbre = new NombreEntier($k);
			$tmp[] = array('q'=>$nbre->convertirEnLettres()." : ", 's'=>$k);
		}
	}
}
