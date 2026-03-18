<?php
$objectif = "Calcul approché de sommes et de différences.";

$tmp = array();
$l=10;
$c=2;

for ($i = 0; $i <5; $i++)
{
	$cibles = array(300,600,900,1200);
	foreach ($cibles as $proche) {
		$a = rand($proche-200,$proche-100);
		$b = rand(($proche-$a)-50,($proche-$a)+50);
		$tmp[] = array('q'=>"$a + $b est proche de $cibles[0], $cibles[1], $cibles[2] $cibles[3] ? ", 's'=>$proche);
	}
}
for ($i = 0; $i <5; $i++)
{
	$cibles = array(300,600,900,1200);
	foreach ($cibles as $proche) {
		$a = rand($proche-50,$proche+50);
		$b = rand(100,$a);
		$ab = $a+$b;
		$tmp[] = array('q'=>"$ab - $b est proche de $cibles[0], $cibles[1], $cibles[2] $cibles[3] ? ", 's'=>$proche);
	}
}