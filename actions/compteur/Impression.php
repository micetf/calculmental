<?php

class Impression
{
    private $fichier;

    public function __construct($niveau, $numero)
    {
        $this->fichier = dirname(__FILE__) . DIRECTORY_SEPARATOR
            . $niveau . $numero . 'I.txt';
    }

    public function ajouter()
    {
        if (Visiteur::isRobot() === false) {
            if (!file_exists($this->fichier)) {
                $nombreImpressions = 1;
            } else {
                $contenu           = file($this->fichier);
                $nombreImpressions = (int)$contenu[0] + 1;
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

    public static function etat()
    {
        $nomRep       = dirname(__FILE__);
        $tmp          = [];
        $nbImpressions = 0;
        $pRep         = opendir($nomRep);

        while (false !== ($nomFichier = readdir($pRep))) {
            if (preg_match('/^c.{3,4}I\.txt$/', $nomFichier)) {
                $niveau = preg_replace('/^(.+)\d{3}I\.txt$/', '$1', $nomFichier);
                $numero = preg_replace('/^.+(\d{3})I\.txt$/', '$1', $nomFichier);

                $quantite = file($nomRep . DIRECTORY_SEPARATOR . $nomFichier);
                $tmp[$niveau . $numero] = $quantite[0];
                $nbImpressions         += (int)$quantite[0];
            }
        }
        closedir($pRep);

        arsort($tmp);

        $etat  = "<p>Nombre d'impressions : {$nbImpressions}</p><table>";
        foreach ($tmp as $fiche => $quantite) {
            $etat .= '<tr>'
                . "<td>{$fiche}</td>"
                . "<td>{$quantite}</td>"
                . '</tr>';
        }
        $etat .= '</table>';
        return $etat;
    }
}
