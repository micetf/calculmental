<?php
include 'compteur'.DIRECTORY_SEPARATOR.'Reussite.php';
include 'compteur'.DIRECTORY_SEPARATOR.'Visiteur.php';
$compteur = new Visiteur('compteur');

$action = 'accueillir.php';
$stat['page'] = 'accueil';
$stat['fiche'] = '';

if (!empty($_GET['niveau']) && !empty($_GET['numero']) && preg_match('/^(cp|ce1|ce2|cm1|cm2)$/', $_GET['niveau']) && preg_match('/^[0-9]{3}$/', $_GET['numero'])) {

	$stat['fiche'] = $_GET['niveau'].$_GET['numero'];

	if ($_GET['action']=='calculer') {
		$action = 'calculer.php';
		$stat['page'] = 'calculer';
	}
	if ($_GET['action']=='imprimer') {
		$action = 'imprimer.php';
		$stat['page'] = 'imprimer';
	}
}
if (!empty($_POST['corriger'])) {
	$action = 'corriger.php';
	$stat['page'] = 'corriger';
	$stat['fiche'] = $_POST['niveau'].$_POST['numero'];
}
if (!empty($_GET['admin'])) setcookie("admin",md5(time()),time()+3600*24*365*10);
(isset($_COOKIE['admin'])) ? $vue['audience']='' : $vue['audience'] = 'vues'.DIRECTORY_SEPARATOR.'audience.php';

include $action;

if (!empty($_POST['corriger'])) include 'actions/reussir.php';
