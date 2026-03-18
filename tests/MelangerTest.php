<?php

require_once __DIR__ . '/../actions/melanger.php';

use PHPUnit\Framework\TestCase;

class MelangerTest extends TestCase
{
    private function genererQuestions(int $n): array
    {
        $questions = [];
        for ($i = 1; $i <= $n; $i++) {
            $questions[] = ['q' => "$i + 0 =", 's' => $i];
        }
        return $questions;
    }

    public function testDimensionsGrille()
    {
        $tmp = $this->genererQuestions(20);
        $resultat = melanger($tmp, 10, 2);

        $this->assertCount(10, $resultat, 'Doit avoir 10 lignes');
        foreach ($resultat as $ligne) {
            $this->assertCount(2, $ligne, 'Chaque ligne doit avoir 2 colonnes');
        }
    }

    public function testToutesLesQuestionsPresentes()
    {
        $tmp = $this->genererQuestions(20);
        $resultat = melanger($tmp, 10, 2);

        // Aplatir le tableau résultat
        $aplati = [];
        foreach ($resultat as $ligne) {
            foreach ($ligne as $cellule) {
                $aplati[] = $cellule['s'];
            }
        }

        sort($aplati);
        $attendu = range(1, 20);

        $this->assertSame($attendu, $aplati, 'Toutes les questions doivent être présentes');
    }

    public function testAucuneQuestionPerdue()
    {
        $tmp = $this->genererQuestions(20);
        $resultat = melanger($tmp, 10, 2);

        $nbCellules = 0;
        foreach ($resultat as $ligne) {
            $nbCellules += count($ligne);
        }

        $this->assertSame(20, $nbCellules, 'Le nombre total de cellules doit être 20');
    }

    public function testMelangeProduitsDesOrdresDifferents()
    {
        // Lance 5 mélanges et vérifie qu'ils ne sont pas tous identiques
        $tmp = $this->genererQuestions(20);
        $ordres = [];

        for ($i = 0; $i < 5; $i++) {
            $resultat = melanger($tmp, 10, 2);
            $ordre = [];
            foreach ($resultat as $ligne) {
                foreach ($ligne as $cellule) {
                    $ordre[] = $cellule['s'];
                }
            }
            $ordres[] = $ordre;
        }

        // Au moins deux ordres doivent être différents
        $ordresUniques = array_unique(array_map('serialize', $ordres));
        $this->assertGreaterThan(
            1,
            count($ordresUniques),
            'Le mélange doit produire des ordres différents'
        );
    }

    public function testGrilleRectangulaire()
    {
        // Test avec dimensions différentes : 5 lignes × 4 colonnes
        $tmp = $this->genererQuestions(20);
        $resultat = melanger($tmp, 5, 4);

        $this->assertCount(5, $resultat);
        foreach ($resultat as $ligne) {
            $this->assertCount(4, $ligne);
        }
    }

    public function testStructureCellule()
    {
        $tmp = $this->genererQuestions(20);
        $resultat = melanger($tmp, 10, 2);

        // Chaque cellule doit avoir les clés 'q' et 's'
        foreach ($resultat as $ligne) {
            foreach ($ligne as $cellule) {
                $this->assertArrayHasKey('q', $cellule);
                $this->assertArrayHasKey('s', $cellule);
            }
        }
    }
}
