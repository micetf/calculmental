<?php
$objectif = "Ajouter ou retrancher des dizaines ou des centaines entières.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($g=1;$g<3;$g++)
{
	for ($i=1;$i<10;$i++)
	{
		for ($j=1;$j<10;$j++)
		{
			$a = $i*pow(10,$g);
			$b = $j*pow(10,$g);
			$s = $a+$b;

			$tmp[] = array('q'=>"$a + $b = ", 's'=>$a+$b);
			$tmp[] = array('q'=>"$s = $a + ", 's'=>$s-$a);
			$tmp[] = array('q'=>"$s - $b = ", 's'=>$s-$b);
			$tmp[] = array('q'=>"$s - $a = ", 's'=>$s-$a);
		}
	}
}