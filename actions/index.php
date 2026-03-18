<?php

include 'compteur' . DIRECTORY_SEPARATOR . 'Reussite.php';
include 'compteur' . DIRECTORY_SEPARATOR . 'Visiteur.php';
$compteur = new Visiteur('compteur');

// --- Table de dispatch sécurisée ---
// Seules ces 4 actions sont autorisées. Toute valeur hors liste est ignorée.
$dispatch = [
    'accueillir' => __DIR__ . '/accueillir.php',
    'calculer'   => __DIR__ . '/calculer.php',
    'corriger'   => __DIR__ . '/corriger.php',
    'imprimer'   => __DIR__ . '/imprimer.php',
];

// --- Initialisation ---
$actionKey = 'accueillir';
$stat['page'] = 'accueil';
$stat['fiche'] = '';

// --- Routing GET (calculer / imprimer) ---
if (
    !empty($_GET['niveau']) &&
    !empty($_GET['numero']) &&
    preg_match('/^(cp|ce1|ce2|cm1|cm2)$/', $_GET['niveau']) &&
    preg_match('/^[0-9]{3}$/', $_GET['numero'])
) {
    $stat['fiche'] = $_GET['niveau'] . $_GET['numero'];

    if (isset($_GET['action']) && $_GET['action'] === 'calculer') {
        $actionKey = 'calculer';
        $stat['page'] = 'calculer';
    }
    if (isset($_GET['action']) && $_GET['action'] === 'imprimer') {
        $actionKey = 'imprimer';
        $stat['page'] = 'imprimer';
    }
}

// --- Routing POST (corriger) ---
if (!empty($_POST['corriger'])) {
    $actionKey = 'corriger';
    $stat['page'] = 'corriger';
    $stat['fiche'] = $_POST['niveau'] . $_POST['numero'];
}

$adminSecret = hash_hmac('sha256', 'admin', getenv('APP_SECRET'));

if (isset($_GET['admin'])) {
    setcookie('admin', $adminSecret, [
        'expires'  => time() + 3600 * 24 * 365 * 10,
        'path'     => '/',
        'httponly' => true,
        'samesite' => 'Strict',
    ]);
}

$isAdmin = isset($_COOKIE['admin']) && hash_equals($adminSecret, $_COOKIE['admin']);
$vue['audience'] = $isAdmin ? '' : 'vues' . DIRECTORY_SEPARATOR . 'audience.php';

// --- Dispatch sécurisé ---
include $dispatch[$actionKey];

// --- Post-traitement correction ---
if (!empty($_POST['corriger'])) {
    include 'actions/reussir.php';
}
