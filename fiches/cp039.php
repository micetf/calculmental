<?php
$objectif = "Sommes avec le nombre 9.";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;
for ($i = 0; $i<10; $i++)
{
	$tmp[] = array('q'=>"$i + 9 = ", 's'=>$i+9);
	$tmp[] = array('q'=>"9 + $i = ", 's'=>$i+9);
}
for ($i = 0; $i<10; $i++)
{
	$tmp[] = array('q'=>"$i + 9 = ", 's'=>$i+9);
	$tmp[] = array('q'=>"9 + $i = ", 's'=>$i+9);
}
