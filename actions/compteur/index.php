<?php
// --- Protection admin ---
$adminSecret = hash_hmac('sha256', 'admin', getenv('APP_SECRET'));
if (!isset($_COOKIE['admin']) || !hash_equals($adminSecret, $_COOKIE['admin'])) {
    http_response_code(403);
    exit('Accès interdit.');
}
// --- Fin protection ---

include 'Reussite.php';
include 'Impression.php';
include 'Visiteur.php';
$compteur = new Visiteur('compteur');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">	
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr-fr" lang="fr-fr">

<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta http-equiv="Content-Language" content="fr" />
</head>
<body>
<p>
| <a href="index.php?etat=I">Statistiques Impressions</a> 
| <a href="index.php?etat=R">Statistiques Records</a> 
| <a href="index.php?etat=V">Visiteurs</a> 
|
</p>
<?php
switch ($_GET['etat']) {
    case 'R':
        echo Reussite::etat();
        break;
    case 'I':
        echo Impression::etat();
        break;
    case 'V':
        echo "Nombre de visiteurs depuis la création du site : ".$compteur->getCompteur();
        echo "<br/>";
        echo "Nombre de visiteurs actuellement sur le site : ".$compteur->getCompteurLive();
        break;
}
?>
</body>