<?php
$objectif = "Additions à trous (a + b + ? = s <= 20).";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i<10; $i++)
{
	for ($j = 1; $j<10; $j++)
	{
		for ($k = 1; $k<10; $k++)
		{
			$s=$i+$j+$k;
			if ($s <= 20) $tmp[] = array('q'=>"$i + $j + ### = $s", 's'=>$k);
		}
	}
}
