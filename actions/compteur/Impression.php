<?php

/**
 * Comptage des impressions PDF par fiche d'exercice.
 *
 * Chaque fiche a un fichier texte associé (ex : cp001I.txt)
 * contenant le nombre total d'impressions PDF générées.
 */
class Impression
{
    /** @var string Chemin absolu vers le fichier compteur d'impressions */
    private $fichier;

    /**
     * @param string $niveau Niveau scolaire (cp, ce1, ce2, cm1, cm2)
     * @param string $numero Numéro de fiche sur 3 chiffres (ex : "001")
     */
    public function __construct($niveau, $numero)
    {
        $this->fichier = dirname(__FILE__) . DIRECTORY_SEPARATOR
            . $niveau . $numero . 'I.txt';
    }

    /**
     * Incrémente le compteur d'impressions si le visiteur n'est pas un robot.
     */
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

    /**
     * Retourne un tableau HTML des statistiques d'impressions de toutes les fiches.
     * Utilisé par l'interface d'administration.
     *
     * @return string HTML contenant le nombre total d'impressions et un tableau détaillé
     */
    public static function etat()
    {
        $nomRep        = dirname(__FILE__);
        $tmp           = [];
        $nbImpressions = 0;
        $pRep          = opendir($nomRep);

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
