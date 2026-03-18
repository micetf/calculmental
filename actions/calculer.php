<?php
include 'fiches'.DIRECTORY_SEPARATOR.$_GET['niveau'].$_GET['numero'].'.php';
include 'melanger.php';

if (empty($vue['size'])) $vue['size'] = 10;
$vue['niveau'] = $_GET['niveau'];
$vue['numero'] = $_GET['numero'];
$vue['objectif'] = $objectif;
$vue['donnees'] = melanger($tmp,$l,$c);
$vue['nom'] = 'calculer.php';

$reussite = new Reussite($vue['niveau'],$vue['numero']);
$record = $reussite->getRecord();
$record ? $vue['record'] = $record." s." : $vue['record'] = 'aucun';