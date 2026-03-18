<?php
class Ligne
{
	var $cellules;
	
	function Ligne()
	{
	}
	
	function ajouterCellule($cellule)
	{
		$this->cellules[] = $cellule;
	}

	function lireLigne()
	{
		return $this->cellules;
	}
}