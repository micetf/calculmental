<?php
$objectif = "Dénombrer jusqu'à 5.";

$tmp = array();
$l=10;
$c=2;

for ($i=1; $i<=5; $i++) {
	$collec="";
	for ($j=1; $j<=5;$j++) {
		($j>$i)? $collec.="&nbsp; ":$collec.="O ";
	}
	$tmp[] = array('q'=>$collec, 's'=>$i);
}
for ($i=1; $i<=5; $i++) {
	$collec="";
	for ($j=1; $j<=5;$j++) {
		($j>$i)? $collec.="&nbsp; ":$collec.="O ";
	}
	$tmp[] = array('q'=>$collec, 's'=>$i);
}
for ($i=1; $i<=5; $i++) {
	$collec="";
	for ($j=1; $j<=5;$j++) {
		($j>$i)? $collec.="&nbsp; ":$collec.="O ";
	}
	$tmp[] = array('q'=>$collec, 's'=>$i);
}
for ($i=1; $i<=5; $i++) {
	$collec="";
	for ($j=1; $j<=5;$j++) {
		($j>$i)? $collec.="&nbsp; ":$collec.="O ";
	}
	$tmp[] = array('q'=>$collec, 's'=>$i);
}
