<?php
$objectif = "Reconnaître combien de fois un nombre est contenu dans un autre.";

$tmp = array();
$l=10;
$c=2;

for ($i = 1; $i < 10; $i++)
{
	for ($j=1;$j<10;$j++)
	{
		$p=$i*$j;
		$tmp[] = array('q'=>"Combien de fois $i dans $p ? ", 's'=>$j);
	}
}
