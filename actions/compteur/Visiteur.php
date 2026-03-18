<?php

class Visiteur
{
    private $nomCompteur;
    private $nomCompteurLive;
    private $nbVisiteurs;
    private $nbVisiteursLive;
    private $cookie;

    public function __construct($nomCompteur)
    {
        $this->nomCompteur     = dirname(__FILE__) . DIRECTORY_SEPARATOR
            . $nomCompteur . '.txt';
        $this->nomCompteurLive = dirname(__FILE__) . DIRECTORY_SEPARATOR
            . $nomCompteur . 'Live.txt';
        $this->cookie          = '_micetf' . md5('Visiteur Calcul Mental');

        $this->lireCompteur();

        if (self::isRobot() === false && !isset($_COOKIE[$this->cookie])) {
            $this->incrementerCompteur();
        }
        if (self::isRobot() === false) {
            $this->ecrireCompteurLive();
        }
    }

    private function ecrireCompteur()
    {
        $pFichier = fopen($this->nomCompteur, 'c+');
        if (flock($pFichier, LOCK_EX)) {
            ftruncate($pFichier, 0);
            rewind($pFichier);
            fputs($pFichier, $this->nbVisiteurs);
            fflush($pFichier);
            flock($pFichier, LOCK_UN);
        }
        fclose($pFichier);
    }

    private function ecrireCompteurLive()
    {
        if (!file_exists($this->nomCompteurLive)) {
            $compteur_live = [];
        } else {
            $compteur_live = file($this->nomCompteurLive);
        }

        $this->nbVisiteursLive  = 2;
        $premiere_ligne_a_garder = 0;
        $limite                 = date('U', strtotime('-300 seconds'));

        while (
            isset($compteur_live[$premiere_ligne_a_garder]) &&
            ($limite > $compteur_live[$premiere_ligne_a_garder]) &&
            ($premiere_ligne_a_garder < count($compteur_live))
        ) {
            $premiere_ligne_a_garder += 2;
        }

        $ip_en_cours = $_SERVER['REMOTE_ADDR'] ?? 'Non identifiable';
        $visiteur    = '';

        if ($premiere_ligne_a_garder < count($compteur_live)) {
            for ($i = $premiere_ligne_a_garder; $i < count($compteur_live); $i += 2) {
                if (isset($compteur_live[$i + 1]) && trim($compteur_live[$i + 1]) !== $ip_en_cours) {
                    $visiteur .= trim($compteur_live[$i]) . "\n"
                        . trim($compteur_live[$i + 1]) . "\n";
                    $this->nbVisiteursLive++;
                }
            }
        }
        $visiteur .= date('U') . "\n" . $ip_en_cours;

        $pFichier = fopen($this->nomCompteurLive, 'c+');
        if (flock($pFichier, LOCK_EX)) {
            ftruncate($pFichier, 0);
            rewind($pFichier);
            fputs($pFichier, $visiteur);
            fflush($pFichier);
            flock($pFichier, LOCK_UN);
        }
        fclose($pFichier);
    }

    private function incrementerCompteur()
    {
        $demain = mktime(0, 0, 0, (int)date('m'), (int)date('d') + 1, (int)date('Y'));
        setcookie($this->cookie, (string)time(), $demain);

        $this->nbVisiteurs++;
        $this->ecrireCompteur();
    }

    private function lireCompteur()
    {
        $this->nbVisiteurs = 0;

        if (file_exists($this->nomCompteur)) {
            $pFichier          = fopen($this->nomCompteur, 'r+');
            $this->nbVisiteurs = (filesize($this->nomCompteur) !== 0)
                ? fread($pFichier, filesize($this->nomCompteur))
                : 0;
            fclose($pFichier);
        }
    }

    public function getCompteur()
    {
        return $this->nbVisiteurs;
    }

    public function getCompteurLive()
    {
        return $this->nbVisiteursLive;
    }

    public static function isRobot()
    {
        $ip_en_cours = $_SERVER['REMOTE_ADDR'] ?? '';

        // Plages IP des principaux robots d'indexation
        $ipRobots = [
            'google1'  => '216.239.46',
            'google2'  => '64.68.8',
            'google3'  => '66.249.',
            'scooter1' => '216.39',
            'scooter2' => '209.73',
            'slurp1'   => '66.196',
            'slurp2'   => '72.30.',
            'slurp3'   => '74.6.',
            'slurp4'   => '202.160.',
            'voila'    => '195.101.94',
            'fast'     => '66.77.73',
            'exabot'   => '193.47.80',
            'msn1'     => '65.55.',
            'msn2'     => '204.95.98',
        ];

        foreach ($ipRobots as $ipRobot) {
            if (strpos($ip_en_cours, $ipRobot) !== false) {
                return true;
            }
        }
        return false;
    }
}
