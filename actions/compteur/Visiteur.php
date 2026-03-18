<?php
class Visiteur
{
	var $nomCompteur;
	var $nomCompteurLive;
	var $nbVisiteurs;
	var $nbVisiteursLive;
	var $cookie;
	
	function Visiteur($nomCompteur)
	{
		$this->nomCompteur = dirname(__FILE__) . DIRECTORY_SEPARATOR . $nomCompteur . ".txt";
		$this->nomCompteurLive = dirname(__FILE__) . DIRECTORY_SEPARATOR . $nomCompteur . "Live.txt";
		$this->cookie = '_micetf'.md5('Visiteur Calcul Mental');

		$this->lireCompteur();
		if ($this->isRobot() === false && !isset($_COOKIE[$this->cookie])) $this->incrementerCompteur();
		if ($this->isRobot() === false) $this->ecrireCompteurLive();
	}
	
	function ecrireCompteur()
	{
		$pFichier = fopen($this->nomCompteur, "w+");
		fputs($pFichier, $this->nbVisiteurs);
		fclose($pFichier);
	}

	function ecrireCompteurLive()
	{
		$compteur_live = file($this->nomCompteurLive);
		$this->nbVisiteursLive = 2;
		$premiere_ligne_a_garder=0;
		while(	isset($compteur_live[$premiere_ligne_a_garder]) && (date('U', strtotime('-300 seconds')) > $compteur_live[$premiere_ligne_a_garder]) && 
					($premiere_ligne_a_garder < count($compteur_live))) {
			$premiere_ligne_a_garder=$premiere_ligne_a_garder+2;
		};
		if(isset($_SERVER["REMOTE_ADDR"])) { 
			$ip_en_cours = $_SERVER["REMOTE_ADDR"];
		} else {
			$ip_en_cours = "Non identifiable";
		}
		$visiteur = "";
		if($premiere_ligne_a_garder < count($compteur_live)) {
			for($i=$premiere_ligne_a_garder; $i<count($compteur_live); $i=$i+2) {
				if(trim($compteur_live[$i+1]) != $ip_en_cours) {
					$visiteur .= trim($compteur_live[$i])."\n".trim($compteur_live[$i+1])."\n";
					$this->nbVisiteursLive++;
				}
			}
		}
		$visiteur .= date('U')."\n".$ip_en_cours;

		$pFichier=fopen($this->nomCompteurLive,"w+");
		fputs($pFichier,$visiteur);
		fclose($pFichier);
	}
		
	function incrementerCompteur()
	{
		$demain = mktime(0,0,0,date("m"),date("d")+1,date("Y"));
		setcookie($this->cookie,time(), $demain);
		
		$this->nbVisiteurs++;
		$this->ecrireCompteur();
	}

	function lireCompteur()
	{
		$this->nbVisiteurs = 0;
		$existe = file_exists($this->nomCompteur);

		if ($existe)
		{
			$pFichier = fopen($this->nomCompteur, "r+");
			$this->nbVisiteurs = (filesize($this->nomCompteur)!=0) ? fread($pFichier, filesize($this->nomCompteur)) : 0;
			fclose($pFichier);
		}
	}
	function getCompteur()
	{
		return $this->nbVisiteurs;
	}
	
	function getCompteurLive()
	{
		return $this->nbVisiteursLive;
	}

	function isRobot()
	{
		$ip_en_cours = $_SERVER["REMOTE_ADDR"];

		$ipRobots = array(
			'google1'=>"216.239.46",
			'google2' =>"64.68.8", 
			'google3' =>"66.249.", 
			'scooter1' =>"216.39",
			'scooter2' => "209.73",
			'slurp1' => "66.196",
			'slurp2' => "72.30.",
			'slurp3' => "74.6.",
			'slurp4' => "202.160.",
			'voila' => "195.101.94",
			'fast' => "66.77.73",
			'exabot' => "193.47.80",
			'msn1' => "65.55.",
			'msn2' => "204.95.98"
		);

		foreach ($ipRobots as $robot => $ipRobot) {
			if (strpos($ip_en_cours,$ipRobot) !== false) return true;
		}
		return false;
	}
}