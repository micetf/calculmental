<?php

require(dirname(__DIR__) . '/vendor/fpdf/fpdf.php');
include 'fiches'.DIRECTORY_SEPARATOR.$_GET['niveau'].$_GET['numero'].'.php';
include 'compteur'.DIRECTORY_SEPARATOR.'Impression.php';
include 'melanger.php';

class PDF extends FPDF
{
    public $objectif;
    public $niveau;
    public $numero;
    public $correction = false;

    public function setReferences($niveau, $numero)
    {
        $this->niveau = $niveau;
        $this->numero = $numero;
    }
    public function setObjectif($objectif)
    {
        $this->objectif = $objectif;
    }

    public function Header()
    {
        $this->SetFont('Arial', 'B', 13);
        if ($this->correction) {
            $this->SetTextColor(0, 100, 0);
            $this->Cell(0, 15, "C O R R E C T I O N", 1, 1, 'C');
        } else {
            $this->SetTextColor(0, 0, 0);
            $this->Cell(95, 15, utf8_decode('Prénom :'), 1, 0, 'L');
            $this->Cell(95, 15, 'Date :', 1, 1, 'L');
        }
        $this->SetFont('Times', 'B', 16);
        $this->SetTextColor(0, 0, 100);
        $this->Cell(0, 11, "CALCUL MENTAL", 1, 1, 'C');
        $this->SetFont('Arial', 'B', 12);
        $this->SetTextColor(0, 0, 0);
        $this->Cell(0, 11, utf8_decode("OBJECTIF : $this->objectif"), 0, 1, 'C');
    }

    public function afficherDonnees($fiche)
    {
        $this->SetFont('Arial', '', 12);
        foreach ($fiche as $ligne) {
            $l = 190 / count($ligne);
            $h = 220 / (count($fiche));
            foreach ($ligne as $cellule) {
                $question = html_entity_decode($cellule['q']);
                $question = (preg_match('/###/', $question)) ?
                     preg_replace('/###/', '.....', $question) :
                     $question.' .....';
                $this->Cell($l, $h, utf8_decode($question), 1, 0, 'C');
            }
            $this->ln();
        }
    }

    public function afficherReponses($fiche)
    {
        $this->SetFont('Arial', '', 12);
        foreach ($fiche as $ligne) {
            $l = 190 / count($ligne);
            $h = 220 / (count($fiche));
            foreach ($ligne as $cellule) {
                $question = html_entity_decode($cellule['q']);
                $reponse = html_entity_decode($cellule['s']);
                $question = (preg_match('/###/', $question)) ?
                     preg_replace('/###/', $reponse, $question) :
                     $question.' '.$reponse;
                $this->Cell($l, $h, utf8_decode("$question"), 1, 0, 'C');
            }
            $this->ln();
        }
    }

    public function Footer()
    {
        $this->setXY(-200, -25);
        $this->SetFont('Arial', '', 12);
        $this->Cell(95, 15, "$this->niveau - $this->numero", 0, 0, 'L');
        $this->SetFont('Times', 'I', 12);
        $this->Cell(95, 15, 'http://micetf.fr/CalculMental/', 0, 0, 'R');
        $this->Image(dirname(__DIR__) . '/common/logos/CreativeCommons80x15.png', 180, 282, 20, 4, 'png', 'http://creativecommons.org/licenses/by-nc/2.0/fr/');
    }
}

if (!isset($lI)) {
    $lI = $l;
}
if (!isset($cI)) {
    $cI = $c;
}

$vue['niveau'] = $_GET['niveau'];
$vue['numero'] = $_GET['numero'];
$vue['objectif'] = $objectif;
$vue['donnees'] = melanger($tmp, $lI, $cI);

$compteurImpression = new Impression($vue['niveau'], $vue['numero']);
$compteurImpression->ajouter();

$pdf = new PDF();

$pdf->setReferences($vue['niveau'], $vue['numero']);
$pdf->setObjectif($vue['objectif']);
$pdf->AddPage();
$pdf->afficherDonnees($vue['donnees']);

$pdf->correction = true;
$pdf->AddPage();
$pdf->afficherReponses($vue['donnees']);

$pdf->Output('CalculMental.pdf', 'D');

$vue['nom'] = 'imprimer.php';
