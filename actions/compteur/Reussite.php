<?php

/**
 * Gestion des records et statistiques par fiche d'exercice.
 *
 * Chaque fiche (niveau + numéro) a un fichier texte associé
 * (ex : cp001R.txt) contenant le record, la moyenne et le nombre
 * de réussites sans erreur.
 */
class Reussite
{
    /** @var string Chemin absolu vers le fichier de statistiques */
    private $fichier;

    /** @var bool Indique si le dernier temps enregistré est un nouveau record */
    private $isRecord = false;

    /**
     * @param string $niveau Niveau scolaire (cp, ce1, ce2, cm1, cm2)
     * @param string $numero Numéro de fiche sur 3 chiffres (ex : "001")
     */
    public function __construct($niveau, $numero)
    {
        if (
            in_array($niveau, ['cp', 'ce1', 'ce2', 'cm1', 'cm2']) &&
            preg_match('/^[0-9]{3}$/', $numero)
        ) {
            $this->fichier = dirname(__FILE__) . DIRECTORY_SEPARATOR
                . $niveau . $numero . 'R.txt';
        } else {
            $this->fichier = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'errorR.txt';
        }
    }

    /**
     * Indique si le dernier appel à setTemps() a produit un nouveau record.
     *
     * @return bool
     */
    public function isRecord()
    {
        return $this->isRecord;
    }

    /**
     * Enregistre un temps et met à jour record, moyenne et nombre de réussites.
     * Un temps inférieur à 5 secondes est ignoré (suspicion de triche).
     *
     * @param int|float $temps Temps en secondes
     */
    public function setTemps($temps)
    {
        if (!is_numeric($temps)) {
            return;
        }

        if (!file_exists($this->fichier)) {
            $this->isRecord = true;
            $record    = $temps;
            $moyenne   = $temps;
            $reussites = 1;
        } else {
            $contenu   = file($this->fichier);
            $tmp       = explode(':', $contenu[0]);
            $oldRecord = rtrim($tmp[1]);

            if ($oldRecord === '' || (is_numeric($oldRecord) && $temps > 4 && $temps < $oldRecord)) {
                $this->isRecord = true;
                $record = $temps;
            } else {
                $this->isRecord = false;
                $record = $oldRecord;
            }

            $tmp        = explode(':', $contenu[1]);
            $oldMoyenne = rtrim($tmp[1]);
            $tmp        = explode(':', $contenu[2]);
            $reussites  = rtrim($tmp[1]);
            $moyenne    = (($oldMoyenne * $reussites) + $temps) / ($reussites + 1);
            $reussites++;
        }

        $resultat  = "record:{$record}\n";
        $resultat .= "moyenne:{$moyenne}\n";
        $resultat .= "reussites:{$reussites}";

        $pFichier = fopen($this->fichier, 'c+');
        if (flock($pFichier, LOCK_EX)) {
            ftruncate($pFichier, 0);
            rewind($pFichier);
            fwrite($pFichier, $resultat);
            fflush($pFichier);
            flock($pFichier, LOCK_UN);
        }
        fclose($pFichier);
    }

    /**
     * Retourne le record actuel de la fiche.
     *
     * @return string Temps en secondes, ou '' si aucun record enregistré
     */
    public function getRecord()
    {
        if (!file_exists($this->fichier)) {
            return '';
        }
        $contenu = file($this->fichier);
        $tmp     = explode(':', $contenu[0]);
        return rtrim($tmp[1]);
    }

    /**
     * Retourne le temps moyen de la fiche.
     *
     * @return string Temps moyen en secondes, ou '' si aucune donnée
     */
    public function getMoyenne()
    {
        if (!file_exists($this->fichier)) {
            return '';
        }
        $contenu = file($this->fichier);
        $tmp     = explode(':', $contenu[1]);
        return rtrim($tmp[1]);
    }

    /**
     * Retourne un tableau HTML des statistiques de toutes les fiches.
     * Utilisé par l'interface d'administration.
     *
     * @return string HTML contenant le nombre total de réussites et un tableau détaillé
     */
    public static function etat()
    {
        $nomRep      = dirname(__FILE__);
        $tmp         = [];
        $info        = [];
        $nbReussites = 0;
        $pRep        = opendir($nomRep);

        while (false !== ($nomFichier = readdir($pRep))) {
            if (preg_match('/^c.{3,4}R\.txt$/', $nomFichier)) {
                $niveau = preg_replace('/^(.+)\d{3}R\.txt$/', '$1', $nomFichier);
                $numero = preg_replace('/^.+(\d{3})R\.txt$/', '$1', $nomFichier);

                $quantite = file($nomRep . DIRECTORY_SEPARATOR . $nomFichier);
                $nbLigne2 = isset($quantite[2]) ? preg_replace('/[^0-9]/', '', $quantite[2]) : 0;

                $tmp[$niveau . $numero]  = $nbLigne2;
                $info[$niveau . $numero] = $quantite;
                $nbReussites            += $nbLigne2;
            }
        }
        closedir($pRep);

        arsort($tmp);

        $etat = "<p>Nombre de réussites : {$nbReussites}</p><table>";
        foreach ($tmp as $fiche => $quantite) {
            $etat .= '<tr>'
                . "<td>{$fiche}</td>"
                . '<td>' . ($info[$fiche][2] ?? '') . '</td>'
                . '<td>' . ($info[$fiche][1] ?? '') . '</td>'
                . '<td>' . ($info[$fiche][0] ?? '') . '</td>'
                . '</tr>';
        }
        $etat .= '</table>';
        return $etat;
    }
}
