<?php

$dir = ".";
$dh  = opendir($dir);
while (false !== ($filename = readdir($dh))) {
    $files[] = $filename;
}
foreach ($files as $file) {
    if (preg_match('/^(cp|ce1|ce2|cm1|cm2)[0-9]{3}[R]\.txt$/', $file)) {
        $contenu = file($file);
        $tmp = explode(":", $contenu[1]);
        $moyenne = 300;
        // $moyenne = max(600, round(chop($tmp[1])));
        $record = 300;
        $tmp = explode(":", $contenu[2]);
        $reussites = chop($tmp[1]);

        $resultat = "record:";
        $resultat .= $record;
        $resultat .= "\n";
        $resultat .= "moyenne:";
        $resultat .= $moyenne;
        $resultat .= "\n";
        $resultat .= "reussites:";
        $resultat .= $reussites;
        echo '<p>'.$file.' : '.$resultat.'</p>';

        $pFichier = fopen($file, "w");
        echo $pFichier;
        fwrite($pFichier, $resultat);
        fclose($pFichier);
    }
}
