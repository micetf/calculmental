<?php
$objectif = "Dénombrer jusqu'à 10.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=3;

for ($i=1; $i<=10; $i++) {
	$collec="";
	for ($j=1; $j<=10;$j++) {
		if ($j==6) $collec.="&nbsp; ";
		($j>$i)? $collec.="&nbsp; ":$collec.="O ";
	}
	$tmp[] = array('q'=>$collec, 's'=>$i);
}
for ($i=1; $i<=10; $i++) {
	$collec="";
	for ($j=1; $j<=10;$j++) {
		if ($j==6) $collec.="&nbsp; ";
		($j>$i)? $collec.="&nbsp; ":$collec.="O ";
	}
	$tmp[] = array('q'=>$collec, 's'=>$i);
}
for ($i=1; $i<=10; $i++) {
	$collec="";
	for ($j=1; $j<=10;$j++) {
		if ($j==6) $collec.="&nbsp; ";
		($j>$i)? $collec.="&nbsp; ":$collec.="O ";
	}
	$tmp[] = array('q'=>$collec, 's'=>$i);
}
