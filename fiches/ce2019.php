<?php
$objectif = "Tables de 5 et de 7.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;

for ($i = 1; $i <= 10; $i++)
{
	$tmp[] = array('q'=>"5 fois $i = ", 's'=>5*$i);
	$tmp[] = array('q'=>"5 fois $i = ", 's'=>5*$i);
	$tmp[] = array('q'=>"7 fois $i = ", 's'=>7*$i);
	$tmp[] = array('q'=>"7 fois $i = ", 's'=>7*$i);
}
