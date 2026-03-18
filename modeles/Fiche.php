<?php
class Fiche
{
	var $lignes;

	function Fiche()
	{
	}

	function ajouterLigne($ligne)
	{
		$this->lignes[] = $ligne;
	}

	function lireFiche()
	{
		return $this->lignes;
	}
}