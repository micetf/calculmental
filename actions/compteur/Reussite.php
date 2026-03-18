<?php

class Reussite
{
    public $fichier;
    public $isRecord = false;

    public function Reussite($niveau, $numero)
    {
        if (in_array($niveau, array('cp', 'ce1', 'ce2', 'cm1', 'cm2')) && preg_match("/^[0-9]{3}$/", $numero)) {
            $this->fichier = dirname(__FILE__).DIRECTORY_SEPARATOR.$niveau.$numero."R.txt";
        } else {
            $this->fichier = dirname(__FILE__).DIRECTORY_SEPARATOR."errorR.txt";
        }
    }

    public function isRecord()
    {
        return $this->isRecord;
    }

    public function setTemps($temps)
    {
        if (is_numeric($temps)) {
            if (!file_exists($this->fichier)) {
                $record = $temps;
                $moyenne = $temps;
                $reussites = 1;
            } else {
                $contenu = file($this->fichier);
                $tmp = explode(":", $contenu[0]);
                $oldRecord = chop($tmp[1]);
                if ($oldRecord == '' || (is_numeric($oldRecord) && $temps > 4 && $temps < $oldRecord)) {
                    $this->isRecord = true;
                    $record = $temps;
                } else {
                    $this->isRecord = false;
                    $record = $oldRecord;
                }

                $tmp = explode(":", $contenu[1]);
                $oldMoyenne = chop($tmp[1]);
                $tmp = explode(":", $contenu[2]);
                $reussites = chop($tmp[1]);
                $moyenne = (($oldMoyenne * $reussites) + $temps) / ($reussites + 1);
                $reussites++;
            }
            $resultat = "record:";
            $resultat .= $record;
            $resultat .= "\n";
            $resultat .= "moyenne:";
            $resultat .= $moyenne;
            $resultat .= "\n";
            $resultat .= "reussites:";
            $resultat .= $reussites;
            $pFichier = fopen($this->fichier, "w+");
            fwrite($pFichier, $resultat);
            fclose($pFichier);
        }
    }

    public function getRecord()
    {
        if (!file_exists($this->fichier)) {
            return '';
        } else {
            $contenu = file($this->fichier);
            $tmp = explode(":", $contenu[0]);
            return chop($tmp[1]);
        }
    }
    public function getMoyenne()
    {
        if (!file_exists($this->fichier)) {
            return '';
        } else {
            $contenu = file($this->fichier);
            $tmp = explode(":", $contenu[1]);
            return chop($tmp[1]);
        }
    }

    public function etat()
    {
        $nomRep = dirname(__FILE__);
        $tmp = array();
        $pRep = opendir($nomRep);
        $nbReussites = 0;
        while (false !== ($nomFichier = readdir($pRep))) {
            if (ereg("^c....R\.txt", $nomFichier) || ereg("^c.....R\.txt", $nomFichier)) {
                $niveau = ereg_replace("^(.*)...R\.txt$", "\\1", $nomFichier);
                $numero = ereg_replace("^.*(...)R\.txt$", "\\1", $nomFichier);

                $quantite = file($nomRep.DIRECTORY_SEPARATOR.$nomFichier);
                $tmp[$niveau.$numero] = ereg_replace("[^0-9]", "", $quantite[2]);
                $info[$niveau.$numero] = $quantite;
                $nbReussites += ereg_replace("[^0-9]", "", $quantite[2]);
            }
        }
        closedir($pRep);

        arsort($tmp);
        $etat = "<p>Nombre de réussites : $nbReussites</p>";
        $etat .= "<table>";
        foreach ($tmp as $fiche => $quantite) {
            $etat .= "<tr>";
            $etat .= "<td>";
            $etat .= $fiche;
            $etat .= "</td>";
            $etat .= "<td>";
            $etat .= $info[$fiche][2];
            $etat .= "</td>";
            $etat .= "<td>";
            $etat .= $info[$fiche][1];
            $etat .= "</td>";
            $etat .= "<td>";
            $etat .= $info[$fiche][0];
            $etat .= "</td>";
            $etat .= "</tr>";
        }
        $etat .= "</table>";
        return $etat;
    }
}
