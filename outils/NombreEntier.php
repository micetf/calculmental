<?php
class NombreEntierJusqua100
{
	var $nombre;
	function NombreEntierJusqua100($n)
	{
		$this->nombre = $n;
	}
	function getNombre()
	{
		return $this->nombre;
	}
	function convertirEnLettres()
	{
		if ($this->nombre >=0 && $this->nombre < 100) {
			switch ($this->nombre)
			{
				case 0 : return "zéro";
				case 1 : return "un";
				case 2 : return "deux";
				case 3 : return "trois";
				case 4 : return "quatre";
				case 5 : return "cinq";
				case 6 : return "six";
				case 7 : return "sept";
				case 8 : return "huit";
				case 9 : return "neuf";
				case 10 : return "dix";
				case 11 : return "onze";
				case 12 : return "douze";
				case 13 : return "treize";
				case 14 : return "quatorze";
				case 15 : return "quinze";
				case 16 : return "seize";
				case 20 : return "vingt";
				case 30 : return "trente";
				case 40 : return "quarante";
				case 50 : return "cinquante";
				case 60 : return "soixante";
				default :
					{
						$unites = $this->nombre % 10;
						$dizaine = $this->nombre - $unites;
						if ($dizaine == 70 || $dizaine == 90)
						{
							$dizaine -= 10;
							$unites += 10;
						}
						if ($dizaine == 80)
						{
							if ( $unites == 0)
								return "quatre-vingts";
							else
							{
								$unitesAConvertir = new NombreEntierJusqua100($unites);
								return "quatre-vingt-".$unitesAConvertir->convertirEnLettres();
							}
						}
						$dizaineAConvertir = new NombreEntierJusqua100($dizaine);
						$dizaineEnLettres = $dizaineAConvertir->convertirEnLettres();
						$unitesAConvertir = new NombreEntierJusqua100($unites);
						$unitesEnLettres = $unitesAConvertir->convertirEnLettres();
						if ($unites == 1 || $unites == 11)
							return $dizaineEnLettres." et ".$unitesEnLettres;
						else
							return $dizaineEnLettres."-".$unitesEnLettres;
					}
			}
		}
		else
			return $this->nombre + " négatif ou trop grand";

	}
}

class NombreEntierJusqua1000
{
	var $nombre;
	function NombreEntierJusqua1000($n)
	{
		$this->nombre = $n;
	}
	function getNombre()
	{
		return $this->nombre;
	}
	function convertirEnLettres()
	{
		if ($this->nombre < 100) {
			$nombre = new NombreEntierJusqua100($this->nombre);
			return $nombre->convertirEnLettres();
		}

		$dizainesunites = $this->nombre % 100;
		$centaine = $this->nombre - $dizainesunites;

		if ($centaine == 0)
			$centaineEnLettres = "";
		else if ($centaine == 100)
			$centaineEnLettres = "cent ";
		else
		{
			$chiffreCentaines = new NombreEntierJusqua100($centaine/100);
			$centaineEnLettres = $chiffreCentaines->convertirEnLettres()." cent ";
		}

		if ($dizainesunites==0)
			return $centaineEnLettres;
		else
		{
			$dizainesunitesAConvertir = new NombreEntierJusqua100($dizainesunites);
			return $centaineEnLettres.$dizainesunitesAConvertir->convertirEnLettres();
		}
	}
}

class NombreEntier
{
	var $nombre;
	function NombreEntier($n)
	{
		$this->nombre = $n;
	}
	function getNombre()
	{
		return $this->nombre;
	}
	function convertirEnLettres()
	{
		if ($this->nombre < 1000) {
			$nombre = new NombreEntierJusqua1000($this->nombre);
			return $nombre->convertirEnLettres();
		}
		else if ($this->nombre < 1000000000) {
			$classeUnites = $this->nombre % 1000;
			$classeMilliers = ($this->nombre - $classeUnites) % 1000000;
			$classeMillions = ($this->nombre - ($classeMilliers+$classeUnites)) % 1000000000;

			if ($classeMillions==0)
				$millionsEnLettres = "";
			else if ($classeMillions==1000000)
				$millionsEnLettres = "un million ";
			else
			{
				$millions = new NombreEntierJusqua1000($classeMillions/1000000);
				$millionsEnLettres = $millions->convertirEnLettres()." millions ";
			}

			if ($classeMilliers==0)
				$milliersEnLettres = "";
			else if ($classeMilliers==1000)
				$milliersEnLettres = "mille ";
			else
			{
				$milliers = new NombreEntierJusqua1000($classeMilliers/1000);
				$milliersEnLettres = $milliers->convertirEnLettres()." mille ";
			}

			if ($classeUnites==0)
				$unitesEnLettres = "";
			else
			{
				$unites = new NombreEntierJusqua1000($classeUnites);
				$unitesEnLettres = $unites->convertirEnLettres();
			}

			return preg_replace("/quatre-vingts/","quatre-vingt",$millionsEnLettres).preg_replace("/quatre-vingts/","quatre-vingt",$milliersEnLettres).$unitesEnLettres;
		}
	}
}