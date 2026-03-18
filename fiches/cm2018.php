<?php
$objectif = "Multiplier des nombres décimaux par 10.";

$tmp = array();
$l=10;
$c=2;
$dot = '/\./';

for ($i = 1; $i < 999; $i++)
{
    $i_10 = number_format( $i/10, 1, ",", " ");
    $i_100 = number_format( $i/100, 2, ",", " ");
    $i_1000 = number_format( $i/1000, 3, ",", " ");
	$tmp[] = array('q'=>"$i_10 x 10 ? ", 's'=>$i);
	$tmp[] = array('q'=>"10 x $i_10 ? ", 's'=>$i);
	$tmp[] = array('q'=>"$i = 10 x ? ", 's'=>$i/10);
	$tmp[] = array('q'=>"$i_100 x 10 ? ", 's'=>$i/10);
	$tmp[] = array('q'=>"10 x $i_100 ? ", 's'=>$i/10);
	$tmp[] = array('q'=>"$i_10 = 10 x ? ", 's'=>$i/100);
	$tmp[] = array('q'=>"$i_1000 x 10 ? ", 's'=>$i/100);
	$tmp[] = array('q'=>"10 x $i_1000 ? ", 's'=>$i/100);
	$tmp[] = array('q'=>"$i_100 = 10 x ? ", 's'=>$i/1000);
}