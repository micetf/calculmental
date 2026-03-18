<?php

use PHPUnit\Framework\TestCase;

class ReussiteTest extends TestCase
{
    private string $tmpDir;

    protected function setUp(): void
    {
        // Créer un répertoire temporaire isolé pour chaque test
        $this->tmpDir = sys_get_temp_dir() . '/reussite_test_' . uniqid();
        mkdir($this->tmpDir);

        // Reussite construit le chemin depuis dirname(__FILE__)
        // On doit donc copier la classe dans le tmpDir ou mocker le chemin.
        // Solution pragmatique : on sous-classe Reussite pour surcharger le chemin.
    }

    protected function tearDown(): void
    {
        // Nettoyer tous les fichiers temporaires après chaque test
        foreach (glob($this->tmpDir . '/*') as $file) {
            unlink($file);
        }
        rmdir($this->tmpDir);
    }

    private function creerReussite(string $niveau, string $numero): Reussite
    {
        return new Reussite($niveau, $numero);
    }

    // --- Tests constructeur ---

    public function testConstructeurNiveauValide()
    {
        $r = new Reussite('cp', '001');
        $this->assertInstanceOf(Reussite::class, $r);
    }

    public function testConstructeurNiveauInvalide()
    {
        // Un niveau invalide doit pointer vers errorR.txt sans planter
        $r = new Reussite('invalid', '001');
        $this->assertInstanceOf(Reussite::class, $r);
    }

    public function testConstructeurNumeroInvalide()
    {
        $r = new Reussite('cp', 'abc');
        $this->assertInstanceOf(Reussite::class, $r);
    }

    // --- Tests getRecord / getMoyenne sans fichier ---

    public function testGetRecordSansFichierRetourneChaine()
    {
        $r = new Reussite('cp', '999');
        $this->assertSame('', $r->getRecord());
    }

    public function testGetMoyenneSansFichierRetourneChaine()
    {
        $r = new Reussite('cp', '999');
        $this->assertSame('', $r->getMoyenne());
    }

    // --- Tests isRecord initial ---

    public function testIsRecordInitialementFaux()
    {
        $r = new Reussite('cp', '001');
        $this->assertFalse($r->isRecord());
    }

    // --- Tests setTemps avec valeur non numérique ---

    public function testSetTempsIgnoreValeurNonNumerique()
    {
        $r = new Reussite('cp', '001');
        // Ne doit pas planter
        $r->setTemps('invalid');
        $this->assertFalse($r->isRecord());
    }

    // --- Tests sur les niveaux valides ---

    public function testTousLesNiveauxValides()
    {
        $niveaux = ['cp', 'ce1', 'ce2', 'cm1', 'cm2'];
        foreach ($niveaux as $niveau) {
            $r = new Reussite($niveau, '001');
            $this->assertInstanceOf(Reussite::class, $r);
            // getRecord() retourne soit '' soit une valeur numérique — les deux sont valides
            $this->assertIsString(
                $r->getRecord(),
                "getRecord() doit retourner une string pour $niveau/001"
            );
        }
    }

    // --- Tests logique de record ---
    // Ces tests utilisent un niveau/numéro fictif (xx/000)
    // dont le fichier n'existe pas en prod → tests isolés

    public function testPremierTempsEstRecord()
    {
        $fichier = __DIR__ . '/../actions/compteur/cp000R.txt';
        if (file_exists($fichier)) {
            unlink($fichier);
        }

        $r = new Reussite('cp', '000');
        // Vérifier que le fichier n'existe vraiment pas avant setTemps
        $this->assertFileDoesNotExist($fichier, 'Le fichier doit être absent avant le test');

        $r->setTemps(42);

        $this->assertTrue($r->isRecord(), 'Le premier temps doit être un record');
        $this->assertSame('42', $r->getRecord());

        if (file_exists($fichier)) {
            unlink($fichier);
        }
    }

    public function testTempsInferieurBatLeRecord()
    {
        $fichier = __DIR__ . '/../actions/compteur/cp000R.txt';
        if (file_exists($fichier)) {
            unlink($fichier);
        }

        $r1 = new Reussite('cp', '000');
        $r1->setTemps(50);

        $r2 = new Reussite('cp', '000');
        $r2->setTemps(30);

        $this->assertTrue($r2->isRecord());
        $this->assertSame('30', $r2->getRecord());

        if (file_exists($fichier)) {
            unlink($fichier);
        }
    }

    public function testTempsSuperieurNeBatPasLeRecord()
    {
        $fichier = __DIR__ . '/../actions/compteur/cp000R.txt';
        if (file_exists($fichier)) {
            unlink($fichier);
        }

        $r1 = new Reussite('cp', '000');
        $r1->setTemps(30);

        $r2 = new Reussite('cp', '000');
        $r2->setTemps(50);

        $this->assertFalse($r2->isRecord());
        $this->assertSame('30', $r2->getRecord());

        if (file_exists($fichier)) {
            unlink($fichier);
        }
    }

    public function testMoyenneCalculeeCorrectement()
    {
        $fichier = __DIR__ . '/../actions/compteur/cp000R.txt';
        if (file_exists($fichier)) {
            unlink($fichier);
        }

        $r1 = new Reussite('cp', '000');
        $r1->setTemps(40);

        $r2 = new Reussite('cp', '000');
        $r2->setTemps(60);

        // Moyenne = (40*1 + 60) / 2 = 50
        $this->assertEqualsWithDelta(50.0, (float)$r2->getMoyenne(), 0.001);

        if (file_exists($fichier)) {
            unlink($fichier);
        }
    }

    public function testTempsInferieurA5IgnorePourRecord()
    {
        $fichier = __DIR__ . '/../actions/compteur/cp000R.txt';
        if (file_exists($fichier)) {
            unlink($fichier);
        }

        $r1 = new Reussite('cp', '000');
        $r1->setTemps(30);

        // Temps = 3 (< 4) ne doit pas battre le record
        $r2 = new Reussite('cp', '000');
        $r2->setTemps(3);

        $this->assertFalse($r2->isRecord());
        $this->assertSame('30', $r2->getRecord());

        if (file_exists($fichier)) {
            unlink($fichier);
        }
    }
}
