<?php

class Impression
{
    public $fichier;

    public function Impression($niveau, $numero)
    {
        $this->fichier = dirname(__FILE__).DIRECTORY_SEPARATOR.$niveau.$numero."I.txt";
    }

    public function ajouter()
    {
        if (Visiteur::isRobot() === false) {
            if (!file_exists($this->fichier)) {
                $nombreImpressions = 1;
            } else {
                $contenu = file($this->fichier);
                $nombreImpressions = $contenu[0] + 1;
            }
            $pFichier = fopen($this->fichier, 'c+');
            if (flock($pFichier, LOCK_EX)) {
                ftruncate($pFichier, 0);
                rewind($pFichier);
                fwrite($pFichier, $nombreImpressions);
                fflush($pFichier);
                flock($pFichier, LOCK_UN);
            }
            fclose($pFichier);
        }
    }

    public function etat()
    {
        $nomRep = dirname(__FILE__);
        $tmp = array();
        $pRep = opendir($nomRep);
        $nbImpressions = 0;
        while (false !== ($nomFichier = readdir($pRep))) {
            if (ereg("^c....I\.txt", $nomFichier) || ereg("^c.....I\.txt", $nomFichier)) {
                $niveau = ereg_replace("^(.*)...I\.txt$", "\\1", $nomFichier);
                $numero = ereg_replace("^.*(...)I\.txt$", "\\1", $nomFichier);

                $quantite = file($nomRep.DIRECTORY_SEPARATOR.$nomFichier);
                $tmp[$niveau.$numero] = $quantite[0];
                $nbImpressions += $quantite[0];
            }
        }
        closedir($pRep);

        arsort($tmp);
        $etat = "<p>Nombre d'impressions : $nbImpressions</p>";
        $etat .= "<table>";
        foreach ($tmp as $fiche => $quantite) {
            $etat .= "<tr>";
            $etat .= "<td>";
            $etat .= $fiche;
            $etat .= "</td>";
            $etat .= "<td>";
            $etat .= $quantite;
            $etat .= "</td>";
            $etat .= "<tr>";
        }
        $etat .= "</table>";
        return $etat;
    }
}
