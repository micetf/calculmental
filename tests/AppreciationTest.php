<?php

require_once __DIR__ . '/../actions/appreciation.php';

use PHPUnit\Framework\TestCase;

class AppreciationTest extends TestCase
{
    // --- appreciation() ---

    public function testAppreciationZeroErreur()
    {
        $this->assertSame('EXCELLENT ! ', appreciation(0));
    }

    public function testAppreciationUneErreur()
    {
        $this->assertSame('EXCELLENT ! ', appreciation(1));
    }

    public function testAppreciationDeuxErreurs()
    {
        $this->assertSame('Très bien ! ', appreciation(2));
    }

    public function testAppreciationTroisErreurs()
    {
        $this->assertSame('Très bien ! ', appreciation(3));
    }

    public function testAppreciationQuatreErreurs()
    {
        $this->assertSame('Bien ! ', appreciation(4));
    }

    public function testAppreciationCinqErreurs()
    {
        $this->assertSame('Bien ! ', appreciation(5));
    }

    public function testAppreciationSixErreurs()
    {
        $this->assertSame('Assez Bien ! ', appreciation(6));
    }

    public function testAppreciationSeptErreurs()
    {
        $this->assertSame('Assez Bien ! ', appreciation(7));
    }

    public function testAppreciationHuitErreurs()
    {
        $this->assertSame('Moyen ! ', appreciation(8));
    }

    public function testAppreciationNeufErreurs()
    {
        $this->assertSame('Moyen ! ', appreciation(9));
    }

    public function testAppreciationDixErreurs()
    {
        $this->assertSame('Insuffisant ! ', appreciation(10));
    }

    public function testAppreciationTreizeErreurs()
    {
        $this->assertSame('Insuffisant ! ', appreciation(13));
    }

    // --- messageAppreciation() ---

    public function testMessageZeroErreurSur20Calculs()
    {
        $msg = messageAppreciation(0, 20);
        $this->assertStringContainsString('EXCELLENT', $msg);
        $this->assertStringContainsString('aucune erreur', $msg);
    }

    public function testMessageUneErreurSur20Calculs()
    {
        $msg = messageAppreciation(1, 20);
        $this->assertStringContainsString('EXCELLENT', $msg);
        $this->assertStringContainsString("qu'une erreur", $msg);
    }

    public function testMessageDeuxErreursSur20Calculs()
    {
        $msg = messageAppreciation(2, 20);
        $this->assertStringContainsString('Très bien', $msg);
    }

    public function testMessageInsuffisantSur20Calculs()
    {
        $msg = messageAppreciation(15, 20);
        $this->assertStringContainsString('Insuffisant', $msg);
    }

    public function testMessageRetourneStringNonVide()
    {
        // Vérifie que la fonction retourne toujours quelque chose
        for ($erreurs = 0; $erreurs <= 20; $erreurs++) {
            $msg = messageAppreciation($erreurs, 20);
            $this->assertNotEmpty($msg, "messageAppreciation($erreurs, 20) ne doit pas être vide");
        }
    }
}
