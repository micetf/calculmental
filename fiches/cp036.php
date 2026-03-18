<?php
$objectif = "Décomposer un nombre sous forme de sommes.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 0; $i<10; $i++)
{
	for ($j = 0; $j<10; $j++)
	{
		for ($k = 0; $k<10; $k++)
		{
			for ($m = 0; $m<10; $m++)
			{
				if ($i + $j + $k +$m <= 20) $tmp[] = array('q'=>"$i + $j + $k + $m = ", 's'=>$i+$j+$k+$m);
			}
		}
	}
}
