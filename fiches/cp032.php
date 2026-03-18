<?php
$objectif = "Différences de petits nombres.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i<=10; $i++)
{
	for ($j = 1; $j <=10; $j++)
	{
		($i > $j) ? $tmp[] = array('q'=>"$i - $j = ", 's'=>$i-$j) : $tmp[] = array('q'=>"$j - $i = ", 's'=>$j-$i);
	}
}
for ($i = 1; $i<=10; $i++)
{
	for ($j = 1; $j <=10; $j++)
	{
		($i > $j) ? $tmp[] = array('q'=>"$i - $j = ", 's'=>$i-$j) : $tmp[] = array('q'=>"$j - $i = ", 's'=>$j-$i);
	}
}
