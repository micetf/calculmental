<?php
$objectif = "Utiliser les signes < et >";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;
$space = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
for ($i = 1; $i<=10; $i++)
{
	for ($j = 1; $j < 10 - $i; $j++)
	{
        for ($k = 1; $k <= 10; $k++) {
            $s = $i + $j;
            if ($s > $k) $tmp[] = array('q'=>"$i + $j $space ### $space $k", 's'=>">");
            if ($s < $k) $tmp[] = array('q'=>"$i + $j $space ### $space $k", 's'=>"<");
            if ($s == $k) $tmp[] = array('q'=>"$i + $j $space ### $space $k", 's'=>"=");
        }
	}
}
