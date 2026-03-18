<?php
$objectif = "Ecrire en chiffres des nombres décimaux.";

$tmp = array();
$l=10;
$c=2;

function s($n) {
	($n==1) ? $tmp="":$tmp="s";
	return $tmp;
}

function concatener($nbre, $v, $txt) {
    if ($v) {
        return $nbre ? "$nbre, $v $txt".s($v) : "$v $txt".s($v);
    }
    return $nbre;
}

$chiffres = array("unité", "dixième", "centième", "millième");

for ($i = 1; $i < 80; $i++)
{
	
	$n=rand(20,9999);
    $cu=($n-($n%1000))/1000;
    $cd=(($n%1000)-($n%100))/100;
    $cc=(($n%100)-($n%10))/10;
    $cm=($n%10);

    $nbre = "";

    shuffle($chiffres);    

    for ($j = 0; $j < 4; $j++) {
        switch ($chiffres[$j]) {
            case "unité":
                $nbre = concatener($nbre, $cu, "unité");  
            break;
            case "dixième":
                $nbre = concatener($nbre, $cd, "dixième");  
            break;
            case "centième":
                $nbre = concatener($nbre, $cc, "centième");  
            break;
            case "millième":
                $nbre = concatener($nbre, $cm, "millième");  
            break;
        }
    }

    $nbre .= " ? ";
	$tmp[] = array('q'=>$nbre, 's'=>$n/1000);
}

