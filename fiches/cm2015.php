<?php
$objectif = "Calculer des sommes et des différences de nombres décimaux.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i <20; $i++)
{
	for ($j=1; $j<20;$j++)
	{
		$isur10=ereg_replace('\.', ',',$i/10);
		$jsur10=ereg_replace('\.', ',',$j/10);
		$tmp[] = array('q'=>"$isur10 + $jsur10 = ", 's'=>($i+$j)/10);
		$tmp[] = array('q'=>"$jsur10 + $isur10 = ", 's'=>($i+$j)/10);
		($i>$j) ? $tmp[] = array('q'=>"$isur10 - $jsur10 = ", 's'=>($i-$j)/10):$tmp[] = array('q'=>"$jsur10 - $isur10 = ", 's'=>($j-$i)/10);
	}
}